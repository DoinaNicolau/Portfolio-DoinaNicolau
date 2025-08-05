<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailables\Attachment;
use App\Mail\CvShareMail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

  public function submitContact(Request $request)
    {
    
      $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::to('la-tua-email-personale@esempio.com')->send(new ContactFormMail($data));

        return redirect('/#contact')->with('success', 'Messaggio inviato con successo!');
    }


    public function sendCv(Request $request)
    {
        $validated = $request->validate(['recipient_email' => 'required|email']);

        $pathCvItaliano = public_path('media/CV_Doina_Nicolau_IT_Personalizzato_Circolare.pdf');
        $pathCvInglese  = public_path('media/CV_Doina_Nicolau_EN_Simple.pdf');

        if (!file_exists($pathCvItaliano) || !file_exists($pathCvInglese)) {
            return redirect()->back()->with('error_cv', 'Si è verificato un errore interno. Riprova più tardi.');
        }
        
        $filesDaAllegare = [
            'italiano' => $pathCvItaliano,
            'inglese'  => $pathCvInglese
        ];

        try {
            Mail::to($validated['recipient_email'])->send(new CvShareMail($filesDaAllegare, $validated));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Errore invio email CV: ' . $e->getMessage());
            return redirect()->back()->with('error_cv', 'Non è stato possibile inviare l\'email.');
        }

        return redirect()->back()->with('success_cv', 'CV inviati con successo a ' . $validated['recipient_email'] . '!');
    }
}