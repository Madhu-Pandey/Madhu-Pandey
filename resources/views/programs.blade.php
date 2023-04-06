@include('layouts.header')
<style>
.rounded {
    border-radius: 4px;
}

.border {
    box-shadow: rgba(9, 30, 66, 0.31) 0px 0px 1px 0px, rgba(9, 30, 66, 0.25) 0px 1px 1px 0px;
}

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
<section class="section intro intro-1 bg-image context-dark novi-bg novi-bg-img"
    style="background-image:url(uploads/52.jpg); height:350px;"
    data-preset='{"title":"Intro 1","category":"intro","reload":false,"id":"intro-1"}'>
    <div class="intro-inner">
        <div class="container text-center text-xs-left">
        </div>
    </div>
</section>
<div class="container" style="padding-bottom:60px;">
    <center>
        <h2 style="padding-bottom: 60px; padding-top:40px;">
            <span class="text-logo"><span>Our </span><span> Programs</span></span>
        </h2>
    </center>
    <div class="row">
        <div class="col" style="padding:20px;">
            <div class="card" style="width: 18rem; border-style: outset; padding:15px;">
                <center><img src="uploads/pmma2-removebg-preview.png" class="card-img-top" alt="..."
                        style="width:170px;height:185px;"></center>
                <div class="uk-card-body ">
                    <h5>
                        <span class="text-logo"><span>MMA</span></span>
                    </h5>
                    <p class="card-text" style="color:#3A3B3C;">Mixed Martial Arts(MMA) training programs for athelets,
                        coach training programs, MMA Official training program (certified Judges and Referee), Grading
                        programs in MMA.</p>
                </div>
            </div>
        </div>

        <div class="col" style="padding:20px;">
            <div class="card" style="width: 18rem; border-style: outset; padding:15px;">
                <center> <img src="uploads/psilat.png" class="card-img-top" alt="..."></center>
                <div class="uk-card-body">
                    <h5>
                        <span class="text-logo"><span>Pencak Silat</span></span>
                    </h5>
                    <p class="card-text" style="color:#3A3B3C;">We provide training of Pencak Silat which refers to many
                        styles and schools of martial arts spread across the Indonesian and Malay islands. It involves,
                        striking, grappling techniques, and throwing.</p>
                </div>
            </div>
        </div>
        <div class="col" style="padding:20px;">
            <div class="card " style="width: 18rem; border-style: outset; padding:15px;">
                <center> <img src="uploads/pbox.png" class="card-img-top" alt="..." style="width:170px;height:185px;">
                </center>
                <div class="uk-card-body">
                    <h5>
                        <span class="text-logo"><span>Boxing</span></span>
                    </h5>
                    <p class="card-text" style="color:#3A3B3C;">We also provide training on Boxing which utilizes head
                        movements, footwork, and punches to form a very efficient striking system of Martial Arts.
                        <br><br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col" style="padding:20px;">
            <div class="card" style="width: 18rem; border-style: outset; padding:15px;">
                <center><img src="uploads/sd3.png" class="card-img-top" alt="..." style="width:170px;height:185px;">
                </center>
                <div class="uk-card-body">
                    <h5>
                        <span class="text-logo"><span>Self Defence</span></span>
                    </h5>
                    <p class="card-text" style="color:#3A3B3C;">Our Self-defence program trains you to counter a form of
                        harassment or assault. While martial arts generate greater awareness on how to prevent, protect,
                        and counter attack.<br><br></p>
                </div>
            </div>
        </div>

        <div class="col" style="padding:20px;">
            <div class="card " style="width: 18rem; border-style: outset; padding:15px;">
                <center><img src="uploads/ktt2.png" class="card-img-top" alt="..." style="width:180px;height:185px;  ">
                </center>
                <div class="uk-card-body">
                    <h5>
                        <span class="text-logo"><span>Karate</span></span>
                    </h5>
                    <p class="card-text" style="color:#3A3B3C;">We providing training of Karate which is predominantly a
                        striking, kicking and punching art.<br><br><br><br></p>
                </div>
            </div>
        </div>
        <div class="col" style="padding:20px;">
            <div class="card" style="width: 18rem; border-style: outset; padding:15px;">
                <center> <img src="uploads/pfit.png" class="card-img-top" alt="..." style="width:170px;height:185px;">
                </center>
                <div class="uk-card-body">
                    <h5>
                        <span class="text-logo"><span>Sport Fitness</span></span>
                    </h5>
                    <p class="card-text" style="color:#3A3B3C;">We provide Sport Fitness which includes cardio
                        respiratory endurance, muscle strength, muscle explosiveness, speed, agility, flexibility,
                        balance, reaction speed, coordination and many more exercise.</p>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

@include('layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

</script>
<div class="snackbars" id="form-output-global"></div>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>