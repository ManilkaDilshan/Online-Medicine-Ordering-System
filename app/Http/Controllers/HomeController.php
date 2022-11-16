<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;
use App\Models\RequestQuotation;
use App\Models\User;

use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::id()) {
            if(Auth::user()->user_type=='0') {
                $user_id=Auth::user()->id;
                $requestQuotations = User::find($user_id)->request_quotations;
                return view('user.home')->with('requestQuotations', $requestQuotations);
            } else {
                $requestQuotations = RequestQuotation::where('status','pending')->get();
                return view('admin.home', compact('requestQuotations'));
            }
        } else {
            return index()->back();
        }
    }
}
