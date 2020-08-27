<?php namespace App\Controllers;

use App\Models\DoctorsModel;

class Doctors extends BaseController
{
	public function index()
	{
	    $doctorsModel=new DoctorsModel();
	    $data['doctors']=$doctorsModel->getDoctors();
		return view('doctors_view',$data);
	}

	//--------------------------------------------------------------------

}
