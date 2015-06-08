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
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>


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


<div class="container-fluid text-center boxy">
    <div class="row">
        <h3>Nasza oferta</h3>
        <div class="col-md-4 boxes">
            <img src="images/kasa_fiskalna_box.jpg" alt="kasy fiskalne" height="150px;"/>
            <h4>Kasy fiskalne</h4>
            <p>Nowoczesna kasy fiskalne przeznaczona do pracy w mobilnych  i stacjonarnych punktach handlowych, gastronomicznych i usługowych. Kasy z papierową i elektroniczną kopią , wg wytycznych Rozporządzenia MF z dnia 28 listopada 2008 r. Wszystkie, kasy z najnowszą homologacją Prezesa Głównego Urzędu Miar. </p>
        </div>
        <div class="col-md-4 boxes">
            <img src="images/drukarki_fiskalne_box.jpg" alt="drukarki fiskalne" height="150px;"/>
            <h4>Drukarki fiskalne</h4>
            <p>Najnowocześniejsze drukarki fiskalne z elektroniczną kopią paragonu dedykowana do małych i średnich punktów handlowych, gdzie sprzedaż prowadzona jest z programu komputerowego a drukarka będzie fiskalnym uzupełnieniem tego stanowiska. Cechy użytkowe drukarki (np. mechanizm drukujący "wrzuć i pracuj", drukowanie faktur VAT bezpośrednio na swoim mechanizmie drukującym).</p>
        </div>
        <div class="col-md-4 boxes_last">
            <img src="images/wagi_sklepowe_box.jpg" alt="wagi sklepowe" height="150px;"/>
            <h4>Wagi sklepowe</h4>
            <p>Elektroniczna, legalizowana, sklepowa waga kalkulacyjne do szybkiego i precyzyjnego określania masy ważonych przedmiotów oraz należności.  Waga kalkulacyjna oferowane przez UNIDATA , dzięki wielu funkcjom bardzo dobrze sprawdza się w sprzedaży detalicznej oraz rozliczeniach handlowych.</p>
        </div>

        <div class="clearfix"></div>
        
        <div class="col-md-4 boxes">
            <img src="images/czytniki_kodow_box.jpg" alt="czytniki kodow" height="150px;"/>
            <h4>Czytniki kodów</h4>
            <p>Czytniki kodów kreskowych przeznaczone są do odczytu oraz przesłania, do komputera lub innego urządzenia, informacji zawartych w kodzie kreskowym lub kodzie dwuwymiarowym. Oferowane przez nas czytniki  charakteryzuje wysokiej jakości układ laserowy- pierwsza klasa bezpieczeństwa dla użytkownika oraz ergonomiczne wzornictwo połączone z najwyższej jakości materiałami użytymi do ich produkcji.</p>
        </div>
        <div class="col-md-4 boxes">
            <img src="images/sprawdzarki_cen_box.jpg" alt="sprawdzarki cen" height="150px;"/>
            <h4>Sprawdzarki cen</h4>
            <p>Sprawdzarka cen NQuire to urządzenie przeznaczone do wszelkiego rodzaju placówek handlowych, gdzie istnieje potrzeba udostępnienia klientowi możliwości weryfikacji ceny produktu oraz jego nazwy.</p>
        </div>
        <div class="col-md-4 boxes_last">
            <img src="images/terminale_platnicze_box.jpg" alt="terminale płatnicze" height="150px;"/>
            <h4>Terminale płatnicze</h4>
            <p>Oferuje Klientom terminale płatnicze firmy paytel – zarówno stacjonarne, jak i przenośne. Zapewniane przez nas terminale pos są platformą umożliwiającą punktom handlowym i usługowym świadczenie różnego typu usług, oferowanych bezpośrednio przez naszą firmę, bądź też we współpracy z Partnerami.</p>
        </div>
    </div><!-- end row -->
</div><!-- end container-fluid text-center boxy -->



<div class="container-fluid text-center galery">
    <div class="container">
        <h3>Urządzenia <span>fiskalne</span> w naszej ofercie</h3>
        <p>Oferujemy sprzedaż i serwis urządzeń fiskalnych na terenie powiatu Tarnowskiego i Dąbrowskiego  W ofercie posiadamy urządzenia fiskalne firm: Novitus, Elzab oraz Torell. Posiadamy doświadczenie we wdrażaniu systemów sprzedaży . Zapraszamy do skorzystania z naszych usług.</p>

    </div>


</div><!-- end container-fluid text-center galery -->

<?php include('galeria.php'); ?>

<?php include('footer.php'); ?>



<script type="text/javascript" language="javascript" defer="defer">
function scroll_to(selector) {
    $('html,body').animate({scrollTop: $(selector).offset().top}, 700);
    return false;
} 
</script>


</body>

</html>