<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Marcin Hulski - UNIDATA</title>
    <meta charset="utf-8">
    <meta name="author" content="Webtar (www.webtar.pl)" />
    <meta name="robots" content="all" />
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/style.css" rel="stylesheet">													<!-- style.css -->
    <link href="css/bootstrap.css" rel="stylesheet">											<!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="js/bootstrap.min.js" defer="defer"></script>										<!-- Bootstrap js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>		<!-- jquery -->



</head>

<body>


<?php include('header.php'); ?>

<?php include('slider.php'); ?>



<div class="under-slider">
    <div class="container">
        <div class="row">
            <h3>Witaj na stronie <span>UNIDATA</span></h3>
            <p>W ofercie UNIDATA znajdziecie Państwo niezawodne kasy fiskalne, czytniki, drukarki fiskalne, wagi, kolektory danych, metkownice, komputery POS oraz kompleksowe systemy sprzedaży.</p>
        </div>
    </div>
</div>



<div id="contact_up">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div id="kontakt_left">
                    <div id="form">
                        <fieldset id="contact_form">
                            <div class="form-group">
                                <label for="email">Zadaj nam pytanie odnośnie oferty, wyceny...</label>
                                <div  id="result"></div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Wpisz twój e-mail">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" placeholder="Wpisz treść wiadomości" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                                <span><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Odpowiedź otrzymasz maksymalnie do 24h!</span>
                                <button  class="btn btn-default pull-right" id="submit_btn">Wyślij</button>
                            </div>
                        </fieldset>


                        <script type="text/javascript">
                            $(document).ready(function() {
                                $("#submit_btn").click(function() {
                                    //Pobieramy dane
                                    var user_email      = $('input[name=email]').val();
                                    var user_message    = $('textarea[name=message]').val();

                                    //Prosta walidacja (kolorujemy na czerwono pole jeśli jest puste
                                    var proceed = true;
                                    if(user_email==""){
                                        $('input[name=email]').css('border-color','red');
                                        proceed = false;
                                    }
                                    if(user_message=="") {
                                        $('textarea[name=message]').css('border-color','red');
                                        proceed = false;
                                    }

                                    //wszystko w porządku idziemy dalej
                                    if(proceed)
                                    {
                                        //Dane do wysłania
                                        post_data = {'userEmail':user_email, 'userMessage':user_message};

                                        //Przesłanie danych poprzez AJAX
                                        $.post('contact_me.php', post_data, function(response){

                                            //wczytanie danych zwrotnych JSON
                                            if(response.type == 'error')
                                            {
                                                output = '<div class="error alert alert-danger">'+response.text+'</div>';
                                            }else{
                                                output = '<div class="success alert alert-success">'+response.text+'</div>';

                                                //resetujemy wszystkie wartości
                                                $('#contact_form input').val('');
                                                $('#contact_form textarea').val('');
                                            }

                                            $("#result").hide().html(output).slideDown();
                                        }, 'json');

                                    }
                                });

                                //resetujemy kolorowanie po zaczęciu pisania
                                $("#contact_form input, #contact_form textarea").keyup(function() {
                                    $("#contact_form input, #contact_form textarea").css('border-color','');
                                    $("#result").slideUp();
                                });

                            });
                        </script>
                        <script>
                            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                            ga('create', 'UA-34088320-1', 'wojtek1150.pl');
                            ga('send', 'pageview');
                        </script>


                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div id="kontakt_right">
                    <h5>Oddział w Tarnowie:</h5>
                    <p class="contact" ><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> ul. Krasińskiego 45</p>
                    <p class="contact" ><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 33-100 Tarnów</p>
                    <p class="contact" ><span class="glyphicon glyphicon-time" aria-hidden="true"></span> pn-pt: 9-18</p>
                    <p class="contact" id="last" ><span class="glyphicon glyphicon-time" aria-hidden="true"></span> sobota: 9-13</p>
                </div>
            </div>

            <div class="col-md-3">
                <div id="kontakt_right">
                    <h5>Oddział w Dąbrowie Tarnowskiej:</h5>
                    <p class="contact" ><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> ul. Rynek 48</p>
                    <p class="contact" ><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 33-200 D.tarnowska</p>
                    <p class="contact" ><span class="glyphicon glyphicon-time" aria-hidden="true"></span> pn-pt: 9-17</p>
                    <p class="contact" id="last" ><span class="glyphicon glyphicon-time" aria-hidden="true"></span> sobota: 9-13</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="contact_down">
    <div class="container">
        <div id="map_tarnow">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-center">Oddział <span>Tarnów</span></h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.8446341672075!2d20.97869769999999!3d50.01426720000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473d84a817e83a51%3A0x9fb42dacb7fdc65!2sZygmunta+Krasi%C5%84skiego+45%2C+Tarn%C3%B3w!5e0!3m2!1spl!2spl!4v1433432574605" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center">Oddział <span>Dąbrowa Tarnowska</span> </h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2555.244388832093!2d20.985188700000005!3d50.175266799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473d7ead5e4c4953%3A0x627b7797daf46593!2sRynek+48%2C+33-200+D%C4%85browa+Tarnowska!5e0!3m2!1spl!2spl!4v1433432822764" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>





<?php include('footer.php'); ?>



<script type="text/javascript" language="javascript" defer="defer">
    function scroll_to(selector) {
        $('html,body').animate({scrollTop: $(selector).offset().top}, 700);
        return false;
    }
</script>


</body>

</html>