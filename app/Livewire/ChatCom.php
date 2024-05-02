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

            $messages[]=['role' => "user", 'content' => "Kamu adalah AI Psikologi bernama Sana. Kamu harus membantu user dengan masalah psikologi-psikologi yang dihadapinya agar user merasa lebih baik. Gunakan bahasa yang santai dan tidak formal, diawal lakukan diagnosa dahulu dengan bertanya kesehariannya. Pastikan percakapan bersifat berkelanjutan, dan tidak terputus diawal. Tugasmu adalah membuat orang merasa dia memiliki teman untuk bercerita dan mencurahkan isi pikirannya pasca hari yang berat. Kamu dapat memberi quotes dari orang terkenal untuk memotivasi bila diperlukan, buat dan hias kata motivasi tersebut dengan tag html yang diperlukan seperti <b>, <i> ataupun <br>. Gunakan bahasa yang tidak kaku. Orang yang sedang berbicara denganmu adalah ".auth()->user()->name];
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
            $this->dispatch('chat-sended');
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
