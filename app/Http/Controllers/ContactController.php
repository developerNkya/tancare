<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    // public function submit(Request $request)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'organization' => 'nullable|string|max:255',
    //         'subject' => 'required|string|max:255',
    //         'message' => 'required|string|min:10',
    //     ]);

    //     // Here you can:
    //     // 1. Save to database
    //     // 2. Send email
    //     // 3. Send notification
        
    //     // Example: Save to database (uncomment if you have a Contact model)
    //     // Contact::create($validated);

    //     // Example: Send email (configure your mail settings in .env)
    //     // Mail::to('info@tancare.tz')->send(new ContactFormSubmitted($validated));

    //     return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
    // }



    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'organization' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Send email
        try {
             Mail::to('info@tancare.tz')
                ->send(new ContactFormMail($validated));
            
            return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
        } catch (Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());
            return $e->getMessage();
            return redirect()->back()->with('error', 'Sorry, there was an error sending your message. Please try again later.');
        }
    }
}