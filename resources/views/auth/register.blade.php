@extends('layouts.app')

@section('content')
<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Registration</h2>
                        <p>Welcome, You are few minutes away from being a Super Writer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" placeholder="First Name"required autofocus>

                            @if ($errors->has('fname'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('fname') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                        <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" placeholder="Last Name" required autofocus>

                        @if ($errors->has('lname'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('lname') }}</strong>
                            </span>
                        @endif>
                                                </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                        <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}"  minlength="8" maxlength="8" placeholder="Phone Number" required autofocus>

                            @if ($errors->has('phone'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus/>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif>
                                                </div>
                      </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif                        </div>
                        <div class="form-group col-md-6">
                                  
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                        <input type="number" id="national" minlength="8" maxlength="8" name="national" class="form-control{{ $errors->has('national') ? ' is-invalid' : '' }}" placeholder="Your National Id *"  value="{{ old('national') }}" placeholder="National Id Number" required/>
                                                     @if ($errors->has('national'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('national') }}</strong>
                                                        </span>
                                                    @endif
                                                                     </div>
                        <div class="form-group col-md-6">
                                  
                        <input type="text" id="city" name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" placeholder="Your Current Town*"  value="{{ old('city') }}" required/>
                                                     @if ($errors->has('city'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('city') }}</strong>
                                                        </span>
                                                    @endif
                        </div>
                        <div class="form-group col-md-6">
                                  
                                  <select id="payment" class="form-control" name="payment" required>
                                    <option selected>Select Means of Payment*</option>
                                    <option> M-pesa</option>
                                    <option>Paypal</option>
                                    
                                  </select>
                        </div>
                        <div class="form-group col-md-6">
                                  
                                  <select id="availability" class="form-control" name="availability" required>
                                    <option selected>Are You Available 24/7?</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                    
                                  </select>
                        </div>
                        <div class="form-group col-md-6">
                                  <textarea id="about_me" name="about_me" cols="40" rows="5" class="form-control" placeholder="About me*" required></textarea>
                        </div>
                        <div class="form-group col-md-6">
                                  <textarea id="areas" name="areas" cols="40" rows="5" class="form-control" placeholder="Write 3-6 Fields you are good in*" required></textarea>
                        </div>
                        <div class="form-group col-md-6">
                                  <textarea id="citation" name="citation" cols="40" rows="5" class="form-control" placeholder="Write Citation styles you are good in*" required></textarea>
                        </div>
                        <div class="form-group col-md-6">
                        <select id="gender" class="form-control" name="gender" required>
                                    <option selected>Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    
                                  </select>
                        </div>

                        </div>
                    <div class="form-row">
                        <div class="form-group">
                        <div class="form-group">
                                             <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="" name="check" required="">
                                    By checking the box on the left hand side of this statement, 
                                    I certify the information I have provided here to be true and 
                                    correct to the best of my knowledge, and that this information 
                                    shall be used for purposes of membership in Super Writers.
                                </label>
                            </div>
                            </div>
                    
                          </div>
                    </div>
                    
                    <div class="form-row pull-right">
                        
                        <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                    </div>
         
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
