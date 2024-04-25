@extends('ui.home')

@section('content')
    <div class="container d-flex align-items-center justify-content-center flex-column">
        <div class="chat-place mt-4">
            <div class="chat-box">
                    <div class="col-1">
                        <img src="img/SanaPic 5.png" alt="">
                    </div>
                    <div class="col-8 bg-light p-4 rounded-4">
                        <p>Hello! How are you feeling today? I'm Sana from HoldU, here to support you through any challenges you may be facing. Whether you're feeling stressed, lonely, or simply want someone to talk to, I'm here to lend a listening ear. So, how has your day been so far?</p>
                        <p class="mb-0">10.27</p>
                    </div>
            </div>
            <div class="chat-box justify-content-end">
                <div class="col-8 bg-light p-4 rounded-4">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis vero deserunt aliquid nobis laudantium harum sequi molestias minus ut, beatae itaque quae nulla ab debitis impedit distinctio laboriosam iste culpa eveniet aliquam vitae? Laudantium nisi similique rem excepturi, explicabo reprehenderit repudiandae maxime placeat obcaecati aliquam incidunt eos! Culpa saepe accusamus fugit eum possimus et tempore, sed deleniti delectus exercitationem amet obcaecati totam. Unde, laudantium. Ipsum nesciunt quod molestias illo necessitatibus eaque, beatae hic suscipit laboriosam nemo odit placeat nostrum impedit ullam animi aperiam excepturi! Quis neque, quos sapiente optio, animi obcaecati aliquid accusantium soluta qui ab molestiae culpa magni, esse maxime ipsum modi labore. Qui earum, error labore totam eaque sunt rem! Asperiores maxime facere soluta quidem rerum veritatis, quia commodi earum est blanditiis quam cum eaque labore perspiciatis nobis odit sed nesciunt facilis mollitia dolore, non exercitationem obcaecati voluptate. Sed voluptate illum officia esse, quod, eum placeat dicta, optio eaque quam laborum quis. Maiores ratione, provident sint harum molestias deleniti fuga, dolorum dolor perferendis ducimus maxime officiis et ad culpa nostrum accusantium veritatis voluptates! Quos sapiente amet neque porro sequi maxime sit possimus dicta iusto non facere illum dolore unde eaque nam ducimus, placeat animi architecto adipisci eligendi. Commodi.</p>
                    <p class="mb-0 text-end">12.24</p>
                </div>
                <div class="col-1">
                    <img src="img/SanaPic 5.png" alt="">
                </div>
            </div>
        </div>

    </div>
    {{-- <div class="container d-flex justify-content-center"> --}}
        <div class="form-chat mb-3 mt-5">
            <input type="text" class="form-size me-3" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <button class="btn btn-outline-secondary bg-success" type="button" id="button-addon1"><span class="text-success-emphasis material-symbols-outlined fs-3">
                send
                </span></button>
          </div>
    {{-- </div> --}}
@endsection