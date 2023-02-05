<html>
	<head>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/style1.css">
		<nav class="navbar navbar-fixed-top" id="top-nav">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Campus Recruitment System</a>
				</div>
				<ul id="list1" class="nav navbar-nav">
					<li class="active"><a href="index.html">Home</a></li>
				    <li class="active"><a href="index.html">Logout</a></li>
				</ul>
			</div>
		</nav>
	  </head>
	  <body>
	  
	  <?php
		session_start();
		$servername="localhost:5001";
					$username="root";
					$password="";
					$dbname="project";

		$conn = new mysqli($servername,$username,$password,$dbname);

		if($conn->connect_error){
			die("Connection failed: ".$conn->connect_error);
		}

		
		

		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$job_title=$_POST['job_title'];
			$salary=$_POST['salary'];
			$deadline=$_POST['deadline'];
			$bond=$_POST['bond'];
			$year=$_POST['year'];
			$cpi=$_POST['cpi'];
			$twp=$_POST['12p'];
			$tenp=$_POST['10p'];
			$branch=$_POST['branch'];
			$age=$_POST['age'];
			$degree=$_POST['degree'];
			$location=$_POST['location'];
			/*echo $name . "<BR>";
			echo $email. "<BR>";
			echo $dob. "<BR>";
			echo $branch. "<BR>";
			echo $year. "<BR>";
			echo $cpi. "<BR>";
			echo $twp. "<BR>";
			echo $tenp. "<BR>";
			echo $pwd. "<BR>";
			echo $phone. "<BR>";
			echo $degree. "<BR>";*/
			
			$sql="INSERT into vacancy(company_name,job_title,salary,location,deadline,bond,age_e,degree,cpi_e,year_e,12p_e,10p_e) 
			values('".$_SESSION['name']."','".$job_title."','".$salary."','".$location."','".$deadline."','".$bond."','".$age."','".$degree."','".$cpi."','".$year."','".$twp."','".$tenp."')";
			
			if($conn->query($sql)===TRUE){
			$GLOBALS['conn']->close();
		echo "<SCRIPT type='text/javascript'> //not showing me this
								alert('Vacancy Created Succesfully!!');
								window.location.replace(\"company_dash.php\");
							</SCRIPT>";
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
			
			/*
			$GLOBALS['conn']->close();
			header('Location: company_dash.php ');
			echo '<script language="javascript">';
			echo 'alert("Vacancy succesfully created!")';
			echo '</script>';*/
		}
	  ?>
	  
		<div class=" container-fluid " id="dash" >
		<h2>CREATE VACANCY</h2>
		<form action="vacancy.php" method="POST" enctype="multipart/form-data">
        <div class="container">
		   <h3>Job Details</h3>
           <hr>
           <ol>
          
		   
		   <li><label for="job_title"><b>Job Title:</b></label>
           <input type="text" name="job_title" required></li>

          <li><label for="salary"><b>Salary:</b></label>
          <input type="decimal" placeholder="in LPA" name="salary" required> </li>
	
			<li><label for="location"><b>Location:</b></label>
          <input type="text" placeholder="Ex.Delhi" name="location"></li>
		  
		  
	      <li><label for="deadline"><b>Deadline:</b></label>
          <input type="date" placeholder=" " name="deadline"></li>
	
          <li><label for="bond"><b>Bond:</b></label>
          <input type="number" placeholder=" " name="bond"></li>
	
	      <li><label for="10p"><b>10th Percentage:</b></label>
          <input type="decimal" placeholder="Ex.85.5" name="10p"></li>
		  
		  <li><label for="12p"><b>12th Percentage:</b></label>
          <input type="decimal" placeholder="Ex.85.5" name="12p"></li>
		  
		  <li><label for="year"><b>Year:</b></label>
          <input type="number" placeholder="Ex.2019" name="year"></li>
		  
		  <li><label for="cpi"><b>CPI:</b></label>
          <input type="decimal" placeholder="Enter minimum cpi required" name="cpi"></li>
		  
		  <li><label for="degree"><b>Course:</b></label>
	      <select name="degree" placeholder="Select">
          <option label="btech">B.Tech</option>
		  <option label="btech">M.Tech</option>
		  <option label="be">B.E</option>
		  <option label="me">M.E</option>
		   <option label="bca">BCA</option>
          <option label="mca">MCA</option>
	      <option label="msc">MSC</option>
		  </select></li>
		  
		  <li><label for="branch"><b>Branch:</b></label>
	      <select name="branch" placeholder="Select">
          <option label="cse">CSE</option>
          <option label="it">IT</option>
          <option label="ece">ECE</option>
	      <option label="mee">MEE</option>
	      <option label="msme">MSME</option>
	      <option label="che">CHE</option>
	      </select></li>
		  
		  <li><label for="age"><b>Maximum age:</b></label>
          <input type="number" placeholder=" " name="age"></li>
		  
		  
		  </ol>
          <hr>
		</div>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Create Vacancy</button>
  
		</form>
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
		</div>

	</body>
		<footer>
		<nav class="navbar navbar-footer" id="bottom-nav" style="width:110%">
			<div class="container-fluid">
				<div id="col1" >
					<ul id="blist1">
						<li><a href='#'>About Us</a></li>
						<li><a href='#'>FAQs</a></li>
						<li><a href='#'>Contact Us</a></li>
					</ul>
				</div>
				
				<div id="col2" >
					<ul id="blist1">
						<li><a href='#'>Privacy Policy</a></li>
						<li><a href='#'>Legal</a></li>
						<li><a href='#'>Work With Us</a></li>
					</ul>
				</div>
				
				<div id="col3" class=" container-fluid">
				
					<ul id="blist3" >
						<li><i class="fa fa-facebook fa-2x" ><a href='#'></a></i></li>
						<li><i class="fa fa-twitter fa-2x"><a href='#'></a></i></li>
						<li><i class="fa fa-instagram fa-2x"><a href='#'></a></i></li>
						<li><i class="fa fa-linkedin fa-2x"><a href='#'></a></i></li>
					</ul>
					<ul>
					<!--<p id="lic">site design / logo (c) Company_Name Inc.<br> licensed under Company_Name inc. </p>-->
					<li id="blist4">site design By Aditi Bankey,Akankasha<br> Shubham kumar MCA(Cloud Computing).</li>
					</ul>
				</div>
			</div>
		</nav>
	</footer>
</html>