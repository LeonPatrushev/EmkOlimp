<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $all_participants = Participant::get();
        return view('admin_panel', [
            'all_participants' => $all_participants
        ]);
    }
}
