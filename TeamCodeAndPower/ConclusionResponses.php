<!-- Used to retrieve values from Home survey -->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Half Slider - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">

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
        <h1 class="display-3">Conclusion</h1>
        <p class="lead"> Now that you have taken a deeper look at the inclusivity of each social media, feel free to take the post-assessment!
            After you submit your responses you will see a comparison with your responses from the first page and you can see our rating for each social media.
        </p>
    </header>


    <hr>
    <h4>Comparison of responses at the beginning and at the end</h4>

    <!-- Twitter -->
    <p><strong> 1. How inclusive do you feel Twitter is?</strong></p>
    <p>After you read our website you rated Twitter as: <?php echo $_POST["twitter2"]; ?> </p>
    <p>We rated Twitter as Standard</p>

    <!-- Snapchat -->
    <p><strong> 1. How inclusive do you feel Snapchat is?</strong></p>
    <p>After you read our website you rated Snapchat as: <?php echo $_POST["snapchat2"]; ?> </p>
    <p>We rated Snapchat as Standard</p>

    <!-- Instagram -->
    <p><strong> 1. How inclusive do you feel Instagram is?</strong></p>
    <p>After you read our website you rated Instagram as: <?php echo $_POST["instagram2"]; ?> </p>
    <p>We rated Instagram as Standard</p>

    <!-- Reddit -->
    <p><strong> 1. How inclusive do you feel Reddit is?</strong></p>
    <p>After you read our website you rated Reddit as: <?php echo $_POST["reddit2"]; ?> </p>
    <p>We rated Reddit as Moderately exclusive</p>

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