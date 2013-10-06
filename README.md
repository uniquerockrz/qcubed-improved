## What is QCubed?

QCubed (pronounced 'Q' - cubed) is a PHP5 Model-View-Controller framework. The goal of the framework is to save development time around mundane, repetitive tasks - allowing you to concentrate on things that are useful AND fun.


## What is QCubed Improved

QCubed Improved is a fork of QCubed, that makes QCubed powerful and even more addictive. Some of the special features of this fork are:

### URL Rewriting

Awesome SEO friendly URLs, like www.example.com/blog/first-post or www.example.com/client/21

### Clean controllers and views

Inspired from CodeIgniter PHP framework, the logic of the program is kept in /controllers and the design in /views. Really clean structure of project.

### Basic Template

We have provided a simple Bootstrap template so you can get started quickly and also make your project look great from start.

![default template](http://i.imgur.com/Lnu1CNe.png)

### Awesome 404 Error page

So that you dont see the boring Apache one when you type the URL wrong.

![404](http://i.imgur.com/JFJ5fPh.png)

### Reverse proxy support

So that IsRemoteAdmin works in platform that are behind a reverse proxy (e.g. OpenShift)

### DataGrid, TextBoxes and Selects

That look sexier.

![QDataGrid](http://i.imgur.com/anrCQyE.png)

### New control - IAlertLabel

For all your errors, warnings, and success messages.

![IAlertLabel](http://i.imgur.com/7dCmd2i.png)

### Cute Buttons

Comes with different colours and sizes.

![Buttons](http://i.imgur.com/uTTdrIq.png)

### Pagination and Pagers

Say Goodbye to default QCubed one

![Pagination](http://i.imgur.com/2ud4l3a.png)

### Beautiful error messages

That do not annoy your user and works great with RenderWithError().

![Error](http://i.imgur.com/Sl7zIUT.png)

## How To Install

Create a virtual host and point it to the folder where you have extracted or cloned qcubec-improved. Change the includes/configuration/configuration.inc.php
to suit your configuration. If you are using htaccess for rewriting URLS, make sure you have AllowOverride All set in the virtual host file.

## Creating a new control and view

* Go to includes/controllers folder and create a PHP class file in the name your controller.
* Go to includes/views folder and create a tpl.php file of the name of your controller.
* You can see the Example or Welcome controller for an example.
* Autoload that file in includes/app_includes/myincludes.php
* Add the files to index.php for URL support.
* file should be accessible by the url - index.php/<name you gave in index>

## Using example.com/controller URL instead of example.com/index.php/controller

Rename the htaccess.txt file to .htaccess. Make sure you have mod_rewrite enabled.

## Credits

Thanks to my friend and guru Vaibhav Kaushal (https://github.com/vaibhav-kaushal) for providing the hints. I also want to thank the wonderful developers and designers of
QCubed and Twiiter Bootstrap for the wonderful work they are doing. This is just a small tribute to them.

## Disclaimer

qcubed-improved is in no way, endorsed or associated with QCubed or Twitter Bootstrap.

## License

Bootstrap is distributed under Apache License. QCubed is under MIT license. qcubed-bootstrap is distributed under MIT License.