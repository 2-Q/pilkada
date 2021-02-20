<?php

namespace App\Http\Controllers;

use App\voter;
use Illuminate\Http\Request;

class VoterController extends Controller
{
	public function index(Request $request)
	{
		$satu=voter::where('pilihan','LIKE',1)->get();
		$dua=voter::where('pilihan','LIKE',2)->get();
		// dd($satu[0]->pilihan);
		return view('backend.pemilih.pemilih', ['satu'=>$satu, 'dua'=>$dua]);
	}
}
