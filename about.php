<?php include_once('inc_header.php') ?>

			<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Cardinal, the Rack!</h2>
				</header>
				<div class="box">
					<p>Cardinal is a free and open-source virtual modular synthesizer plugin, available in AudioUnit/CLAP/LV2/VST2/VST3 plugin formats and as a standalone app for FreeBSD, Linux, macOS, Windows and the Web.<br>
					It is based on the popular <a href="https://vcvrack.com/" target="_blank">VCV Rack</a> but with a focus on being a fully self-contained plugin version.</p>
					<p>More specifically, this is a <a href="https://github.com/DISTRHO/DPF/" target="_blank">DPF-based</a> plugin wrapper around <a href="https://github.com/VCVRack/Rack/" target="_blank">VCV Rack</a>,
					using its code directly instead of forking the project, with the target of having a <strong>self-contained, fully free and open-source plugin version of Rack</strong>.<br>
					See the <a href="#Why">why section</a> below for the reasons Cardinal exists, also for frequently asked questions check this <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/FAQ.md" target="_blank">FAQ document</a>.</p>
					<p>Cardinal contains Rack, some 3rd-party modules and a few internal utilities all in a single binary.<br>
					All "Core" modules from Rack have been replaced by Cardinal equivalents, simplified to better work for an audio plugin.</p>
					<p>Cardinal does not load external modules and does not connect to the official Rack library/store.<br>
					All VCV branding has been removed (to the best of our knowledge) in order to avoid any trademark issues.</p>
					<div class="row">
						<div class="row-6 row-12-mobilep" id="Status">
							<h3>Current status</h3>
							<p>Cardinal should be considered stable, if you spot any bugs please report them on GitHub.<br>
							Currently the following should be noted:</p>
							<ul>
							<li>CLAP support is a work-in-progress <a href="https://github.com/DISTRHO/DPF/issues/383" target="_blank">DPF#383</a></li>
							<li>VST3 plugin hosting (inside Carla or Ildaeil modules) mostly works but is considered experimental</li>
							<li>Windows 32bit builds still have a few problematic modules <a href="https://github.com/DISTRHO/Cardinal/issues/80" target="_blank">#80</a></li>
							</ul>
						</div>
						<div class="row-6 row-12-mobilep" id="Why">
							<h3>Why</h3>
							<p>Cardinal was created first and foremost as a way to have Rack as a <strong>proper open-source audio plugin</strong>.<br>
							A proper audio plugin should be self-contained as much as possible, as to not interfere with the DAW/Host.
							Loading external modules clearly goes against this idea.<br>
							Not to mention being <strong>open-source</strong>, otherwise we are at the mercy of the wishes of a company for what we can and cannot do,
							which is not something Cardinal's authors wish to abide by.</p>
							<p>A self-contained plugin can't be overstated, as DLL/shared-object symbol conflicts can trigger hard-to-debug crashes.<br>
							While Rack tries to mitigate this as much as possible, crashes due to conflicting modules have already been seen in v2 builds.<br>
							On the other side, Cardinal redefines class and function names as needed to avoid as many conflicts as possible.</p>
							<p>Support for ARM and non-mainstream platforms (for example BSD) has also always been missing from the official Rack since the start.<br>
							While we can patch the Rack free version to support these, same can't be done with Rack Pro with it being a closed-source product.<br>
							The online library/store only supports a very specific set of platforms too,
							so non-supported platforms would need any 3rd-party modules to be manually compiled to make them usable.</p>
							<p>Unhappiness with the audio threading behaviour of Rack also plays a role.<br>
							Both audio and MIDI should be locked to the host audio thread as to minimize (or even altogether remove) latency and jitter.<br>
							The use of separate threads for MIDI is bad design, one that has been corrected in DAWs and JACK-MIDI for several years...<br>
							But Rack's use of RtMidi requires separate threading, so Cardinal does not use it.</p>
							<p>Other relevant reasons include:</p>
							<ul>
							<li>LV2 plugin version from the start</li>
							<li>Proper dark mode support</li>
							<li>Real CV ports to and from the plugin</li>
							<li>Removing online access from the plugin and included modules (no phone-home here!)</li>
							<li>Works as a test case for <a href="https://github.com/DISTRHO/DPF/" target="_blank">DPF</a> and <a href="https://github.com/falkTX/Carla/" target="_blank">Carla</a></li>
							<li>It is fun :)</li>
							</ul>
						</div>
						<div class="row-6 row-12-mobilep" id="VsRackPro">
							<h3>Vs. Rack Pro</h3>
							<p>It needs to be said that Cardinal project and its author(s) do not wish anything bad to the original/official Rack project.<br>
							In fact, Cardinal wouldn't exist if not for Rack v2 release. (which has many needed things to make a plugin version work)</p>
							<p>Cardinal and Rack should be able to co-exist friendly and peacefully, as they clearly have different targets.<br>
							It is likely most people will prefer to use Rack Pro for its official support and its big module collection (including commercial ones).</p>
							<p>A feature comparison between Cardinal and Rack Pro can be seen <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/DIFFERENCES.md" target="_blank">here</a>.</p>
						</div>
						<div class="row-6 row-12-mobilep" id="License">
							<h3>License</h3>
							<p>Cardinal is licensed under GPLv3+, see <a href="https://github.com/DISTRHO/Cardinal/blob/main/LICENSE" target="_blank">LICENSE</a> for more details.<br>
							An overview of the included code and linked submodules can be seen <a href="https://github.com/DISTRHO/Cardinal/blob/main/docs/LICENSES.md#code-license--binary" target="_blank">here</a>.</p>
						</div>
					</div>
				</div>
			</section>

<?php include_once('inc_footer.php') ?>
