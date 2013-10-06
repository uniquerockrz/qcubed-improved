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

			<br />
			<br />
			<br />
			<br />



		</div>
	</div>
</div>