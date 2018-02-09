<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function promos(){
        return view('promos');
    }

    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|between:3,30',
            'email' => 'required|email',
            'subject' => 'required|between:3,100',
            'message' => 'required|min:10',
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }

        Mail::to(config('mail.to contact'))->send(new ContactUs($request->all()));
        return redirect('/#contact')->with('form-success', 'Mensaje enviado!! Gracias');
    }

}
