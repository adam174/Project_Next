@extends('admin.index') 
@section('title', 'Create reservation')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>Il y a quelques problèmes avec votre saisie.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($payment == "cc")
          <form 
    role="form" 
    action="{{ route('bookings.store') }}" 
    method="post" 
    class="require-validation"
    data-cc-on-file="false"
    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
    id="payment-form"
    name="paymentform">
@csrf
      <div class="form-group row">
       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('auth.name') }}</label>

       <div class="col-md-6">
           <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

          
       </div>
   </div>
   
   <div class="form-group row">
       <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('auth.mobile') }}</label>

       <div class="col-md-6">
           <input id="mobile" type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

       </div>
   </div>
   <div class="form-group row">
       <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('auth.country') }}</label>
       <div class="col-md-6">
        <select id="country" class=" browser-default custom-select" name="country">
            @foreach ($countries as $country)
                <option  value="{{$country->id}}">{{$country->name}}</option>  
            @endforeach
  

        </select>
       </div>
   </div>

   <div class="form-group row">
       <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('auth.email') }}</label>

       <div class="col-md-6">
           <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">

           
       </div>
   </div>
            <div class="text-center">
                <img src="/img/payment-method-v1.png" class="img-fluid" alt="">
            </div>
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
                                class="form-control card-expiry-year" placeholder='YYYY' size='5'
                                type='text'>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-success btn-lg" type="submit">{{ __('auth.checkout') }}</button>
                        </div>
                    </div>
                      
                </form>
@else
    <form 
    role="form" 
    action="{{ route('bookings.store') }}" 
    method="post"
    >
      @csrf

    <input type="hidden" name="length" value="10">

<div id="accordion2">
  <div class="card">
    <div class="card-header d-flex justify-content-center" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link text-info" data-toggle="collapse" data-target="#createnewuser" aria-expanded="false" aria-controls="createnewuser">
        {{ __('bookingCreate.NewClient') }}
        </button>
      </h5>
    </div>

    <div id="createnewuser" class="collapse" aria-labelledby="headingOne" data-parent="#accordion2">
              <div class="form-group row">
       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('auth.name') }}</label>

       <div class="col-md-6">
           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

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
           <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" autocomplete="mobile" autofocus>

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
        <select id="country" class=" browser-default custom-select @error('country') is-invalid @enderror" name="country">
           <option value="" selected disabled>----</option>
            @foreach ($countries as $country)
                
                <option value="{{$country->id}}">{{$country->name}}</option>  
            @endforeach
  

        </select>
           @error('country')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div>
   </div>
    </div>
  </div>
</div>
   <div class="form-group row">
       <label for="email" class="col-md-4 col-form-label text-md-right"><span class="text-danger">*{{ __('validation.isrequired') }} </span>{{ __('auth.email') }}</label>

       <div class="col-md-6">
           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

           @error('email')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div>
   </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-success btn-lg" type="submit">{{ __('auth.checkout') }}</button>
                        </div>
                    </div>
     </form>
@endif

@endsection