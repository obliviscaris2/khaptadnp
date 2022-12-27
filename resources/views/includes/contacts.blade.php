


    {{-- For Form Section --}}
    <section class="contact_form wid_mar">
      <div class="container">
           <h2 class="gallery-title home-contact-title">{{ __('Contact') }}</h1>
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