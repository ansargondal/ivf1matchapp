<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriptionRequest;
use App\Models\Backend\Subscription;

class SubscriptionController extends Controller
{
    public function store(SubscriptionRequest $request)
    {
        Subscription::create($request->all());


        return response()->json(['error' => false, 'message' => 'You have successfully subscribed!']);
    }
}
