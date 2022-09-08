<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>

    <!-- link css file  -->
    <link rel="stylesheet" href="style.css">
</head>


<body>



    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/    navbar     /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/     -->

    <nav>
        <div id="navbar">
            <div class="nav-tex">GSFC University </div>
        </div>
    </nav>

    <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/   details-sec section   /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/     -->

    <section class="details-sec" id="details-sec">


 
        <form onsubmit="takevalue()" method="get" >
		
		<h2 class=" title">Admission Form</h2>

            <div class="fields">
                <div class="field">
                    <input type="text" id="fname" pattern="[A-Z a-z]" placeholder="First Name" required>
                </div>
                <div class="field">
                    <input type="text" id="lname" pattern="[A-Z a-z]" placeholder="Last Name" required>
                </div>
            </div>

            <div class="field" style="width: 94%;">
                <input type="email" id="email" placeholder="Email " required>
            </div>
			
			 <div class="field" style="width: 94%;">
            <input type="number" id="pno" placeholder="Phone number" pattern="[0-9]{10}" required>
          </div>
		  
	
          

          <div class="field">
            <select id="branch">
              <option value="not sel"> Select Your Branch </option>
              <option value="111"> </option>
             
              <option value="Chemical Engineering">Chemical Engineering</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <option value="Computer Science and Engineering">Computer Science and Engineering </option>
              


            </select>
          </div>
          
      

            <div class="button-area">
                <button type="submit" id="sub">Submit</button>
               
              
                <button type="back" id="reset">Reset</button>
                <a href="../index.php" style="margin-top: 50px; margin-left: 290px;">Back</a>

            </div>
        </form>

    </section>



    <!-- link js file  -->

    <script src="script.js"></script>

</body>

</html>