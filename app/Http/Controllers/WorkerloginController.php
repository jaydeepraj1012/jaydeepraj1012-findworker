<?php
namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class WorkerloginController extends Controller
{
    public function index()
    {
        // echo "hssjdhdj";
        // $widgets = [
        //     ['title' => 'Total Tasks', 'value' => '150', 'icon' => 'fas fa-tasks'],
        //     ['title' => 'Completed Tasks', 'value' => '120', 'icon' => 'fas fa-check-circle'],
        //     ['title' => 'Pending Tasks', 'value' => '30', 'icon' => 'fas fa-hourglass-half'],
        // ];

        // $tasks = [
        //     ['name' => 'Task 1', 'status' => 'Completed', 'due_date' => '2023-10-01'],
        //     ['name' => 'Task 2', 'status' => 'Pending', 'due_date' => '2023-10-05'],
        //     ['name' => 'Task 3', 'status' => 'In Progress', 'due_date' => '2023-10-10'],
        // ];

        // return view('dashboard', compact('widgets', 'tasks'));
        return view('workerlogin');
    }

    public function sendOtp(Request $request)
    {
        // Validate email
        $request->validate(['email' => 'required|email']);
    
        // Check if email already exists in the database
        $existingUser = Users::where('email', $request->input('email'))->first();
        
        if ($existingUser) {
            // Return a response if email already exists
            return response()->json(['error' => 'Email already exists. Please use a different email.'], 400);
        }
    
        // Generate OTP
        $otpCode = rand(100000, 999999);
    
        // Send OTP via email
        try {
            Mail::raw("Your OTP code is: $otpCode", function ($message) use ($request) {
                $message->to($request->email)->subject('Your OTP Code');
            });
    
            // Return success response with OTP
            return response()->json(['message' => 'OTP sent to your email address.', 'otp' => $otpCode]);
    
        } catch (\Exception $e) {
            // If there's an issue with sending email, catch exception
            return response()->json(['error' => 'Failed to send OTP. Please try again later.'], 500);
        }
    }
    

    public function register(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',  // Ensure the email is unique
            'password' => 'required|string|min:8',
        ]);
    
        try {
            // Check if the email already exists manually (for a custom error response)
            $existingUser = Users::where('email', $request->input('email'))->first();
    
            if ($existingUser) {
                // Return a response if email already exists
                return response()->json(['error' => 'Email already exists. Please use a different email.'], 400);
            }
    
            // Create new worker instance
            $worker = new Users();  // Ensure using the correct model
    
            // Assign data
            $worker->name = $request->input('name');
            $worker->email = $request->input('email');
            $worker->password = bcrypt($request->input('password'));  // Use bcrypt for password encryption
            $worker->user_type = 1;  // Assuming 1 is for workers
    
            // Save to database
            $worker->save();
    
            // Return success response
            return response()->json(['success' => 'Worker registered successfully.']);
    
        } catch (ValidationException $e) {
            // Return validation errors
            return response()->json(['error' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Return a general error if something goes wrong
            return response()->json(['error' => 'Failed to register worker. Please try again.'], 500);
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }
    
        $worker = Users::where('email', $request->email)->first();
    
        if (!$worker || $worker->password !== md5($request->password)) {
            return back()->with('error', 'Invalid credentials!');
        }
    
        // Store user data in the session
        $request->session()->put('userid', $worker->user_id);
        $request->session()->put('username', $worker->name);
        $request->session()->put('useremail', $worker->email);
        $request->session()->put('user_type', $worker->user_type);
        $request->session()->put('profile_picture', $worker->profile_picture);
    
        $widgets = [
            ['title' => 'Total Tasks', 'value' => '150', 'icon' => 'fas fa-tasks'],
            ['title' => 'Completed Tasks', 'value' => '120', 'icon' => 'fas fa-check-circle'],
            ['title' => 'Pending Tasks', 'value' => '30', 'icon' => 'fas fa-hourglass-half'],
        ];
    
        $tasks = [
            ['name' => 'Task 1', 'status' => 'Completed', 'due_date' => '2023-10-01'],
            ['name' => 'Task 2', 'status' => 'Pending', 'due_date' => '2023-10-05'],
            ['name' => 'Task 3', 'status' => 'In Progress', 'due_date' => '2023-10-10'],
        ];
    
        return view('dashboard', compact('widgets', 'tasks'));
    }
    public function logout(Request $request)
{
    $request->session()->flush(); // Clear all session data
    return redirect('/')->with('success', 'Logged out successfully!');
}

    
}
