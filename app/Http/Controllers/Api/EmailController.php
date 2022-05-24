<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function index()
    {
        return view('email-form');
    }

    public function store(Request $request)
    {
        $item = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
            'url1'=>'required',
            'url2'=>'required',
            'url3'=>'required',
            'image'=>'required'
        ]);
        
        // dd($item);
        Mail::to($item['email'])->send(new SendEmail($item));
        return back();
        // return new SendEmail($item);
    }

}
