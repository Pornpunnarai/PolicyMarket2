<!DOCTYPE html>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>



    <style>

        @font-face {

            font-family: 'lato-regular';

            src: url('fonts/Lato/Lato-Regular.ttf');

        }

        @font-face {

            font-family: 'lato-Black';

            src: url('fonts/Lato/Lato-Black.ttf');

        }



        @font-face {

            font-family: 'lato-Bold';

            src: url('fonts/Lato/Lato-Bold.ttf');

        }



        @font-face {

            font-family: 'lato-light';

            src: url('fonts/Lato/Lato-Light.ttf');

        }



        @font-face {

            font-family: 'lato-hair';

            src: url('fonts/Lato/Lato-Hairline.ttf');

        }



        @media (min-width: 320px) and (max-width: 480px){



            @media (min-height: 667px){

                div.col-xs-12.info{

                    position: fixed;

                }

            }



            .register-pc,.container,#insert_form{

                display: none;

            }

            .register-tablet,#insert_tablet_form{

                display: none;

            }



            img.img-fluid{

                width: 45%;

            }

            .btn.btn-success.register{

                background-color: #3E388B;

                border-color: #3E388B;

                padding: 7px;

                padding-left: 15px;

                padding-right: 15px;

                border-radius: 25px;

                margin-top: 15px;

            }

            .form-group {

                margin-bottom: 1vh;

            }



            div.swal2-popup.swal2-modal.swal2-show{

                width: 320px;

                height: 540px;

            }



            div.swal2-icon {

                margin: -12.25em auto 1.875em;

            }

        }



        @media (min-width: 481px) and (max-width: 1024px){

            .register-mobile,#insert_mobile_form{

                display: none;

            }



            .register-pc,.container,#insert_form{

                display: none;

            }



            img.img-fluid{

                width: 50%;

            }



            div.swal2-popup.swal2-modal.swal2-show{

                width: 300px;

                height: 300px;

            }



            .btn.btn-success.register{

                background-color: #3E388B;

                border-color: #3E388B;

                padding: 12px;

                padding-left: 20px;

                padding-right: 20px;

                border-radius: 25px;

                margin-top: 10px;

                margin-bottom: 25px;

            }



        }

        @media (min-width: 1025px)  {

            .register-mobile,#insert_mobile_form{

                display: none;

            }



            .register-tablet,#insert_tablet_form{

                display: none;

            }



            img.img-fluid{

                width: 50%;

            }



            div.swal2-popup.swal2-modal.swal2-show{

                width: 400px;

                height: 400px;

            }



            .btn.btn-success.register{

                background-color: #3E388B;

                border-color: #3E388B;

                padding: 12px;

                padding-left: 20px;

                padding-right: 20px;

                border-radius: 25px;

                margin-top: 10px;

                margin-bottom: 25px;

            }

        }



        @media (min-width: 1200px){

            .container {

                max-width: 1240px;

            }



            .btn.btn-success.register{

                background-color: #3E388B;

                border-color: #3E388B;

                padding: 12px;

                padding-left: 20px;

                padding-right: 20px;

                border-radius: 25px;

                margin-top: 10px;

                margin-bottom: 25px;

            }

        }



    </style>

</head>

<body>



<div class="container">

    <div class="row register-pc">

        <div class="col-lg-8" style="box-shadow: -2px 0px 1px 0px #ededed inset;">

        <div class="row" style="margin-top: 7vh; margin-bottom: 5vh;">

            <div class="col-md-6">

                <img class="img-fluid" src="img/logo.png" width="50%">

            </div>

            <div class="col-md-6" style="float: right; padding-right: 5vh;">

                <h3 style="text-align: right;font-family: 'lato-Black'; color: black">Personal Information</h3>

            </div>

        </div>



            <div class="row" style="font-family: 'lato-hair';">

                <div class="col-md-12" style="font-size: 30px; margin-bottom: 4vh;">

                    <b>Let us know who you are</b>

                </div>



            </div>

            <div class="row" style="font-family: 'lato-light'; font-size: 20px;">

                <div class="col-md-12" style="padding-right: 5vh;">



                    <form method="post" id="insert_form">

                        <div class="row" style="margin-bottom: 2vh;">



                            <div class="col-md-6">

                                <div class="form-group  form-group-lg">

                                    <label>First Name:</label>

                                    <input type="text" class="form-control input-lg" name="firstname" id="firstname" placeholder="Enter first name" required>

                                </div>

                            </div>

                            <div class="col-md-6" style="margin-bottom: 2vh;">

                                <div class="form-group">

                                    <label>Last Name :</label>

                                    <input type="text" class="form-control input-lg" name="lastname"  id="lastname" placeholder="Enter last name" required>

                                </div>

                            </div>



                            <div class="col-md-12" style="margin-bottom: 2vh;">

                                <div class="form-group">

                                    <label>Email Address :</label>

                                    <input type="email" class="form-control input-lg" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>

                                </div>

                            </div>



                            <div class="col-md-12" style="margin-bottom: 2vh;">

                                <div class="form-group">

                                    <label>Phone Number:</label>

                                    <input type="tel" class="form-control input-lg" name="phone"  id="phone" placeholder="+(66)66 666 6666" required>

                                </div>

                            </div>



                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>Position:</label>

                                    <input type="text" class="form-control input-lg" name="position" id="position" placeholder="Enter position" required>

                                </div>

                            </div>

                            <div class="col-md-6" style="margin-bottom: 2vh;">

                                <div class="form-group">

                                    <label>Company/Organization :</label>

                                    <input type="text" class="form-control input-lg"  name="company" id="company" placeholder="Enter Company/Organization" required>

                                </div>

                            </div>



                        </div>

                        <input type="submit" name="insert" id="insert" value="Register now"

                            class="btn btn-success register" style="font-size: 18px; float: right; font-family: 'lato-Bold';margin-bottom: 5vh;"/>

                    </form>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="row" style="font-family: 'lato-Black'; margin-bottom: 50%; margin-top: 50%; text-align: center;">



                <div class="row">

                    <div class="col-md-1"></div>

                    <div class="col-md-10">

                        <h3>

                            More Information

                        </h3>

                    </div>

                </div>



                <br>

                <div class="row">

                    <div class="col-md-1"></div>

                    <div class="col-md-10">

                        <a href="Material/PolicyMarketPoster.pdf" download>

                            <img src="img/file.png" width="25%">

                        </a>

                    </div>

                </div>



                <br><br>

                <div class="row">

                    <div class="col-md-1"></div>

                    <div class="col-md-10">

                        <h4 style="color: #4b4f57">

                            (+66)90 923 5291<br><br>

                            spp@cmu.ac.th<br><br>

                            spp.cmu.ac.th</h4>

                    </div>

                </div>





            </div>

        </div>

    </div>

</div>

<div class="register-tablet">

    <div class="col-sm-12" style="background-color: #eaeaea6e;padding: 75px; padding-bottom: 20px">

        <div class="row" style="margin-bottom: 2vh;">

            <div class="col-sm-6">

                <img class="img-fluid" src="img/logo.png">

            </div>

            <div class="col-sm-6" style="float: right;">

                <h3 style="text-align: right;font-family: 'lato-Black'; color: black">Personal Information</h3>

            </div>



        </div>



        <div class="row" style="font-family: 'lato-hair';">

            <div class="col-sm-12" style="font-size: 25px; margin-bottom: 4vh;">

                <b>Let us know who you are</b>

            </div>



        </div>

        <div class="row" style="font-family: 'lato-light'; font-size: 20px;">

            <div class="col-sm-12">

                <form method="post" id="insert_tablet_form">

                    <div class="row" style="margin-bottom: 1vh;">



                        <div class="col-sm-6">

                            <div class="form-group  form-group-lg">

                                <label>First Name:</label>

                                <input type="text" class="form-control input-lg" name="firstname" id="firstname" placeholder="Enter first name" required>

                            </div>

                        </div>

                        <div class="col-sm-6" style="margin-bottom: 1vh;">

                            <div class="form-group">

                                <label>Last Name :</label>

                                <input type="text" class="form-control input-lg" name="lastname"  id="lastname" placeholder="Enter last name" required>

                            </div>

                        </div>



                        <div class="col-sm-12" style="margin-bottom: 1vh;">

                            <div class="form-group">

                                <label>Email Address :</label>

                                <input type="email" class="form-control input-lg" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>

                            </div>

                        </div>



                        <div class="col-sm-12" style="margin-bottom: 1vh;">

                            <div class="form-group">

                                <label>Phone Number:</label>

                                <input type="tel" class="form-control input-lg" name="phone"  id="phone" placeholder="+(66)66 666 6666" required>

                            </div>

                        </div>



                        <div class="col-sm-6">

                            <div class="form-group">

                                <label>Position:</label>

                                <input type="text" class="form-control input-lg" name="position" id="position" placeholder="Enter position" required>

                            </div>

                        </div>

                        <div class="col-sm-6" style="margin-bottom: 1vh;">

                            <div class="form-group">

                                <label>Company/Organization :</label>

                                <input type="text" class="form-control input-lg"  name="company" id="company" placeholder="Enter Company/Organization" required>

                            </div>

                        </div>



                    </div>

                    <input type="submit" name="insert_tablet" id="insert_tablet" value="Register now" class="btn btn-success register" style="font-size: 18px; float: right; font-family: 'lato-Bold';" />



                </form>

            </div>

        </div>

    </div>

    <div class="col-sm-12">

        <div class="row" style="font-family: 'lato-Black'; text-align: center;padding: 75px;padding-top: 25px;">



            <div class="col-sm-6">

                <h3>

                    More Information

                </h3>

                <br>

                <a href="Material/PolicyMarketPoster.pdf" download>

                    <img src="img/file.png" width="25%">

                </a>

            </div>



            <div class="col-sm-6"> <br> <br>

                <h4 style="color: #4b4f57">

                    (+66)90 923 5291<br><br>

                    spp@cmu.ac.th<br><br>

                    spp.cmu.ac.th</h4>

            </div>





        </div>

    </div>

</div>



<div class="register-mobile">

    <div class="col-sm-12" style="padding: 30px; padding-bottom: 20px">

        <div class="row">

            <div class="col-xs-12 text-center" style="margin-bottom: 1vh;">

                <img class="img-fluid" src="img/logo.png">

            </div>

            <div class="col-xs-12 text-center">

                <h3 style="font-family: 'lato-Black'; color: black;font-size: 20px;">Personal Information</h3>

            </div>



        </div>



        <div class="row" style="font-family: 'lato-hair';">

            <div class="col-xs-12 text-center" style="font-size: 20px; margin-bottom: 2vh;">

                <b>Let us know who you are</b>

            </div>



        </div>

        <div class="row" style="font-family: 'lato-light'; font-size: 13px;margin-bottom: 1vh;">

            <div class="col-xs-12">

                <form method="post" id="insert_mobile_form">

                    <div class="row">

                        <div class="col-xs-6">

                            <div class="form-group">

                                <label>First Name:</label>

                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter first name" required>

                            </div>

                        </div>

                        <div class="col-xs-6">

                            <div class="form-group">

                                <label>Last Name :</label>

                                <input type="text" class="form-control" name="lastname"  id="lastname" placeholder="Enter last name" required>

                            </div>

                        </div>



                        <div class="col-xs-12">

                            <div class="form-group">

                                <label>Email Address :</label>

                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>

                            </div>

                        </div>



                        <div class="col-xs-12">

                            <div class="form-group">

                                <label>Phone Number:</label>

                                <input type="tel" class="form-control" name="phone"  id="phone" placeholder="+(66)66 666 6666" required>

                            </div>

                        </div>



                        <div class="col-xs-12">

                            <div class="form-group">

                                <label>Position:</label>

                                <input type="text" class="form-control" name="position" id="position" placeholder="Enter position" required>

                            </div>

                        </div>

                        <div class="col-xs-12">

                            <div class="form-group">

                                <label>Company/Organization :</label>

                                <input type="text" class="form-control"  name="company" id="company" placeholder="Enter Company/Organization" required>

                            </div>

                        </div>



                    </div>

                    <div class="row text-center">

                        <input type="submit" name="insert_mobile" id="insert_mobile" value="Register now" class="btn btn-success register"

                               style="font-size: 15px; font-family: 'lato-Bold'; margin-top: 20px;" />

                    </div>

                </form>

            </div>

        </div>

    </div>

    <div class="col-xs-12">

        <div class="row" style="font-family: 'lato-Black'; text-align: center;">



            <div class="col-xs-12 info" style="bottom: 2%; margin: 0px auto;">

                <h4>

                    More Information<br>



                    <small style="color: #4b4f57">

                        (+66)90 923 5291 &nbsp; &nbsp;

                        spp@cmu.ac.th &nbsp; &nbsp;

                        spp.cmu.ac.th &nbsp; &nbsp;

                    </small>

                </h4>

            </div>



        </div>

    </div>

</div>





<script>



    $(document).ready(function(){



        $('#insert_form').on("submit", function(event){

            event.preventDefault();



            $.ajax({

                url:"check-register-event.php",

                method:"POST",

                data:$('#insert_form').serialize(),

                success:function(data){



                    if(data == 0){

                        check_email();

                    }else if(data == 1){

                        validate();

                        $('#insert_form')[0].reset();

                    }





                }

            })

            });



        $('#insert_tablet_form').on("submit", function(event){

            event.preventDefault();



            $.ajax({

                url:"check-register-event.php",

                method:"POST",

                data:$('#insert_tablet_form').serialize(),

                success:function(data){



                    if(data == 0){

                        check_email();

                    }else if(data == 1){

                        validate();

                        $('#insert_tablet_form')[0].reset();

                    }





                }

            });

        });



        $('#insert_mobile_form').on("submit", function(event){

            event.preventDefault();



            $.ajax({

                url:"check-register-event.php",

                method:"POST",

                data:$('#insert_mobile_form').serialize(),

                success:function(data){



                    if(data == 0){

                        check_email();

                    }else if(data == 1){

                        validate_mobile();

                        $('#insert_mobile_form')[0].reset();

                    }

                }

            });

        });



    });



    function validate() {



        swal({

            type: 'success',

            showConfirmButton: false,

            background: 'url(img/Popuppc.png)',

            timer: 5000

        }).then(function() {

            window.location.href = "http://spp.cmu.ac.th";

        });

    }



    function validate_mobile() {

        swal({

            type: 'success',

            showConfirmButton: false,

            background: 'url(img/mobiledonepage.png)',

            timer: 5000

        }).then(function() {

            window.location.href = "http://spp.cmu.ac.th";

        });

    }



    function check_email() {

        swal({

            type: 'error',

            background: 'url(img/nonepopuppc.png)',

            title: 'Oops...',

            text: 'Your email has already in the system!',

            timer: 5000

        }).then(function() {

            window.location.href = "http://spp.cmu.ac.th/register/register.php";

        });

    }

</script>







</body>

</html>