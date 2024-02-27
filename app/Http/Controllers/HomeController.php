<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $videos = Video::where(['page_id' => 1, 'status' => 1])->orderBy('type', 'desc')->get();
        $categories = Category::where(['status' => 1])->get();
        $user = User::where(['is_admin' => 1])->first();
        return view('dashboard',compact('videos','categories','user'));
    }

    public function redirect()
    {
        // dd(123);
        if(Auth::user() && Auth::user()->is_admin == 1){
            return redirect('admin');
        }elseif(Auth::user() && Auth::user()->is_admin == 0){
            return redirect('user');
        }else{
            abort(401, 'Unauthorized Access');
        }
        
    }
}
