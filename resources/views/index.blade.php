@extends('template')

@section('content')

   <!-- CAtegories Section Starts Here -->
   <section class="categories my-5">
    <h2 class="text-center">Explore Foods</h2>

    @guest
    @else
         @if ( Auth::user()->email=="123@123.123" )
            <a href="/add-categories" class="btn btn-primary" style="margin-left:150px;">Add Categorie</a>
        @endif
    @endguest
    
    <div class="container row row-cols-1 row-cols-xxl-3 row-cols-md-3 g-4">
            @guest
            <a class="card text-white float-container border-0" href="#">
              <img src="images/pizza.jpg" class="card-img" alt="Pizza">
              <div class="card-img-overlay">
                <h5 class="card-title float-text ">Pizza</h5>
              </div>
            </a>
            @else
                @if ( Auth::user()->email=="123@123.123" )
                <div class="card text-white float-container border-0" href="#">
                    <img src="images/pizza.jpg" class="card-img" alt="Pizza">
                    <div class="card-img-overlay">
                        <h5 class="card-title float-text ">Pizza</h5>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-warning">Delete</button>
                         <button type="button" class="btn btn-success">Edit</button>
                     </div>
                </div>
                @endif
            @endguest  
            
            @guest 
            <a class="card text-white float-container border-0" href="#">
              <img src="images/burger.jpg" class="card-img" alt="Borgir">
              <div class="card-img-overlay">
                <h5 class="card-title float-text ">Burger</h5>
              </div>
            </a>
            @else 
                @if ( Auth::user()->email=="123@123.123" )
                <div class="card text-white float-container border-0" href="#">
                    <img src="images/burger.jpg" class="card-img" alt="Burger">
                    <div class="card-img-overlay">
                        <h5 class="card-title float-text ">Burger</h5>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-warning">Delete</button>
                         <button type="button" class="btn btn-success">Edit</button>
                     </div>
                </div>
                @endif
            @endguest
            
            <a class="card text-white float-container border-0" href="#">
              <img src="images/momo.jpg" class="card-img" alt="Momo">
              <div class="card-img-overlay">
                <h5 class="card-title float-text ">Momo</h5>
              </div>
            </a>
            
    </div>
        
    </section>
    <!-- Categories Section Ends Here -->

    
    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            @guest
            @else
                @if ( Auth::user()->email=="123@123.123" )
                    <a href="/add-foods" class="btn btn-primary my-5">Add Menu</a>
                @endif
            @endguest                   
            <div class="row">
                <div class="col-md-6">
                    <!--  -->
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                 <img width="80%" height="80%" src="images/menu-pizza.jpg" class="img-fluid rounded-start m-4" alt="...">
                            </div>
                            <div class="col-md-9">
                            <div class="card-body">
                                <h4>Food Title</h4>
                                <p class="food-price">$2.3</p>
                                <p class="food-detail">
                                    Made with Italian Sauce, Chicken, and organice vegetables.
                                </p>
                                <a href="/order" class="btn btn-danger">Order Now</a>
                                @guest
                                @else
                                    @if ( Auth::user()->email=="123@123.123" )
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning">Delete</button>
                                        <button type="button" class="btn btn-success">Edit</button>
                                    </div>
                                    @endif
                                @endguest
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <!--  -->
                </div>
                <div class="col-md-6">
                    <!--  -->
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                 <img width="80%" height="80%" src="images/menu-pizza.jpg" class="img-fluid rounded-start m-4" alt="...">
                            </div>
                            <div class="col-md-9">
                            <div class="card-body">
                                <h4>Food Title</h4>
                                <p class="food-price">$2.3</p>
                                <p class="food-detail">
                                    Made with Italian Sauce, Chicken, and organice vegetables.
                                </p>
                                <a href="/order" class="btn btn-danger">Order Now</a>
                                @guest
                                @else
                                    @if ( Auth::user()->email=="123@123.123" )
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning">Delete</button>
                                        <button type="button" class="btn btn-success">Edit</button>
                                    </div>
                                    @endif
                                @endguest
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <div class="col-md-6">
                    <!--  -->
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                 <img width="80%" height="80%" src="images/menu-pizza.jpg" class="img-fluid rounded-start m-4" alt="...">
                            </div>
                            <div class="col-md-9">
                            <div class="card-body">
                                <h4>Food Title</h4>
                                <p class="food-price">$2.3</p>
                                <p class="food-detail">
                                    Made with Italian Sauce, Chicken, and organice vegetables.
                                </p>
                                <a href="/order" class="btn btn-danger">Order Now</a>
                                @guest
                                @else
                                    @if ( Auth::user()->email=="123@123.123" )
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning">Delete</button>
                                        <button type="button" class="btn btn-success">Edit</button>
                                    </div>
                                    @endif
                                @endguest
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <div class="col-md-6">
                    <!--  -->
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                 <img width="80%" height="80%" src="images/menu-pizza.jpg" class="img-fluid rounded-start m-4" alt="...">
                            </div>
                            <div class="col-md-9">
                            <div class="card-body">
                                <h4>Food Title</h4>
                                <p class="food-price">$2.3</p>
                                <p class="food-detail">
                                    Made with Italian Sauce, Chicken, and organice vegetables.
                                </p>
                                <a href="/order" class="btn btn-danger">Order Now</a>
                                @guest
                                @else
                                    @if ( Auth::user()->email=="123@123.123" )
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning">Delete</button>
                                        <button type="button" class="btn btn-success">Edit</button>
                                    </div>
                                    @endif
                                @endguest
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <div class="col-md-6">
                    <!--  -->
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                 <img width="80%" height="80%" src="images/menu-pizza.jpg" class="img-fluid rounded-start m-4" alt="...">
                            </div>
                            <div class="col-md-9">
                            <div class="card-body">
                                <h4>Food Title</h4>
                                <p class="food-price">$2.3</p>
                                <p class="food-detail">
                                    Made with Italian Sauce, Chicken, and organice vegetables.
                                </p>
                                <a href="/order" class="btn btn-danger">Order Now</a>
                                @guest
                                @else
                                    @if ( Auth::user()->email=="123@123.123" )
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning">Delete</button>
                                        <button type="button" class="btn btn-success">Edit</button>
                                    </div>
                                    @endif
                                @endguest
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <div class="col-md-6">
                    <!--  -->
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-3">
                                 <img width="80%" height="80%" src="images/menu-pizza.jpg" class="img-fluid rounded-start m-4" alt="...">
                            </div>
                            <div class="col-md-9">
                            <div class="card-body">
                                <h4>Food Title</h4>
                                <p class="food-price">$2.3</p>
                                <p class="food-detail">
                                    Made with Italian Sauce, Chicken, and organice vegetables.
                                </p>
                                <a href="/order" class="btn btn-danger">Order Now</a>
                                @guest
                                @else
                                    @if ( Auth::user()->email=="123@123.123" )
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning">Delete</button>
                                        <button type="button" class="btn btn-success">Edit</button>
                                    </div>
                                    @endif
                                @endguest
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>

            <div class="clearfix"></div>

        </div>

        <p class="text-center">
            <a class="text-danger text-decoration-none" href="#">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->
@endsection