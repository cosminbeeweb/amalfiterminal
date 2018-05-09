<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // first validate my data

        $data = [];

        config([
            'mail.host' => 'smtps.aruba.it',
            'mail.port' =>  '465',
            'mail.username' =>  'info@amalfiterminal.it',
            'mail.password' =>  'cambiami10'
        ]);

        $data['nome'] = $request->nome;
        $data['cognome'] = $request->cognome;
        $data['telefono'] = $request->telefono;
        $data['email'] = $request->email;
        $data['note'] = $request->note;

        Mail::send(['html' => 'emails.new_message'], ['data' => $data], function ($m) use ($data)  {
            $m->from($data['email'], $data['nome'] . ' ' . $data['cognome']);
            $m->to('info@amalfiterminal.it')->subject('Amalfi Terminal - Nuovo messaggio da ' . $data['nome'] . ' ' . $data['cognome']);
        });

        $notification = new \stdClass();
        $notification->message = 'Il tuo messaggio è stato inviato';
        $notification->status = 'success';

        return view('pages.contact.index')->withNotification($notification);
    }
}