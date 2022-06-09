<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function store(Request $request)
    {
        $validateFields = $request->validate([
            'participant_full_name' => 'required',
            'participants_email' => 'required|email',
            'name_institution' => 'required',
            'specialization' => 'required',
            'course' => 'required|numeric',
            'teacher_full_name' => 'required', 
            'teacher_phone_number' => 'required',
            'teacher_email' => 'required|email'
        ]);
        if(Participant::where('participants_email', $validateFields['participants_email'])->exists()){
            return redirect(route('index'))->withErrors([
                'participants_email' => 'Участник с такой почтой уже зарегистрировался'
            ]);
        }
        $participant = Participant::create($validateFields);
        if($participant){
            return redirect(route('index'));
        }
        
    }

    public function update(Request $request){
        $formFields = $request->only(['participant_id','status_change']);
        switch($formFields['status_change']){
            case('approve'):
                Participant::find($formFields['participant_id'])->update(['status_id' => 2]);
                return redirect(route('admin.index'));
            break;
            case('reject'):
                Participant::find($formFields['participant_id'])->update(['status_id' => 3]);
                return redirect(route('admin.index'));
            break;
            case('delete'):
                Participant::find($formFields['participant_id'])->delete();
                return redirect(route('admin.index'));
            break;
        }    
    }
}
