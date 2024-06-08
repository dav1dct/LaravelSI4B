@extends('layout.main')

@section('title','Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2>Dashboard</h2>
            {{-- HTML --}}
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                    A basic column chart comparing estimated corn and wheat production
                    in some countries.

                    The chart is making use of the axis crosshair feature, to highlight
                    the hovered country.
                </p>
            </figure>
{{-- CSS --}}
<style>
    .highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
</style>
{{-- JS --}}
<script>
Highcharts.chart('container', {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Corn vs wheat estimated production for 2020',
      align: 'left'
    },
    subtitle: {
      text: 'Source: <a target="_blank" ' +
        'href="https://www.indexmundi.com/agriculture/?commodity=corn">indexmundi</a>',
      align: 'left'
    },
    xAxis: {
      categories: ['USA', 'China', 'Brazil', 'EU', 'India', 'Russia'],
      crosshair: true,
      accessibility: {
        description: 'Countries'
      }
    },
    yAxis: {
      min: 0,
      title: {
        text: '1000 metric tons (MT)'
      }
    },
    tooltip: {
      valueSuffix: ' (1000 MT)'
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: [{
        name: 'Corn',
        data: [406292, 260000, 107000, 68300, 27500, 14500]
      },
      {
        name: 'Wheat',
        data: [51086, 136000, 5500, 141000, 107180, 77000]
      }
    ]
  });
  </script>
        </div>
    </div>
@endsection