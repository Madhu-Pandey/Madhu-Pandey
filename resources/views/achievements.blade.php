@include('layouts.header')
<style>
.card {
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
    transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
    padding: 14px 80px 18px 36px;
    cursor: pointer;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
}
</style>
<?php $i=0;?>
<!-- <link rel="stylesheet" href="css/contactstyle.css"> -->
<section class="section intro intro-1 bg-image context-dark novi-bg novi-bg-img"
    style="background-image:url(uploads/gradient.png); height:120px;"
    data-preset='{"title":"Intro 1","category":"intro","reload":false,"id":"intro-1"}'>


</section>
<div class="container" style="margin-top: 35px;">
    <center>
        <h2 style="padding-bottom: 60px">
            <span class="text-logo"><span>Our </span><span> Achievements</span></span>
        </h2>
    </center>

</div>
@if(isset($acheve))
<div class="container" style="padding-bottom:40px; margin-top:40px;">
    <div class="row">
        <div class="col-md-1"></div>
        @foreach ($acheve as $a)
        <div class="col-md-5" style="padding:20px;">
            <div class="thumbnail thumbnail-gallery mt-sm-3 mt-md-5"><a class="thumbnail-media" data-lightgallery="item"
                    href="{{asset('uploads/'.json_decode($a->ref_file)[0])}}"> <img src="{{asset('uploads/'.json_decode($a->ref_file)[0])}}" class="card-img-top zoom  zoom" alt="..."
                        style="height:420px; width:761px; padding-bottom:18px;"></a></div>

            <p class="card-text" style=" text-align: justify;color:#3A3B3C;">{{$a->title}}</p>
        </div>
        <div class="col-md-1"></div>

        @endforeach
    </div>
</div>
@endif

@include('layouts.footer')
<div class="snackbars" id="form-output-global"></div>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>

</body>

</html>
