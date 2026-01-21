<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $superAdmins = User::role('super_admin')->get();

        foreach ($superAdmins as $admin) {
            Mail::to($admin->email)->send(new ContactFormSubmitted($data));
        }

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
