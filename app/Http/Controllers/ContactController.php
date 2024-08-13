<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function enviarCorreoContacto(Request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'movil' => ['required', 'regex:/^[0-9]{9}$/'],
                'mensaje' => 'required|string',
            ], [
                'nombre.required' => 'El campo nombre es obligatorio.',
                'nombre.string' => 'El nombre debe ser una cadena de texto.',
                'nombre.max' => 'El nombre no debe exceder los 255 caracteres.',
                'email.required' => 'El campo email es obligatorio.',
                'email.email' => 'Debe ingresar un correo electrónico válido.',
                'email.max' => 'El email no debe exceder los 255 caracteres.',
                'movil.required' => 'El campo móvil es obligatorio.',
                'movil.regex' => 'El número de móvil debe tener exactamente 9 dígitos.',
                'mensaje.required' => 'El campo mensaje es obligatorio.',
                'mensaje.string' => 'El mensaje debe ser una cadena de texto.',
            ]);

            $data = [
                'nombre' => $request->input('nombre'),
                'email' => $request->input('email'),
                'movil' => $request->input('movil'),
                'mensaje' => $request->input('mensaje')
            ];

            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to('contacto@elclubdeedusaurio.cl','edusaurio2020@gmail.com')
                        ->subject('Nuevo mensaje de contacto');
            });

            return response()->json(['message' => 'Correo enviado correctamente']);
        } catch (ValidationException $e) {
            return response()->json([
                'errors' => $e->errors()
            ], 422);
        }
    }
}
