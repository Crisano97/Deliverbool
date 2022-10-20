<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\SendNewEmail;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function store(Request $request){
        $data = $request->all();
        $newLead = new Lead();
        $newLead->fill($data);
        $newLead->save();

        Mail::to('97keb6@gmail.com')->send(new SendNewEmail($newLead));

        return response()->json([
            'success' => true,
        ]);
    }
}
