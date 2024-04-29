<?php

namespace App\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;
use OpenAI\Resources\Assistants;
use OpenAI\Responses\Assistants\AssistantResponse;

class Chat extends Component
{
    public function render()
    {
        return view('livewire.chat');
    }
}
