<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Http\Requests;

class AdminController extends Controller {

    public function index(User $userModel){

        return view('admin.index');
    }

<<<<<<< HEAD
    public function login(User $userModel){

        return view('admin.login');
=======
    public function enter(User $userModel){

        return view('admin.enter');
>>>>>>> remont.anycomp/master
    }
}
