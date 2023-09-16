<?php include_once('inc_header.php') ?>

			<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Plugin variants</h2>
				</header>
				<div class="box">
					<span class="image featured big"><img src="/images/pic02.jpg" alt="" /></span>
					<p>Cardinal provides 3 plugin variants - "main", Synth and FX.<br/>
					They are all equivalent in performance and behaviour, with only the IO and metadata that changes.
					This is because some hosts are very strict on which plugins are allowed as instruments vs FX, so separate variants of the same plugin are needed.</p>
					<p>FX and Synth variants both have 2 audio outputs, while "main" has 8. All variants have MIDI input and output support.</p>
					<div class="row">
						<div class="row-6 row-12-mobilep">
							<h3>Main</h3>
							<p>This variant provides 8 audio inputs and outputs and 10 CV inputs and outputs.<br/>
							NOTE: Due to AU and VST2 formats not supporting CV ports, this variant is not available for those formats.<br/>
							NOTE: This variant is not available in CLAP yet, to be added in a later release.</p>
						</div>
						<div class="row-6 row-12-mobilep">
							<h3>Synth</h3>
							<p>This variant provides 2 audio outputs but no audio inputs or CV ports. Plugin type is set as "instrument".</p>
						</div>
						<div class="row-6 row-12-mobilep">
							<h3>FX</h3>
							<p>This variant provides 2 audio inputs and outputs, but no CV ports. Plugin type is set as regular "effect".</p>
						</div>
						<div class="row-6 row-12-mobilep">
							<h3>Mini</h3>
							<p>This is a special variant with a very small, hand-picked module selection and limited IO (2 audio ports plus 5 CV).<br/>
							It only exists as LV2 and Standalone plugin.</p>
							<p>For now the list of selected modules is quite small, intentionally. We will add a few more as the need appears.
							All included modules support polyphony, reducing confusion for new users not yet used to mono vs poly approach in Rack/Cardinal.</p>
							<p>The main reason for this variant to exist is being able to support DSP/UI separation, which is only possible with more simple modules.
							DSP/UI separation means we can run the DSP on a different machine than the UI.
							This is particularly interesting for running Cardinal on embed systems, being controlled remotely via a web browser or a native desktop application.
							Such setup is already in use in <a href="https://forum.mod.audio/t/distrho-cardinal-mini/9262/" target="_blank">Cardinal Mini for MOD Audio</a>.</p>
						</div>
					</div>
				</div>
			</section>

<?php include_once('inc_footer.php') ?>
