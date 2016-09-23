<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RepairController extends Controller
{
    public function edit($id){
        echo $id;
    }

    public function add(){
        return view('admin.repair.add');
    }
}
