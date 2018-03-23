<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reddit Inclusive Analysis</title>

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

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">Reddit Inclusive Analysis</h1>


            <!-- Preview Image -->
            <img class="img-fluid rounded" src="reddit2.png" alt="">

            <hr>

            <!-- Post Content -->
            <h4>Reporting Abusive Users / Blocking Mean People</h4>

            <p>There are a couple different ways to report/block content on Reddit. The first is to simply block a user by clicking on their account and choosing to block them. The other way of reporting abuse is done by the moderators on each subreddit. The moderators are allowed a fair amount of control over their subreddit such as the ability to remove comments from certain users, ban users from posting, restrict access, and exclude spam posts.</p>

            <hr>

            <h4>Features Designed to Prevent Abuse</h4>

            <p>There are a couple different ways to report/block content on Reddit. The first is to simply block a user by clicking on their account and choosing to block them. The other way of reporting abuse is done by the moderators on each subreddit. The moderators are allowed a fair amount of control over their subreddit such as the ability to remove comments from certain users, ban users from posting, restrict access, and exclude spam posts.</p>

            <hr>

            <h4>User agency </h4>

            <p>Reddit does not request much personal information when creating an account. The only information that is required to make an account is a username, password, and an email. However, the popular page of Reddit can still be viewed without an account. Users are only identified by their user name, therefore no picture is present so it is difficult to get a sense of the identity of the person. This results in a sort of erasure of identity that causes people to project their own biases on to the anonymous human. Therefore, most people assume that everyone is a white male, unless it is stated otherwise. </p>

            <hr>

            <h4>Diversity of Notable Users / Influencers</h4>

            <p>Since Reddit is completely anonymous, and the only way to identifier a user is by their username, it is impossible to get exact diversity statistics. Because Reddit is anonymous, it relies less on the notion of celebrity, so it is impossible to search for specific people by their name. You can search for users by their username, but their search function is not great. You are also allowed to follow users, but it is more common to follow subreddit communities. With this in mind, it makes more sense to assess the inclusiveness of the most popular subreddits. From my personal experience, I found the most popular subreddits to be an incredibly toxic environment that is frequently littered with racist and sexist posts. The small subreddits tend to be a more inclusive environment in you find a positive subreddit, but this allows for toxic communities to find a space as well. </p>

            <hr>

            <h4>Diversity of Corporate Structure</h4>

            <p>Out of the 7 key executives at Reddit, 6 of them are white men and the seventh was a white women, so zero people of color were included as key executives.  </p>

            <hr>

            <h4>Community Building</h4>

            <p>In theory, reddit has a fairly good platform for community building, since the title of each subreddit is based on a community, but it currently has not embraced a wide variety of diverse communities.</p>

            <hr>
            <h4>Take this survey to see our rankings in each category!</h4>

            <form action="RedditResponses.php" method="post">

                <!--Reporting Abusive Users / Blocking Mean People -->
                <p><strong>1. How inclusive do you feel Reddit is at allowing users to report abusive users / block mean people?</strong></p>
                <input type="radio" name="redditMean"
                    <?php if (isset($redditMean) && $redditMean=="Very inclusive") echo "checked";?>
                       value="Very inclusive">Very inclusive
                <input type="radio" name="redditMean"
                    <?php if (isset($redditMean) && $redditMean=="Moderately inclusive") echo "checked";?>
                       value="Moderately inclusive">Moderately inclusive
                <input type="radio" name="redditMean"
                    <?php if (isset($redditMean) && $redditMean=="Standard") echo "checked";?>
                       value="Standard">Standard
                <input type="radio" name="redditMean"
                    <?php if (isset($redditMean) && $redditMean=="Moderately exclusive") echo "checked";?>
                       value="Moderately exclusive">Moderately exclusive
                <input type="radio" name="redditMean"
                    <?php if (isset($redditMean) && $redditMean=="Exclusive") echo "checked";?>
                       value="Exclusive">Exclusive

                <!-- Features Designed to Prevent Abuse -->
                <p><strong><br>2. How inclusive do you feel Reddit is at building features designed to prevent abuse?</strong></p>
                <input type="radio" name="redditPrevent"
                    <?php if (isset($redditPrevent) && $redditPrevent=="Very inclusive") echo "checked";?>
                       value="Very inclusive">Very inclusive
                <input type="radio" name="redditPrevent"
                    <?php if (isset($redditPrevent) && $redditPrevent=="Moderately inclusive") echo "checked";?>
                       value="Moderately inclusive">Moderately inclusive
                <input type="radio" name="redditPrevent"
                    <?php if (isset($redditPrevent) && $redditPrevent=="Standard") echo "checked";?>
                       value="Standard">Standard
                <input type="radio" name="redditPrevent"
                    <?php if (isset($redditPrevent) && $redditPrevent=="Moderately exclusive") echo "checked";?>
                       value="Moderately exclusive">Moderately exclusive
                <input type="radio" name="redditPrevent"
                    <?php if (isset($redditPrevent) && $redditPrevent=="Exclusive") echo "checked";?>
                       value="Exclusive">Exclusive


                <!-- User Agency -->
                <p><strong><br>3. How inclusive do you feel Reddit is at giving users their own agency?</strong></p>
                <input type="radio" name="redditAgency"
                    <?php if (isset($redditAgency) && $redditAgency=="Very inclusive") echo "checked";?>
                       value="Very inclusive">Very inclusive
                <input type="radio" name="redditAgency"
                    <?php if (isset($redditAgency) && $redditAgency=="Moderately inclusive") echo "checked";?>
                       value="Moderately inclusive">Moderately inclusive
                <input type="radio" name="redditAgency"
                    <?php if (isset($redditAgency) && $redditAgency=="Standard") echo "checked";?>
                       value="Standard">Standard
                <input type="radio" name="redditAgency"
                    <?php if (isset($redditAgency) && $redditAgency=="Moderately exclusive") echo "checked";?>
                       value="Moderately exclusive">Moderately exclusive
                <input type="radio" name="redditAgency"
                    <?php if (isset($redditAgency) && $redditAgency=="Exclusive") echo "checked";?>
                       value="Exclusive">Exclusive

                <!-- Diversity of Notable Users / Influencers -->
                <p><strong><br>4. How inclusive do you feel Reddit's representation of notable users / influencers is?</strong></p>
                <input type="radio" name="redditInfluencers"
                    <?php if (isset($redditInfluencers) && $redditInfluencers=="Very inclusive") echo "checked";?>
                       value="Very inclusive">Very inclusive
                <input type="radio" name="redditInfluencers"
                    <?php if (isset($redditInfluencers) && $redditInfluencers=="Moderately inclusive") echo "checked";?>
                       value="Moderately inclusive">Moderately inclusive
                <input type="radio" name="redditInfluencers"
                    <?php if (isset($redditInfluencers) && $redditInfluencers=="Standard") echo "checked";?>
                       value="Standard">Standard
                <input type="radio" name="redditInfluencers"
                    <?php if (isset($redditInfluencers) && $redditInfluencers=="Moderately exclusive") echo "checked";?>
                       value="Moderately exclusive">Moderately exclusive
                <input type="radio" name="redditInfluencers"
                    <?php if (isset($redditInfluencers) && $redditInfluencers=="Exclusive") echo "checked";?>
                       value="Exclusive">Exclusive

                <!-- Diversity of Corporate Structure -->
                <p><strong><br>5. How inclusive do you feel Reddit's corporate structure is?</strong></p>
                <input type="radio" name="redditCorporate"
                    <?php if (isset($redditCorporate) && $redditCorporate=="Very inclusive") echo "checked";?>
                       value="Very inclusive">Very inclusive
                <input type="radio" name="redditCorporate"
                    <?php if (isset($redditCorporate) && $redditCorporate=="Moderately inclusive") echo "checked";?>
                       value="Moderately inclusive">Moderately inclusive
                <input type="radio" name="redditCorporate"
                    <?php if (isset($redditCorporate) && $redditCorporate=="Standard") echo "checked";?>
                       value="Standard">Standard
                <input type="radio" name="redditCorporate"
                    <?php if (isset($redditCorporate) && $redditCorporate=="Moderately exclusive") echo "checked";?>
                       value="Moderately exclusive">Moderately exclusive
                <input type="radio" name="redditCorporate"
                    <?php if (isset($redditCorporate) && $redditCorporate=="Exclusive") echo "checked";?>
                       value="Exclusive">Exclusive

                <!-- Community Building -->
                <p><strong><br>6. How inclusive do you feel Reddit is for community building?</strong></p>
                <input type="radio" name="redditCommunity"
                    <?php if (isset($redditCommunity) && $redditCommunity=="Very inclusive") echo "checked";?>
                       value="Very inclusive">Very inclusive
                <input type="radio" name="redditCommunity"
                    <?php if (isset($redditCommunity) && $redditCommunity=="Moderately inclusive") echo "checked";?>
                       value="Moderately inclusive">Moderately inclusive
                <input type="radio" name="redditCommunity"
                    <?php if (isset($redditCommunity) && $redditCommunity=="Standard") echo "checked";?>
                       value="Standard">Standard
                <input type="radio" name="redditCommunity"
                    <?php if (isset($redditCommunity) && $redditCommunity=="Moderately exclusive") echo "checked";?>
                       value="Moderately exclusive">Moderately exclusive
                <input type="radio" name="redditCommunity"
                    <?php if (isset($redditCommunity) && $redditCommunitye=="Exclusive") echo "checked";?>
                       value="Exclusive">Exclusive
                <br><br>
                <input type="submit" name="SubmitButtonReddit">
            </form>



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