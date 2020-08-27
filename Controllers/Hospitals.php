<?php namespace App\Controllers;

use App\Models\HospitalModel;

class Hospitals extends BaseController
{
	public function index()
	{
	    $hospitalModel=new HospitalModel();
	    $data['hospitals']=$hospitalModel->getHospitals();
		return view('hospitals_view',$data);
	}

	//--------------------------------------------------------------------

}
