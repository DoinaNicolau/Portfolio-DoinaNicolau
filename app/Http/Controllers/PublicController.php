<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\CvShareMail;

class PublicController extends Controller
{
    public function homepage() {
    return view('welcome');
}

  public function submitContact(Request $request)
    {
    
        $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

  // Invia l'email
        // Specifica a chi inviare l'email (es. il tuo indirizzo personale)
        Mail::to('tua-email-personale@example.com')->send(new ContactFormMail($data));

        // Reindirizza alla homepage con un messaggio di successo
        return redirect('/#contact')->with('success', 'Messaggio inviato con successo!');
    }

    public function sendCv(Request $request)
{
    // Valida l'email del destinatario
    $data = $request->validate([
        'recipient_email' => 'required|email'
    ]);

    // Invia l'email con il CV in allegato
    Mail::to($data['recipient_email'])->send(new CvShareMail());

    // Reindirizza indietro con un messaggio di successo
    return back()->with('success_cv', 'CV inviato con successo a ' . $data['recipient_email'] . '!');
}

}
