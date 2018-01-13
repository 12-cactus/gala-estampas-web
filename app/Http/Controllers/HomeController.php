<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request)
    {
        $messages = [
            'name'    => 'Nunca confíes en extaños.',
            'email'   => 'Nos gustaría tener tu mail para contactarnos.',
            'subject' => 'Debes completar este campo',
            'message' => 'Si nos dices que deseas te podemos ayudar.',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|between:3,30',
            'email' => 'required|email',
            'subject' => 'required|between:3,100',
            'message' => 'required|min:10',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($messages)
                ->withInput();
        }

        Mail::to('sirdemian@gmail.com')->send(new ContactUs($request->all()));

        return redirect('/#contact')->with('form-success', 'Mensaje enviado!! Gracias');
    }
}
