<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Message;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Ici vous pouvez ajouter la logique pour envoyer l'email ou sauvegarder le message
        Message::create([
            'fullname'=> $validated['name'],
            'email'=> $validated['email'],
            'sujet'=> $validated['subject'],
            'message'=> $validated['message'],
           ]);

        $exists = Client::where('email', $validated['email'])->exists();

        if (!$exists) {
            Client::create([
                'email' => $validated['email'],
                'name'  => $validated['name'],
            ]);
        }

        // Envoi du message de confirmation
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès, nous vous répondrons dans les plus brefs délais.');

    }

    public function comment(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // dd($request->service);

        // Ici vous pouvez ajouter la logique pour envoyer l'email ou sauvegarder le message
        Testimonial::create([
            'name'=> $validated['name'],
            'email'=> $validated['email'],
            'service_id'=> $request->service,
            'comment'=> $validated['message'],
            'is_visible' => true
           ]);


        $exists = Client::where('email', $validated['email'])->exists();

        if (!$exists) {
            Client::create([
                'email' => $validated['email'],
                'name'  => $validated['name'],
            ]);
        }

        // Envoi du message de confirmation
        return redirect()->back()->with('success', 'Commentaire posté avec succès!');

    }

    public function newsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $exists = Client::where('email', $validated['email'])->exists();

        if (!$exists) {
            Client::create([
                'email' => $validated['email'],
            ]);
        }

        // Envoi du message de confirmation
        return redirect()->back()->with('success', 'Merci de s\'abonner dans notre newsletter!');

    }
}
