<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="homepage.css" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Phudu:wght@400;500&family=Sulphur+Point:wght@300&family=Suwannaphum&family=Tilt+Neon&display=swap"
        rel="stylesheet">

</head>

<body>

    <section class="main">
        <svg id="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ff44a8" fill-opacity="1"
                d="M0,160L34.3,181.3C68.6,203,137,245,206,224C274.3,203,343,117,411,112C480,107,549,181,617,213.3C685.7,245,754,235,823,218.7C891.4,203,960,181,1029,160C1097.1,139,1166,117,1234,138.7C1302.9,160,1371,224,1406,256L1440,288L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
            </path>
        </svg><!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#03794E" fill-opacity="1"
                d="M0,192L26.7,170.7C53.3,149,107,107,160,106.7C213.3,107,267,149,320,160C373.3,171,427,149,480,165.3C533.3,181,587,235,640,256C693.3,277,747,267,800,229.3C853.3,192,907,128,960,122.7C1013.3,117,1067,171,1120,192C1173.3,213,1227,203,1280,197.3C1333.3,192,1387,192,1413,192L1440,192L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
            </path>
        </svg> -->
        <!-- fixed-top -->
        <nav class="navbar  navbar-expand-md" id="main_nav" aria-label="Second navbar example">
            <div class="container-fluid ">
                <a class="navbar-brand" href="index.php" style="color: white; font-weight: 500; font-size: xx-large;">
                    <img src="images/logo.png" alt="Logo" height="50vh" class="d-inline-block"
                        style="padding-right:0vh ; padding-bottom: 0.1em; margin: 0px,0px,0px,0px;">

                    <h2
                        style="display: inline; font-family: 'Sulphur Point', sans-serif; font-size: larger; font-weight: bold;">
                        RFiT</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#horizontalNavbar" aria-controls="navbarsExample02" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-end" id="horizontalNavbar">
                    <ul class="navbar-nav text-nowrap d-flex">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="about.html">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="food_tracker.php">FOOD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="exercise_tracker.php">EXERCISE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="feedshow.php">FEEDBACKS</a>
                        </li>

                        <li class="nav-item"><a class="nav-link" aria-current="page" href="signup.php"><span
                                    class="glyphicon glyphicon-user"></span> SIGN UP</a></li>
                        <li class="nav-item"><a class="nav-link" target="_blank" aria-current="page"
                                href="login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row row-cols-md-2 row-cols-1">
                <div class="col medi" style="padding-top:6%; padding-right: 7%; margin-bottom: 0%; ">
                    <img src="images/medi2-fotor-bg-remover-2023040216167.png" alt="" width="100%">
                </div>
                <div class="col" style=" padding-right: 0px;">
                    <!-- <div class="container"> -->
                    <div id="slogan">
                        <h1 style="font-size: 5.5rem; font-weight: 900; margin-bottom: 2%; line-height: 130%;">
                            HEALTH STARTS WITH HEALTHY CHOICES.</h1>
                        <!-- <h2>Track Workouts, Meals Online with RFit.</h2> -->
                        <h2 style="margin-top: 2%; font-weight: 590; line-height: 150%;">
                            RFit empowers users to make better health decisions daily & reach their fitness goals
                            sustainably.
                        </h2>
                    </div>
                    <a href="signup.php" id="a_button"> <button type="button" class="button">Get Started
                            Today!</button></a>
                    <!-- </div> -->

                </div>
            </div>

            <div class="toolcard">
                <div id="tools">
                    <h1 style=" text-align: center; font-weight: 800;">
                        THE TOOLS FOR YOUR GOALS
                    </h1>
                </div>
                <br>
                <br>
                <!--        CARDS      -->
                <div>
 
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                          
                        <div class="col">
                            <a href="food_tracker.php">  
                                <div class="card h-100">
                                    
                                    <img src="images/apple1.png" class="card-img-top" alt="..."
                                        style="width: 49%; align-self: center;">
                                    <div class="card-body">
                                        
                                        <h2 class="card-title">Food Tracker</h2>
                                        <p class="card-text">Keeping a food diary helps you understand your habits and
                                            increases
                                            your
                                            likelihood of hitting your goals.</p>
                                    </div>
                                
                                </div>
                            </a>
                            
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="images/ex_Tracker1.png" class="card-img-top" alt="..."
                                    style="width: 62%; align-self:center;">
                                <div class="card-body">
                                    <h2 class="card-title">Exercise Tracker</h2>
                                    <p class="card-text">Search from our exercise database and see how many calories
                                        you burnt in your workout. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="images/weigh2.jpg" class="card-img-top" alt="..."
                                    style="width: 48%; align-self:center; margin-top: 1.5%;margin-bottom: 2%; margin-right: 0%; padding-right: 0%;">
                                <div class="card-body">
                                    <h2 class="card-title">Weight Tracker</h2>
                                    <p class="card-text">Trying to lose or increase weight? Record your journey and stay
                                        motivated.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br><br>
                <div class="about">
                    <div class="row">
                        <div class="col"><img src="images/undraw_progress_overview_re_tvcl.svg" alt="" width="90%"></div>
                        <div class="col ok">
                            Looking to take back control of your health & fitness? We got all the tools you need right
                            at your fingertips.
                        </div>

                        <div class="row">
                            <div class="col ok" >Small Changes Big Impact. Learn about your habits, and make small
                                improvements each day.</div>
                            <div class="col"><img src="images/undraw_stepping_up_g6oo.svg" alt="" width="90%"></div>
                        </div>
                        <div class="row">
                            <div class="col"><img src="images/undraw_signal_searching_re_yl8n.svg" alt="" width="100%"
                                    style="align-self: center;"></div>
                            <div class="col ok">
                                Log your Meals and Exercise , from anywhere with an internet connection- be it home or
                                at work.</div>
                        </div>
                        <div class="row">
                            <div class="col ok">
                                Feel, Look, and Live better. RFit makes your fitness journey Easier and Happier.
                            </div>
                            <!-- <div class="col"><img src="images/undraw_ride_a_bicycle_re_6tjy.svg" alt="" width="80%"></div> -->
                            <div class="col"><img src="images/undraw_workout_gcgu.svg" alt="" width="100%"></div>
                        </div>
                        <!-- </div> -->

                    </div>
                </div>
                <!--         class="container" -->

            </div>
            <button onclick="topFunction()" id="myBtn" title="Go to top">TOP
            
            </button>

            <script>
                // Get the button:
                let mybutton = document.getElementById("myBtn");

                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () { scrollFunction() };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        mybutton.style.display = "block";
                    } else {
                        mybutton.style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0; // For Safari
                    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
                }
            </script>


    </section>


    <!-- <footer> FIND FOOTER LATER ON follow us on instgagrhrjrjrj</footer>
 <footer> FIND FOOTER LATER ON follow us on instgagrhrjrjrj</footer> -->
    <section>


        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #000000
        ">
            <!-- Grid container -->
            <div class="container p-0 pb-0" style="background-color: #000000">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row" >
                        <!-- Grid column -->
                        <div class="col-md-3
                                col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4
                                    font-weight-bold" id="about">About RFIT </h6>
                            <p> RFiT aims to provide an easy and hassle free online solution to help people integrate healthy habits into their busy lives. Get fitter with our amazing features such as
                                food tracker, weight tracker and water
                                tracker.  </p>
                        </div> <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" /> <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto
                                mt-3">
                            <h6 class="text-uppercase mb-4
                                    font-weight-bold">Follow Us</h6>
                            <p> <a class="text-white" href="https://instagram.com/vermabhavya183?igshid=ZDdkNTZiNTM=">Instagram</a>
                            </p>
                            <p> <a class="text-white" href="https://www.facebook.com/bhavya.verma.9849912?mibextid=ZbWKwL">Facebook</a> </p>
                            <p> <a class="text-white" href="https://www.linkedin.com/in/bhavya-verma-754983247">LinkedIn</a>
                            </p>
                        </div> <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" /> <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" /> <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto
                                mt-3">
                            <h6 class="text-uppercase mb-4
                                    font-weight-bold" id="contact">Contact Us</h6>
                            <p><i class="fas fa-envelope mr-3"></i>
                                helping_hand@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 91
                                9874568254</p>
                            <p><i class="fas fa-print
                                        mr-3"></i> + 91 9852471598</p>
                        </div> <!-- Grid column -->
                        <!-- Grid column -->

                    </div>
                    <!--Grid row-->
                    <!-- Section: Links -->
            </div> <!-- Grid container -->
        </footer> <!-- Footer -->
        <!-- End of .container -->
    </section>
</body>

</html>
</section>