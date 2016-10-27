<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Repair;
use App\Models\Client;

class RepairController extends Controller
{
    public function showProgress(){

	    $page = [
		    'title' => 'AnyComp | Отслеживание товара в ремонте'
	    ];

        return view('progress.progress', [
        	'page' => $page
        ]);
    }

    public function edit($id){
        echo $id;
    }

    public function addTech(){

	    $admin= json_decode($_COOKIE['admin']);
	    $page = [
		    'title' => 'AnyComp | Добавление техники'
	    ];

	    return view('admin.repair.add_tech', [
		    'admin' => $admin,
		    'admin_title' => 'Добавление техники',
		    'page' => $page
	    ]);
    }

	public function saveTech(Request $request, Repair $repair, Client $client){

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

}
