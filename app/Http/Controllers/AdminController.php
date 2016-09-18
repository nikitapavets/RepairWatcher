<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;
use Cookie;
use Psy\Util\Json;

class AdminController extends Controller {

    public function index(User $userModel){

        if(isset($_COOKIE['admin'])){
            $admin= json_decode($_COOKIE['admin']);
            return view('admin.index', ['admin' => $admin]);
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

    public function save(Request $request, Repair $repair){

        $description = $request->input('product_title');
        $code = $request->input('product_code');
        $first_name = $request->input('person_name');
        $tel = $request->input('person_tel');
        $commentary = $request->input('person_commentary');
        $type = $request->input('product_maintenance_type');
        $token = "token";

        $repair->add($description, $code, $token, $commentary, $type);

        return redirect()->route('admin');
    }

}
