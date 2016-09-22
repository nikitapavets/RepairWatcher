<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Repair;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;
use Cookie;
use Psy\Util\Json;

class AdminController extends Controller {

    public function index(User $userModel, Repair $repair){

        if(isset($_COOKIE['admin'])){
            $admin= json_decode($_COOKIE['admin']);

            $repairs_paid = $repair->getPaidRepairs();
            $repairs_free = $repair->getFreeRepairs();
            $repairs_complete = $repair->getCompleteRepairs();

            return view('admin.index', [
                'admin' => $admin,
                'repairs_paid' => $repairs_paid,
                'repairs_free' => $repairs_free,
                'repairs_complete' => $repairs_complete
            ]);
        }

        return redirect()->route('admin.login');
    }

    public function login(User $userModel){

        return view('admin.login');
    }

    public function check(Request $request, User $userModel){

        if($request->isMethod('post')) {

            $login = $request->input('login');
            $password = $request->input('password');
            $remember = $request->input('remember');

            $admin = $userModel->getAdmin($login, $password);
            if(isset($admin->id)){
                $admin= Json::encode($admin);
                setcookie('user', $admin, time() - 3600, '/');
                if($remember = 'on'){
                    setcookie('admin', $admin, time() + 0xFFFFFFF, '/');
                }else{
                    setcookie('admin', $admin, 0, '/');
                }
                return redirect()->route('admin');
            }

            return redirect()->route('admin.login');
        }
    }

    public function logout(){
        setcookie('admin', '', time() - 3600, '/');
        return redirect()->route('admin.login');
    }

    public function save(Request $request, Repair $repair, Client $client){

        $newClient = array();
        $newClient['second_name'] = $request->input('person_second_name');
        $newClient['first_name'] = $request->input('person_first_name');
        $newClient['father_name'] = $request->input('person_father_name');
        $newClient['address'] = $request->input('person_address');
        $newClient['tel'] = $request->input('person_tel');

        $client->init($newClient);
        $client->addToDB();
        $client_id = $client->getId();

        if(isset($_COOKIE['admin'])){
            $admin= json_decode($_COOKIE['admin']);
        }
        $admin_id = $admin->id;

        $newProduct = array();
        $newProduct['client_id'] = $client_id;
        $newProduct['admin_id'] = $admin_id;
        $newProduct['title'] = $request->input('product_title');
        $newProduct['code'] = $request->input('product_code');
        $newProduct['set'] = $request->input('product_set');
        $newProduct['diagnosis'] = $request->input('product_diagnosis');
        $newProduct['receipt_number'] = $request->input('info_receipt_number');
        $newProduct['adopted_in'] = $request->input('info_date');
        $newProduct['maintenance_type'] = $request->input('info_maintenance_type');
        $newProduct['token'] = substr(md5(time()), -8, 8);

        $repair->init($newProduct);
        $repair->addToDB();

        return redirect()->route('admin');
    }

    public function repairEdit($id){
        echo $id;
    }

}
