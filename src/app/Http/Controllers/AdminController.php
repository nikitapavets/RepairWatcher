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

    public function index(User $userModel, Repair $repair) {

        $admin = json_decode($_COOKIE['admin']);
	    $page = [
	    	'title' => 'AnyComp | Панель управления'
	    ];

	    return redirect()->route('admin.repair.tech_list');
    }

    public function login(User $userModel) {

	    $page = [
		    'title' => 'AnyComp | Вход в панель управления'
	    ];

        return view('admin.login', [
        	'page' => $page
        ]);
    }

    public function check(Request $request, User $userModel) {

        if($request->isMethod('post')) {

            $login = $request->input('login');
            $password = $request->input('password');
            $remember = $request->input('remember');

            $admin = $userModel->getAdmin($login, $password);
            if (isset($admin->id)) {
                $admin= Json::encode($admin);
                setcookie('user', $admin, time() - 3600, '/');
                if ($remember = 'on') {
                    setcookie('admin', $admin, time() + 0xFFFFFFF, '/');
                } else {
                    setcookie('admin', $admin, 0, '/');
                }
                return redirect()->route('admin');
            }

            return redirect()->route('admin.login');
        }
    }

    public function logout() {
        setcookie('admin', '', time() - 3600, '/');
        return redirect()->route('admin.login');
    }

    public function repairEdit($id) {
        echo $id;
    }

}
