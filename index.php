<?php
    
  // include header and title
  include 'header.php';
  echo '<title>Home Page</title>';
?>

  <body>
  	<div class="container-fluid" id="page-container">
  		<div class="row">
        <!-- Home Page Crasue -->
  			<div class="col-md-12 slider">
  				<div id="demo" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>   
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/slide1.jpg" class="" alt="Los Angeles" width="100%" height="500">
                  <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                  </div>   
                </div>
                <div class="carousel-item">
                  <img src="images/slide2.jpg" class="" alt="Chicago" width="100%" height="500">
                  <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                  </div>   
                </div>
                <div class="carousel-item">
                  <img src="images/slide3.jpg" class="" alt="New York" width="100%" height="500">
                  <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                  </div>   
                </div>
              </div>
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
  			</div>
  		</div>
      <hr>
      <div class="container">
      <div class="row">
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                </div>

                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <img src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                </div>

                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
            </div>
            </div>

            <div class="container mb-sm-5">
              <div class="row mt-sm-5">
                <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <img src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                     <img src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
                     <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                    </div>
                 </div>
            </div>
            </div>
            </div>
      
       </div>
      
  	</div>
     <?php
      include 'footer.php';
    ?> 
  </body>
</html>