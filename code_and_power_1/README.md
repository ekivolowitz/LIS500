# Hitchhikers guide to Code and Power 1

* Website's we're discussing
  * [Educational Toys Planet](https://www.educationaltoysplanet.com/)
  * [Debbie the Librarian](http://www.abbythelibrarian.com/)
  * [Common App](http://www.commonapp.org/faq)

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


## Fancy header for another thing
more text
