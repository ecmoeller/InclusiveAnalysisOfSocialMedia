
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="twitter.php">Twitter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Snapchat.php">Snapchat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Instagram.php">Instagram</a>
                <li class="nav-item">
                    <a class="nav-link" href="Reddit.php">Reddit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Conclusion.php">Conclusion</a>
                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">Inclusive Analysis of Social Media</h1>
        <p class="lead"> We have identified 6 different qualifications to assess the inclusiveness of 4 different social media websites.
        <br>These categories are Reporting abusive behavior / blocking mean people, Features designed to prevent abuse, User agency,
             Diversity of notable users / influencers, Diversity of corporate structure, and Community Building.
        </p>
    </header>


    <?php
    if(isset($_POST["SubmitButtonHome"])){ //check if form was submitted
        $message = "Your responses have been recorded. Thank you!";
    }else{
        $message = "";
    }
    ?>

    <!--Pre Survey before reading our research -->
    <h4>Before reading our assessments of inclusiveness for each social media, take the pre-assessment!</h4>
    <form action="" method="post">


        <!--Twitter -->
        <p><strong>1. How inclusive do you feel Twitter is?</strong></p>
        <input type="radio" name="twitter"
            <?php if (isset($twitter) && $twitter=="Very inclusive") echo "checked";?>
               value="Very inclusive">Very inclusive
        <input type="radio" name="twitter"
            <?php if (isset($twitter) && $twitter=="Moderately inclusive") echo "checked";?>
               value="Moderately inclusive">Moderately inclusive
        <input type="radio" name="twitter"
            <?php if (isset($twitter) && $twitter=="Standard") echo "checked";?>
               value="Standard">Standard
        <input type="radio" name="twitter"
            <?php if (isset($twitter) && $twitter=="Moderately exclusive")  echo "checked";?>
               value="Moderately exclusive">Moderately exclusive
        <input type="radio" name="twitter"
            <?php if (isset($twitter) && $twitter=="Exclusive") echo "checked";?>
               value="Exclusive">Exclusive

        <!--Snapchat -->
        <p><strong><br>2. How inclusive do you feel Snapchat is?</strong></p>
        <input type="radio" name="snapchat"
            <?php if (isset($snapchat) && $snapchat=="Very inclusive") echo "checked";?>
               value="Very inclusive">Very inclusive
        <input type="radio" name="snapchat"
            <?php if (isset($snapchat) && $snapchat=="Moderately inclusive") echo "checked";?>
               value="Moderately inclusive">Moderately inclusive
        <input type="radio" name="snapchat"
            <?php if (isset($snapchat) && $snapchat=="Standard") echo "checked";?>
               value="Standard">Standard
        <input type="radio" name="snapchat"
            <?php if (isset($snapchat) && $snapchat=="Moderately exclusive") echo "checked";?>
               value="Moderately exclusive">Moderately exclusive
        <input type="radio" name="snapchat"
            <?php if (isset($snapchat) && $snapchat=="Exclusive") echo "checked";?>
               value="Exclusive">Exclusive


        <!-- Instagram -->
        <p><strong><br>3. How inclusive do you feel Instagram is?</strong></p>
        <input type="radio" name="instagram"
            <?php if (isset($instagram) && $instagram=="Very inclusive") echo "checked";?>
               value="Very inclusive">Very inclusive
        <input type="radio" name="instagram"
            <?php if (isset($instagram) && $instagram=="Moderately inclusive") echo "checked";?>
               value="Moderately inclusive">Moderately inclusive
        <input type="radio" name="instagram"
            <?php if (isset($instagram) && $instagram=="Standard") echo "checked";?>
               value="Standard">Standard
        <input type="radio" name="instagram"
            <?php if (isset($instagram) && $instagram=="Moderately exclusive") echo "checked";?>
               value="Moderately exclusive">Moderately exclusive
        <input type="radio" name="instagram"
            <?php if (isset($instagram) && $instagram=="Exclusive") echo "checked";?>
               value="Exclusive">Exclusive

        <!-- Reddit -->
        <p><strong><br>4. How inclusive do you feel Reddit is?</strong></p>
        <input type="radio" name="reddit"
            <?php if (isset($reddit) && $reddit=="Very inclusive") echo "checked";?>
               value="Very inclusive">Very inclusive
        <input type="radio" name="reddit"
            <?php if (isset($reddit) && $reddit=="Moderately inclusive") echo "checked";?>
               value="Moderately inclusive">Moderately inclusive
        <input type="radio" name="reddit"
            <?php if (isset($reddit) && $reddit=="Standard") echo "checked";?>
               value="Standard">Standard
        <input type="radio" name="reddit"
            <?php if (isset($reddit) && $reddit=="Moderately exclusive") echo "checked";?>
               value="Moderately exclusive">Moderately exclusive
        <input type="radio" name="reddit"
            <?php if (isset($reddit) && $reddit=="Exclusive") echo "checked";?>
               value="Exclusive">Exclusive
        <br><br>
        <input type="submit" name="SubmitButtonHome">
        <?php echo $message; ?>
    </form>
    <br>

    <!-- Page Features -->
    <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="Twitter_bird.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">Twitter</h4>
                </div>
                <div class="card-footer">
                    <a href="twitter.php" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="snapchat.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">Snapchat</h4>
                </div>
                <div class="card-footer">
                    <a href="Snapchat.php" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="instagram.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Instagram</h4>
                </div>
                <div class="card-footer">
                    <a href="Instagram.php" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="reddit.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Reddit</h4>
                </div>
                <div class="card-footer">
                    <a href="Reddit.php" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Inclusive Analysis of Social Media 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>