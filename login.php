<?php
session_start();
$loginError = $_GET['message'];
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


        <title>Login</title>
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
            <div class="container content">
                <h1>myBCIT Secure Login</h1>
                <div class="row">
                    <div class="col-sm-6 description order-sm-2 my-4">
                        <h3>What's Inside?</h3>
                        <br/><strong>E-mail</strong>: Send and receive e-mail, and create your own personal address book.
                        <br/><strong>Calendar</strong>: Access and manage your personal, course and school calendars.
                        <br/><strong>Groups</strong>: Create, manage and join group homepages for clubs, affiliations and interests.
                        <br/>and much more...
                    </div>
                    <div class="col-sm-6 order-sm-1">


                        <form action="authenticate.php" method="post">
                            <label class="col-form-label" for="studentID"><strong>Student ID:</strong></label>
                            <input type="text" name="studentID" class="form-control" id="studentID" placeholder="Student ID">

                            <label class="col-form-label" for="password"><strong>Password:</strong></label>
                            <input type="text" name="password" class="form-control" id="password" placeholder="Password">

                            <div class="my-4">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div>

                        </form>

                        <span class="message">
                            <?php echo $loginError ?>
                        </span>
                        <br/>
                        <p class="my-4"><small>Logging in as a registered user indicates you have read and accepted the <a href="https://www.bcit.ca/itpolicies/index.shtml" id="link">Acceptable Use and Security policies</a>.</small></p>
                    </div>
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
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    </body>

    </html>
