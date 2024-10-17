<section id = "{{ $section }}" class = "{{ $class }}">
    <div class="row">
        <x-column-layout additional-class="justify-content-start align-items-center">
            <h1 class="heading title-one">{{$title}}
                <span class="d-block title-two">{{$subtitle}}</span>
            </h1>
        </x-column-layout>
        <x-column-layout additional-class="justify-content-start align-items-center">
            <figure class="ms-auto">
                <img src="{{asset('images/bg.jpg')}}" class="background-img" alt="Background Img">
            </figure>
        </x-column-layout>
    </div>
</section>