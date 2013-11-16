<?php
echo $this->Html->css('reveal');

?>
	<div class="reveal">

	<!-- Any section element inside of this container is displayed as a slide -->
	<div class="slides">
	<section>
		<h1>Reveal.js</h1>

		<h3>HTML Presentations Made Easy</h3>

		<p>
			<small>Created by <a href="http://hakim.se">Hakim El Hattab</a> / <a href="http://twitter.com/hakimel">@hakimel</a>
			</small>
		</p>
	</section>

	<section>
		<h2>Heads Up</h2>

		<p>
			reveal.js is a framework for easily creating beautiful presentations using HTML. You'll need a browser with
			support for CSS 3D transforms to see it in its full glory.
		</p>

		<aside class="notes">
			Oh hey, these are some notes. They'll be hidden in your presentation, but you can see them if you open the
			speaker notes window (hit 's' on your keyboard).
		</aside>
	</section>

	<!-- Example of nested vertical slides -->
	<section>
		<section>
			<h2>Vertical Slides</h2>

			<p>
				Slides can be nested inside of other slides,
				try pressing <a href="#" class="navigate-down">down</a>.
			</p>
			<a href="#" class="image navigate-down">
				<img width="178" height="238" src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png"
				     alt="Down arrow">
			</a>
		</section>
		<section>
			<h2>Basement Level 1</h2>

			<p>Press down or up to navigate.</p>
		</section>
		<section>
			<h2>Basement Level 2</h2>

			<p>Cornify</p>
			<a class="test" href="http://cornify.com">
				<img width="280" height="326" src="https://s3.amazonaws.com/hakim-static/reveal-js/cornify.gif"
				     alt="Unicorn">
			</a>
		</section>
		<section>
			<h2>Basement Level 3</h2>

			<p>That's it, time to go back up.</p>
			<a href="#/2" class="image">
				<img width="178" height="238" src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png"
				     alt="Up arrow" style="-webkit-transform: rotate(180deg);">
			</a>
		</section>
	</section>

	<section>
		<h2>Slides</h2>

		<p>
			Not a coder? No problem. There's a fully-featured visual editor for authoring these, try it out at <a
				href="http://slid.es" target="_blank">http://slid.es</a>.
		</p>
	</section>

	<section>
		<h2>Point of View</h2>

		<p>
			Press <strong>ESC</strong> to enter the slide overview.
		</p>

		<p>
			Hold down alt and click on any element to zoom in on it using <a
				href="http://lab.hakim.se/zoom-js">zoom.js</a>. Alt + click anywhere to zoom back out.
		</p>
	</section>

	<section>
		<h2>Works in Mobile Safari</h2>

		<p>
			Try it out! You can swipe through the slides and pinch your way to the overview.
		</p>
	</section>

	<section>
		<h2>Marvelous Unordered List</h2>
		<ul>
			<li>No order here</li>
			<li>Or here</li>
			<li>Or here</li>
			<li>Or here</li>
		</ul>
	</section>

	<section>
		<h2>Fantastic Ordered List</h2>
		<ol>
			<li>One is smaller than...</li>
			<li>Two is smaller than...</li>
			<li>Three!</li>
		</ol>
	</section>

	<section data-markdown>
		<script type="text/template">
			## Markdown support

			For those of you who like that sort of thing. Instructions and a bit more info available [here](https://github.com/hakimel/reveal.js#markdown).

			```
			<section data-markdown>
				## Markdown support

				For those of you who like that sort of thing.
				Instructions and a bit more info available [here](https://github.com/hakimel/reveal.js#markdown).
			</section>
			```
		</script>
	</section>

	<section id="transitions">
		<h2>Transition Styles</h2>

		<p>
			You can select from different transitions, like: <br>
			<a href="?transition=cube#/transitions">Cube</a> -
			<a href="?transition=page#/transitions">Page</a> -
			<a href="?transition=concave#/transitions">Concave</a> -
			<a href="?transition=zoom#/transitions">Zoom</a> -
			<a href="?transition=linear#/transitions">Linear</a> -
			<a href="?transition=fade#/transitions">Fade</a> -
			<a href="?transition=none#/transitions">None</a> -
			<a href="?#/transitions">Default</a>
		</p>
	</section>

	<section id="themes">
		<h2>Themes</h2>

		<p>
			Reveal.js comes with a few themes built in: <br>
			<a href="?#/themes">Default</a> -
			<a href="?theme=sky#/themes">Sky</a> -
			<a href="?theme=beige#/themes">Beige</a> -
			<a href="?theme=simple#/themes">Simple</a> -
			<a href="?theme=serif#/themes">Serif</a> -
			<a href="?theme=night#/themes">Night</a> <br>
			<a href="?theme=moon.css#/themes">Moon</a> -
			<a href="?theme=simple.css#/themes">Simple</a> -
			<a href="?theme=solarized.css#/themes">Solarized</a>
		</p>

		<p>
			<small>
				* Theme demos are loaded after the presentation which leads to flicker. In production you should load
				your theme in the <code>&lt;head&gt;</code> using a <code>&lt;link&gt;</code>.
			</small>
		</p>
	</section>

	<section>
		<h2>Global State</h2>

		<p>
			Set <code>data-state="something"</code> on a slide and <code>"something"</code>
			will be added as a class to the document element when the slide is open. This lets you
			apply broader style changes, like switching the background.
		</p>
	</section>

	<section data-state="customevent">
		<h2>Custom Events</h2>

		<p>
			Additionally custom events can be triggered on a per slide basis by binding to the <code>data-state</code>
			name.
		</p>
					<pre><code data-trim contenteditable style="font-size: 18px; margin-top: 20px;">
							Reveal.addEventListener( 'customevent', function() {
							console.log( '"customevent" has fired' );
							} );
						</code></pre>
	</section>

	<section>
		<section data-background="#007777">
			<h2>Slide Backgrounds</h2>

			<p>
				Set <code>data-background="#007777"</code> on a slide to change the full page background to the given
				color. All CSS color formats are supported.
			</p>
			<a href="#" class="image navigate-down">
				<img width="178" height="238" src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png"
				     alt="Down arrow">
			</a>
		</section>
		<section data-background="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png">
			<h2>Image Backgrounds</h2>
			<pre><code>&lt;section data-background="image.png"&gt;</code></pre>
		</section>
		<section data-background="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png"
		         data-background-repeat="repeat" data-background-size="100px">
			<h2>Repeated Image Backgrounds</h2>
			<pre><code style="word-wrap: break-word;">&lt;section data-background="image.png"
					data-background-repeat="repeat" data-background-size="100px"&gt;</code></pre>
		</section>
	</section>

	<section data-transition="linear" data-background="#4d7e65" data-background-transition="slide">
		<h2>Background Transitions</h2>

		<p>
			Pass reveal.js the <code>backgroundTransition: 'slide'</code> config argument to make backgrounds slide
			rather than fade.
		</p>
	</section>

	<section data-transition="linear" data-background="#8c4738" data-background-transition="slide">
		<h2>Background Transition Override</h2>

		<p>
			You can override background transitions per slide by using <code>data-background-transition="slide"</code>.
		</p>
	</section>

	<section>
		<h2>Clever Quotes</h2>

		<p>
			These guys come in two forms, inline: <q
				cite="http://searchservervirtualization.techtarget.com/definition/Our-Favorite-Technology-Quotations">
				&ldquo;The nice thing about standards is that there are so many to choose from&rdquo;</q> and block:
		</p>
		<blockquote
			cite="http://searchservervirtualization.techtarget.com/definition/Our-Favorite-Technology-Quotations">
			&ldquo;For years there has been a theory that millions of monkeys typing at random on millions of
			typewriters would
			reproduce the entire works of Shakespeare. The Internet has proven this theory to be untrue.&rdquo;
		</blockquote>
	</section>

	<section>
		<h2>Pretty Code</h2>
					<pre><code data-trim contenteditable>
							function linkify( selector ) {
							if( supports3DTransforms ) {

							var nodes = document.querySelectorAll( selector );

							for( var i = 0, len = nodes.length; i &lt; len; i++ ) {
							var node = nodes[i];

							if( !node.className ) {
							node.className += ' roll';
							}
							}
							}
							}
						</code></pre>
		<p>Courtesy of <a href="http://softwaremaniacs.org/soft/highlight/en/description/">highlight.js</a>.</p>
	</section>

	<section>
		<h2>Intergalactic Interconnections</h2>

		<p>
			You can link between slides internally,
			<a href="#/2/3">like this</a>.
		</p>
	</section>

	<section>
		<section>
			<h2>Fragmented Views</h2>

			<p>Hit the next arrow...</p>

			<p class="fragment">... to step through ...</p>
			<ol>
				<li class="fragment"><code>any type</code></li>
				<li class="fragment"><em>of view</em></li>
				<li class="fragment"><strong>fragments</strong></li>
			</ol>

			<aside class="notes">
				This slide has fragments which are also stepped through in the notes window.
			</aside>
		</section>
		<section>
			<h2>Fragment Styles</h2>

			<p>There's a few styles of fragments, like:</p>

			<p class="fragment grow">grow</p>

			<p class="fragment shrink">shrink</p>

			<p class="fragment roll-in">roll-in</p>

			<p class="fragment fade-out">fade-out</p>

			<p class="fragment highlight-red">highlight-red</p>

			<p class="fragment highlight-green">highlight-green</p>

			<p class="fragment highlight-blue">highlight-blue</p>
		</section>
	</section>

	<section>
		<h2>Spectacular image!</h2>
		<a class="image" href="http://lab.hakim.se/meny/" target="_blank">
			<img width="320" height="299" src="http://s3.amazonaws.com/hakim-static/portfolio/images/meny.png"
			     alt="Meny">
		</a>
	</section>

	<section>
		<h2>Export to PDF</h2>

		<p>Presentations can be <a href="https://github.com/hakimel/reveal.js#pdf-export">exported to PDF</a>, below is
			an example that's been uploaded to SlideShare.</p>
		<iframe id="slideshare" src="http://www.slideshare.net/slideshow/embed_code/13872948" width="455" height="356"
		        style="margin:0;overflow:hidden;border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px"
		        allowfullscreen></iframe>
		<script>
			document.getElementById('slideshare').attributeName = 'allowfullscreen';
		</script>
	</section>

	<section>
		<h2>Take a Moment</h2>

		<p>
			Press b or period on your keyboard to enter the 'paused' mode. This mode is helpful when you want to take
			distracting slides off the screen
			during a presentation.
		</p>
	</section>

	<section>
		<h2>Stellar Links</h2>
		<ul>
			<li><a href="http://slid.es">Try the online editor</a></li>
			<li><a href="https://github.com/hakimel/reveal.js">Source code on GitHub</a></li>
			<li><a href="http://twitter.com/hakimel">Follow me on Twitter</a></li>
		</ul>
	</section>

	<section>
		<h1>THE END</h1>

		<h3>BY Hakim El Hattab / hakim.se</h3>
	</section>

	</div>

	</div>

<?php

echo $this->Html->script('reveal.min');

