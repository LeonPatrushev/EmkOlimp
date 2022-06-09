<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdditionalInformation;
use App\Models\Participant;
use App\Models\StageDate;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $waiting_participants = Participant::where('status_id','=','1')->join('statuses', 'statuses.id','=','participants.status_id')->get(['participants.*', 'statuses.name']);
        $approved_participants = Participant::where('status_id','=','2')->join('statuses', 'statuses.id','=','participants.status_id')->get(['participants.*', 'statuses.name']);
        $rejected_participants = Participant::where('status_id','=','3')->join('statuses', 'statuses.id','=','participants.status_id')->get(['participants.*', 'statuses.name']);
        $all_stage_date = StageDate::get();
        $all_additional_info = AdditionalInformation::get();
        return view('admin_panel', [
            'waiting_participants' => $waiting_participants,
            'approved_participants' => $approved_participants,
            'rejected_participants' => $rejected_participants,
            'all_stage_date' => $all_stage_date,
            'all_additional_info' => $all_additional_info
        ]);
    }
}
