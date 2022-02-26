@extends('layout.default')

@section('title', 'Typography')

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
									<li class="breadcrumb-item"><a href="#">UI KITS</a></li>
									<li class="breadcrumb-item active">TYPOGRAPHY</li>
								</ul>

								<h1 class="page-header">
									Typography <small>page header description goes here...</small>
								</h1>

								<hr class="mb-4" />

								<!-- BEGIN #headings -->
								<div id="headings" class="mb-5">
									<h4>Headings</h4>
									<p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but cannot use the associated HTML element. Please read the <a href="https://getbootstrap.com/docs/5.0/content/typography/" target="_blank">official Bootstrap documentation</a> for the full list of options.</p>
									<div class="card">
										<div class="card-body">
											<h1>h1. Bootstrap heading</h1>
											<h2>h2. Bootstrap heading</h2>
											<h3>h3. Bootstrap heading</h3>
											<h4>h4. Bootstrap heading</h4>
											<h5>h5. Bootstrap heading</h5>
											<h6>h6. Bootstrap heading</h6>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code class="xml">&lt;!-- heading tag --&gt;
&lt;h1&gt;h1. Bootstrap heading&lt;/h1&gt;
&lt;h2&gt;h2. Bootstrap heading&lt;/h2&gt;
&lt;h3&gt;h3. Bootstrap heading&lt;/h3&gt;
&lt;h4&gt;h4. Bootstrap heading&lt;/h4&gt;
&lt;h5&gt;h5. Bootstrap heading&lt;/h5&gt;
&lt;h6&gt;h6. Bootstrap heading&lt;/h6&gt;

&lt;!-- heading class --&gt;
&lt;p class="h1"&gt;h1. Bootstrap heading&lt;/p&gt;
&lt;p class="h2"&gt;h2. Bootstrap heading&lt;/p&gt;
&lt;p class="h3"&gt;h3. Bootstrap heading&lt;/p&gt;
&lt;p class="h4"&gt;h4. Bootstrap heading&lt;/p&gt;
&lt;p class="h5"&gt;h5. Bootstrap heading&lt;/p&gt;
&lt;p class="h6"&gt;h6. Bootstrap heading&lt;/p&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #headings -->

								<!-- BEGIN #displayHeadings -->
								<div id="displayHeadings" class="mb-5">
									<h4>Display headings</h4>
									<p>Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a display heading—a larger, slightly more opinionated heading style.</p>
									<div class="card">
										<div class="card-body">
											<h1 class="display-1">Display 1</h1>
											<h1 class="display-2">Display 2</h1>
											<h1 class="display-3">Display 3</h1>
											<h1 class="display-4">Display 4</h1>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code class="xml">&lt;h1 class="display-1"&gt;Display 1&lt;/h1&gt;
&lt;h1 class="display-2"&gt;Display 2&lt;/h1&gt;
&lt;h1 class="display-3"&gt;Display 3&lt;/h1&gt;
&lt;h1 class="display-4"&gt;Display 4&lt;/h1&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #displayHeadings -->

								<!-- BEGIN #lead -->
								<div id="lead" class="mb-5">
									<h4>Lead</h4>
									<p>Make a paragraph stand out by adding <code>.lead</code>.</p>
									<div class="card">
										<div class="card-body">
											<p class="lead">
												Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
											</p>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code class="xml">&lt;p class="lead"&gt;
  Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
&lt;/p&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #lead -->

								<!-- BEGIN #inlineTextElements -->
								<div id="inlineTextElements" class="mb-5">
									<h4>Headings</h4>
									<p>Styling for common inline HTML5 elements.</p>
									<div class="card">
										<div class="card-body">
											<p>You can use the mark tag to <mark>highlight</mark> text.</p>
											<p><del>This line of text is meant to be treated as deleted text.</del></p>
											<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
											<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
											<p><u>This line of text will render as underlined</u></p>
											<p><small>This line of text is meant to be treated as fine print.</small></p>
											<p><strong>This line rendered as bold text.</strong></p>
											<p><em>This line rendered as italicized text.</em></p>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code class="xml">&lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;
&lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;
&lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;
&lt;p&gt;&lt;u&gt;This line of text will render as underlined&lt;/u&gt;&lt;/p&gt;
&lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #inlineTextElements -->

								<!-- BEGIN #abbreviations -->
								<div id="abbreviations" class="mb-5">
									<h4>Abbreviations</h4>
									<p>Stylized implementation of HTML’s <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations have a default underline and gain a help cursor to provide additional context on hover and to users of assistive technologies. Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
									<div class="card">
										<div class="card-body">
											<p><abbr title="attribute">attr</abbr></p>
											<p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code class="xml">&lt;p&gt;&lt;abbr title="attribute"&gt;attr&lt;/abbr&gt;&lt;/p&gt;
&lt;p&gt;&lt;abbr title="HyperText Markup Language" class="initialism"&gt;HTML&lt;/abbr&gt;&lt;/p&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #abbreviations -->

								<!-- BEGIN #blockquotes -->
								<div id="blockquotes" class="mb-5">
									<h4>Blockquotes</h4>
									<p>For quoting blocks of content from another source within your document. Wrap <code>&lt;blockquote class="blockquote"&gt;</code> around any HTML as the quote.</p>
									<div class="card">
										<div class="card-body">
											<figure class="mb-0">
												<blockquote class="blockquote">
													<p>A well-known quote, contained in a blockquote element.</p>
												</blockquote>
												<figcaption class="blockquote-footer mb-0">
													Someone famous in <cite title="Source Title">Source Title</cite>
												</figcaption>
											</figure>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code class="xml">&lt;figure&gt;
  &lt;blockquote class="blockquote"&gt;
    &lt;p&gt;A well-known quote, contained in a blockquote element.&lt;/p&gt;
  &lt;/blockquote&gt;
  &lt;figcaption class="blockquote-footer"&gt;
    Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;
  &lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #blockquotes -->

								<!-- BEGIN #unstyledList -->
								<div id="unstyledList" class="mb-5">
									<h4>Unstyled list</h4>
									<p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). This only applies to immediate children list items, meaning you will need to add the class for any nested lists as well.</p>
									<div class="card">
										<div class="card-body">
											<ul class="list-unstyled">
												<li>Lorem ipsum dolor sit amet</li>
												<li>Consectetur adipiscing elit</li>
												<li>Nulla volutpat aliquam velit
													<ul>
														<li>Phasellus iaculis neque</li>
														<li>Purus sodales ultricies</li>
													</ul>
												</li>
												<li>Faucibus porta lacus fringilla vel</li>
												<li>Aenean sit amet erat nunc</li>
												<li>Eget porttitor lorem</li>
											</ul>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code class="xml">&lt;ul class="list-unstyled"&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
  &lt;li&gt;Nulla volutpat aliquam velit
    &lt;ul&gt;
      &lt;li&gt;Phasellus iaculis neque&lt;/li&gt;
      &lt;li&gt;Purus sodales ultricies&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Faucibus porta lacus fringilla vel&lt;/li&gt;
  &lt;li&gt;Aenean sit amet erat nunc&lt;/li&gt;
  &lt;li&gt;Eget porttitor lorem&lt;/li&gt;
&lt;/ul&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #unstyledList -->

								<!-- BEGIN #inlineList -->
								<div id="inlineList" class="mb-5">
									<h4>Inline list</h4>
									<p>Remove a list’s bullets and apply some light margin with a combination of two classes, <code>.list-inline</code> and <code>.list-inline-item</code>.</p>
									<div class="card">
										<div class="card-body">
											<ul class="list-inline">
												<li class="list-inline-item">Lorem ipsum</li>
												<li class="list-inline-item">Phasellus iaculis</li>
												<li class="list-inline-item">Nulla volutpat</li>
											</ul>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code class="xml">&lt;ul class="list-inline"&gt;
  &lt;li class="list-inline-item"&gt;Lorem ipsum&lt;/li&gt;
  &lt;li class="list-inline-item"&gt;Phasellus iaculis&lt;/li&gt;
  &lt;li class="list-inline-item"&gt;Nulla volutpat&lt;/li&gt;
&lt;/ul&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #inlineList -->

								<!-- BEGIN #descriptionList -->
								<div id="descriptionList" class="mb-5">
									<h4>Description list</h4>
									<p>Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic mixins). For longer terms, you can optionally add a .text-truncate class to truncate the text with an ellipsis.</p>
									<div class="card">
										<div class="card-body">
											<dl class="row">
												<dt class="col-sm-3">Description lists</dt>
												<dd class="col-sm-9">A description list is perfect for defining terms.</dd>
												<dt class="col-sm-3">Euismod</dt>
												<dd class="col-sm-9">
													<p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
													<p>Donec id elit non mi porta gravida at eget metus.</p>
												</dd>
												<dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
												<dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

												<dt class="col-sm-3">Nesting</dt>
												<dd class="col-sm-9">
													<dl class="row">
														<dt class="col-sm-4">Nested definition list</dt>
														<dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
													</dl>
												</dd>
											</dl>
										</div>
										<div class="hljs-container rounded-bottom"><pre><code class="xml">&lt;dl class="row"&gt;
  &lt;dt class="col-sm-3"&gt;Description lists&lt;/dt&gt;
  &lt;dd class="col-sm-9"&gt;A description list is perfect for defining terms.&lt;/dd&gt;
  &lt;dt class="col-sm-3"&gt;Euismod&lt;/dt&gt;
  &lt;dd class="col-sm-9"&gt;
    &lt;p&gt;Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.&lt;/p&gt;
    &lt;p&gt;Donec id elit non mi porta gravida at eget metus.&lt;/p&gt;
  &lt;/dd&gt;
  &lt;dt class="col-sm-3 text-truncate"&gt;Truncated term is truncated&lt;/dt&gt;
  &lt;dd class="col-sm-9"&gt;Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.&lt;/dd&gt;
  &lt;dt class="col-sm-3"&gt;Nesting&lt;/dt&gt;
  &lt;dd class="col-sm-9"&gt;
    &lt;dl class="row"&gt;
      &lt;dt class="col-sm-4"&gt;Nested definition list&lt;/dt&gt;
      &lt;dd class="col-sm-8"&gt;Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.&lt;/dd&gt;
    &lt;/dl&gt;
  &lt;/dd&gt;
&lt;/dl&gt;</code></pre>
										</div>
									</div>
								</div>
								<!-- END #descriptionList -->
							</div>
							<!-- END col-9-->
							<!-- BEGIN col-3 -->
							<div class="col-xl-3">
								<!-- BEGIN #sidebar-bootstrap -->
								<nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
									<nav class="nav">
										<a class="nav-link" href="#headings" data-toggle="scroll-to">Headings</a>
										<a class="nav-link" href="#displayHeadings" data-toggle="scroll-to">Display headings</a>
										<a class="nav-link" href="#lead" data-toggle="scroll-to">Lead</a>
										<a class="nav-link" href="#inlineTextElements" data-toggle="scroll-to">Inline text elements</a>
										<a class="nav-link" href="#abbreviations" data-toggle="scroll-to">Abbreviations</a>
										<a class="nav-link" href="#blockquotes" data-toggle="scroll-to">Blockquotes</a>
										<a class="nav-link" href="#unstyledList" data-toggle="scroll-to">Unstyled list</a>
										<a class="nav-link" href="#inlineList" data-toggle="scroll-to">Inline list</a>
										<a class="nav-link" href="#descriptionList" data-toggle="scroll-to">Description List</a>
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
