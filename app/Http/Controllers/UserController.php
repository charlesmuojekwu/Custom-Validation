<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{

    public function index(Request $request)
    {
        /// Validate field with parameters of value and rules passed

        try {
            $request->validate([
                'first_name.value' => $request->first_name['rules'],
                'last_name.value' => $request->last_name['rules'],
                'email.value' => $request->email['rules'],
                'phone.value' => $request->phone['rules'],
            ]);
        } catch (\BadMethodCallException $e) {
            return response()->json([
                'error' => 'Invalid rules'
            ], 400);


        }
    }
}
