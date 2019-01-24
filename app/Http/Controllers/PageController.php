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
    
}
