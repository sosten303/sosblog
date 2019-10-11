<!DOCTYPE html>
<html>
<head>
	<title>Technical Documentation</title>
	<script type="text/javascript" src="href=https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">

     #main-doc {
     	background-color: #f4f4f4;
     	padding: 10px;
     }

     #navbar {
     	font-size: 20px;
     	background-color: #ffffff;
     }

     .nav-link {
     	font-size: 18px;
     	display: block;
     	color: #585858;
     }

     .main-section {
     	font-size: 18px;
     	background-color: #cccccc;
     	padding: 30px;
     }

    </style>

</head>
 <body>

   <div id="main-doc">
      <div class="row">
      <div class="col-md-12">
      	<div class="row">
      		<div class="col-md-3">
    <aside>
   	<nav id="navbar">
   		<header>Css Documentation</header>
   		<a href="#introduction" class="nav-link">Introduction</a>
   		<a href="#what_you_should" class="nav-link">What you should know</a>
   		<a href="#multimedia" class="nav-link">Multimedia</a>
   		<a href="#syntax" class="nav-link">Syntax</a>
   		<a href="#css_layout" class="nav-link">CSS Layout</a>
   	</nav>
   </aside>
   </div>
      <div class="col-md-9">
   	<section class="main-section" id="introduction">
   		<header>Introduction</header>
   		<p>Like HTML, CSS is not really a programming language. It is not a markup language either — it is a style sheet language. This means that it lets you apply styles selectively to elements in HTML documents. For example, to select all the paragraph elements on an HTML page and turn the text within them red, you'd write this CSS</p>
   		<code>
   			p {
           color: red;
              }
   		</code>
   		<p>Css follows the standard properties that makes websites look attractive:</p>
   		<ul>
   			<li>pseudo-classes</li>
   			<li>pseudo-elements</li>
   			<li>data types</li>
   			<li>at-rules</li>
   		</ul>
   	</section>

   		<section class="main-section" id="what_you_should">
   		<header>What you should Know</header>
   		 <p>Before starting using CSS, you should also be familiar with using:</p> 
   		 <ul>
   		 	<li>computers and using the web passively (i.e., just looking at it, consuming the content)</li>
   		 	<li>You should have a basic work environment set up as detailed in Installing basic software and understand how to create and manage files</li>
   		 </ul> 
   	</section>

   	<section class="main-section" id="multimedia">
   		<header>Multimedia</header>
   		<p>The web would be really boring only using text. Muilmedia elements makes the website to  look alive and communicate more effectively and efficiently to the user.</p>
   		<p>CSS support multimedia elements such as:</p>
   		<ul>
   			<li>Images</li>
   			<li>Audio</li>
   			<li>Video</li>
   		</ul>  
   		<p>This module explores how to use CSS to Style multimedia in your web pages, including the different ways that images can be styled, and how embeded video, audio, and even entire webpages.</p>
   		<code>
   			 img {
   			 width = 100%;
   			}
   			
   			video {
   			height: 500px;
   		   }

   		   audio {
   			background: blue;
   		   }
   			
   		</code>
   	</section>

   	<section class="main-section" id="syntax">
   		<header>Syntax</header>
   		<p>Just like any other programming languages, CSS also has a simple basic syntax that are easy to understand and implement.</p>
   		<code>
   			html-selector {
   			property: value;
   		}
   		</code>

   		<code>
   			h1 {
   			color: red;
   		}
   		</code>
   	</section>

   	<section class="main-section" id="css_layout">
   		<header>CSS Layout</header>
   		<p>The layout of the webpage by css is in the box mobel view, where elements are put boxes for styling. Now it's time to look at how to place your boxes in the right place in relation to the viewport, and one another.</p>
   		<p>When dealing with CSS, Consider display settings:</p>

   		<ul>
   			<li>modern layout tools like flexbox</li>
   			<li>CSS grid</li>
   			<li>positioning</li>
   			<li>and some of the legacy techniques you might still want to know about</li>
   		</ul>
   	</section>
    </div>
   </div>
 </div>
</div>
</div>
</body>
</html>