<?php

namespace App\Http\Controllers;

use App\Job;
use App\JobProposal;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        if (Auth::user() ->role_id == 1)
        {
            /*admin*/
            return view('home');
        }elseif (Auth::user() ->role_id == 2)
        {
            /*freelancer*/
            return view('freelancer.dashboard');

        }
        /*client*/
        return view('client.dashboard');
    }

    public function wallet()
    {
        return view('wallet');
    }
    public function loadWallet(Request $request)
    {
        $user = Auth::user();
        $amount = $request->amount;
        $user -> deposit($amount);
        return redirect()->back()->with('message','Deposit Successful');
    }
    public function withdrawWallet(Request $request)
    {
        $user = Auth::user();
        $amount = $request->amount;
        $user -> withdraw($amount);
        return redirect()->back()->with('message','Withdraw Successful');
    }

    public function rate(Request $request)
    {
        $user = User::find($request->user);
        $user->rateOnce($request->rate);
    }

    public function download($file)
    {
        $prop = JobProposal::find($file);
        if ($prop -> delivery_file != null)
        {
           return Storage::download($prop ->delivery_file);
        }
        return redirect()->back();
    }
    public function downloadJob($file)
    {
        $prop = Job::find($file);

        if ($prop -> file != null)
        {
            return Storage::download($prop ->file);
        }
        return redirect()->back();
    }
}
