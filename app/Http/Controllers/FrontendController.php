<?php

namespace App\Http\Controllers;

use App\voter;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
	function index()
    {
        if (Session::has('mySession')) {
            // Session::forget('mySession');
            if (Session::get('mySession')=='sudah') {
                return view('frontend/sudah');
            }

            $voter=voter::where('email','=',Session::get('mySession'))->get();
            if (count($voter)>0) {
                if (is_null($voter[0]->pilihan)) {
                    return view('frontend/voting');
                }
            }
            return view('frontend/login-email')->with('notif','Tidak Bisa Melakukan Pemilihan');
        }
        return view('frontend/login-email');
    }

    function inputEmail(Request $request)
    {
        $voter=voter::where('email','=',$request->email)->get();
        if (count($voter)==0) {
            // membuat di database
            $voter = new voter;
            $voter->email=$request->email;
            $voter->save();
        }
        $voter2=voter::where('email','=',$request->email)->get();
        if (!is_null($voter2[0]->pilihan)) {
            // user sudah voting
            return redirect()->back()->with('notif','Anda Sudah Melakukan Pemilihan');
        }

        Session::put('mySession', $request->email);
        return redirect()->back();
    }

    function vote(Request $request)
    {
        $voter=voter::where('email','=',Session::get('mySession'))->get()[0];
        $voter->pilihan=$request->pilihan;
        $voter->save();

        Session::put('mySession','sudah');
        return redirect('/');
    }

    function lupakan()
    {
        Session::forget('mySession');
        return redirect('/');
    }
}
