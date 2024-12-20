<section id="{{ $section }}" class="{{ $class }}">
    <div class="row">
        <x-column-layout additional-class="flex-column align-items-center justify-content-center"> 
            <h1 class="about-heading text-center">
                The most important things
                <span class="d-block">are not things, so we design experiences.</span>
            </h1>
            <form action="" class="{{ $class }} w-100 text-center">
                <div class="mb-2">
                    <label for="emailInput" class="form-label text-dark fs-5 fw-500">Subscribe to our newsletter</label>
                </div>
                <div class="d-flex">
                    <input id="emailInput" class="form-control line-input me-2" type="email" placeholder="Enter your email address" aria-label="Email">
                    <button class="btn btn-dark" type="submit">
                        <i class="fas fa-envelope"></i>
                    </button>
                </div>
            </form>
        </x-column-layout>
        <x-column-layout additional-class="justify-content-end about-bg-section">
            <figure class="ms-auto">
                <img src="{{asset('assets/images/about.jpg')}}" class="about-section-img" salt="Background Image">
            </figure>
        </x-column-layout>
    </div>
</section>