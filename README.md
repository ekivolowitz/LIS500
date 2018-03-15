# [Code 1 Project](https://github.com/ekivolowitz/LIS500/blob/master/code1)
## Live Site
[Visit the live page!](http://badgerblockchain.club:5000)
## Requirements
* Three dynamic elements
    * [Title of every webpage](https://github.com/ekivolowitz/LIS500/blob/master/code1/template/header.php#L2-L6)
    * [Maintaining active page highlighting in navbar](https://github.com/ekivolowitz/LIS500/blob/master/code1/template/navbar.php#L15-L45)
    * [Write and fix in one place,](https://github.com/ekivolowitz/LIS500/tree/master/code1/template)[ use in another](https://github.com/ekivolowitz/LIS500/blob/master/code1/pages/about.php#L2)
    * [API request to implement the ticker on every page](https://github.com/ekivolowitz/LIS500/blob/master/code1/template/table.php#L13-L32)
## Structure
```
└── code1
    ├── README.md
    ├── images
    │   └── logo-small.png
    ├── index.php
    ├── pages
    │   ├── about.php
    │   ├── get-started.php
    │   ├── jargon.php
    │   ├── learn-more.php
    │   └── participate.php
    ├── stylings
    │   └── main.css
    └── template
        ├── header.php
        └── navbar.php
```
## Things to pay attention to
* My biggest complaint when working on this project was writing the navbar on *every single page*. My webdev experience previously was only with [flask](http://flask.pocoo.org/docs/0.12/), which has templating so that you don't need to rewrite the core structure of each page; rather you focus on the differences. 
* I was looking for something like that in PHP, which lead me to reading some [documentation](http://php.net/manual/en/function.include.php). I decided to repurpose the include function and some clean folder structuring to recreate the flask like templating feature. While not exactly what you think of when you think 'dynamic content', I think that the powerful benefit of writing in one place and using in several places, and reducing the text content of each individual php page by ~50% picks up the slack. To be sure though, I created active page highlighting on the navbar with php using some built in directives. 
* I used bootstrap to generate dynamic styling so that the page is responsive to mobile users. 
* API calls for generating the BTC/ETH/XRP tables on the fly
# [Code and Power 1](https://github.com/ekivolowitz/LIS500/blob/master/code_and_power_1)
[Visit the live page! (Not currently hosted)](http://www.badgerblockchain.club:5001)
## Requirements
* Will go here soon
   * Sub requirements and notes will go here
