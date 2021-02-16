<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Svvv_Ninja</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .jumbo-design {
            clip-path: polygon(41% 0, 84% 0, 100% 0, 99% 96%, 71% 83%, 25% 97%, 0 71%, 0 0);
        }
        
        .b-color {
            background-color: #ff1f1f!important;
        }
        
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}


    </style>
</head>

<body>
    <div class="m-0 p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary m-0 p-3 shadow">
            <a class="navbar-brand   text-white" href="./index.php"><span ><img src = "svvv_ninjas.png" style = "height:60px;">
        </span>Ninjas Freelancing</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                     
                </ul>
                
            </div>
            <div class="nav-item rounded border border-black mr-1">
                        <span class="fa fa-user fa-spin ml-1 pl-1"></span>
                        <a class="btn btn-primary mx-3 px-1" href="./login.php" >Login</a>
                    </div>
           <div class="nav-item rounded border border-black ml-5 mr-1">
                         <span class="fa fa-user fa-spin ml-1 pl-1"></span>
                        <a class="btn btn-primary mx-3 px-1" href="./signup.php">Signup</a>
           </div>
           <div class="nav-item rounded border border-black ml-5 mr-1">
                        <span class="fa fa-user fa-spin ml-1 pl-1"></span>
                        <a class="btn btn-primary mx-3 px-1" href="./logout.php" >Logout</a>
                    </div>
        </nav>
    </div>

<div class="dropdown">
  <button class="dropbtn">Find Job</button>
  <div class="dropdown-content">
  <a href="#">By Skill</a>
  <a href="#">By Region</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Find Freelancers</button>
  <div class="dropdown-content">
  <a href="#">By Skill</a>
  <a href="#">By Region</a>
  </div>
</div>

</body>
</html>

    
</body>
</html>