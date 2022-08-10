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
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" id="navbar">
          <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <!-- <a class="navbar-brand" href="#">Hidden brand</a> -->
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
                      <input class="form-control mx-2 my-2 px-2 py-2 amber-border" type="text" placeholder="Search your product here..." aria-label="Search">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>