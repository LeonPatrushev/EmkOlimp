<?php

namespace App\Http\Controllers;

use App\Models\StageDate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StageDateController extends Controller
{
    public function update(Request $request){
        $validateFields = $request->validate([
            'stage_id' => 'required',
            'stage_name' => 'required',
            'beginning_stage' => 'required|date',
            'end_stage' => 'required|date'
        ]);
        $stage = StageDate::find($validateFields['stage_id']);
        $stage->stage_name = $validateFields['stage_name'];
        $stage->beginning_stage = $validateFields['beginning_stage'];
        $stage->end_stage = $validateFields['end_stage'];
        $stage->save();
        return redirect(route('admin.index'));
    }
}
