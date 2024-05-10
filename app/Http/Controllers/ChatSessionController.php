<?php

namespace App\Http\Controllers;

use App\Models\ChatSession;
use Illuminate\Http\Request;

class ChatSessionController extends Controller
{
    /**
     * Create a new session everyday.
     */
    public function index()
    {
        /**
         * Always Generate Chat Session if Today's session didnt exist.
         */
        $session=ChatSession::where('user_id',auth()->user()->id)->latest()->first();
        if ($session==null) {
            $chat = new ChatSession;
            $chat->user_id=auth()->user()->id;
            $chat->date=date('Y-m-d');
            $chat->replycount=0;

            $chat->save();
            $session=$chat;
        } else if ($session->date!=date('Y-m-d')) {
            $chat = new ChatSession;
            $chat->user_id=auth()->user()->id;
            $chat->date=date('Y-m-d');
            $chat->replycount=0;

            $chat->save();
            $session=$chat;
        } 
        return view('user.chat');
    }
}
