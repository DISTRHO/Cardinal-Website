<?php include_once('inc_header.php') ?>

			<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>OSC Remote Control</h2>
				</header>
				<div class="box">
					<p>OSC (Open Sound Control) is a protocol commonly used for remote control over the network.<br />
					Starting with version 23.09, Cardinal allows remote control of the entire patch/project and individual parameters through OSC.</p>
					<p>Please note <b>OSC Remote Control is not available when using Cardinal as a plugin</b>, only in standalone.<p>
					<div class="row">
						<div class="row-6 row-12-mobilep">
							<h3>Activating remote control</h3>
							<p>Make sure you are using version 23.09 or later of Cardinal, start up the standalone (both Native and JACK variants will work) and under "Engine" menu click on "Enable OSC remote control".<br />
							<span class="image"><img src="https://github.com/DISTRHO/Cardinal/raw/main/docs/Docs_Remote-Control-1.png" alt="" /></span></p>
							<p>This will ask you for which network port to use, Cardinal will default to 2228.<br />
							Valid range is typically between 1025 and 32767.<br />
							If unsure just stick the default value.<br />
							<span class="image">
								<img src="https://github.com/DISTRHO/Cardinal/raw/main/docs/Docs_Remote-Control-2.png" alt="" />
							</span></p>
							<p>Depending on the OS security features you might be asked to allow network usage at this point.<br />
							If all went well opening the "Engine" menu again should show a checkmark, indicating that OSC remote control is enabled.</p>
							<p>For the moment there is no error dialog or information in case things go wrong.<br />
							If you are unable to connect, make sure your OS network firewall settings allows opening port 2228.</p>
						</div>
						<div class="row-6 row-12-mobilep">
							<h3>TouchOSC example setup</h3>
							<p>A TouchOSC compatible file is available <a href="https://github.com/DISTRHO/Cardinal/raw/main/patches/touchosc/24-direct-fader-params.tosc">here</a>.</p>
							<p>It maps Cardinal's 24 parameters into 3 pages of sliders, 8 per page, each with a different color.<br />
							Inside Cardinal the Host Parameters and Host Parameters Map modules can be used as a way to control module knobs and other controls with it.</p>
						<div class="row-6 row-12-mobilep">
							<h3>Available messages</h3>
							<p>The following OSC messages are available:</p>
							<h4><b>/hello</b></h4>
							<p>Sending a <code>/hello</code> message will make Cardinal reply back with another hello, using <code>/resp</code> path and "hello" message.<br />
							Useful when testing if the connection works.</p>

							<h4><b>/host-param i:port f:value</b></h4>
							<p>Sending a <code>/host-param</code> message will set a port value of the "Host Params" module.<br />
							The port index starts from 0.</p>
							<p>There is no reply back from Cardinal.</p>

							<h4><b>/param h:moduleId i:paramId f:value</b></h4>
							<p>Sending a <code>/param</code> message will change the parameter value of any loaded module.<br />
							(TODO: describe a way to find the module and param id)</p>
							<p>There is no reply back from Cardinal.</p>
							<p>NOTE: the first argument must of be int64 type, as regular 32-bit integer is not enough to fit the whole range of values used inside Cardinal/Rack.</p>

							<h4><b>/load b:patch-blob</b></h4>
							<p>Sending a <code>/load</code> message will load the patch file contained in the message.<br />
							Patch contents must be in compressed format, not plain-text json.</p>
							<p>Cardinal replies back indicating either success or failure, using <code>/resp</code> path and "load" message.</p>
						</div>
					</div>
				</div>
			</section>

<?php include_once('inc_footer.php') ?>
