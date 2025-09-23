<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Show contact form
    public function create()
    {
        return view('contact.create');
    }

    // Store message from contact form
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'service'     => 'required|string|max:255',
            'name'        => 'required|string|max:255',
            'phone'       => 'required|string|max:15',
            'email'       => 'required|email|max:255',
            'description' => 'required|string',
        ]);

        Message::create($request->all());

        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }

    // Show all messages in admin panel
    public function index()
    {
        $messages = Message::latest()->paginate(10);
        return view('admin.messages.index', compact('messages'));
    }
}
