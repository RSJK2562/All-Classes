<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index($id)
    {
        $id = decrypt($id);
        $user = User::findOrFail($id);

        $messages = Message::where(function ($query) use ($id) {
            $query->where('sender_id', Auth::id())->where('receiver_id', $id);
        })->orWhere(function ($query) use ($id) {
            $query->where('sender_id', $id)->where('receiver_id', Auth::id());
            // })->orderBy('created_at')->get();
        })->get();

        // dd($messages->toArray());

        return view('chat.index', compact('user', 'messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ], [
            'message.required' => 'Please enter a message to send.',
            'message.string' => 'The message must be a valid string.'
        ]);

        $message = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        broadcast(new MessageSent($message))->toOthers();

        return redirect()->back();
    }
}
