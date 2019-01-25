<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
    	return view('index');
    }
    public function add_doctor(){
    	return view('add-doctor');
    }
    public function book_appointment(){
    	return view('book-appointment');
    }
    public function doctor_schedule(){
    	return view('doctor-schedule');
    }
    public function doctor_profile(){
    	return view('profile');
    }
    public function doctors(){
        return view('doctors');
    }
    public function patients(){
        return view('patients');
    }
    public function add_patient(){
        return view('add-patient');
    }
    public function patient_profile(){
        return view('patient-profile');
    }
    public function patient_invoice(){
        return view('patient-invoice');
    }
    public function payments(){
        return view('payments');
    }
    public function add_payments(){
        return view('add-payments');
    }
    public function reports(){
        return view('reports');
    }
    public function widgets(){
        return view('widgets');
    }

    
}
// public function widgets(){
//         return view('widgets');
//     }
