<?php
    
    // include header and title
    include 'header.php';
    echo '<title>Search Booking</title>';
?>
<body>
    <div id="page-container">
        <div class="row" >
            <div class="col-md-4">	</div>
            <div class="col-md-3 center-content">
                <h2><center>Search Your Booking</center></h2>
                <form action="include/search_booking.inc.php" class="loginForm" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="number" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required>
                    </div>
                    <button type="submit" name="search-submit" class="btn btn-block">Search</button>
                </form>
            </div>
            <div class="col-md-4">	</div>
        </div>
    </div>   
<?php
    include 'footer.php';
?>
</body>