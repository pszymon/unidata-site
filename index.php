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
            <h3>Witaj na stronie <span>UNIDATA</span> zajmujemy się...</h3>
            <p>W ofercie UNIDATA znajdziecie Państwo niezawodne kasy fiskalne, czytniki, drukarki fiskalne, wagi, kolektory danych, metkownice, komputery POS oraz kompleksowe systemy sprzedaży.</p>

        </div>
    </div>
</div>



<div class="container-fluid text-center boxy">
    <div class="row">
        <h3>Nasza oferta</h3>
        <div class="col-md-3 boxes">
            <img src="images/drukarka_fiskalna.png" alt="drukarki fiskalne" height="150px;"/>
            <h4>Kasy fiskalne</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis illum cum asperiores unde minus explicabo saepe perferendis aspernatur, officiis tenetur porro laudantium non quaerat reiciendis ipsum maiores praesentium maxime. Ut.</p>
        </div>
        <div class="col-md-3 boxes">
            <img src="images/kasa_fiskalna.jpg" alt="kasy fiskalne" height="150px;"/>
            <h4>Drukarki fiskalne</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quod fugit labore sequi, eos sapiente veritatis minima modi repudiandae ipsa dolor commodi ut eveniet, quae adipisci. Dolorem quaerat, magni eligendi?</p>
        </div>
        <div class="col-md-3 boxes">
            <img src="images/waga_fiskalna.jpg" alt="wagi fiskalne" height="150px;"/>
            <h4>Wagi fiskalne</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sed facilis omnis quisquam optio, numquam voluptatem vero repellendus iure animi necessitatibus incidunt quas, ut et debitis. Omnis eius, est distinctio.</p>
        </div>
        <div class="col-md-3 boxes_last">
            <img src="images/czytnik_kodow.jpg" alt="czytniki kodow" height="150px;"/>
            <h4>Czytniki kodów</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa impedit ad voluptatum accusantium, aspernatur, tenetur hic vel. Optio atque sed iusto, rem voluptatibus soluta obcaecati expedita, sequi quaerat praesentium eum!</p>
        </div>
    </div><!-- end row -->
</div><!-- end container-fluid text-center boxy -->



<div class="container-fluid text-center galery">
    <div class="container">
        <h3>Urządzenia <span>fiskalne</span> w naszej ofercie</h3>
        <p>Oferujemy sprzedaż i serwis urządzeń fiskalnych na terenie powiatu Tarnowskiego i Dąbrowskiego  W ofercie posiadamy urządzenia fiskalne firm: Novitus, Elzab oraz Torell. Posiadamy doświadczenie we wdrażaniu systemów sprzedaży . Zapraszamy do skorzystania z naszych usług.</p>

    </div>

    <div class="row">


        <div class="col-lg-3">
            <img src="images/drukarka_fiskalna.png" alt="drukarki fiskalne" height="250px;"/>
        </div>
        <div class="col-lg-3">
            <img src="images/kasa_fiskalna.jpg" alt="kasy fiskalne" height="250px;"/>
        </div>
        <div class="col-lg-3">
            <img src="images/waga_fiskalna.jpg" alt="wagi fiskalne" height="250px;"/>
        </div>
        <div class="col-lg-3">
            <img src="images/czytnik_kodow.jpg" alt="czytniki kodow" height="250px;"/>
        </div>
        <div class="col-lg-3">
            <img src="images/drukarka_fiskalna.png" alt="drukarki fiskalne" height="250px;"/>
        </div>
        <div class="col-lg-3">
            <img src="images/kasa_fiskalna.jpg" alt="kasy fiskalne" height="250px;"/>
        </div>
        <div class="col-lg-3">
            <img src="images/waga_fiskalna.jpg" alt="wagi fiskalne" height="250px;"/>
        </div>
        <div class="col-lg-3">
            <img src="images/czytnik_kodow.jpg" alt="czytniki kodow" height="250px;"/>
        </div>
    </div><!-- end row -->
</div><!-- end container-fluid text-center galery -->



<?php include('footer.php'); ?>



<script type="text/javascript" language="javascript" defer="defer">
function scroll_to(selector) {
    $('html,body').animate({scrollTop: $(selector).offset().top}, 700);
    return false;
} 
</script>


</body>

</html>