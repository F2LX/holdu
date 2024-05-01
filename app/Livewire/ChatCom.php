<?php

namespace App\Livewire;
use Livewire\Attributes\Validate; 
use Livewire\Component;
use App\Models\Chat;
use Illuminate\Support\Carbon; // For todays object
use App\Models\ChatSession;
use OpenAI\Laravel\Facades\OpenAI;

class ChatCom extends Component
{
    public $message;
    public $date;
    public $is_bot;
    public $sender_id;

    public function save() 
    {
        $session = ChatSession::where('user_id',auth()->user()->id)->latest()->first();
        if ($session->date==date('Y-m-d')&&$session->replycount%30==0&&$session->replycount!=0) {
            session()->flash('status', 'Limit has been reached, please try again tommorow');
        } else {
            $this->date=date('Y-m-d');
            $this->is_bot=false;
            $this->sender_id=auth()->user()->id;

            Chat::create($this->only(['message','sender_id','date','is_bot']));


            $chats = Chat::where('sender_id', auth()->user()->id)
                ->whereDate('created_at', date('Y-m-d'))
                ->orderBy('created_at')
                ->get();           
            $messages = [];

            $messages[]=['role' => "user", 'content' => "You're a helpful AI named Sana. You help people about mental health problems, and your job is to make people feel better. Answer with care and love, use short and simple message to support them. The one currently chatting with you are ".auth()->user()->name];
            foreach ($chats as $chat) {
                $messages[] = ['role' => $chat->is_bot?"assistant":"user", 'content' => $chat->message];
            }
            // Call OpenAI API
            $result = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => $messages,
            ]);
            $bot = new Chat;
            $bot->message=$result->choices[0]->message->content;
            $bot->sender_id=auth()->user()->id;
            $bot->date=date('Y-m-d');
            $bot->is_bot=true;
            $bot->save();
            $session->replycount++;
            $session->save();
        }
        $this->message='';
    }
    public function render()
    {
        $messages = Chat::where('sender_id', auth()->user()->id)
        ->whereDate('created_at', Carbon::today())
        ->orderBy('created_at')
        ->get();
        return view('livewire.chatcom',compact('messages'));
    }
}
