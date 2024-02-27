<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $password = "Testuser@123!";
      
        // $user = User::create([
        //     'name' => $request->name. "--$password",
        //     'password' => Hash::make($password),
        //     'is_admin' => $request->join_as,
        //     'email' => $request->email,
        //     'cname' => $request->cname,
        //     'mobile' => $request->mobile,
        // ]);
       
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($password), // Hash password
            'cname' => $request->cname,
            'mobile' => $request->mobile,
            'is_admin' => 0, // Assuming this is not an admin
            // Set default values for other fields if needed
        ]);

        $user->leads()->create([
            'service_id' => $request->service_id,
            'miles' => $request->miles,
            'postcode' => $request->postcode,
            'join_id' => $request->join_id,
            // Add other lead details from the payload
        ]);
        // return redirect()->route('user');
        // return redirect()->route('user');
      Auth::login($user);

// Redirect to a desired route
return redirect()->route('leads.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpateUserRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
