# Hitchhikers guide to Code and Power 1

* Website's we're discussing
  * [Educational Toys Planet](https://www.educationaltoysplanet.com/)
  * [Abby the Librarian](http://www.abbythelibrarian.com/)
  * [Common App](http://www.commonapp.org/faq)
  * [Weather](http://w2.weather.gov/climate/)

## Structure of code_and_power_1
```
└── code_and_power_1
    ├── README.md
    ├── images
    │   └── your_images_go_here.png
    ├── index.php
    ├── pages
    │   ├── page1.php
    │   ├── .
    │   ├── .
    │   ├── .
    │   └── pageN.php
    ├── stylings
    │   └── main.css
    └── template
        ├── header.php
        └── navbar.php
```
### Walkthrough of the structure

#### README.md

That's this file. You shouldn't have to edit anything in here, unless you want to add something to this document. It will not be displayed on our website. 

#### images/

TLDR; Put pictures here as png files without spaces. 

This folder contains all of the images for our website. It's good practice to maintain a neat and orderly structure so we don't have to think about finding things. If you have a picture, make sure it's a `.png` file, and that there are no spaces in the filename. If there are spaces in the file name like so:

`This is a picture.png`

Then please right click on the file and select `Rename` to rename the picture with spaces replaced with underscores.

`This_is_a_picture.png`

#### pages/

TLDR; to add a webpage, put the php file in this folder.

With the exception of `index.php`, the pages folder contains all of the web pages that we will have on our site. The reason for this is because `index.php` is the name of the file that the server is expecting to load when we go to the URL. That is why it's at the root level (top level) of the folder. 

#### stylings/

TLDR; if you want to add a CSS file, add it in this folder

CSS is the styling for the website. We shouldn't need more than one CSS file (`main.css`), but if for some reason you would like another CSS page just make a new file. 


#### template/

TLDR; Things that remain constant between pages will appear in this folder.

It's really annoying when you have to duplicate the formatting of a webpage (copy the navbar etc). 


## How to add a new page to the site
* Create a new php file in the `pages/` directory. 
* Add the page to the [navbar.php](https://github.com/ekivolowitz/LIS500/blob/master/code_and_power_1/template/navbar.php)
file in the `pages/` directory

The code you need to add to `navbar.php` should follow this template exactly. After the last `if` statement, but before the `'</ul>` tag, add the following.
```
      if ($filename == '[name of your new php file].php') {
        echo '<li class="active"><a href="../pages/[name of your new PHP file].php">Text you want to appear on the navbar</a></li>';
      } else {
        echo '<li><a href="../pages/[name of your new PHP file].php">Text you want to appear on the navbar</a></li>';
      }
```

So if I were to add a page called `add.php`, my code would look like

```
      if ($filename == 'add.php') {
        echo '<li class="active"><a href="../pages/add.php">Add</a></li>';
      } else {
        echo '<li><a href="../pages/add.php">Add</a></li>';
      }
```

Just to clarify where to put the code, if our code looked like the following (note that this is an old version of `navbar.php`):
```
<?php
echo '<nav class="navbar navbar-inverse">
<div class="container-fluid" id="nav_center">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                        
    </button>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">';
      $filename = basename($_SERVER['PHP_SELF']);
      if ($filename == 'index.php') {
        echo '<li class="active"><a href="index.php">Home</a></li>';
      } else {
        echo '<li><a href="../index.php">Home</a></li>';
      }
      if ($filename == 'about.php') {
        echo '<li class="active"><a href="../pages/about.php">About</a></li>';
      } else {
        echo '<li><a href="../pages/about.php">About</a></li>';
      }
      
      /////////////////////////////////////////////////////////
      **** INSERT NEW PAGE HERE ******
      if ($filename == 'add.php') {
        echo '<li class="active"><a href="../pages/add.php">Add</a></li>';
      } else {
        echo '<li><a href="../pages/add.php">Add</a></li>';
      }
      /////////////////////////////////////////////////////////
      
echo '</ul>
  </div>
</div>
</nav>';
?>
```
* Include the header file with this line of code
```
<?php include '../template/header.php'?>
```
* Include the navbar file with this line of code
```
<?php include '../template/navbar.php'?>
```

The first four lines of the new php file you're adding should look like the following:

```

<html lang="en">
<?php include '../template/header.php'?>
<body>
<?php include '../template/navbar.php'?>
```

To follow the content formatting of `about.php`, copy and paste these lines after the `<?php include '../template/navbar.php>` line. The only things that you will have to edit to add content are inbetween the commented sections of the code. 

```
<div class="container-fluid text-center">    
  <div class="row content" style="height: 0px;">
    <div class="col-sm-2 sidenav"></div>
    <div class="col-sm-8 text-left"> 
      <!-- Insert your text between here -->
      <h1>Large Header</h1>
      <h3>Sub Header 1</h3>
      <p>
        Text about the sub header 1.
      </p>
      <h3>Sub Header 2</h3>
      <p>
        Text about sub header 2.
      </p>
      <h3>Sub Header 3</h3>
      <p>
        Text about sube header 3.
      </p>
      <!-- and finish writing them here -->
      <hr>
      
    </div>
  </div>
  <div class="col-sm-2 sidenav"></div>
  </div>
  </body> 
  </html>
```

## How to add an image
* Add the `.png` (image) file to the `images/` directory. Make sure that there are no spaces in the filename.
* In the php file you're working in, you import the image like so
```
<img src="../images/image_name.png">
```
