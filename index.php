<?php
$HOME = true;
include_once('inc_header.php')
?>

			<!-- Banner -->
			<section id="banner">
				<h2>Cardinal</h2>
				<p>Virtual modular synthesizer plugin</p>
				<ul class="actions special">
					<li><a href="https://github.com/DISTRHO/Cardinal/releases/latest" class="button primary">Download</a></li>
					<li><a href="/live" class="button">Try Live</a></li>
				</ul>
			</section>

			<!-- Main -->
			<section id="main" class="container">

				<section class="box special">
					<header class="major">
						<h2>A fully free and self-contained modular synthesizer
						<br />
						based on the popular <a href="https://vcvrack.com/" target="_blank">VCV Rack</a></h2>
						<p>Available as AU, CLAP, LV2, VST2, VST3 and Standalone audio plugin for FreeBSD, Linux, macOS, Windows and the Web.</p>
					</header>
				</section>

				<section class="box special features">
					<div class="features-row">
						<section>
							<span class="icon solid major fa-bolt accent2"></span>
							<h3>Open-Source</h3>
							<p>Created first and foremost as a way to have Rack as a proper open-source audio plugin.</p>
						</section>
						<section>
							<span class="icon solid major fa-chart-area accent3"></span>
							<h3>Self-contained</h3>
							<p>Cardinal does not load any external modules, everything is built-in.</p>
						</section>
					</div>
					<div class="features-row">
						<section>
							<span class="icon solid major fa-lock accent5"></span>
							<h3>LV2 support</h3>
							<p>Supporting real CV ports to and from the plugin, for integration with other modular systems.</p>
						</section>
						<section>
							<span class="icon solid major fa-cloud accent4"></span>
							<h3>Multi-platform</h3>
							<p>Supporting more than just the basic 3 desktop operating systems.</p>
						</section>
					</div>
				</section>

				<div class="row">
					<div class="col-6 col-12-narrower">

						<section class="box special">
							<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
							<h3>1079 included modules</h3>
							<p>A total of 1079 modules from 73 different authors/brands.</p>
							<ul class="actions special">
								<li><a href="/modules.php" class="button alt">Learn more</a></li>
							</ul>
						</section>

					</div>
					<div class="col-6 col-12-narrower">

						<section class="box special">
							<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
							<h3>3 Plugin variants</h3>
							<p>A "main" variant plus Synth and FX.</p>
							<ul class="actions special">
								<li><a href="/variants.php" class="button alt">Learn more</a></li>
							</ul>
						</section>

					</div>
				</div>

			</section>

			<!-- CTA -->
			<section id="cta">

				<h2>Get involved</h2>
				<p>
					Development <a href="https://github.com/DISTRHO/Cardinal/" target="_blank">happens on GitHub</a> and we chat on the #cardinal IRC room in irc.libera.chat server.
					<br />
					Come join us in your favorite IRC client or through your web browser (no post history).
				</p>
				<form>
					<div class="row gtr-50 gtr-uniform">
						<div class="col-8 col-12-mobilep">
							<input type="text" name="nickname" id="nickname" placeholder="Nickname" />
						</div>
						<div class="col-4 col-12-mobilep">
							<a href="https://web.libera.chat/?nick=Guest?#cardinal" class="button fit" id="chat" target="_blank">Open chat</a>
						</div>
						<script>
							var nickname = document.getElementById('nickname');
							var chat_href = document.getElementById('chat');
							if (nickname.value) {
								chat_href.setAttribute('href', 'https://web.libera.chat/?nick=' + nickname.value + '?#cardinal');
							}
							nickname.onchange = function() {
								chat_href.setAttribute('href', 'https://web.libera.chat/?nick=' + nickname.value + '?#cardinal');
							};
						</script>
					</div>
				</form>

			</section>

<?php include_once('inc_footer.php') ?>
