<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdditionalInformation;
use App\Models\StageDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
        $all_stage_date = StageDate::get();
        $all_additional_info = AdditionalInformation::get();
        return view('index',[
            'all_stage_date' => $all_stage_date,
            'all_additional_info' => $all_additional_info
        ]);
    }
}
