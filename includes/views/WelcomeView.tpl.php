<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1>Welcome to QCubed Improved</h1>

			<h3>What is QCubed?</h3>

			<p>QCubed (pronounced 'Q' - cubed) is a PHP5 Model-View-Controller framework. The goal of the framework is to save development time around mundane, repetitive tasks - allowing you to concentrate on things that are useful AND fun.</p>

			<h3>What is QCubed Improved</h3>

			<p>QCubed Improved is a fork of QCubed, that makes QCubed powerful and even more addictive. Some of the special features of this fork are:</p>

			<h4><em>URL Rewriting</em></h4>

			<p>Awesome SEO friendly URLs, like www.example.com/blog/first-post or www.example.com/client/21
			<br />Try yourself - <a href="/index.php/example">Example</a>
			</p>

			<h4><em>Clean controllers and views</em></h4>

			<p>Inspired from CodeIgniter PHP framework, the logic of the program is kept in /controllers and the design in /views. Really clean structure of project.</p>

			<h4><em>Basic Template</em></h4>

			<p>We have provided a simple Bootstrap template so you can get started quickly and also make your project look great from start. Thats the one you are seeing right now</p>

			<h4><em>Awesome 404 Error page</em></h4>

			<p>So that you dont see the boring Apache one when you type the URL wrong. <a href="/index.php/abc">Try Now.</a></p>

			<h4><em>Reverse proxy support</em></h4>

			<p>So that IsRemoteAdmin works in platform that are behind a reverse proxy (e.g. OpenShift)</p>

			<h4><em>DataGrid, TextBoxes and Selects</em></h4>

			<p>That look sexier.</p>

			<div class="row">
				<div class="col-lg-4">
					<img src="http://i.imgur.com/luhnYTk.png" class="img-rounded"/>
				</div>
				<div class="col-lg-4">
					<?php $_CONTROL->txtBox->Render(); ?>
				</div>
				<div class="col-lg-4">
					<?php $_CONTROL->lstSelect->Render(); ?>
				</div>
			</div>

			<h4><em>New control - IAlertLabel</em></h4>

			<p>For all your errors, warnings, and success messages.</p>

			<?php $_CONTROL->iALabel1->Render(); ?>
			<?php $_CONTROL->iALabel2->Render(); ?>

			<h4><em>Cute Buttons</em></h4>

			<p>Comes with different colours and sizes.</p>

			<?php $_CONTROL->btnButton1->Render(); ?>
			<?php $_CONTROL->btnButton2->Render(); ?>
			<?php $_CONTROL->btnButton3->Render(); ?>
			<?php $_CONTROL->btnButton4->Render(); ?>

			<h4><em>Pagination and Pagers</em></h4>

			<p>Say Goodbye to default QCubed one</p>
			
			<img src="http://i.imgur.com/2ud4l3a.png" class="img-rounded">

			<h4><em>Beautiful error messages</em></h4>

			<p>That do not annoy your user and works great with RenderWithError().</p>
			
			<img src="http://i.imgur.com/Sl7zIUT.png" class="img-rounded">

			<h3>Creating a new control and view</h3>
			<ul>
			<li>Go to includes/controllers folder and create a PHP class file in the name your controller.
			<li>Go to includes/views folder and create a tpl.php file of the name of your controller.
			<li>You can see the Example or Welcome controller for an example.
			<li>Autoload that file in includes/app_includes/myincludes.php
			<li>Add the files to index.php for URL support.
			<li>file should be accessible by the url - index.php/<name you gave in index>
			</ul
			<h3>Using example.com/controller URL instead of example.com/index.php/controller</h3>

			<p>Rename the htaccess.txt file to .htaccess. Make sure you have mod_rewrite enabled.</p>

			<h3>Credits</h3>

			<p>Thanks to my friend and guru <a href="https://github.com/vaibhav-kaushal">Vaibhav Kaushal</a> for providing the hints. I also want to thank the wonderful developers and designers of
				QCubed and Twiiter Bootstrap for the wonderful work they are doing. This is just a small tribute to them.</p>

			<h3>Disclaimer</h3>

			<p>qcubed-improved is in no way, endorsed or associated with QCubed or Twitter Bootstrap.</p>

			<h3>License</h3>

			<p>Bootstrap is distributed under Apache License. QCubed is under MIT license. qcubed-bootstrap is distributed under MIT License.</p>

			<em>To edit this page, go to includes/controllers/WelcomeController.class.php and includes/views/WelcomeView.tpl.php</em>
			<br />
			<br />
			<br />
			<br />



		</div>
	</div>
</div>