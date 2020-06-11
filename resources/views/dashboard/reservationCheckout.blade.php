

@extends('layouts.book')
@section('title', 'Create reservation')

@section('content')

<div>
   {{$arrival}} - {{$departure}} -{{$room_id}} 
</div>
@if (Session::has('success'))
<div class="alert alert-success text-xs-center">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <p>{{ Session::get('success') }}</p>
</div>
@endif

<form 
    role="form" 
    action="{{ route('reservations.save') }}" 
    method="post" 
    class="require-validation"
    data-cc-on-file="false"
    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
    id="payment-form">
@csrf

   @guest
   <div class="form-group row">
       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('auth.name') }}</label>

       <div class="col-md-6">
           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

           @error('name')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div>
   </div>
   
   <div class="form-group row">
       <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('auth.mobile') }}</label>

       <div class="col-md-6">
           <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

           @error('mobile')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div>
   </div>
   <div class="form-group row">
       <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('auth.country') }}</label>

       <div class="col-md-6">
           <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>

           @error('country')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div>
   </div>

   <div class="form-group row">
       <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('auth.email') }}</label>

       <div class="col-md-6">
           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

           @error('email')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div>
   </div>

   <div class="form-group row">
       <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('auth.password') }}</label>

       <div class="col-md-6">
           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

           @error('password')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div>
   </div>
   @endguest
   
             

            <div class="card-block">



                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('auth.cc_holder') }}</label> 
                        <div class="col-md-6 form-group required">
                            
                            <input class="form-control"  type='text'>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('auth.cc') }}</label>
                        <div class="col-md-6 form-group card required">
                             <input
                                autocomplete='off' class="form-control card-number" size='20'
                                type='text'>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right">{{ __('auth.cvc') }}</label>
                        <div class="col-md-2 form-group cvc required">
                             <input autocomplete='off'
                                class="form-control card-cvc" placeholder='ex. 311' size='4'
                                type='text'>
                        </div>
                        <label class="col-md-2 col-form-label text-md-right">{{ __('auth.exp_month') }}</label>
                        <div class="col-md-2 form-group expiration required">
                             <input
                                class="form-control card-expiry-month" placeholder='MM' size='2'
                                type='text'>
                        </div>
                        <label class="col-md-2 col-form-label text-md-right">{{ __('auth.exp_year') }}</label>
                        <div class="col-md-2 form-group expiration required">
                             <input
                                class="form-control card-expiry-year" placeholder='YYYY' size='4'
                                type='text'>
                        </div>
                    </div>

                    <div class="form-row row">
                        <div class="col-md-12 error form-group ">
                            <div class="alert-danger alert"></div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('auth.checkout') }}</button>
                        </div>
                    </div>
                      
                </form>


   @endsection