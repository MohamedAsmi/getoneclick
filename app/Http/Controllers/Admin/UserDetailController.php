<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\UserDetail;
use App\Http\Requests\StoreUserDetailRequest;
use App\Http\Requests\UpdateUserDetailRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserDetailController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $user = User::find(Auth::user()->id);

       return view('admin.profile.index',compact('user'));
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
    public function store(StoreUserDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserDetail $userDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserDetailRequest $request, UserDetail $userDetail)
    {
    
        $user = User::find($request->id);
        $file = $request->file('path');
        $fileName = null;
        // dd($request);
        if($file){

            $fileOriginalName = $file->getClientOriginalName();
            $fileName = time() . '_' . $fileOriginalName;

            // Move the file to the appropriate directory
            $file->move(public_path('assets/admin/profile/'), $fileName);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $userDetail = UserDetail::where('user_id',$request->id)->first();
        if(!$userDetail){
            $userDetail = new UserDetail();
        }

        $userDetail->user_id =  Auth::user()->id;
        $userDetail->f_name =  $request->f_name;
        $userDetail->l_name =  $request->l_name;
        $userDetail->address =  $request->address;
        $userDetail->mobile =  $request->mobile;
        $userDetail->skype =  $request->skype;
        $userDetail->url =  $fileName ?? $userDetail->url;
        $userDetail->facebook =  $request->facebook;
        $userDetail->linkedin =  $request->linkedin;
        $userDetail->instagram =  $request->instagram;
        $userDetail->save();

        return self::response('success', 'Successfully Updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDetail $userDetail)
    {
        //
    }
}
