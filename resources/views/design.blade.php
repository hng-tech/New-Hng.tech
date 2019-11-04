<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>The HNG Internship - Design Service</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body>

    <header class="header">
        <nav class="navmenu">
            <div>
             <a href="https://hng.tech"><img src="{{ asset('img/Logo.png')}}" alt="HNG Tech"></a>
            </div>
            <div>
                <a href="https://hng.tech/views/contact.php"><button class="header_contact">CONTACT US</button></a>
            </div>
        </nav>
        <!--        Naavbar menu ends here-->

        <div class="header_caption">
            <div>
                <h1 class="mb-4">
                "People ignore designs that ignore people” <br>Frank Chimero - UX Designer
                </h1>
                <p class="mb-5">
                We uncover the snags in your design that negatively impact <br>your website’s usability and <br>suggest possible solutions.
                </p>
            </div>
            <a href="https://hng.tech/views/contact.php"><button>GET A QUOTE</button></a>
        </div>

    </header>
    <!--    HEADER ENDS HERE -->
    <!--   -->
    <!--   -->
    <section class="find_out_more row">
        <h1 class="col-12 col-md-8">
            Poor UI Design Can Affect<br>
            Your Website Productivity.
        </h1>
        <div class="col-12 col-md-4 find_more_btn_box ">
            <a href="https://hng.tech/views/contact.php"><button>FIND OUT MORE</button></a>
        </div>
    </section>
    <!--    -->
    <!--   -->
    <!--   -->
    <section class="about_us row">
        <div class="col-lg-6">
            <p>ABOUT US</p>
            <h3>Our design choices offer far more than an appealing interface, they impact businesses</h3>
            <p class="mt-4">Our operative team of UI/UX designers employ stellar attention to detail in assessing your website.</p>
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
            <img src="{{ asset('img/asset_agbo.png')}}" alt="">
        </div>
    </section>
    <!--    -->
    <!--   -->
    <!--   -->
    <section class="our_services">
        <div>
            <p class="service_head">OUR SERVICES</p>
            <h3 class="service_subhead">We Make User Experience Our Number 1 Priority</h3>
        </div>
        <div class="service_box">
            <div class="py-4 service-img-box">
                <img class="service_img" src="{{ asset('img/asset2_agbo.png')}}" alt="">
            </div>
            <div class="service_bullet_box">
                <div class="services_bullet mb-5">
                    <span class="bullet_heading">
                        <img src="{{ asset('img/bullet1.png')}}" alt="">
                        <h4 class="ml-4">Design Flaw Detection</h4>
                    </span>

                    <p>We comb through your website, performing necessary diagnostics and providing you with actionable insights to inform design strategies. </p>
                </div>
                <div class="services_bullet mb-5">
                    <span class="bullet_heading">
                        <img src="{{ asset('img/bullet2.png')}}" alt="">
                        <h4 class="ml-4">Usability Testing</h4>
                    </span>

                    <p>We verify that your entire product- the technical functionalities and the design- is responsive and consistent with what is required by a user.</p>
                </div>

                <div class="services_bullet">
                    <span class="bullet_heading">
                        <img src="{{ asset('img/bullet3.png')}}" alt="">
                        <h4 class="ml-4">User Research</h4>
                    </span>

                    <p>We employ a variety of research techniques and tools to uncover user needs throughout every step of their journey. We ensure that the data is meaningful, accurate and actionable.</p>
                </div>
            </div>
        </div>
    </section>
<!--
    <section style="text-align: center" class="testimony mb-5">
        <h3 class="testimony_title">WHAT OTHERS ARE SAYING</h3>
        <div class=" owl-carousel owl-theme">
        <div>
            <div class="testimony_badge">
                <p>Having done my User Interface testing with HNG Design company, My website has been rated among top classy websites in the world. This is the best service I have ever had. <br>
                    Thank You HNG Design Team</p>
            </div>
            <div>
                <div class="d-flex justify-content-center"><img src="{{ asset('img/avatar.png')}}" alt="" class="img-thumbnail testimony_avatar"></div>
                <div class="avatar_caption">
                <p>Williams Brown</p>
                </div>
            </div>
        </div>

       <div>
            <div class="testimony_badge">
                <p>HNG Tech has made a huge difference to our website and business with their good knowledge of design and User experience. Our website bounce rate is great and user spend more time on our website.<br>
                    </p>
            </div>
            <div style="background-colo: red;">
                <div class="d-flex justify-content-center"><img src="{{ asset('img/avatar2.jpg')}}" alt="" class="img-thumbnail testimony_avatar"></div>
                <div class="avatar_caption">
                <p>David Jackson</p>
                </div>
            </div>
        </div>

       <div>
            <div class="testimony_badge">
                <p>HNG Design Team provided us with a comprehensive and well detailed design report that helped our development team ahead to our company branding and standards. <br>
                    We are happy about the result we got after correcting the design flaws you found.</p>
            </div>
            <div>
                 <div class="d-flex justify-content-center"><img src="{{ asset('img/avatar3.jpg')}}" alt="" class="img-thumbnail testimony_avatar"></div>
                <div class="avatar_caption">
                <p>Matt Phil</p>
                </div>
            </div>
        </div>
        </div>
    </section>  -->
    <!--   -->
    <!--   -->
    <section class="subscribe row">

        <p class="subscribe_text col-lg-6 col-md-12">Subscribe to our Newsletter to recieve design articles</p>
        <div class="px-5 col-md-12 col-lg-6">
            <form action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter your email to subscribe">
                    <div class="input-group-append">

                        <button class="input-group-text">SUBSCRIBE</button>
                    </div>
                </div>
                <!--
        <input type="text" placeholder="Enter your email">
        <input type="submit" value="SEND">
-->
            </form>
        </div>
    </section>
    <section class="contact_us">
        <div>
            <a href="https://hng.tech"><img class="mb-3" src="{{ asset('img/Logo.png')}}" alt="HNG Tech"></a>
            <p>

                </p>
        </div>
        <p>design@hng.tech <br>

            </p>
        <div>
            <a href="https://hng.tech/views/contact.php"><button>CONTACT US</button></a>
        </div>
    </section>
    <section class="footer">
       <p>© 2019 HNG Internship . All Rights Reserved. HNG Group</p>
       <img src="{{ asset('img/twitter.png')}}" alt="">

    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
    const $owlCarousel = $(".owl-carousel").owlCarousel({
        items: 1,
        singleItem:true,
        loop: true
    });
    </script>
</body></html>
