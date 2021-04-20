<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{

    public function about(){
        return view('about');
    }
  public function master(){
        return view('master');
    }

    public function list(){
   

        $services=[
            ['JAVA','C++','Programming','200'],
            [ '8852-5787-5789','3453-7977-5575','3es3-7977-5575'],
            [ 'Programming','Programming','Programming','9987-7977-5575'],
            ['500','324','434','4657']
        ];
        // $services=array('Service 1', 'Service 2');
        return view("/list", compact('services'));
    }
 }
