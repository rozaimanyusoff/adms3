@extends('layout.default')

@section('title', 'Chart.js')

@push('scripts')
		<script src="/assets/plugins/highlight.js/highlight.min.js"></script>
		<script src="/assets/js/demo/highlightjs.demo.js"></script>
		<script src="/assets/plugins/chart.js/dist/chart.min.js"></script>
		<script src="/assets/js/demo/chart-js.demo.js"></script>
		<script src="/assets/js/demo/sidebar-scrollspy.demo.js"></script>
@endpush

@section('content')
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN row -->
				<div class="row justify-content-center">
					<!-- BEGIN col-10 -->
					<div class="col-xl-10">
						<!-- BEGIN row -->
						<div class="row">
							<!-- BEGIN col-9 -->
							<div class="col-xl-9">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">CHARTS</a></li>
									<li class="breadcrumb-item active">CHART.JS</li>
								</ul>

								<h1 class="page-header">
									Chart.js <small>page header description goes here...</small>
								</h1>

								<hr class="mb-4" />

								<!-- BEGIN #chartJs -->
								<div id="chartJs">
									<h4>Basic Example</h4>
									<p>Chart.js is a simple yet flexible JavaScript charting for designers & developers. Please read the <a href="https://www.chartjs.org/" target="_blank">official documentation</a> for the full list of options.</p>
								</div>
								<!-- END #chartJs -->

								<!-- BEGIN #chartJsLineChart -->
								<div id="chartJsLineChart" class="mb-5">
									<div class="card">
										<div class="card-body">
											<h6>LINE CHART</h6>
											<canvas id="lineChart"></canvas>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code>&lt;!-- required js --&gt;
&lt;script src="/assets/plugins/chart.js/dist/chart.min.js"/&gt;&lt;/script&gt;

&lt;!-- html --&gt;
&lt;canvas id="lineChart"&gt;&lt;/canvas&gt;

&lt;!-- script --&gt;
&lt;script&gt;
  var ctx = document.getElementById('lineChart');
  var lineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        color: app.color.blue,
        backgroundColor: 'rgba('+ app.color.blueRgb +', .2)',
        borderColor: app.color.blue,
        borderWidth: 1.5,
        pointBackgroundColor: app.color.componentBg,
        pointBorderWidth: 1.5,
        pointRadius: 4,
        pointHoverBackgroundColor: app.color.blue,
        pointHoverBorderColor: app.color.componentBg,
        pointHoverRadius: 7,
        label: 'Total Sales',
        data: [12, 19, 4, 5, 2, 3]
      }]
    }
  });
&lt;/script&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #chartJsLineChart -->

								<!-- BEGIN #chartJsBarChart -->
								<div id="chartJsBarChart" class="mb-5">
									<div class="card">
										<div class="card-body">
											<h6>BAR CHART</h6>
											<canvas id="barChart"></canvas>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code>&lt;!-- required js --&gt;
&lt;script src="/assets/plugins/chart.js/dist/chart.min.js"/&gt;&lt;/script&gt;

&lt;!-- html --&gt;
&lt;canvas id="barChart"&gt;&lt;/canvas&gt;

&lt;!-- script --&gt;
&lt;script&gt;
  var ctx2 = document.getElementById('barChart');
  var barChart = new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: ['Jan','Feb','Mar','Apr','May','Jun'],
      datasets: [{
        label: 'Total Visitors',
        data: [37,31,36,34,43,31],
        backgroundColor: 'rgba('+ app.color.blue +', .2)',
        borderColor: app.color.blue,
        borderWidth: 1.5
      },{
        label: 'New Visitors',
        data: [12,16,20,14,23,21],
        backgroundColor: 'rgba('+ app.color.gray500Rgb +', .2)',
        borderColor: app.color.gray500,
        borderWidth: 1.5
      }]
    }
  });
&lt;/script&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #chartJsBarChart -->

								<!-- BEGIN #chartJsRadarChart -->
								<div id="chartJsRadarChart" class="mb-5">
									<div class="card">
										<div class="card-body">
											<h6>RADAR CHART</h6>
											<canvas id="radarChart"></canvas>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code>&lt;!-- required js --&gt;
&lt;script src="/assets/plugins/chart.js/dist/chart.min.js"/&gt;&lt;/script&gt;

&lt;!-- html --&gt;
&lt;canvas id="radarChart"&gt;&lt;/canvas&gt;

&lt;!-- script --&gt;
&lt;script&gt;
  var ctx3 = document.getElementById('radarChart');
  var radarChart = new Chart(ctx3, {
    type: 'radar',
    data: {
      labels: ['United States', 'Canada', 'Australia', 'Netherlands', 'Germany', 'New Zealand', 'Singapore'],
      datasets: [
        {
          label: 'Mobile',
          backgroundColor: 'rgba('+ app.color.blueRgb +', .2)',
          borderColor: app.color.blue,
          pointBackgroundColor: app.color.componentBg,
          pointBorderColor: app.color.blue,
          pointHoverBackgroundColor: app.color.blue,
          pointHoverBorderColor: app.color.componentBg,
          data: [65, 59, 90, 81, 56, 55, 40],
          borderWidth: 1.5
        },
        {
          label: 'Desktop',
          backgroundColor: 'rgba('+ app.color.gray500Rgb +', .2)',
          borderColor: app.color.gray500,
          pointBackgroundColor: app.color.componentBg,
          pointBorderColor: app.color.gray500,
          pointHoverBackgroundColor: app.color.gray500,
          pointHoverBorderColor: app.color.componentBg,
          data: [28, 48, 40, 19, 96, 27, 100],
          borderWidth: 1.5
        }
      ]
    }
  });
&lt;/script&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #chartJsRadarChart -->

								<!-- BEGIN #chartJsPolarAreaChart -->
								<div id="chartJsPolarAreaChart" class="mb-5">
									<div class="card">
										<div class="card-body">
											<h6>POLAR AREA CHART</h6>
											<div class="h-300px w-300px mx-auto">
												<canvas id="polarAreaChart"></canvas>
											</div>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code>&lt;!-- required js --&gt;
&lt;script src="/assets/plugins/chart.js/dist/chart.min.js"/&gt;&lt;/script&gt;

&lt;!-- html --&gt;
&lt;canvas id="polarAreaChart"&gt;&lt;/canvas&gt;

&lt;!-- script --&gt;
&lt;script&gt;
  var ctx4 = document.getElementById('polarAreaChart');
  var polarAreaChart = new Chart(ctx4, {
    type: 'polarArea',
    data: {
      datasets: [{
        data: [11, 16, 7, 3, 14],
        backgroundColor: ['rgba('+ app.color.blueRgb +', .85)', 'rgba('+ app.color.indigoRgb +', .85)', 'rgba('+ app.color.cyanRgb +', .85)', 'rgba('+ app.color.gray500Rgb +', .85)', 'rgba('+ app.color.gray800Rgb +', .85)'],
        borderWidth: 1.5
      }],
      labels: ['IE', 'Safari', 'Chrome', 'Firefox', 'Opera']
    }
  });
&lt;/script&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #chartJsPolarAreaChart -->

								<!-- BEGIN #chartJsPieChart -->
								<div id="chartJsPieChart" class="mb-5">
									<div class="card">
										<div class="card-body">
											<h6>PIE CHART</h6>
											<div class="h-300px w-300px mx-auto">
												<canvas id="pieChart"></canvas>
											</div>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code>&lt;!-- required js --&gt;
&lt;script src="/assets/plugins/chart.js/dist/chart.min.js"/&gt;&lt;/script&gt;

&lt;!-- html --&gt;
&lt;canvas id="pieChart"&gt;&lt;/canvas&gt;

&lt;!-- script --&gt;
&lt;script&gt;
  var ctx5 = document.getElementById('pieChart');
  var pieChart = new Chart(ctx5, {
    type: 'pie',
    data: {
      labels: ['Total Visitor', 'New Visitor', 'Returning Visitor'],
      datasets: [{
        data: [300, 50, 100],
        backgroundColor: [app.color.blue, app.color.indigo, app.color.gray900],
        hoverBackgroundColor: [app.color.blue, app.color.indigo, app.color.gray900],
        borderWidth: 0
      }]
    }
  });
&lt;/script&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #chartJsPieChart -->

								<!-- BEGIN #chartJsDoughnutChart -->
								<div id="chartJsDoughnutChart" class="mb-5">
									<div class="card">
										<div class="card-body">
											<h6>DOUGHNUT CHART</h6>
											<div class="h-300px w-300px mx-auto">
												<canvas id="doughnutChart"></canvas>
											</div>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code>&lt;!-- required js --&gt;
&lt;script src="/assets/plugins/chart.js/dist/chart.min.js"/&gt;&lt;/script&gt;

&lt;!-- html --&gt;
&lt;canvas id="doughnutChart"&gt;&lt;/canvas&gt;

&lt;!-- script --&gt;
&lt;script&gt;
  var ctx6 = document.getElementById('doughnutChart');
  var doughnutChart = new Chart(ctx6, {
    type: 'doughnut',
    data: {
      labels: ['Total Visitor', 'New Visitor', 'Returning Visitor'],
      datasets: [{
        data: [300, 50, 100],
        backgroundColor: [app.color.blue, app.color.indigo, app.color.gray900],
        hoverBackgroundColor: [app.color.blue, app.color.indigo, app.color.gray900],
        borderWidth: 0
      }]
    }
  });
&lt;/script&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #chartJsDoughnutChart -->
							</div>
							<!-- END col-9-->
							<!-- BEGIN col-3 -->
							<div class="col-xl-3">
								<!-- BEGIN #sidebar-bootstrap -->
								<nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
									<nav class="nav">
										<a class="nav-link" href="#chartJs" data-toggle="scroll-to">Chart.js</a>
										<a class="nav-link" href="#chartJsLineChart" data-toggle="scroll-to"> - line chart</a>
										<a class="nav-link" href="#chartJsBarChart" data-toggle="scroll-to"> - bar chart</a>
										<a class="nav-link" href="#chartJsRadarChart" data-toggle="scroll-to"> - radar chart</a>
										<a class="nav-link" href="#chartJsPolarAreaChart" data-toggle="scroll-to"> - polar area chart</a>
										<a class="nav-link" href="#chartJsPieChart" data-toggle="scroll-to"> - pie chart</a>
										<a class="nav-link" href="#chartJsDoughnutChart" data-toggle="scroll-to"> - doughnut chart</a>
									</nav>
								</nav>
								<!-- END #sidebar-bootstrap -->
							</div>
							<!-- END col-3 -->
						</div>
						<!-- END row -->
					</div>
					<!-- END col-10 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #content -->
@endsection
