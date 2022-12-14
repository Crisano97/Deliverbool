<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderRequest;
use Braintree\Gateway;
use Illuminate\Http\Request;

class PayementsController extends Controller
{
    public function generate(OrderRequest $request, Gateway $gateway)
    {
        $token = $gateway->clientToken()->generate();
        $data = [
            'success' => true,
            'token' => $token
        ];
        
        return response()->json($data,200);
    }
}
