@include('layouts.header')
<style>
    .border {
    box-shadow: rgba(9, 30, 66, 0.31) 0px 0px 1px 0px, rgba(9, 30, 66, 0.25) 0px 1px 1px 0px;
}
#card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
}

</style>
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
                <div class="col-md-6 col-xl-5 offset-xl-1" >
                    <h4>{{$n->title}}</h4><br>
                    {{$n->descr}}
                </div>
                <div class="col-md-6 col-xl-5 offset-xl-1">
                    <div class="thumbnail thumbnail-gallery mt-sm-3 mt-md-5">
                    <?php if(isset($n->ref_file) && is_array(json_decode($n->ref_file))){ ?>
                        <?php if(!(file_exists(asset('uploads/'.json_decode($n->ref_file)[0])))) { ?>
                            <img class="thumbnail-img" src="{{asset('uploads/'.json_decode($n->ref_file)[0])}}" alt=""
                                width="400" height="450" />
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
<div class="bg-icon-item">
    <div class="novi-icon icon icon-xxl icon-custom-quote-top wow fadeInUp"></div>
</div>
</section>
<div style="padding-bottom: 10px;"></div>


@include('layouts.footer')
<div class="snackbars" id="form-output-global"></div>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
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
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
    </script>
