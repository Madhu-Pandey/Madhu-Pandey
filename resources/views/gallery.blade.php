<!-- HEADER START -->
@include('layouts.header')
<!-- HEADER END -->
<link rel="stylesheet" href="css/contactstyle.css">
<!-- The gym-->
<section class="section section-lg bg-icon bg-custom bg-custom-left context-dark"
    data-preset='{"title":"Gallery","category":"gallery","reload":true,"id":"gallery"}'>
    <div class="bg-custom-inner bg-dark novi-bg novi-bg-img"></div>
    <div class="container text-center align-items-end justify-content-center">
        <center>
            <h2 style="padding-bottom: 40px">
                <span class="text-logo"><span>Our </span><span> Gallery</span></span>
            </h2>
        </center>
    @if(isset($gallery))
        <div class="row">
            @foreach ($gallery as $g)
            <div class="col-md-4" style="padding:20px;">
            <div class="thumbnail thumbnail-gallery mt-sm-3 mt-md-5"><a class="thumbnail-media" data-lightgallery="item"
                        data-lightgallery="item" href="{{asset('uploads/'.json_decode($g->ref_file)[0])}}"><img class="thumbnail-img" src="{{asset('uploads/'.json_decode($g->ref_file)[0])}}"
                        class="card-img-top zoom  zoom" alt="..."    alt="" style="width:400px; height:219px;" /></a></div>
            </div>
            @endforeach
        </div>
    @endif
    </div>
    <div class="bg-icon-item">
        <div class="novi-icon icon icon-xxl icon-custom-quote-top wow fadeInUp">
        </div>
    </div>

</section>
</div>
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

</body>

</html>
