@include('layouts/header')
<section class="section intro intro-1 bg-image context-dark novi-bg novi-bg-img"
    style="background-image:url(uploads/57.jpg); height:450px;"
    data-preset='{"title":"Intro 1","category":"intro","reload":false,"id":"intro-1"}'>
    <div class="intro-inner">
        <div class="container text-center text-xs-left">
            <div class="row row-fix align-items-end justify-content-center">
                <div class="col-xs-7 col-md-6 col-lg-5 col-xl-9">
                    <h2>HOW <span class="text-primary intro-text-animate">CAN WE</span> HELP?
                    </h2>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Contacts-->
<section class="section section-lg bg-default novi-bg novi-bg-img"
    data-preset='{"title":"Contacts","category":"contacts","reload":true,"id":"contacts"}'>
    <!-- <div class="card">  -->
    <div class="container">
        <center>
            <h2 style="padding-bottom: 60px; ">
                <span class="text-logo"><span>Contact </span><span> Us</span></span>
            </h2>
        </center>
        <div class="row row-40 justify-content-xl-between row-content-5">
            <div class="col-md-6 col-xl-5">
                <p style="color:#3A3B3C;">If you have any questions, just fill in the contact form, and we will answer
                    you shortly. If
                    you are living nearby, come visit us to choose the suitable training program.</p>

                <div class="row">
                    <div class="col-xs-4 col-md-12 col-lg-5 col-xl-6 mb-5">
                        <div class="blurb-embed">
                            <div class="blurb-embed-icon novi-icon linearicons-telephone"></div>
                            <div class="blurb-embed-body">
                                <!-- <h4>Contacts :</h4> -->
                                <ul class="list-sm" style="color:black;">
                                    <li><a class="link-inherit" href="tel:+91 9111 303 100">+91 9111 303 100</a></li>
                                    <li><a class="link-inherit" href="tel:+91 9630 30 3100">+91 9630 30 3100 / +91 9340
                                            62 4717</a>
                                    </li>
                                    <li><a class="link-inherit" href="tel:0788 3555877">0788 3555877</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="blurb-embed">

                            <div class="blurb-embed-body">
                                <p>
                                    Visit Us At Academy :<br>
                                <h6>Weekdays: 6AM – 9AM & 4PM - 9PM</h6>

                                <h6>Saturday: 6AM - 9AM</h6>
                                <h5 style="color:red">Sunday Closed</h5>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="blurb-embed">
                            <div class="blurb-embed-icon novi-icon linearicons-home3"></div>
                            <div class="blurb-embed-body">
                                <p>
                                    Head Branch :<br>
                                <h6>Street No.4, Shanti Nagar, Supela Bhilai, CG.-490023</h6>

                                Branch :<br>
                                <h6>1st Floor, ATM chowk, Avanti Vihar, Raipur.</h6>
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
                <ul class="list-sm-1">
                    <!-- <link rel="icon" href="images/mma/mma-logo.png" type="image/x-icon"> -->

                    <li>
                        <img src="images/mma/mma-logo.png" width="35px" height="35px">&nbsp;&nbsp;<a
                            class="link-underline"
                            href="mail:info@warriorsacademy.co.in">info@warriorsacademy.co.in</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <!--RD Mailform-->
                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact"
                    method="post" action="{{url('/contact/submit')}}"> @csrf
                    <div class="form-wrap">
                        <label class="form-label" for="contact-message">Your Message</label>
                        <textarea class="form-input form-input-bold" id="contact-message" name="message"></textarea>
                    </div>
                    <div class="form-wrap">
                        <label class="form-label" for="contact-name">Name</label>
                        <input class="form-input form-input-bold" id="contact-name" type="text" name="name">
                    </div>
                    <div class="form-wrap">
                        <label class="form-label" for="contact-email">E-mail</label>
                        <input class="form-input form-input-bold" id="contact-email" type="email" name="email">
                    </div>
                    <div class="form-button">
                        <button class="link-arrow h6" type="submit"><span>Submit</span><span class="link-arrow-icon">
                                <svg width="19" height="14" viewBox="0 0 19 14" fill="none">
                                    <path d="M17 7.00002L11.6667 1.66669M17 7.00002L11.6667 12.3334M17 7.00002H0.333344"
                                        stroke-width="2"></path>
                                </svg></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- </div> -->
</section>

</div>



<div class="snackbars" id="form-output-global"></div>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>
