<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Service | Life - Living It Fully Everyday</title>
    <?php require_once('includes/resources.php'); ?>
    <meta http-equiv="Refresh" content="0; URL=https://saturn.csit.rmit.edu.au/~s3789585/wp/a2/myServices.php">

</head>

<body>
<div class="flex-container">

    <!--Nav Bar-->
    <?php require_once('includes/header.php'); ?>

    <!--To avoid sticky nav bar block content-->
    <div class="sticky-protect-bar"></div>

    <!--Announcement Bar-->
    <?php require_once('includes/accouncements.php'); ?>

    <!--Main Content Area-->
    <div class="content" id="service-page">
        <div class="content-container service-page-container">
            <div id="service-header-heading">
                <h1>Service and Activity</h1>
                <h2>Attend a Business Victoria workshop or event to improve your skills, network with others and get
                    advice on your business from an expert or mentor.</h2>
            </div>
            <div id="service-header-dec"></div>

        </div>
    </div>

    <!--Main Content Area-->
    <div class="content" style="background-color: #E0E0E0 !important;">
        <div class="content-container" style="background-color: #E0E0E0 !important; width: 80% !important;">

            <!-- An activity -->
            <div class="activity">
                <div class="cover" style="background-image: url(../assets/images/act01.jpg);"></div>
                <h1 class="title">Eat Healthy Planner</h1>
                <span class="status" style="background-image: url(../assets/images/status-on.svg);">&nbsp; &nbsp; &nbsp; &nbsp; Ongoing</span><br><br>

                <h2 class="sub-title">Who can join us?</h2>
                <span class="article">This is a calculaor in LIFE website. Everyone can access it!&nbsp; &nbsp;</span>

                <h2 class="sub-title">What it is about?</h2>
                <span class="article">Eating a healthy diet is very important during the COVID-19 pandemic. It can affect our body’s ability to prevent, fight and recover from infections</span>

                <br><br>
                <input type="submit" value="Work on Yours" style="width:100%;"
                       onclick="location.href='meal-planner.php';">
            </div>

            <!-- An activity -->
            <div class="activity">
                <div class="cover" style="background-image: url(../assets/images/act02.jpg);"></div>
                <h1 class="title">Online Morning Yoga Class</h1>
                <span class="status" style="background-image: url(../assets/images/status-readytoclose.svg);">&nbsp; &nbsp; &nbsp; &nbsp; Almost Full&nbsp;</span><br><br>

                <h2 class="sub-title">Who can join us?</h2>
                <span class="article">Everyone, This is an online session and it will be delivery by zoom.</span>

                <h2 class="sub-title">What it is about?</h2>
                <span class="article">Yoga Practice Is Beneficial for Maintaining Healthy Lifestyle and Endurance Under Restrictions and Stress Imposed by Lockdown During COVID-19 Pandemic</span>

                <br><br>
                <input type="submit" value="Read More" style="width:100%;"
                       onclick="location.href='services-yoga.php';">
            </div>

            <!-- An activity -->
            <div class="activity">
                <div class="cover" style="background-image: url(../assets/images/act03.jpg);"></div>
                <h1 class="title">Meditaion @ LIFE.COM&nbsp;&nbsp;</h1>
                <span class="status" style="background-image: url(../assets/images/status-closed.svg);">&nbsp; &nbsp; &nbsp; &nbsp; Closed</span><br><br>

                <h2 class="sub-title">Who can join us?</h2>
                <span class="article">Everyone, This is an online session and it will be delivery by zoom.</span>

                <h2 class="sub-title">What it is about?</h2>
                <span class="article">The Effect of Meditation and Physical Activity on the Mental Health Impact of COVID-19-Related Stress and Attention to News Among Mobile App Users</span>

                <br><br>
                <input type="submit" value="Read More" style="width:100%;"
                       onclick="location.href='services-meditation.php';">
            </div>
        </div>
    </div>


    <!--Main Content Area-->
    <div class="content" style="background-color: #E0E0E0 !important;">
        <div class="content-container"
             style="background-color: #E0E0E0 !important; margin-top: 0px !important; width: 80% !important;">

            <!-- An activity -->
            <div class="activity">
                <div class="cover" style="background-image: url(../assets/images/act04.jpg);"></div>
                <h1 class="title">Home-based Stretching</h1>
                <span class="status" style="background-image: url(../assets/images/status-on.svg);">&nbsp; &nbsp; &nbsp; &nbsp; Ongoing</span><br><br>

                <h2 class="sub-title">Who can join us?</h2>
                <span class="article">Everyone, This is an online session and it will be delivery by zoom.</span>

                <h2 class="sub-title">What it is about?</h2>
                <span class="article">Physical activity has many health benefits, one of which is to boost the immune system and its fight against respiratory viral infections.</span>

                <br><br>
                <input type="submit" value="Read More" style="width:100%;"
                       onclick="location.href='services-streching.php';">
            </div>

            <!-- An activity -->
            <div class="activity">
                <div class="cover" style="background-image: url(../assets/images/act05.jpg);"></div>
                <h1 class="title">Live Streaming: How's your healthy habits?</h1>
                <span class="status" style="background-image: url(../assets/images/status-readytoclose.svg);">&nbsp; &nbsp; &nbsp; &nbsp; Almost Full&nbsp;</span><br><br>

                <h2 class="sub-title">Who can join us?</h2>
                <span class="article">Everyone, This is an online session and it will be delivery by zoom.</span>

                <h2 class="sub-title">What it is about?</h2>
                <span class="article">The coronavirus (COVID-19) pandemic has made it harder for kids and families to maintain healthy habits. Here are some tips and ideas to help you get back on track.</span>

                <br><br>
                <input type="submit" value="Read More" style="width:100%;"
                       onclick="location.href='services-healthy-habits.php';">
            </div>

            <!-- An activity -->
            <div class="activity" style="opacity:0;">

            </div>
        </div>
    </div>


    <!--Footer Area-->
    <?php require_once('includes/footer.php'); ?>
</div>
</body>
</html>