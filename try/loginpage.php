
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Login Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: black;
            font-size: medium;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
   
   li{
    float:right;
	display:inline-block;
	margin: 20px 20px;
	}
.tit{ float:right;
      color:white;
	  margin:10px;
	  }
	ul li a{
 color:black;
 }
 .div1{ 
        width:150;
		height:150;
		float:left;
		margin:2px;
		}
.div2 { 
        width:1050;
        height:150;
        margin:0 auto;
  } 
.div3{ 
        width:150;
		height:150;
		float:left;
		margin:2px;
		}
.div4{ 
        width:1050;
        height:150;
        margin:0 auto;
  } 
 .div5{ 
        width:150;
		height:150;
		float:left;
		margin:2px;
		}
.div6{ 
        width:1050;
        height:150;
        margin:0 auto;
  }  
  
  a{text-decoration:none;
   color:white;
   }

  
       
 </style>
</head>
 
<body>
<body style="background-image:url('green.jpg');background-repeat:no-repeat;background-size:100% 100% ;background-attachment:fixed;">

<div class="tit">
<ul style="font-size:2px">
<div id = "frm">
 

</h1>
</div> 
<!----<li><a href="Sales.html"><b>Sales</b></a></li>--->
<!----<li><a href="http://localhost/artists/loginpage.php"><b>Login Page</b></a></li>
<li><a href="http://localhost/artists/homepage.html"><b>Home</b></a></li>--->
</ul>
</div>




<html>  
<head>  
    <title>PHP login system</title>  
    <!---insert style.css file inside index.html---> 
    <link rel = "stylesheet" type = "text/css" href = "style1.css">   
</head>  
<body>  
    <div id = "frm">  
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1><i><center>WELCOME TO CHITRAKALA BHAVAN<i></h1>  
        <center>
        <form action="authentication.php" method="post">
  <div class="imgcontainer">
  
    <img src="img.png" alt="Avatar" class="avatar">
  </div>
<br>
  <div class="container">
    <center><label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <br>
    
    <center><label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <br>
    <center><input type="checkbox" checked="checked" name="remember"> Remember me
    <br>
    <br>
    <button type="submit">Login</button>
    <label>
        <br>
        
     <!-- <input type="checkbox" checked="checked" name="remember"> Remember me-->
    </label>
  </div>

  <div class="container" style="background-color:">
    <button type="button" class="cancelbtn">Cancel</button>
    <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
  </div>
</form>
        
</center>
    </div>  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  

    