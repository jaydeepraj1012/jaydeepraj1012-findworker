<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Customer extends Controller
{
    /**
     * Show the login page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Handle the login request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Find the user by email
        $customer = Users::where('email', $validatedData['email'])->first();

        if (!$customer) {
            // User not found
            return back()->with('error', 'invalid credentials!');
        }

        // Check if the password matches (secure hashing)
        if ($validatedData['password']== $customer->password) {
            // Login successful
            return back()->with('success', 'Login successful!');
        } else {
            // Invalid password
            return back()->with('error', 'Wrong password!');
        }
    }
}
