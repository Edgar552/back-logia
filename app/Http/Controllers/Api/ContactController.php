<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email'],
            'mensaje' => ['required', 'string', 'max:5000'],
        ]);

        Mail::to(env('CONTACT_RECEIVER_MAIL'))
            ->send(new ContactMail($validated));

        return response()->json([
            'success' => true,
            'message' => 'Mensaje enviado correctamente.',
        ]);
    }
}
