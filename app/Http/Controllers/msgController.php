<?php

namespace App\Http\Controllers;

require __DIR__ . '/Twilio/autoload.php';


use Illuminate\Http\Request;
use Twilio\Rest\Client;

class msgController extends Controller
{
    public function store(Request $request)
    {
        $datosform = request()->except('_token');
        $remitente = request('nombre');
        $mensaje = request('mensaje');

        $account_sid = 'ACe34a8e0411efdf3f424c47702e394e52';
        $auth_token = 'b829eb0d7bf56cb2b645b5f3c72f5042';
        $twilio_number = "+18305875339";
        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            // Where to send a text message (your cell phone?)
            '+573213326705',
            array(
                'from' => $twilio_number,
                'body' => 'Remitente: ' . $remitente . ' Mensaje:' . $mensaje
            )
        );

        return redirect()->route('inicio');
    }
}
