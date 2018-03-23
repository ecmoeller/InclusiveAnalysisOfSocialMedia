
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
                    <a class="nav-link" href="Convoz.php">Convoz</a>
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



        <!--Post assessment after reading our research -->
        <form action="ConclusionResponses.php" method="post">


            <!--Twitter -->
            <p><strong>1. How inclusive do you feel Twitter is?</strong></p>
            <input type="radio" name="twitter2"
                <?php if (isset($twitter2) && $twitter2=="Very inclusive") echo "checked";?>
                   value="Very inclusive">Very inclusive
            <input type="radio" name="twitter2"
                <?php if (isset($twitter2) && $twitter2=="Moderately inclusive") echo "checked";?>
                   value="Moderately inclusive">Moderately inclusive
            <input type="radio" name="twitter2"
                <?php if (isset($twitter2) && $twitter2=="Standard") echo "checked";?>
                   value="Standard">Standard
            <input type="radio" name="twitter2"
                <?php if (isset($twitter2) && $twitter2=="Moderately exclusive") echo "checked";?>
                   value="Moderately exclusive">Moderately exclusive
            <input type="radio" name="twitter2"
                <?php if (isset($twitter2) && $twitter2=="Exclusive") echo "checked";?>
                   value="Exclusive">Exclusive

            <!--Snapchat -->
            <p><strong><br>2. How inclusive do you feel Snapchat is?</strong></p>
            <input type="radio" name="snapchat2"
                <?php if (isset($snapchat2) && $snapchat2=="Very inclusive") echo "checked";?>
                   value="Very inclusive">Very inclusive
            <input type="radio" name="snapchat2"
                <?php if (isset($snapchat2) && $snapchat2=="Moderately inclusive") echo "checked";?>
                   value="Moderately inclusive">Moderately inclusive
            <input type="radio" name="snapchat2"
                <?php if (isset($snapchat2) && $snapchat2=="Standard") echo "checked";?>
                   value="Standard">Standard
            <input type="radio" name="snapchat2"
                <?php if (isset($snapchat2) && $snapchat2=="Moderately exclusive") echo "checked";?>
                   value="Moderately exclusive">Moderately exclusive
            <input type="radio" name="snapchat2"
                <?php if (isset($snapchat2) && $snapchat2=="Exclusive") echo "checked";?>
                   value="Exclusive">Exclusive


            <!-- Instagram -->
            <p><strong><br>3. How inclusive do you feel Instagram is?</strong></p>
            <input type="radio" name="instagram2"
                <?php if (isset($instagram2) && $instagram2=="Very inclusive") echo "checked";?>
                   value="Very inclusive">Very inclusive
            <input type="radio" name="instagram2"
                <?php if (isset($instagram2) && $instagram2=="Moderately inclusive") echo "checked";?>
                   value="Moderately inclusive">Moderately inclusive
            <input type="radio" name="instagram2"
                <?php if (isset($instagram2) && $instagram2=="Standard") echo "checked";?>
                   value="Standard">Standard
            <input type="radio" name="instagram2"
                <?php if (isset($instagram2) && $instagram2=="Moderately exclusive") echo "checked";?>
                   value="Moderately exclusive">Moderately exclusive
            <input type="radio" name="instagram2"
                <?php if (isset($instagram2) && $instagram2=="Exclusive") echo "checked";?>
                   value="Exclusive">Exclusive

            <!-- Reddit -->
            <p><strong><br>4. How inclusive do you feel Reddit is?</strong></p>
            <input type="radio" name="reddit2"
                <?php if (isset($reddit2) && $reddit2=="Very inclusive") echo "checked";?>
                   value="Very inclusive">Very inclusive
            <input type="radio" name="reddit2"
                <?php if (isset($reddit2) && $reddit2=="Moderately inclusive") echo "checked";?>
                   value="Moderately inclusive">Moderately inclusive
            <input type="radio" name="reddit2"
                <?php if (isset($reddit2) && $reddit2=="Standard") echo "checked";?>
                   value="Standard">Standard
            <input type="radio" name="reddit2"
                <?php if (isset($reddit2) && $reddit2=="Moderately exclusive") echo "checked";?>
                   value="Moderately exclusive">Moderately exclusive
            <input type="radio" name="reddit2"
                <?php if (isset($reddit2) && $reddit2=="Exclusive") echo "checked";?>
                   value="Exclusive">Exclusive
            <br><br>
            <input type="submit" name="SubmitButton">

        </form>
        <br>
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
