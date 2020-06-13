

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
@if(Auth::user()->id == 1)
   
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Payer par Carte bancaire
        </button>
      </h2>
    </div>
<script>

   function randomPassword(length) {
    var chars =
        "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
    var pass = "";
    for (var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        pass += chars.charAt(i);
    }
    return pass;
}

function generate() {
    paymentform.password.value = randomPassword(paymentform.length.value);
}
</script>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
       <form 
    role="form" 
    action="{{ route('reservations.save') }}" 
    method="post" 
    class="require-validation"
    data-cc-on-file="false"
    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
    id="payment-form"
    name="paymentform">
@csrf
       <input type="hidden" name="length" value="10">
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

   {{-- <div class="form-group row">
       <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('auth.password') }}</label>

       <div class="col-md-6">
           <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            &nbsp;
                <input type="button" class="button" value="Generate" onClick="generate();" tabindex="2">
           @error('password')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div>
   </div> --}}

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

    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Paiement en espèces
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
     <form 
    role="form" 
    action="{{ route('reservations.save') }}" 
    method="post"
    >
      @csrf

    <input type="hidden" name="length" value="10">
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

   {{-- <div class="form-group row">
       <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('auth.password') }}</label>

       <div class="col-md-6">
           <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            &nbsp;
                <input type="button" class="button" value="Generate" onClick="generate();" tabindex="2">
           @error('password')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div>
   </div> --}}
      <div class="row">
               <div class="col-md-12">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('auth.checkout') }}</button>
               </div>
       </div>
     </form>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>


@endif


@endsection