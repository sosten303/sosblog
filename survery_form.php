<!DOCTYPE html>
<html>
<head>
	<title>Survey form</title>
	<script type="text/javascript" src="href=https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
	<style type="text/css">

		#main {
			background-color: #04444d;
			padding: 50px 200px 50px 200px;
		}

		#title {
			color: #eeeeee;
			text-align: center;
			font-family: sans-serif;
			padding: 20px;
		}

		#survey-form {
			background-color: #ffffff;
			padding: 100px;
			border-radius: 3px;
			font-family: sans-serif;
			color: #181818;
			line-height: 2;
		}

		#description {
		   font-size: 18px;
		   font-family: sans-serif;
		   color: #686868;
		}

		#name, #email, #number {
			font-size: 16px;
			font-family: sans-serif;
			color: #787878;
			width: 60%;
			padding: 5px 10px;
			border-radius: 2px;
			border: 1px solid #cccccc;
			margin-left: 20px;
			margin-bottom: 10px;
		}

		#option {
			width: 60%;
			border-radius: 2px;
			border: 1px solid #cccccc;
			padding: 5px;
			font-family: sans-serif;
			font-size: 16px;
			color: #686868;
			margin-bottom: 15px;
		}

		#submit{
			background-color: #0000ff;
			font-size: 15px;
			font-family: sans-serif;
			color: #f1f1f1;
			width: 60%;
			padding: 5px 10px;
			border-radius: 3px;
			border: 1px solid #2288ed;
			cursor: pointer;
		}

	</style>
</head>
<body>
	<div id="main">
		<div id="title">
			<h1>Survey Form</h1>
		</div>

		 <form id="survey-form">
		 	<div id="description">
			<p>Let us Know how we can improve Software Developers communities</p>
		   </div>
		 	<label for="name-label">* Name:</label>
		 	<input type="text" name="" id="name" id="name-label" placeholder="your name">
		 	<br>
		 	<label for="email-label">* Email:</label>
		 	<input type="text" name="" id="email" id="email-label" placeholder="your email">
		 	<br>
		 	<label for="number-label">* Age:</label>
		 	<input type="number" name="" id="number" max="70" min="9" id="number-label" placeholder="number">
		 	<br>
		 	<label>Which option best describes your current role?</label>
		 	<select id="option">
		 		<option>Full time job</option>
		 		<option>Student</option>
		 		<option>Full time learner</option>
		 		<option>Prefered not to say</option>
		 		<option>Other</option>
		 	</select>
		 	<br>
		 	<label>* How likely is that you would recommend Software Developer Communities to a friend?</label>
		 	<br>
		 	<input type="radio" name="Definatly"> Definatly 
		 	<input type="radio" name="Maybe" > Maybe 
		 	<input type="radio" name="Not Sure"> Not Sure 
            <br>
            <label>What do you like most in Software Developer Communty:</label>
            <br>
		 	<input type="checkbox" name="" value="">Front-end Projects
		 	<input type="checkbox" name="" value="">Back-end Projects
		 	<input type="checkbox" name="" value="">Data Visualization
		 	<input type="checkbox" name="" value="">Challenges
		 	<input type="checkbox" name="" value="">Open Source Community
		 	<input type="checkbox" name="" value="">Gitter help rooms
		 	<input type="checkbox" name="" value="">Videos
		 	<input type="checkbox" name="" value="">City Meetups
		 	<input type="checkbox" name="" value="">Wiki
		 	<input type="checkbox" name="" value="">Forum
		 	<input type="checkbox" name="" value="">Additional Courses
             <br>
             <label>Any Comments or Suggestions?</label>
		 	<textarea></textarea>
		 	<br>
		 	<button type="submit" id="submit">Submit</button>
		 </form>

	</div>
  
</body>
</html>