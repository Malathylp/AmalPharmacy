@extends('frontend.main_master')
@section('main')

<div class="content">   
<?php echo $errors->first('emailid'); ?>
<div id="getin_touch" class="row getin-touch">
                <div class="col-lg-6 col-xs-12">
                    <p class="contact-text">GET IN TOUCH</p>
                    <p class="info-class">info@pharmaethic.com</p>
                    <p class="info-class">(+44) 020 3727 3111</p>

                </div>
                <div class="col-lg-6 col-xs-12">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                    @endif

                  <form method="POST" action="{{ route('contact.store') }}" >
                        @csrf
                    
                        <label>Name<sup>*</sup></label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" >
                          @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name')}} </span>
                          @endif 
                          </br></br>
                        <label>Email<sup>*</sup></label>
                        <input type="text" name="email" id="email" placeholder="Enter your email">
                           @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email')}} </span>
                          @endif 
                          </br></br>
                        <label>Phone<sup>*</sup></label>
                        <input type="text" name="phone" id="phone" placeholder="Enter your phone number">
                         @if($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone')}} </span>
                          @endif 
                         </br></br>

                        <label>Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="Type the Subject">
                        <label>Message</label>
                        <textarea id="message" name="message" placeholder="Type your message here"></textarea>
                        <button type="submit" class="submit-btn">Submit</button>
                    </form>
                </div>

            </div>


</div>


@endsection

