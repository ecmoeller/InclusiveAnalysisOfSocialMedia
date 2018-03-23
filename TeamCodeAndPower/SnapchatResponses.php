<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Snapchat</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

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

    <div class="row">

        <h2 align="center">Scroll to the bottom to see our ratings!</h2>

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">Snapchat Inclusive Analysis</h1>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="snapchat.jpg" alt="">

            <hr>

            <!-- Post Content -->
            <p class="lead">Snapchat is a multimedia messaging app that allows users to send seven second videos to each other or post them on their stories for their friends to see. The application also allows for real-time communication via chat and video calling. Users often share daily moments in their lives with an audience while experimenting with the many photo filters available to them.</p>

            <p class="lead">Released six years ago, the application has gone through many updates and changes including the subscription page which allows celebrities and content creators to share media of interest to viewers. Snap Inc. is the company that owns the app which has about 187 million active users, according to Statista.</p>

            <p class="lead">Snapchat has been a popular app among North Americans and Europeans becoming apart of popular culture. Recently, the application came under fire for posting an advertisement making fun of the domestic violence incident with Chris Brown and Rihanna, causing the company to lose about a billion dollars.</p>

            <h4>Reporting abusive behavior / blocking mean people</h4>

            <hr>

            <p>Snapchat does have robust setting that allows users to be specific about who they would like to share content with. These settings allow users to click on others' names in order to access settings that will allow them to mute their story, set to "do not disturb," remove them as a friend, block, and/or report. </p>

            <h4>Features designed to prevent abuse</h4>

            <hr>

            <p>Snapchat does not censor or monitor its users content. The application responds soley based on user reports so if someone post content on their story that violates community standards and/or sends another user something inappropriate, the user who saw it must report it to Snapchat.</p>

            <h4>User agency</h4>

            <hr>

            <p>Due to Snapchat's robust settings, users have a lot of agency when determing who can see their content. In the apps settings, users can also determine who they would like to see or not see their story without alarming the other user.</p>

            <h4>Diversity of notable users / influencers</h4>

            <hr>

            <p>Snapchat allows anyone to become a content creator but the level of success required to land a spot on the subscription page is unclear to regular users, however, the subscription page hosts a diverse array of entertainers, athletes, internet celebrities and other high profile Snapchat users who are influencers.</p>

            <h4>Diversity of corporate structure</h4>

            <hr>

            <p>Snap Inc.'s officers maninly consists of white men but there is one white woman and a person of color. Under the officers, the staff following appear to be quite diverse, especially in terms of gender.</p>

            <h4>Community Building</h4>

            <hr>

            <p>Community building is a new concept to Snapchat. The application opperated as a closed circuit before allowing users to share their story with their friends (or public) or with one other person but now the applications allows users to communicate with private groups up to about 30 people. The application even allows for group stories now.</p>

            <hr>

            <p class="lead">Overall, the application has created a space for users to have casual conversation with each other, sometimes replacing text messaging functions on the phone. Snapchat is attracting content creators to use the platform to build their following and develop a relationship with their audience.</p>


            <hr>
            <h4>Our ratings compared with your ratings</h4>
            <!--Our ratings -->
            <!--Reporting Abusive Users / Blocking Mean People -->
            <p><strong>1. How inclusive do you feel Snapchat is at allowing users to report abusive users / block mean people?</strong></p>
            <p>You said <?php echo $_POST["snapchatMean"];?></p>
            <p>We said Very inclusive</p>

            <!-- Features Designed to Prevent Abuse -->
            <p><strong><br>2. How inclusive do you feel Snapchat is at building features designed to prevent abuse?</strong></p>
            <p>You said <?php echo $_POST["snapchatPrevent"];?></p>
            <p>We said Exclusive</p>

            <!-- User Agency -->
            <p><strong><br>3. How inclusive do you feel Snapchat is at giving users their own agency?</strong></p>
            <p>You said <?php echo $_POST["snapchatAgency"];?></p>
            <p>We said Very inclusive</p>

            <!-- Diversity of Notable Users / Influencers -->
            <p><strong><br>4. How inclusive do you feel Snapchat's representation of notable users / influencers is?</strong></p>
            <p>You said <?php echo $_POST["snapchatInfluencers"];?></p>
            <p>We said Standard</p>

            <!-- Diversity of Corporate Structure -->
            <p><strong><br>5. How inclusive do you feel Snapchat's corporate structure is?</strong></p>
            <p>You said <?php echo $_POST["snapchatCorporate"];?></p>
            <p>We said Moderately exclusive</p>

            <!-- Community Building -->
            <p><strong><br>6. How inclusive do you feel Snapchat is for community building?</strong></p>
            <p>You said <?php echo $_POST["snapchatCommunity"];?></p>
            <p>We said Moderately inclusive</p>


        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->





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