<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;


class MessageController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ],
        [
            'name.required' => __(' i need your name ')
        ]);
        //enviar email

    Mail::to('mmatiast101@gmail.com')->queue(new MessageReceived($message));

        return'Mensaje enviado';
       
    }
}
