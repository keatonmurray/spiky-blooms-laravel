<section id="{{ $section }}" class="mt-4">
    <div class="home-heading text-center mb-4">
        <h1>
            Have any questions?
            <span class="d-block">We'd love to hear about it!</span>
        </h1>
    </div>
    <form action="" class="contact-form">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <x-form-input 
                    label="First Name" 
                    name="first_name" 
                    type="text"
                />
            </div>
            <div class="col-12 col-md-6">
                <x-form-input 
                    label="Last Name" 
                    name="last_name" 
                    type="text"
                />
            </div>
            <div class="col-12 col-md-6">
                <x-form-input 
                    label="Phone Number" 
                    name="phone_number" 
                    type="text"
                />
            </div>
            <div class="col-12 col-md-6">
                <x-form-input 
                    label="Email Address" 
                    name="email_address" 
                    type="text"
                />
            </div>
            <div class="col-12">
                <label for="" class="form-label">Message</label>
                <textarea name="" id="" class="form-control line-input"></textarea>
            </div>
        </div>
        <div class="float-end mt-4">
            <button class="btn btn-dark send-message-btn" type="submit">
                <i class="fas fa-paper-plane me-2"></i>
                Send Message
            </button>
        </div>
    </form>
</section>
