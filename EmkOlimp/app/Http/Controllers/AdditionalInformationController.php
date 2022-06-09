<?php

namespace App\Http\Controllers;

use App\Models\AdditionalInformation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdditionalInformationController extends Controller
{
    public function update(Request $request){
        $validateFields = $request->validate([
            'information_id' => 'required',
            'information_name' => 'required',
            'document_name' => 'required|file',
        ]);
        $stage = AdditionalInformation::find($validateFields['information_id']);
        $stage->information_name = $validateFields['information_name'];
        $file = $validateFields['document_name'];
        $path = $file->store('');
        $stage->document_name = $path;
        $stage->save();
        return redirect(route('admin.index'));
    }
}