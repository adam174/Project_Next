@extends('admin.index')
@section('title', 'Reserver')

@section('content')
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>{{ __('auth.reservation') }}</h1>
                    </div>
                    <form action="{{ route('reservations.add') }}" class="book-now-form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">{{ __('bookingCreate.Checkin') }}</span>
                                    <input type="text"  id="start-date"  name="arrival" required>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">{{ __('bookingCreate.Checkout') }}</span>
                                    <input type="text"  id="end-date"  name="departure" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="form-label">{{ __('bookingCreate.Payment') }}</span>
                                    <select class="form-control" name="payment">
                                        <option value="cc" selected>{{ __('bookingCreate.Card') }}</option>
                                        <option value="cash">{{ __('bookingCreate.Cash') }}</option>
                                        <option value="check">{{ __('bookingCreate.Check') }}</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="form-label">{{ __('bookingCreate.Children') }}</span>
                                    <select class="form-control" name="num_of_children">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-btn">
                                    <button class="submit-btn">{{ __('bookingCreate.Checkavailability') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection