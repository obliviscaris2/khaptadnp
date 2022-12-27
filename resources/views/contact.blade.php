@extends('layouts.home-master')

@section('content')




<h3 class="self-publication-title">{{ __('Contact') }}</h3>

<section class="contact_form wid_mar">
  <div class="container">
      <div class="row">
          <div class="col-md-6 cform_left">
              <iframe src="{{ $sitesetting->google_maps }}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

          <div class="col-md-6 cform_right">
              <form id="quick_contact" class="form-horizontal" method="POST" role="form" action="{{ route('userfeedback.homestore') }}">
                  @csrf
                  <div class="form-group">

                      <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value=""
                          required>

                  </div>

                  <div class="form-group">

                      <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email"
                          value="" required>

                  </div>

                  <div class="form-group">


                      <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone No."
                          required>


                  </div>

                  <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"
                      required></textarea>

                      <div class="captcha">
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                      </div>

                  <button class="send-button" id="submit" type="submit" value="SEND">
                      <div class="alt-send-button">
                          <i class="fa fa-paper-plane"></i><span class="send-text">{{ __('Lets Connect') }}</span>
                      </div>

                  </button>

              </form>
          </div>
      </div>
  </div>
</section>


{{-- <section id="contact">
    <div class="contact-box">
      <div class="contact-links left-card-container">
      
         @foreach ($contacts as $contact)
          <div class="contact-left-card">
            <div id="googleMap" class="google-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124879.66831699565!2d81.07899856872054!3d29.3783955973332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a3c7039e06e43d%3A0x2bf2b6c6e596a807!2sKhaptad%20National%20Park!5e0!3m2!1sen!2snp!4v1666250713917!5m2!1sen!2snp" width="100%" height="400" style="border:4" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          </div>

         @endforeach

      </div>
      <div class="contact-form-wrapper">
        <form action="{{ route('userfeedback.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-item">
            <input type="text"  name="name" placeholder="Name:" required>
            <label></label>
          </div>
          <div class="form-item">
            <input type="text" placeholder="Email:" name="email" required>
            <label></label>
          </div>
          <div class="form-item">
            <input type="text" name="phone" placeholder="Phone:" required>
            <label></label>
          </div>
          <div class="form-item">
            <textarea class="" name="message" placeholder="Message:" required></textarea>
            <label></label>
          </div>
          <div class="captcha">
            {!! NoCaptcha::renderJs() !!}
            {!! NoCaptcha::display() !!}
          </div>
          <button type="submit" class="contact-submit-btn">Submit</button>
        </form>
      </div>
    </div>
  </section> --}}

@endsection