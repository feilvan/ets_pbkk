<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            /* padding: 1%; */
        }
        .food-search {
            background-image: url(../images/bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 7% 0;
        }

        .food-search input[type="search"] {
            width: 50%;
            padding: 1%;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
        }
        /*categories*/
        .float-container {
            position: relative;
        }
        .float-text {
            position: absolute;
            bottom: 50px;
            left: 40%;
        }
        .categories h2 {
            margin-top: 0.4rem;
            margin-bottom: 0;
        }
        /* CSS for Social */
        .social {
            padding: 5% 0;
        }
        .social ul {
            list-style-type: none;
        }
        .social ul li {
            display: inline;
            padding: 1%;
        }
       

    </style>
  </head>
  <body>
      <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" >
                <li class="nav-item">
                    <a class="nav-link text-danger" href="/">Home</a>
                </li>
                <li class="nav-item mycolor">
                    <a class="nav-link text-danger" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="/foods">Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="/register">Register</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>  
    <!-- end navbar -->
   <div class="container">
    <h1 class="text-center">Register</h1>
    <p class="text-center">ALREADY HAVE ACCOUNT?<a href="/login">Login</a></p>
    <form class="ps-checkout__form" action="/register/create" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
    

    <section class="social">
        <div class="text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
        <p class="text-center ms-4 px-5">2022</p>
    </section>
    

    <!-- footer Section Starts Here -->
    <!-- <section class="footer text-center"> 
            <p>2022</p>
    </section> -->
    <!-- footer Section Ends Here -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>