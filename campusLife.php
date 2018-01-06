<?php 
session_start(); 
if (!isset($_SESSION["authenticated"])){
	header("Location: login.php"); 
    die();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <link rel="stylesheet" href="./Style/stylesheet.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


    <title>Campus Life</title>
</head>

<body>
        <div class="container-fluid">
            <div class="TopBorder row align-items-center">
                <div class="col-2">
                    <img class="logo" src="Images/BCIT%20Logo.png" alt="logo">
                </div>
                <div class="col-10">
                    MyBCIT
                </div>
            </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="studentResources.php">Student Resources</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="campusLife.php">Campus Life</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Email &amp Calendar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Groups</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Help</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="mainContent row">

            <br/>
            <div class="container my-4">

                <img class="img-fluid" src="Images/map.png" alt="map" />

                <br/>
                <div class="row justify-content-around">
                    <div class="col-md-5  border my-4 py-4">
                        <h5><b>Recreation &amp; Athletics</b></h5>
                        <ul>
                            <li>
                                <a href="https://www.bcit.ca/recreation" class="others">
                                    <p>Recreation Services</p>
                                </a>
                            </li>
                        </ul>
                        <p class="smalltext">BCIT Recreation <span><img src="images/2798572604022504.jpg" alt="" class=" noresize1" align="right"/></span>Services is dedicated to the health and well-being of our students, faculty and staff, and members of the community. We consider recreation an integral part of campus life and welcome everyone to discover, participate and enjoy our many services. We encourage a well-balanced, active lifestyle that offsets the rigors of academia and everyday life.
                        </p>

                    </div>

                    <div class="col-md-5 border my-4 py-4">
                        <h5><b>International Students</b></h5>
                        <ul>
                            <li>
                                <a href="https://www.bcit.ca/international/contact//" class="others">
                                    <p>International Student Centre</p>
                                </a>
                            </li>
                        </ul>
                        <p class="smalltext">The International <span><img src="images/2716405207207298.jpg" alt="" class="col-md-6 noresize2" align="right"/></span>Student Centre offer special events and workshops throughout the year. Come and participate and meet new friends! The International Student Centre is located in SW01-1170 at the Burnaby Campus and in Room 782 at the Downtown Campus. <br/><br/> The School of Business International office is located in Building SE06-210A.
                        </p>
                    </div>
                </div> <br/>
                <div class="row justify-content-around">
                    <div class="col-md-5  border my-4 py-4">
                        <h5><b>Student Innovation Challenge</b></h5>

                        <img src="images/sic.jpg" alt="" class="img-fluid" />
                    </div>

                    <div class="col-md-5 border my-4 py-4">
                        <h5><b>Go Green</b></h5>
                        <ul>
                            <li>
                                <a href="https://www.bcit.ca/sustainability/" class="others">
                                    <p>Sustainability at BCIT</p>
                                </a>
                            </li>
                        </ul>

                        <p class="smalltext">BCIT supports a population of over 15,000 full time staff and students. Institutions of this size face the same environmental challenges as a small city, and as those populations grow, so do the stresses on transportation, power and waste management systems.
                        </p>
                    </div>
                </div>
            </div><br/>
        </div>

                <div class="footer row align-items-center">
                    <div class="col-1">
                        <a href="login.php">
                    <img src="Images/Home%20Logo.png" alt="home" class="homeimage">
                </a>
                    </div>
                    <div class="col-11 reportIssueLink">
                        Problems with this page? Please <a class="reportIssueLink underline" href="https://www.bcit.ca/its/web/feedback.shtml?from=https://www.bcit.ca/facilities/projectservices/policies.shtml">let us know.</a>
                    
                        <a href="https://www.bcit.ca/copyright/"> &copy; Copyright</a> 
                        <a href="https://www.bcit.ca/privacy/">Privacy Policy</a>
                    </div>
                </div>



    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>
