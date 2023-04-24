@include('layouts.header')
<style>
    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }


</style>


<!-- Intro-->
<section class="section intro intro-1 bg-image context-dark novi-bg novi-bg-img mb-3"
    style="background-image:url(uploads/54.jpg);"
    data-preset='{"title":"Intro 1","category":"intro","reload":false,"id":"intro-1"}'>
    <div class="intro-inner">
        <div class="container text-center text-xs-left">
            <div class="row row-fix align-items-end justify-content-center">
                <div class="col-xs-7 col-md-6 col-lg-5 col-xl-9">
                    <h1>Work hard. <br><span class="text-primary intro-text-animate">Feel</span> proud.
                    </h1><a class="link-arrow h6" href="about"><span>Read more</span><span class="link-arrow-icon">
                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none">
                                <path d="M17 7.00002L11.6667 1.66669M17 7.00002L11.6667 12.3334M17 7.00002H0.333344"
                                    stroke-width="2"></path>
                            </svg></span></a>
                </div>
                <div class="col-auto col-xl-3 d-none d-xs-block">
                    <div class="novi-icon intro-icon icon icon-xxl icon-custom-quote-bottom"></div>
                </div>

            </div>

        </div>

    </div>
</section>
@if (isset($notice))
    <section class="section section-lg bg-icon bg-custom bg-custom-left context-dark"
        data-preset='{"title":"Testimonials","category":"team","reload":true,"id":"testimonials"}'>
        <div class="bg-custom-inner bg-dark"></div>
        <div class="container">
            <h2>
                <span class="text-logo"><span>Our</span>&nbsp;<span>News</span>
            </h2>
            <div class="owl-carousel owl-carousel-1" data-items="1" data-autoplay="true"
                data-owl="{&quot;nav&quot;:true,&quot;smartSpeed&quot;:1000,&quot;autoplayTimeout&quot;:5000}">
                @foreach ($notice as $n)
                    <div class="row row-30 row-fix justify-content-center align-items-center">
                        <div class="col-md-6 col-xl-5 offset-xl-1">
                            <h4>{{ $n->title }}</h4><br>
                            {{ $n->descr }}
                        </div>
                        <div class="col-md-6 col-xl-5 offset-xl-1">
                            <div class="thumbnail thumbnail-gallery mt-sm-3 mt-md-5">
                                <?php if(isset($n->ref_file) && is_array(json_decode($n->ref_file))){ ?>
                                <?php if(!(file_exists(asset('uploads/'.json_decode($n->ref_file)[0])))) { ?>
                                <a class="thumbnail-media" data-lightgallery="item"
                                    href="{{ asset('uploads/' . json_decode($n->ref_file)[0]) }}">
                                    <img class="thumbnail-img"
                                        src="{{ asset('uploads/' . json_decode($n->ref_file)[0]) }}" alt=""
                                        width="400" height="450" /></a>
                                <?php } }else{
                        echo("File Not Found...!!");
                    } ?>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endif
<!-- About us-->
<section class="section section-lg bg-default novi-bg novi-bg-img"
    data-preset='{"title":"Services with title","category":"services","reload":true,"id":"services-with-title"}'>
    <div class="container tabs-custom tabs-separate">
        <h2 class="text-center text-xs-left">
            <!--Brand--><span class="text-logo"><span>Warriors</span><span> Academy</span></span><span> is more than a
                place where high performers come to be their best.</span>
        </h2>

        <div class="row row-fix">

            <div class="col-md-3 d-none d-md-flex justify-content-end wow fadeInLeft">
                <div class="novi-icon icon icon-1 icon-large icon-custom-quote-right"></div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-1-1">
                        <p style="color:#3A3B3C;">Martial Arts is a great way to get your body in shape while also
                            experiencing professional training approach from our coaches. With regular exercising and
                            fresh air, you get an opportunity to improve your quality of life. Our classes
                            include:</p>
                        <ul class="list-marked list-marked-3-col h6">
                            <li>MMA - Mixed Martial Arts</li>
                            <li>Karate</li>
                            <li>Judo</li>
                            <li>Wrestling</li>
                            <li>Muay Thai</li>
                            <li>Pencak Silat</li>
                            <li>BJJ - Brazilian Jiu Jitsu</li>
                            <li>Boxing</li>
                            <li>Kick-Boxing</li>
                            <li>Grappling</li>
                            <li>Self Defense</li>
                            <li>Sports Fitness</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Events-->
<section class="section section-lg bg-default novi-bg novi-bg-img"
    data-preset='{"title":"About us","category":"about","reload":false,"id":"about-us"}'>
    <div class="container">
        <div class="row row-30 row-lg-60">
            <!-- <div class="col-lg-9"><img src="images/mma/mma3.jfif" alt="" width="950" height="200" loading="lazy"/>
            </div> -->
            {{-- </div> --}}

            <div class="col-sm-6 col-xl-5 offset-xl-1">
                <!-- Brand-->
                <div class="box-text">
                    <div class="box-text-title h4"><b>Vision</b></div>
                    <div class="box-text-content" style="color:#3A3B3C;">Our vision is to create world class atheltes &
                        International Champions from India.It is also about the innovative ways of teaching Martial Arts
                        & fitness to become the best training facility in Chhattisgarh, India.</div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-5 offset-xl-1">
                <!-- Brand-->
                <div class="box-text">
                    <div class="box-text-title h4"><b>Mission</b></div>
                    <div class="box-text-content" style="color:#3A3B3C;">Our purpose is to pass on empowering knowledge
                        and training guidance in order to have a positive impact on the health and fitness of everyone
                        we work with.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Events-->
<section class="section section-lg bg-default novi-bg novi-bg-img"
    data-preset='{"title":"About us 2","category":"about","reload":false,"id":"about-us-2"}'>
    <div class="container">
        <div class="row row-30">
            <div class="col-lg-6 col-xl-7">
                <h2>
                    <!--Brand--><span class="text-logo"><span>Warriors</span><span> Academy</span></span><span>
                        Services</span>
                </h2>
                <div class="row row-10 row-fix row-content-1 h6">
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-marked-2">
                            <li>
                                <h6>Martial Arts Training</h6>
                            </li>
                            <li>
                                <h6>Self Defense Training</h6>
                            </li>
                            <li>
                                <h6>MMA Cage Manufacturing</h6>
                            </li>
                            <li>
                                <h6>Self Defense Seminar/Workshops for Corporate Sector/ Schools/ Colleges</h6>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-marked-2">

                            <li>
                                <h6>Unarmed Combat Training for Defense and Security Services</h6>
                            </li>
                            <li>
                                <h6>Organising MMA Events</h6>
                            </li>
                            <li>
                                <h6>Setting up of Martial Arts Studio</h6>
                            </li>
                            </h6>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 d-none d-lg-flex"><img src="uploads/49.jpg" alt="" width="510"
                    height="500" loading="lazy" />
            </div>
        </div>
    </div>
</section>


<!--Owl carousel sample-->
<section class="section section-lg bg-icon bg-custom bg-custom-left context-dark"
    data-preset='{"title":"Testimonials","category":"team","reload":true,"id":"testimonials"}'>
    <div class="bg-custom-inner bg-dark"></div>
    <div class="container">
        <h2>
            <span class="text-logo"><span>Our</span>&nbsp;<span>Gallery</span>
        </h2>
        <div class="owl-carousel owl-carousel-1" data-items="1" data-autoplay="true"
            data-owl="{&quot;nav&quot;:true,&quot;smartSpeed&quot;:1000,&quot;autoplayTimeout&quot;:5000}">
            @foreach ($gallery as $g)
                <div class="row row-30 row-fix justify-content-center align-items-center">
                    <div class="col-md-6 col-xl-5 offset-xl-1">
                        <div class="thumbnail thumbnail-gallery mt-sm-3 mt-md-5"><a class="thumbnail-media"
                                data-lightgallery="item"
                                href="{{ asset('uploads/' . json_decode($g->ref_file)[0]) }}"><img class="thumbnail-img"
                                    src="{{ asset('uploads/' . json_decode($g->ref_file)[0]) }}" alt=""
                                    style="width:400px; height:300px;" /></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- </div> -->
<div class="bg-icon-item">
    <div class="novi-icon icon icon-xxl icon-custom-quote-top wow fadeInUp"></div>
</div>
</section>
<div style="padding-bottom: 10px;"></div>

<section class="section section-lg  context-dark novi-bg novi-bg-img"
    data-preset='{"title":"Partners","category":"team","reload":true,"id":"partners"}'
    style="background-color:#00FFFF;">
    <div class="container">
        <h3 style=" text-align:center; ">
            <b> Warriors Academy established in year 2016 with the mission of promotion of martial arts and fitness at
                Chhattisgarh.</b>
        </h3>
        <!-- <div class="owl-carousel owl-carousel-center owl-carousel-1 text-center" data-items="2" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="6" data-autoplay="true" data-owl="{&quot;dots&quot;:true}"><img src="images/logo-01-180x49.png" alt="" width="180" height="49" loading="lazy"/><img src="images/logo-02-180x45.png" alt="" width="180" height="45" loading="lazy"/><img src="images/logo-03-107x31.png" alt="" width="107" height="31" loading="lazy"/><img src="images/logo-04-154x53.png" alt="" width="154" height="53" loading="lazy"/><img src="images/logo-05-177x40.png" alt="" width="177" height="40" loading="lazy"/><img src="images/logo-06-176x41.png" alt="" width="176" height="41" loading="lazy"/>
          </div> -->
    </div>
</section>
<div style="padding-bottom: 10px"></div>
</div>

{{-- Video Start --}}
<section class="section section-lg bg-icon bg-custom bg-custom-left context-dark video-presentation-area"
    data-preset='{"title":"Testimonials","category":"team","reload":true,"id":"testimonials"}'>
    <div class="bg-custom-inner bg-dark"></div>
    <div class="container">
        <h2>
            <span class="text-logo"><span>Watch </span>&nbsp;<span>this video to know us closely</span>
        </h2>
        <div class="owl-carousel owl-carousel-1" data-items="1" data-autoplay="true"
            data-owl="{&quot;nav&quot;:true,&quot;smartSpeed&quot;:1000,&quot;autoplayTimeout&quot;:5000}">
            <div class="video-box">
                <img src="uploads/9.jpg" class="main-image" alt="image">
                {{-- <a href="{{ URL::asset('assets/video/finalvideo.mp4') }}" class="video-btn popup-youtube"><i
                                class="	fa fa-play"></i></a> --}}
                <a href=" {{ URL::asset('assets/video/v2.mp4') }}" class="video-btn popup-youtube"><i
                        class="	fa fa-play"></i></a>
            </div>

            <div class="video-box">
                <img src="uploads/15.jpg" class="main-image" alt="image">
                {{-- <a href="{{ URL::asset('assets/video/finalvideo.mp4') }}" class="video-btn popup-youtube"><i
                                class="	fa fa-play"></i></a> --}}
                <a href=" {{ URL::asset('assets/video/v1.mp4') }}" class="video-btn popup-youtube"><i
                        class="	fa fa-play"></i></a>
            </div>

            <div class="video-box">
                <img src="uploads/15.jpg" class="main-image" alt="image">
                {{-- <a href="{{ URL::asset('assets/video/finalvideo.mp4') }}" class="video-btn popup-youtube"><i
                                class="	fa fa-play"></i></a> --}}
                <a href=" {{ URL::asset('assets/video/v3.mp4') }}" class="video-btn popup-youtube"><i
                        class="	fa fa-play"></i></a>
            </div>

            <div class="video-box">
                <img src="uploads/15.jpg" class="main-image" alt="image">
                {{-- <a href="{{ URL::asset('assets/video/finalvideo.mp4') }}" class="video-btn popup-youtube"><i
                                class="	fa fa-play"></i></a> --}}
                <a href=" {{ URL::asset('assets/video/v4.mp4') }}" class="video-btn popup-youtube"><i
                        class="	fa fa-play"></i></a>
            </div>

            <div class="video-box">
                <img src="uploads/15.jpg" class="main-image" alt="image">
                {{-- <a href="{{ URL::asset('assets/video/finalvideo.mp4') }}" class="video-btn popup-youtube"><i
                                class="	fa fa-play"></i></a> --}}
                <a href=" {{ URL::asset('assets/video/v5.mp4') }}" class="video-btn popup-youtube"><i
                        class="	fa fa-play"></i></a>
            </div>
        </div>
    </div>
</section>
{{-- Video End --}}

<!-- Affliations start -->
<section class="section section-lg bg-default novi-bg novi-bg-img"
    data-preset='{"title":"About us 2","category":"about","reload":false,"id":"about-us-2"}'>

    <div class="row mb-3">

        <center>
            <h2 class="mb-3">
                <span class="text-logo"><span>Our </span><span> Affiliations</span></span>
            </h2>
        </center>
    </div>
    <div class="row">

        <div class="row row-10 row-fix row-content-1 h6">
            <center>
                <div class="col-8">
                    <div class="box-text-content" style="color:#3A3B3C; text-align:center;">
                        Warriors Academy is affiliated unit of state MMA Association- Chhattisgarh Mixed Martial Arts
                        Association- CGMMAA & state association of Karate KAC Karate Association of Chhattisgarh &
                        CPPSA- Chhattisgarh Pradesh Pencak Silat Association.
                    </div>
                </div>
            </center>


        </div>
        <div class="row row-10 row-fix row-content-1 h6">
            <div class="col-md-3">
                <center>
                    <img src=" uploads/mmai.png" class="card-img-top mb-1 " alt="..."
                        style="height:150px; width:180px; color:antiquewhite;">
                    <div class="box-text-content" style="color:#3A3B3C; text-align:center;">
                        MMA India -Mixed Martial Art India, National Federation of MMA Sport.</br></br>
                    </div>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <img src=" uploads/kai2.png" class="card-img-top mb-5" alt="..."
                        style="height:106px; width:107px; color:antiquewhite;">
                    <div class="box-text-content" style="color:#3A3B3C; text-align:center;">
                        KAI - Karate Association of India, National Federation of Karate sport.</br></br>
                    </div>
                </center>
            </div>
            <div class="col-md-3">
                <center>
                    <img src=" uploads/64.png" alt="..." class="card-img-top mb-3"
                        style="height:136px; width:118px; color:antiquewhite;">
                    <div class="box-text-content" style="color:#3A3B3C; text-align:center;">
                        CGMMA- Chhattisgarh Mixed Martial Arts Association.</br></br>
                    </div>
                </center>
            </div>

            <div class="col-sm-3">
                <center>
                    <img src=" uploads/ipsf.png" class="card-img-top mb-5" alt="..."
                        style="height:106px; width:107px;">
                    <div class="box-text-content" style="color:#3A3B3C; text-align:center;">
                        IPSF- Indian Pencak Silat Federation National Federation for Pencak Silat sport.</br></br>
                    </div>
                </center>
            </div>
        </div>
</section>

<!-- Affliations end -->

<section class="section section-lg bg-default novi-bg novi-bg-img"
    data-preset='{"title":"About us 2","category":"about","reload":false,"id":"about-us-2"}'>

    <div class="row mb-3">

        <center>
            <h2 class="mb-3">
                <span class="text-logo"><span>Our </span><span>Promotions</span></span>
            </h2>
    </div>
    <div class="row">

        <div class="row row-10 row-fix row-content-1 h6">
            <div class="col-sm-4">
                <center>
                    <img src=" uploads/65.png" class="card-img-top" alt="..."
                        style="height:200px; width:250px;">
                </center>
            </div>
            <div class="col-md-6 col-lg-7">
                <div class="box-text-content" style="color:#3A3B3C; text-align:justify;padding:10px">We have
                    successfully launched
                    our MMA promotion CFN - Cage Fight Night, a professional MMA promotion which gives an opportunity of
                    being in the limelight to all our fighters with good fight records. We give promotional platform to
                    all MMA elite fighters from India for amateur and Professional MMA events.
                    As a brand on itself ,fighters strive for excellence and to be the best!
                    We at Warriors Academy, provide exciting and action packed opportunities to our athletes as well as
                    our sponsors get to showcase their products at the promotional event CFN.
                    Our promotion Cage Fight Night- CFN is a good source of finance generations for not only atheletes
                    but sponsors also. Promotions are the ways by which a MMA fighter of good fight records gets chance
                    to be in lime light , get to meet big shot of entertainment industry, industrialist, companies and
                    brands. Sponsors at promotion gets chance for marketing and branding.
                    </br></br>
                </div>
            </div>


        </div>

</section>
@include('layouts/footer')

<div class="snackbars" id="form-output-global"></div>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>

<!--LIVEDEMO_00 -->

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7078796-5']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
            '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })
    ();
</script>
<script>
    const noticeBar = document.querySelector('#notice-bar marquee');
    const notices = ['Notice 1', 'Notice 2', 'Notice 3'];
    let currentIndex = 0;

    function showNextNotice() {
        noticeBar.innerHTML = notices[currentIndex];
        currentIndex = (currentIndex + 1) % notices.length;
    }

    // Call the showNextNotice function every 5 seconds
    setInterval(showNextNotice, 5000);
</script>
<!-- <script>
    $(function() {
        var overlay = $('<div id="overlay"></div>');
        overlay.show();
        overlay.appendTo(document.body);
        $('.popup1').show();
        $('.close').click(function() {
            $('.popup1').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });

        $('.x').click(function() {
            $('.popup1').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
    });
</script> -->
<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>
{{-- <script>
$(document).ready(function(){
    if(sessionStorage.getItem('#pop-up2')!== 'true'){
        $('#pop-up2').modal('show');
        sessionStorage.setItem("#pop-up2", true);
    }
});
</script> --}}
