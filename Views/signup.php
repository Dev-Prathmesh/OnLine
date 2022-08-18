<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnLine || Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="..\templates\assets\css\style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
          <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                    
                  <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">About us</a>
                  </li>
                </ul>
                <form class="d-flex col-6">
                  <div class="col">
                    <div class="input-group md-form form-sm form-2 pl-4">
                      <input class="form-control mx-2 my-2 px-2 py-0 amber-border" type="text" placeholder="Search your product here..." aria-label="Search">
                      <div class="col-6 col-md-4">
                      <button type="button" class="btn btn-light col-4"><?php
                          echo "<img src='../templates/assets/img/search.svg' >"; ?></button>
                      </div>
                      <button type="button" class="btn btn-dark col">Signup</button>
                      <button type="button" class="btn btn-outline-light col">Login</button>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </nav>
        <div class="container-fluid w-100 h-100">
        <div class="row">
              <div class="col sm-6"><?php
                            echo" 
                            <img class='img-fluid h-100'src='../templates/assets/img/ALL-11-05.png'>;"?></div>
              <div class="col" id="Signup-form">
                <h1 class="text-center">Signup as Customer</h1>
                  <form>
                      <div class="form-group">
                              <label for="exampleInputname1">Customer Name</label>
                              <input type="text" class="form-control" id="Name" placeholder="Name">
                      </div>
                      <div class="form-group">
                          <label for="Email">Email address</label>
                          <input type="email" class="form-control" id="Email"  placeholder="Enter email">
                      </div>
                      <div class="form-group">
                          <label for="examplePhoneNo">Phone number</label>
                          <input type="text" class="form-control" id="PhoneNo" placeholder="Phone number">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword">Password</label>
                          <input type="password" class="form-control" id="Password" placeholder="Password">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputConfirmPassword">Confirm Password</label>
                          <input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm Password">
                      </div>
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="AgreementCheck1">
                          <label class="form-check-label" for="exampleCheck1">I Agree to Terms & Conditions</label>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary justify-content-md-center col-4">Signup</button>
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </body>