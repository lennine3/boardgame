<div class="container-fluid footer">
    <div class="container">
        <div class="row" style="padding-top: 35px">
            <div class="col-12 col-lg-3">
                <div>
                    <img src="{{ asset('FrontEnd/img/logo.png') }}" alt="">
                </div>
                <br>
                <div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sunt,
                    eaque possimus aliquid voluptatibus sit impedit alias beatae officiis! Incidunt atque magni
                    veritatis accusamus.
                    Ipsum ducimus magnam tenetur similique porro.
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div style="display:inline-flex;padding-bottom:20px">
                            <div class="parallelogram1"></div>
                            <div style="padding-left: 5px">
                                <h4 style="color: #fff" style="padding-left: 30px"><i>People's Choice</i></h4>
                            </div>
                        </div>
                        <div class="col-lg-12" style="padding-top: 10px">
                            <div class="row">
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <img src="{{ asset('Img/ct.jpg') }}" width="100%">
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <label for="#">The Famoust gameboard of all time</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-12">
                <div style="display:inline-flex;padding-bottom:20px">
                    <div class="parallelogram1"></div>
                    <div style="padding-left: 5px">
                        <h4 style="color: #fff" style="padding-left: 30px"><i>Tag</i></h4>
                    </div>
                </div>
                <div>
                    <a class="btn" style="color: #fff;border-color:#fff">Family</a>
                    <a class="btn" style="color: #fff;border-color:#fff">RPG</a>
                    <a class="btn" style="color: #fff;border-color:#fff">Fun</a>
                    <a class="btn" style="color: #fff;border-color:#fff">Logic</a>
                    <a class="btn" style="color: #fff;border-color:#fff">Trust</a>
                    <a class="btn" style="color: #fff;border-color:#fff">Group</a>
                    <a class="btn" style="color: #fff;border-color:#fff">Family</a>
                    <a class="btn" style="color: #fff;border-color:#fff">RPG</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row" style="padding-top: 20px;padding-bottom:20px">
            <div class="col-lg-4">
                <div style="font-size: 80%"> <b>SUBSCRIBE TO RECEIVE PROMOTION INFORMATION </b></div> <br>
                <form action="#">
                    <div class="input-group mb3">
                        <input type="text" class="form-control" id="email">
                        <label for="email"></label>
                        <button class="btn btn-warning">SUBSCRIBE</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-5" style="text-align: center">
                <div style="font-size: 80%"> <b> PAYMENT METHOD </b></div> <br>
                <div>
                    <img src="{{ asset('FrontEnd/img/i_atm.png') }}" alt="">
                    <img src="{{ asset('FrontEnd/img/onepay.png') }}" alt="">
                    <img src="{{ asset('FrontEnd/img/visa.png') }}" alt="">
                    <img src="{{ asset('FrontEnd/img/master.png') }}" alt="">
                    <img src="{{ asset('FrontEnd/img/usd.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-3" style="text-align: end">
                <div style="font-size: 80%"> <b> CONNECT WITH US </b></div> <br>
                <div>
                    <img src="{{ asset('FrontEnd/img/face.png') }}" alt="">
                    <img src="{{ asset('FrontEnd/img/insta.png') }}" alt="">
                    <img src="{{ asset('FrontEnd/img/mail.png') }}" alt="">
                    <img src="{{ asset('FrontEnd/img/youtube.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center border-top border-2 border-orange"
    style="padding:20px 20px 20px 20px;color:#ec4e0f">&copy; Amin Board Game</div>
<!--slide Banner-->
<script>
    //slide
    $('.owl-banner').owlCarousel({
        loop: true,
        autoplay: true,
        navSpeed: 1750,
        dots: false,
        margin: 10,
        center: true,
        center: true,
        autoplaySpeed: 1750,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

</script>
<!--slide Banner-->
<!--slide Exclusive-->
<script>
    //slide
    $('.owl-exclusive').owlCarousel({
        loop: true,
        autoplay: false,
        navSpeed: 1750,
        dots: false,
        margin: 10,
        autoplayTimeout:6500,
        center: true,
        center: true,
        navText: ["<img src={{ asset('FrontEnd/img/prev-arrow.png') }}>",
            "<img src={{ asset('FrontEnd/img/next-arrow.png') }}>"
        ],
        autoplaySpeed: 1750,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    var owl = $('.owl-exclusive');
    owl.owlCarousel();
    // Go to the next item
    $('.btn-right-exclusive').click(function () {
        owl.trigger('next.owl.carousel',[1750]);
    })
    // Go to the previous item
    $('.btn-left-exclusive').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [1750]);
    })

</script>
<!--slide Exclusive-->
<script>
    //slide
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: false,
        navSpeed: 1750,
        dots: false,
        nav: true,
        margin: 10,
        center: true,
        navText: ["<img src={{ asset('FrontEnd/img/prev.png') }}>",
            "<img src={{ asset('FrontEnd/img/next.png') }}>"
        ],
        center: true,
        autoplaySpeed: 1750,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

</script>
<script>
    window.onscroll = function () {
        myFunction()
    };

    var navbar = document.getElementById("navBar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }

</script>
<script>
    function searchVisible() {
        document.getElementById("search_input_box").removeAttribute("class", "visible_hidden");
    }

</script>
<script>
    function searchHidden() {
        document.getElementById("search_input_box").setAttribute("class", "visible_hidden");
    }

</script>

<!--Count Down Watch Start-->
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("May 14, 2021 00:00:00").getTime();

    var nowLater = new Date().getTime();
    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        /*  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
         + minutes + "m " + seconds + "s "; */
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);

</script>
<!--Count Down Watch End-->
