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
    </style>
</head>

<body>
<?php 
include('first.php');
?>
     <div class="container-fluid m-0 p-0">
        <div class="jumbotron b-color jumbo-design">
            <div class="container pb-5 mb-5">
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <div class="card">
                            <div class="card-header display-6 text-capitalize text-center text-primary">
                                <span class="fa fa-user-circle-o fa-4x"></span>
                                <br>Registration
                            </div>
                            <div class="card-body">
                                <form action="signupback.php" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputName">Name</label>
                                        <input type="text" name="uname" class="form-control" id="exampleInputName" placeholder="Enter Name">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="uemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>

                                    <div class="form-check  d-inline-block mb-2">

                                        <input class="form-check-input" name="ugen" type="radio" id="exampleInputGender" value="male">
                                        <label class="form-check-label" for="exampleInputGender">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check d-inline-block mb-2 ">
                                        <input class="form-check-input" type="radio" name="ugen" id="exampleInputGender" value="female">
                                        <label class="form-check-label" for="exampleInputGender">
                                            Female
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="upass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label for=" exampleFormControlTextarea1">About</label>
                                        <textarea class="form-control" name="ucount" placeholder="Enter your " id="exampleFormControlTextarea1" rows="3"></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for=" exampleFormControlTextarea1">Organization</label>
                                        <textarea class="form-control" name="uorg" placeholder="Enter your " id="exampleFormControlTextarea1" rows="1"></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for=" exampleFormControlTextarea1">Skills</label>
                                        <textarea class="form-control" name="uskill" placeholder="Enter your " id="exampleFormControlTextarea1" rows="4"></textarea>

                                    </div>
                                                                       

                                    
                                    <input type="submit" name="login" value="submit" class="btn btn-primary">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>