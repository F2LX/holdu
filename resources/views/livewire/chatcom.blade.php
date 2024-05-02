    <div>
    <div class="container d-flex align-items-center justify-content-center flex-column">
        <div class="chat-place mt-4" id="chat-place">
            <div class="chat-box d-flex flex-column">
                <div class="d-flex flex-row-reverse">
                    <h6 class="mb-0 width-90">Sana</h6>
                </div>
                <div class="d-flex flex-row mt-0">
                    <div class="col-1">
                        <img src="img/SanaPic 5.png" class="sana-profile-pic" alt="">
                    </div>
                    <div class="col-8 bg-light p-4 rounded-4 bubble-chat">
                        <p class="mb-0 text-message">Hello! How are you feeling today? I'm <b>Sana</b> from HoldU, here to support you through any challenges you may be facing. Whether you're feeling stressed, lonely, or simply want someone to talk to, I'm here to lend a listening ear. So, how has your day been so far?</p>
                        <p class="mb-0 text-end text-date">Now</p>
                    </div>
                </div>
            </div>
            @foreach($messages as $message)
            @if ($message->is_bot)
            <div class="chat-box d-flex flex-column" wire:key="{{ $message->id }}">
                <div class="d-flex flex-row-reverse">
                    <h6 class="mb-0 width-90">Sana</h6>
                </div>
                <div class="d-flex flex-row mt-0">
                    <div class="col-1">
                        <img src="img/SanaPic 5.png" class="sana-profile-pic" alt="">
                    </div>
                    <div class="col-8 bg-light p-4 rounded-4 bubble-chat">
                        <p class="mb-0 text-message">{!! $message->message !!}</p>
                        <p class="mb-0 text-end text-date">{{ $message->created_at }}</p>
                    </div>
                </div>
            </div>
            @else
            <div class="chat-box flex-column justify-content-end" wire:key="{{ $message->id }}">
                    <h6 class="mb-0 width-90 text-end">{{ auth()->user()->name }}</h6>
                <div class="d-flex flex-row justify-content-end">
                    <div class="col-8 bg-light p-4 rounded-4 bubble-chat">
                        <p class="mb-0 text-message">{{ $message->message }}</p>
                        <p class="mb-0 text-end text-date">{{ $message->created_at }}</p>
                    </div>
                    <div class="col-1">
                        <img src="img/SanaPic 5.png" class="sana-profile-pic" alt="">
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-danger" role="alert">
        {{ session('status') }}
    </div>
    @endif
        <form wire:submit="save">
            <div class="form-chat mb-3 mt-5">
                    <input type="text" wire:model="message" placeholder="Type your message..." class="form-size me-3" placeholder="" aria-label="Chat Form" aria-describedby="button-addon1">
                    <button class="btn btn-outline-secondary bg-success d-flex justify-content-center align-items-center" type="submit">
                        <span class="text-success-emphasis material-symbols-outlined fs-3">
                            send
                        </span>
                    </button>
            </div>
        </form>
        @script
            <script>
                const chatDiv = document.getElementById("chat-place");
                chatDiv.scrollTop = chatDiv.scrollHeight;
                $wire.on('chat-sended', () => {
                        setTimeout(() => {
                        const lastMessage = chatDiv.lastElementChild;
                        lastMessage.scrollIntoView({ behavior: 'smooth' });
                        }, 100); // Delay 100ms
                });             
            </script>
        @endscript
</div>
