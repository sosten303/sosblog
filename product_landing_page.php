<!DOCTYPE html>
<html>
<head>
	<title>Product landing page</title>
	<script type="text/javascript" src="href=https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">

		#main {
			background-color: rgba(0,0,0,0.8);
			display: grid;
			padding: 100px;
		}

		.features {
			background-color: lightblue;
			text-align: center;
			padding: 30px;
			width: 100%;
		}

		.container {
         /* background-color: lightblue;
          padding: 30px;
          max-width: 100%;
          min-height: 300px;
          display: grid;
          grid-template-rows: 1fr auto;
          grid-template-columns: 250px auto 1fr auto;
          grid-template-areas: 
          "header header"
          "content content"
          "footer footer"*/
		}

		.item1 {
          background-color: blue;
          padding: 30px;
          /*grid-area: header;*/
		}

		.item2 {
			background-color: orange;
            padding: 30px;
			/*grid-area: content;*/
		}

		.item3 {
			background-color: yellow;
			padding: 30px;
			/*grid-area: content;*/
		}

		#header {
		 background-color: rgba(255,0,68,0.9);
		 padding: 10px;
		 position: fixed;
		 top: 0px;
		 left: 0px;
		 right: 0px;
		}


		#nav-bar {
		  background-color: rgba(255,0,68,0.9);
		  padding: 20px;
		  display: flex;
		  margin-left: 200px;
		}

		.nav-link {
		  text-decoration: none;
		  color: #ffffff;
		  flex-grow: 0.03;
		  font-size: 18px;
		  font-family: sans-serif;
		}

		#video {
          background-color: gray;
          padding: 10px;
          min-width: 100%;
          display: block;
		}

        .form {
			background-color: #f4f4f4;
			padding: 30px;
			border-radius: 2px 2px 0px 0px;
			margin-top: 100px;
			text-align: center;
		}

		#form {
          padding: 20px;
          position: relative;
          left: 10%;
          width: 70%;
		}

		#email {
			font-size: 15px;
			font-family: sans-serif;
			color: #585858;
			margin-bottom: 10px;
			width: 50%;
			padding: 5px 10px;
			border-radius: 3px;
			border: 1px solid #989898;
		}

		#submit {
			background-color: rgba(0,0,0,0.9);
			font-size: 15px;
			font-family: sans-serif;
			color: #f1f1f1;
			width: 30%;
			padding: 5px 10px;
			border-radius: 3px;
			margin-left: 40px;
			border: 1px solid #2288ed;
			cursor: pointer;
		}

		#footer {
			background-color: #cccccc;
			padding: 30px;
			color: #484848;
		}

	</style>
</head>

<body>
	<div id="main">
		
		<div id="header">
			<img src="/.jpg" alt="Roofing Top Ltd" id="header-img"> <!-- company logo -->
			<nav id="nav-bar">
				 <a href="#features" class="nav-link">features</a>
				 <a href="#how-it-works" class="nav-link">how it works</a>
				 <a href="#pricing" class="nav-link">pricing</a>
			</nav>
		</div>

		<div class="row">
			<div class="col-md-12">
		<div class="form">
          <h2>Register as our customer to get your <b>premium discount</b></h2>
	     <form id="form" action="https://www.freecodecamp.com/email-submit">
	     	<input type="email" id="email" required="required" placeholder="Enter Email Address">
	     	<br>
	     	<input type="submit" value="Register Now" id="submit">
	     </form>
	</div>
	</div>
	</div>
         
	 <div class="features">
	 	<div class="row">
	 		<div class="col-md-2"></div>
	 		<div class="col-md-8">
		<div id="features">
			<h2 id="title"> Features</h2>
			<div class="1tem3">
            <p><b>Premium Materials</b></p>
            <p>Our roofing sheets use the shiniest brass which is sourced locally. This will increase the longevity of your purchase.</p>
            </div>

            <div class="1tem3">
            <p><b>Fast Shipping</b></p>
 
            <p>We make sure you recieve your roofing sheet as soon as we have finished making it. We also provide free returns if you are not satisfied.</p>
            </div>

            <div class="1tem3">
            <p><b>Quality Assurance</b></p>

           <p>For every purchase you make, we will ensure there are no damages or faults and we will check and test the pitch of your instrument.</p>
          </div>
           </div>
		</div>
	 		<div class="col-md-2"></div>
		</div>
		</div>

		<div class="row"></div>
		<div class="col-md-12">

	    <!-- embaded video -->
	   <div id="how-it-works">
	   	<h2 id="title">How it works</h2>
	    <video controls id="video">
	    	<source src="" type="mp4">
	    </video>
        </div>
        </div>
        </div>

         <div class="container" id="pricing">
         	<div class="row">
         	<div class="col-md-12">
         	<h2 id="title">Our Pricing</h2>
            <div class="row">
         	 <div class="col-md-4">
         	  <div class="item1">
         		<p>Tenor Trombone</p>
                    <p>$600</p>
                    <p>This is the best roofing</p>
         	</div>
         	</div>

         	<div class="col-md-4">
         	  <div class="item2">
         		<p>Tenor Trombone</p>
                    <p>$600</p>
                    <p>This is the best roofing</p>
         	 </div>
         	</div>
         	  <div class="col-md-4">
         	<div class="item3">
         		<p>Tenor Trombone</p>
                    <p>$600</p>
                    <p>This is the best roofing</p>
         	</div>
         	</div>
         	</div>
         	</div>
         	</div>
         </div>
     
         

     <footer id="footer"> 
     	<div class="container">
     		<div class="item3">
     	&copy 2019 sosten nyirenda all rights reserved
     </div>
     </div>
     </footer>
  </div>
</body>
</html>