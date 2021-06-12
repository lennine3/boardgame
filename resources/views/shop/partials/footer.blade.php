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

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<script>
   /*  $('.dropdown.keep-open').on({
     //fires after dropdown is shown instance method is called (if you click anywhere else)
     "shown.bs.dropdown": function() { this.close= true; },
    //when dropdown is clicked
    "click": function() { this.close= false; },
    //when close event is triggered
    "hide.bs.dropdown":  function() { return this.close; }
});
 */
 document.getElementById("keep-open").addEventListener('click', function () {
            event.stopPropagation();
        });
</script>
