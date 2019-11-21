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
                            <img src="images/flight1.jpg" class="" alt="Los Angeles" width="100%" height="500" style="object-fit:cover;">
                            <div class="carousel-caption">
                                <h3>Los Angeles</h3>
                                <p>We had such a great time in LA!</p>
                            </div>   
                        </div>
                        <div class="carousel-item">
                            <img src="images/flight2.jpeg" class="" alt="Chicago" width="100%" height="500">
                            <div class="carousel-caption">
                                <h3>Chicago</h3>
                                <p>Thank you, Chicago!</p>
                            </div>   
                        </div>
                        <div class="carousel-item">
                            <img src="images/flight3.jpg" class="" alt="New York" width="100%" height="500">
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
    </div>
    <div class="container" id="homepage">
		    <h1><b>Search Flights</b></h1>
		    <br />
		    <p><b>Choose your flight option</b></p>
		    <div class="btn-group btn-group-justified">			
                <div class="btn-group">
                    <button id="button1" type="button" href="#oneway" class="btn">One-way</button>
                </div>
                <div class="btn-group">
                    <button id="button2" type="button" href="#roundtrip" class="btn btn-primary">Round-trip</button>
                </div>
                <div class="btn-group">
                    <button id="button3" type="button" href="#all" class="btn btn-primary">Search all flights</button>
                </div>
		    </div>
		    <hr />
	        <div id="oneway">
		        <form role="form" action="SearchResultOneway.php" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="from">From:</label>
                            <input type="text" class="form-control" id="from" name="from" placeholder="City or Code" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="to">To:</label>
                            <input type="text" class="form-control" id="to" name="to" placeholder="City or Code" required>
                        </div>
                    </div>
                    <hr >
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="depart">Depart:</label>
                            <input type="date" class="form-control" id="depart" name="depart" required>
                        </div>
                    </div>   
                    <div class="row">
                        <hr >
                        <div class="col-sm-6">
                            <label for="class">Class:</label>
                            <select class="form-control" name="class">
                                <option value="Economy">Economy</option>
                                <option value="Business">Business</option>   
                            </select>
                        </div> 
                    </div> 
                    <br>
                    <div class="row">
                        <div class="col-sm-6"> 
                            <label class="radio-inline">
                                <input type="radio" name="stop" value="nonstop" checked>Non-Stop
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="stop" value="1stop">1 Stop
                            </label>
                        </div> 
                    </div> 
                    <br>
                    <div class="btn-group btn-group-justified">	
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        <div class="btn-group">
                            <button type="reset"  class="btn btn-info" value="Reset">Reset</button>
                        </div>
                    </div>
		        </form>
	        </div>
        
        </div>
        
    <?php
    include 'footer.php';
    ?>
S</body>