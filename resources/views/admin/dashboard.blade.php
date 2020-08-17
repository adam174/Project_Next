@extends('admin.index')
@section('title', 'Dashboard')

@section('content')
<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ __('dashboard.Dashboard') }}</h4>
                <p class="card-text">{{ __('dashboard.Bookings') }}</p>
                <a href="/admin/bookings" class="btn btn-darken-cyan">{{ __('dashboard.Reservations') }}</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ __('dashboard.Book') }}</h4>
                <p class="card-text">{{ __('dashboard.Rooms') }}</p>
                <a href="/reserver" class="btn btn-lighten-cyan">{{ __('dashboard.Checkout') }}</a>
            </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
       <div id="regions_div" style="width: 900px; height: 500px;"></div>
   </div>
</div>
@endsection
@section('jsfiles')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script>
        google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
         @php
             foreach($countrycount as $country) {
                    echo "['$country->iso', $country->users_count],";
                }
         @endphp
         ['NG', 2]
        ]);

        var options = {
         // region: ['150','001'], // Africa
          colorAxis: {colors: ['#90ed7d', 'black', '#000080']},
          backgroundColor: '#fff',
          datalessRegionColor: '#ADD8E6',
          defaultColor: '#f5f5f5',
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
   </script>
@endsection