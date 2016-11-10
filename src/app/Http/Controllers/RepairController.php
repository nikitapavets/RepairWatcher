<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Repair;
use App\Models\Client;
use App\Models\RepairStatus;
use App\Models\RepairConnectStatus;

class RepairController extends Controller
{

	public function index(){
		return view('progress/index');
	}

    public function showProgress(Request $request, Repair $repair, RepairConnectStatus $repairConnectStatus){

	    $page = [
		    'title' => 'AnyComp | Отслеживание товара в ремонте'
	    ];

	    $repair = $repair->getRepairByToken($request->tokengit);
	    $statuses = $repairConnectStatus->getStatusesForRepair($repair->id);


        return view('progress.progress', [
        	'page' => $page,
	        'statuses' => $statuses,
	        'repair' => $repair
        ]);
    }

    public function techList(Repair $repair, RepairConnectStatus $repairConnectStatus){

	    $admin= json_decode($_COOKIE['admin']);
	    $page = [
		    'title' => 'AnyComp | Список техники в ремонте'
	    ];

	    $repairs = array();
	    $repairs['paid'] = $repair->getPaidRepairs();
	    $repairs['free'] = $repair->getFreeRepairs();
	    $repairs['complete'] = $repair->getCompleteRepairs();

		for($i = 0; $i < count($repairs['paid']); $i++){
			$repairs['paid'][$i]['statuses'] = $repairConnectStatus->getConnections($repairs['paid'][$i]->id);
		}
		for($i = 0; $i < count($repairs['free']); $i++){
			$repairs['free'][$i]['statuses'] = $repairConnectStatus->getConnections($repairs['free'][$i]->id);
		}

	    return view('admin.repair.tech_list', [
		    'admin' => $admin,
		    'admin_title' => 'Список техники в ремонте',
		    'page' => $page,
		    'repairs' => $repairs
	    ]);
    }

    public function addTech(){

	    $admin= json_decode($_COOKIE['admin']);
	    $page = [
		    'title' => 'AnyComp | Добавление техники в ремонт'
	    ];

	    return view('admin.repair.add_tech', [
		    'admin' => $admin,
		    'admin_title' => 'Добавление техники в ремонт',
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
		$repair_id = $repair->addToDB();

		return redirect()->route('admin.repair.add_statuses', ['repair_id' => $repair_id]);
	}

	public function addStatuses(Request $request, RepairStatus $repairStatus){

		$repair_id = $request->input('repair_id') ?? 0;

		$admin= json_decode($_COOKIE['admin']);
		$page = [
			'title' => 'AnyComp | Добавление статусов ремонта технике'
		];

		$statuses = $repairStatus->getAllStatuses();

		return view('admin.repair.add_statuses', [
			'admin' => $admin,
			'admin_title' => 'Добавление статусов ремонта технике',
			'page' => $page,
			'statuses' => $statuses,
			'repair_id' => $repair_id
		]);
	}

	public function saveStatuses(Request $request, RepairConnectStatus $repairConnectStatus){

		$statuses = $request->all();
		$repair_id = $request->input('repair_id') ?? 0;
		foreach ($statuses as $key => $status){

			if($key > 0){
				$repairConnectStatus->addConnection($repair_id, $key);
			}

		}

		return redirect()->route('admin.repair.tech_list');
	}

}
