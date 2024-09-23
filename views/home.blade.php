<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FreshRootsMart</title>
  
  <link rel="stylesheet" href="{{ asset('aset/css/style.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
<body>
  <header class="d-flex justify-content-between align-items-center p-3 bg-light shadow-sm">
    <a href="#" class="logo"><i class="bx bxs-basket"></i> FreshRootsMart</a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar d-flex list-unstyled">
      <li class="me-3"><a href="#home" class="home-active">Home</a></li>
      <li class="me-3"><a href="#categories">Categories</a></li>
      <li class="me-3"><a href="#products">Products</a></li>
      <li class="me-3"><a href="#about">About</a></li>
      <li><a href="#customers">Customers</a></li>
    </ul>
  </header>

  <script>
    const menuIcon = document.getElementById('menu-icon');
    const navbar = document.querySelector('.navbar');

    menuIcon.addEventListener('click', () => {
      navbar.classList.toggle('show');
    });
  </script>
</body>
     
    <section class="home" id="home" class="text-center position-relative">
  <img src="aset/images/background.jpeg" alt="" class="img-fluid w-100" style="height: auto;">

  <div class="home-text position-absolute top-50 start-50 translate-middle text-white">
    <span class="d-block mb-2">Healthy Veggies for a Better Life</span>
    <h1 class="display-4">Choose FreshRootsMart <br> The Best Healthy <br> Vegetables & Fruits</h1>
    <a href="#" class="btn btn-primary">Shop Now <i class='bx bx-right-arrow-alt'></i></a>
  </div>
</section>

    
<section class="categories" id="categories" class="text-center my-5">
    <div class="heading mb-4">
        <h1>Browse Our Hottest <br><span class="text-primary">Categories</span></h1>
        <a href="#" class="btn btn-secondary">See All <i class='bx bx-right-arrow-alt'></i></a>
    </div>

    <div class="categories-container d-flex justify-content-center flex-wrap">
        <div class="box me-3 mb-4 text-center" style="width: 200px;">
            <img src="aset/images/icon fruits.jpg" alt="" class="img-thumbnail mb-2">
            <h2>Fruits</h2>
            <span class="text-muted">18 items</span>
        </div>
        <div class="box text-center" style="width: 200px;">
            <img src="aset/images/icon vegetable.jpg" alt="" class="img-thumbnail mb-2">
            <h2>Vegetables</h2>
            <span class="text-muted">26 items</span>
        </div>
    </div>
</section>


<section class="products" id="products" class="text-center my-5">
    <div class="heading mb-4">
      
    <!-- Fruits --> 
       
    <section class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/apple.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/avocado.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/banana.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/cherry.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/dragon fruit.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/durian.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/green grape.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/kiwi.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/lemon.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/lime.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/lychee.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/mango.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/mangosteen.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/orange.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/passion fruit.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/pineapple.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/strawberry.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/watermelon.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Fruits 250g</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>

    <!-- Vegetable --> 

    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/asparagus.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/BEANS.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br>Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/Broccoli.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/cabbage.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/carrot.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/celery.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/chayote.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/chili.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/coriander.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/corn.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/cucumber.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/garlic.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/jinger.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/leek.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/lemongrass.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/lettuce.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/mustard.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/onion.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/paprika.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/potato.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/purple eggplant.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/radish.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/red onion.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/sweet potato.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/tauge.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/tomato.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100 text-center shadow-sm">
        <img src="aset/images/turmeric.jpg" class="card-img-top img-fluid" alt="Fresh Organic Fruits">
        <div class="card-body">
          <span class="text-muted">Fresh Items</span>
          <h2 class="card-title mt-2">Farm Fresh Organic <br> Vegetable</h2>
          <h3 class="price text-success">$7.99 /kg</h3>
          <div class="d-flex justify-content-center mt-3">
            <i class='bx bx-cart-alt me-3'></i>
            <i class='bx bx-heart-alt'></i>
          </div>
          <span class="discount text-danger mt-2">-25%</span>
        </div>
      </div>
    </div>
  </div>
</section>



       
<section class="about text-center my-5" id="about">
  <img src="aset/images/about us.jpg" alt="About Us" class="img-fluid mb-4">
  <div class="about-text">
    <span class="h5 text-uppercase">About Us</span>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam possimus laboriosam consequuntur blanditiis? Aspernatur odit excepturi earum facere consectetur quae. Illum, soluta omnis. Dolores cum hic odio voluptas nisi facere!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, soluta iusto.</p>
    <a href="#" class="btn btn-primary">Learn More <i class='bx bx-right-arrow-alt'></i></a>
  </div>
</section>

<section class="customers text-center my-5" id="customers">
  <h2 class="mb-4">Why Customers Love Us?</h2>
  <div class="customers-container d-flex flex-wrap justify-content-center">

    <div class="box me-3 mb-4 text-start">
      <i class='bx bxs-quote-alt-left'></i>
      <div class="stars">
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star-half'></i>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, voluptate! Debitis libero id maiores aut odio.</p>
      <div class="review-profile d-flex align-items-center">
        <img src="aset/images/michele smith.jpg" alt="Michele Smith" class="rounded-circle" width="50">
        <h3 class="ms-2">Michele Smith</h3>
      </div>
    </div>

    <div class="box me-3 mb-4 text-start">
      <i class='bx bxs-quote-alt-left'></i>
      <div class="stars">
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star-half'></i>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, voluptate! Debitis libero id maiores aut odio.</p>
      <div class="review-profile d-flex align-items-center">
        <img src="aset/images/jackson.jpg" alt="Jackson" class="rounded-circle" width="50">
        <h3 class="ms-2">Jackson</h3>
      </div>
    </div>

    <div class="box text-start">
      <i class='bx bxs-quote-alt-left'></i>
      <div class="stars">
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star'></i>
        <i class='bx bxs-star-half'></i>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, voluptate! Debitis libero id maiores aut odio.</p>
      <div class="review-profile d-flex align-items-center">
        <img src="aset/images/maurice.jpg" alt="Maurice" class="rounded-circle" width="50">
        <h3 class="ms-2">Maurice</h3>
      </div>
    </div>

  </div>
</section>

<section class="footer text-center my-5" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 footer-box">
        <a href="#" class="logo"><i class="bx bx-basket"></i> FreshRootsMart</a>
        <p>GymVast, 50th Street 4th <br> Floor, NYC 10022</p>
        <div class="social">
          <a href="#" class="me-3"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="me-3"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="me-3"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-youtube"></i></a>
        </div>
      </div>

      <div class="col-md-3 footer-box">
        <h2>Categories</h2>
        <a href="#">Fruits & Vegetables</a><br>
        <a href="#">Dairy Products</a><br>
        <a href="#">Packaged Food</a><br>
        <a href="#">Beverages</a>
      </div>

      <div class="col-md-3 footer-box">
        <h2>Useful Links</h2>
        <a href="#">Payment & Tax</a><br>
        <a href="#">Terms Of Use</a><br>
        <a href="#">Blog</a><br>
        <a href="#">Return Policy</a>
      </div>

      <div class="col-md-3 footer-box">
        <h2>Newsletter</h2>
        <p>Get 10% Discount with <br>Email Newsletter</p>
        <form action="">
          <div class="input-group mb-3">
            <i class='bx bxs-envelope input-group-text'></i>
            <input type="email" class="form-control" placeholder="Enter Your Email" required>
            <button type="submit" class="btn btn-primary">
              <i class='bx bx-arrow-back bx-rotate-180'></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<div class="copyright text-center my-4">
  <p>&#169; FreshRootsMart All Rights Reserved.</p>
</div>


<script src="main.js"></script>
