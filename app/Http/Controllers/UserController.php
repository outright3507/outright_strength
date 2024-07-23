<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create a new user
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'date_of_birth' => $request->input('date_of_birth'),
            'address' => $request->input('address'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'zip_code' => $request->input('zip_code'),
        ]);

        // Return a success response
        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }

}
