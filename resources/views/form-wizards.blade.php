@extends('layout.default')

@section('title', 'Form Wizards')

@push('scripts')
    <script src="/assets/plugins/highlight.js/highlight.min.js"></script>
    <script src="/assets/js/demo/highlightjs.demo.js"></script>
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
									<li class="breadcrumb-item"><a href="#">FORMS</a></li>
									<li class="breadcrumb-item active">FORM WIZARDS</li>
								</ul>
								
								<h1 class="page-header">
									Form Wizards <small>page header description goes here...</small>
								</h1>
								
								<hr class="mb-4" />
								
								<!-- BEGIN #wizardLayout1 -->
								<div id="wizardLayout1" class="mb-5">
									<h4>Wizard layout 1</h4>
									<p>Wizard layout include the number of step and text. Please do note that all the wizard is for uxui ONLY but do not include any javascript or backend logic.</p>
									<div class="card">
										<div class="card-body">
											<div class="nav-wizards-container">
												<nav class="nav nav-wizards-1 mb-2">
													<div class="nav-item col">
														<a class="nav-link completed" href="#">
															<div class="nav-no">1</div>
															<div class="nav-text">Completed step</div>
														</a>
													</div>
													<div class="nav-item col">
														<a class="nav-link completed" href="#">
															<div class="nav-no">2</div>
															<div class="nav-text">Second step</div>
														</a>
													</div>
													<div class="nav-item col">
														<a class="nav-link active" href="#">
															<div class="nav-no">3</div>
															<div class="nav-text">Active step</div>
														</a>
													</div>
													<div class="nav-item col">
														<a class="nav-link disabled" href="#">
															<div class="nav-no">4</div>
															<div class="nav-text">Disabled step</div>
														</a>
													</div>
													<div class="nav-item col">
														<a class="nav-link disabled" href="#">
															<div class="nav-no">5</div>
															<div class="nav-text">Last step</div>
														</a>
													</div>
												</nav>
											</div>
											<div class="card">
												<div class="card-body">
													wizard content here
												</div>
											</div>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code class="xml">&lt;div class="nav-wizards-container"&gt;
  &lt;nav class="nav nav-wizards-1 mb-2"&gt;
    &lt;!-- completed --&gt;
    &lt;div class="nav-item col"&gt;
      &lt;a class="nav-link completed" href="#"&gt;
        &lt;div class="nav-no"&gt;1&lt;/div&gt;
        &lt;div class="nav-text"&gt;Completed step&lt;/div&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  
    &lt;!-- active --&gt;
    &lt;div class="nav-item col"&gt;
      &lt;a class="nav-link active" href="#"&gt;
        &lt;div class="nav-no"&gt;3&lt;/div&gt;
        &lt;div class="nav-text"&gt;Active step&lt;/div&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  
    &lt;!-- disabled --&gt;
    &lt;div class="nav-item col"&gt;
      &lt;a class="nav-link disabled" href="#"&gt;
        &lt;div class="nav-no"&gt;5&lt;/div&gt;
        &lt;div class="nav-text"&gt;Last step&lt;/div&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/nav&gt;
&lt;/div&gt;

&lt;div class="card"&gt;
  &lt;div class="card-body"&gt;
    wizard content here
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #wizardLayout1 -->
								
								<!-- BEGIN #wizardLayout2 -->
								<div id="wizardLayout2" class="mb-5">
									<h4>Wizard layout 2</h4>
									<p>Wizard layout include the number of step and text. Please do note that all the wizard is for uxui ONLY but do not include any javascript or backend logic.</p>
									<div class="card">
										<div class="card-body">
											<div class="nav-wizards-container">
												<nav class="nav nav-wizards-2 mb-3">
													<div class="nav-item col">
														<a class="nav-link completed" href="#">
															<div class="nav-text">1. Completed step</div>
														</a>
													</div>
													<div class="nav-item col">
														<a class="nav-link active" href="#">
															<div class="nav-text">2. Active step text</div>
														</a>
													</div>
													<div class="nav-item col">
														<a class="nav-link disabled" href="#">
															<div class="nav-text">3. Disabled step text</div>
														</a>
													</div>
												</nav>
											</div>
											<div class="card">
												<div class="card-body">
													wizard content here
												</div>
											</div>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code class="xml">&lt;div class="nav-wizards-container"&gt;
  &lt;nav class="nav nav-wizards-2 mb-3"&gt;
    &lt;!-- completed --&gt;
    &lt;div class="nav-item col"&gt;
      &lt;a class="nav-link completed" href="#"&gt;
        &lt;div class="nav-text"&gt;1. Completed step text&lt;/div&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  
    &lt;!-- active --&gt;
    &lt;div class="nav-item col"&gt;
      &lt;a class="nav-link active" href="#"&gt;
        &lt;div class="nav-text"&gt;2. Active step text&lt;/div&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  
    &lt;!-- disabled --&gt;
    &lt;div class="nav-item col"&gt;
      &lt;a class="nav-link disabled" href="#"&gt;
        &lt;div class="nav-text"&gt;3. Disabled step text&lt;/div&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/nav&gt;
&lt;/div&gt;

&lt;div class="card"&gt;
  &lt;div class="card-body"&gt;
    wizard content here
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #wizardLayout2 -->
								
								<!-- BEGIN #wizardLayout3 -->
								<div id="wizardLayout3" class="mb-5">
									<h4>Wizard layout 3</h4>
									<p>Wizard layout include the number of step and text. Please do note that all the wizard is for uxui ONLY but do not include any javascript or backend logic.</p>
									<div class="card">
										<div class="card-body">
											<div class="nav-wizards-container">
												<nav class="nav nav-wizards-3 mb-2">
													<div class="nav-item col">
														<a class="nav-link completed" href="#">
															<div class="nav-dot"></div>
															<div class="nav-title">Step 1</div>
															<div class="nav-text">Completed step</div>
														</a>
													</div>
													<div class="nav-item col">
														<a class="nav-link completed" href="#">
															<div class="nav-dot"></div>
															<div class="nav-title">Step 2</div>
															<div class="nav-text">Second step</div>
														</a>
													</div>
													<div class="nav-item col">
														<a class="nav-link active" href="#">
															<div class="nav-dot"></div>
															<div class="nav-title">Step 3</div>
															<div class="nav-text">Active step</div>
														</a>
													</div>
													<div class="nav-item col">
														<a class="nav-link disabled" href="#">
															<div class="nav-dot"></div>
															<div class="nav-title">Step 4</div>
															<div class="nav-text">Disabled step</div>
														</a>
													</div>
													<div class="nav-item col">
														<a class="nav-link disabled" href="#">
															<div class="nav-dot"></div>
															<div class="nav-title">Step 5</div>
															<div class="nav-text">Last step</div>
														</a>
													</div>
												</nav>
											</div>
											<div class="card">
												<div class="card-body">
													wizard content here
												</div>
											</div>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code class="xml">&lt;div class="nav-wizards-container"&gt;
  &lt;nav class="nav nav-wizards-3 mb-2"&gt;
    &lt;!-- completed --&gt;
    &lt;div class="nav-item col"&gt;
      &lt;a class="nav-link completed" href="#"&gt;
        &lt;div class="nav-dot"&gt;&lt;/div&gt;
        &lt;div class="nav-no"&gt;Step 1&lt;/div&gt;
        &lt;div class="nav-text"&gt;Completed step&lt;/div&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  
    &lt;!-- active --&gt;
    &lt;div class="nav-item col"&gt;
      &lt;a class="nav-link active" href="#"&gt;
        &lt;div class="nav-dot"&gt;&lt;/div&gt;
        &lt;div class="nav-no"&gt;Step 3&lt;/div&gt;
        &lt;div class="nav-text"&gt;Active step&lt;/div&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  
    &lt;!-- disabled --&gt;
    &lt;div class="nav-item col"&gt;
      &lt;a class="nav-link disabled" href="#"&gt;
        &lt;div class="nav-dot"&gt;&lt;/div&gt;
        &lt;div class="nav-no"&gt;Step 5&lt;/div&gt;
        &lt;div class="nav-text"&gt;Last step&lt;/div&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/nav&gt;
&lt;/div&gt;

&lt;div class="card"&gt;
  &lt;div class="card-body"&gt;
    wizard content here
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #wizardLayout3 -->
							</div>
							<!-- END col-9-->
							<!-- BEGIN col-3 -->
							<div class="col-xl-3">
								<!-- BEGIN #sidebar-bootstrap -->
								<nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
									<nav class="nav">
										<a class="nav-link" href="#wizardLayout1" data-toggle="scroll-to">Wizard layout 1</a>
										<a class="nav-link" href="#wizardLayout2" data-toggle="scroll-to">Wizard layout 2</a>
										<a class="nav-link" href="#wizardLayout3" data-toggle="scroll-to">Wizard layout 3</a>
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
