<footer class="section footer-classic context-dark novi-bg novi-bg-img"
    data-preset='{"title":"Footer","category":"main","reload":true,"id":"footer"}'>
    <div class="container">
        <div class="footer-classic-top">
            <div class="row row-30 row-fix justify-content-xl-between">
                <div class="col-md-6 col-xl-6">
                    <div class="row row-30">
                        <div class="col-12">
                            <div class="blurb-embed">
                                <div class="blurb-embed-icon novi-icon linearicons-home3"></div>
                                <div class="blurb-embed-body">
                                    <p><a class="link-inherit" href="#">
                                            <h4>Head Branch:</h4>
                                            Street no.4, Shanti Nagar, Supela Bhilai, CG.-490023
                                            <br><br>
                                            <h4>Branch:</h4>
                                            1st Floor, ATM chowk, Avanti Vihar, Raipur.
                                        </a></p>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-4 col-md-12 col-lg-5 col-xl-6">
                            <div class="blurb-embed">
                                <div class="blurb-embed-body">
                                    <ul class="list-sm">

                                        <li>
                                            <i class="fab fa-whatsapp fa-lg"
                                                style="color:#22E3ff;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a
                                                class="link-inherit" href="tel:+91 9111 303 100">+91 9111 303 100</a>
                                        </li>
                                        <li>
                                            <!-- <div class="blurb-embed-icon novi-icon linearicons-telephone"> </div> -->
                                            <i class="fab fa-phone fa-lg"
                                                style="color:#22E3ff;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a
                                                class="link-inherit" href="tel:+91 9630 30 3100">+91 9630 30 3100 / +91
                                                9340 62 4717</a>
                                        </li>
                                        <i class="fab fa-phone fa-lg" style="color:#22E3ff;"></i>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<a class="link-inherit" href="tel:0788 3555877">0788
                                            3555877</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- <form action="{{url('')}}" method="POST">@csrf -->
                <div class="col-md-6 col-xl-5">
                    <h5 class="mt-md-2">Subscribe Warriors Academy </h5>
                    <p class="font-weight-medium">Sign up for any enquiry and questions.</p>
                    <form class="rd-form rd-mailform form-boxed" action="{{url('foooter/submit')}}" method="post">@csrf
                        <div class="form-wrap">
                            <input class="form-input" id="footer-form-email" type="email" name="email">
                            <label class="form-label" for="footer-form-email">Enter your e-mail</label>
                        </div>
                        <button class="form-button linearicons-paper-plane novi-icon" type="submit"></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-classic-bottom">
            <div class="row">
                <div class=" col-xs-6 col-md-12 col-lg-7 col-xl-6" style="float:right;">
                    <div class=" blurb-embed">
                        <!-- <div class="blurb-embed-icon novi-icon linearicons-clock3"></div> -->
                        <div class="container">
                            <!-- Section: Social media -->
                            <section class="mb-4">
                                <!-- Facebook -->
                                <a class="btn btn-outline-light btn-floating m-1" title="@warriorsacademycg"
                                    href="https://www.facebook.com/warriorsacademycg?mibextid=ZbWKwL" role="button">
                                    <i class="fab fa-facebook-f " style="color: #3b5998;"></i></a>

                                <!-- Twitter -->
                                <a class="btn btn-outline-light btn-floating m-1" title="@WarriorsAcadem6"
                                    href="https://twitter.com/WarriorsAcadem6?t=s2905GEu29bqJN9nrbgHCQ&s=08"
                                    role="button"><i class="fab fa-twitter" style="color: #55acee;"></i></a>

                                <!-- Instagram -->
                                <a class="btn btn-outline-light btn-floating m-1" title="@warriorsacademycg"
                                    href="https://instagram.com/warriorsacademycg?igshid=Mzc0YWU1OWY=" role="button">
                                    <i class="fa-brands fa-instagram" style="color: #ac2bac;"></i>
                                </a>

                                <!-- linkedin -->
                                <a class="btn btn-outline-light btn-floating m-1" title="@WarriorsAcadem6"
                                    href="https://www.linkedin.com/in/warriors-academy" role="button"><i
                                        class="fab fa-linkedin" style="color: #0082ca;"></i></a>
                                <!-- youtube -->
                                <a class="btn btn-outline-light btn-floating m-1" title="@WarriorsAcadem6"
                                    href="https://www.youtube.com/@warriorsacademy6881" role="button"><i
                                        class="fa fa-youtube-play " style="color: #ed302f;"></i></a>

                            </section>
                            <!-- Section: Social media -->
                        </div>
                        <!-- Grid container -->
                    </div>
                </div>
                <div class=" col-xs-6 col-md-12 col-lg-7 col-xl-6" style="float:left;">

                    <p style="float:right"><span>&copy;&nbsp;</span><span
                            class="copyright-year"></span><span>&nbsp;</span><span>Warriors
                            Academy</span><span>.&nbsp;</span><a href="privacy_policy">Privacy Policy</a></p>
                </div>
            </div>
</footer>

</body>

</html>
