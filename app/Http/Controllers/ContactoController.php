<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        // Envía el correo
        Mail::to('cristian.ruizdiaz.tec@gmail.com')->send(new ContactoMailable($datos));

        return redirect(url()->previous() . '#contacto')
       ->with('success', 'Tu mensaje fue enviado correctamente.');
    }
}
