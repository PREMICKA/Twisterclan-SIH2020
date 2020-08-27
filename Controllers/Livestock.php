<?php namespace App\Controllers;

use App\Models\LivestockModel;

class Livestock extends BaseController
{
	public function index()
	{
	    $livestockModel=new LivestockModel();
	    $data['livestock']=$livestockModel->getLivestocks();
		return view('livestock_view',$data);
	}

	
	function list($id=''){
	    $livestockModel=new LivestockModel();
	    $data['livestock']=$livestockModel->getLivestock($id);
	    return view("livestockListView",$data);
	}
	
	function medicalCondition(){
	    return view("livestockMedicalConditionView");
	}
	//--------------------------------------------------------------------

}
