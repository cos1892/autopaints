<?php define('ROOT_DIR', dirname(__FILE__)); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="language" content="en">
  <meta name="yandex-verification" content="45c34490c3cb7e28">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="../public/stylesheets/style.css">
  <link type="text/css" rel="stylesheet" href="../public/stylesheets/slide.css">
  <link type="text/css" rel="stylesheet" href="../public/stylesheets/form.css">
  <link rel="stylesheet" type="text/css" href="../public//stylesheets/jquery.fancybox.css">
  <script type="text/javascript" src="../public/javascripts/jquery.js"></script>
  <script type="text/javascript" src="../public/javascripts/jquery(1).js"></script>
  <title>Автокраски | Автокраски и автоэмали. Подбор.</title>
  <meta name="keywords" content="Автокраски">
  <meta name="description" content="Автокраски">
  <meta class="foundation-mq-small"><meta class="foundation-mq-medium"><meta class="foundation-mq-large"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-xxlarge"><style></style>

  <script type="text/javascript" src="../public/javascripts/menu-small.js"></script>

</head>

<body>
<?php
require(ROOT_DIR.'/views/header.php');
?>
<div class="hero">
</div>
<?php
require(ROOT_DIR.'/views/upmenu.php');
?>

<div class="row">
<?php
require(ROOT_DIR.'/views/slider.php');
?>

<?php
require(ROOT_DIR.'/views/leftmenu.php');
?>



  <section class="content padding col-small-12 col8">
    <h1>MAXICOLOUR ® <span class="red">МАКСИКОЛОР</span></h1>
    <hr>
  
   <?php
   if(strstr($_SERVER['REQUEST_URI'],'/price')==true)
   {
	   require(ROOT_DIR.'/views/price.php');
	   $key=1;

   }
      if(strstr($_SERVER['REQUEST_URI'],'/contacts')==true)
   {
	   require(ROOT_DIR.'/views/contacts.php');
	   $key=1;

   }
      if(strstr($_SERVER['REQUEST_URI'],'/o-nas')==true)
   {
	   require(ROOT_DIR.'/views/o-nas.php');
	   $key=1;

   }
      if(strstr($_SERVER['REQUEST_URI'],'/news/new1')==true)
   {
	   require(ROOT_DIR.'/views/news/new1.php');
	   $key=1;

   }
      if(strstr($_SERVER['REQUEST_URI'],'/news/new2')==true)
   {
	   require(ROOT_DIR.'/views/news/new2.php');
	   $key=1;

   }
      if(strstr($_SERVER['REQUEST_URI'],'/podbor-kraski/quickline')==true)
   {
	   require(ROOT_DIR.'/views/podbor-kraski/quickline.php');
	   $key=1;

   }
      if(strstr($_SERVER['REQUEST_URI'],'/podbor-kraski/challenger')==true)
   {
	   require(ROOT_DIR.'/views/podbor-kraski/challenger.php');
	   $key=1;

   }
      if(strstr($_SERVER['REQUEST_URI'],'/podbor-kraski/haya')==true)
   {
	   require(ROOT_DIR.'/views/podbor-kraski/haya.php');
	   $key=1;

   }
      if(strstr($_SERVER['REQUEST_URI'],'/podbor-kraski/moto-kraski')==true)
   {
	   require(ROOT_DIR.'/views/podbor-kraski/moto-kraski.php');
	   $key=1;

   }
      if(strstr($_SERVER['REQUEST_URI'],'/podbor-kraski/exclusive-kraski')==true)
   {
	   require(ROOT_DIR.'/views/podbor-kraski/exclusive-kraski.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/kraski-i-prochee-v-aerozolnyh-ballonah/kraski-i-materialy-v-spreyah')==true)
   {
	   require(ROOT_DIR.'/views/kraski-i-prochee-v-aerozolnyh-ballonah/kraski-i-materialy-v-spreyah.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/kraski-i-prochee-v-aerozolnyh-ballonah/zakachka-v-ballony')==true)
   {
	   require(ROOT_DIR.'/views/kraski-i-prochee-v-aerozolnyh-ballonah/zakachka-v-ballony.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/materialy-dlya-podgotovki-k-pokraske/shpatlevki')==true)
   {
	   require(ROOT_DIR.'/views/materialy-dlya-podgotovki-k-pokraske/shpatlevki.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/materialy-dlya-podgotovki-k-pokraske/gruntovki')==true)
   {
	   require(ROOT_DIR.'/views/materialy-dlya-podgotovki-k-pokraske/gruntovki.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/materialy-dlya-podgotovki-k-pokraske/laki')==true)
   {
	   require(ROOT_DIR.'/views/materialy-dlya-podgotovki-k-pokraske/laki.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/materialy-dlya-podgotovki-k-pokraske/prochee')==true)
   {
	   require(ROOT_DIR.'/views/materialy-dlya-podgotovki-k-pokraske/prochee.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/o-podborah/kak-proishodit-podbor-kraski')==true)
   {
	   require(ROOT_DIR.'/views//o-podborah/kak-proishodit-podbor-kraski.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/o-podborah/chto-takoe-komp-podbor')==true)
   {
	   require(ROOT_DIR.'/views/o-podborah/chto-takoe-komp-podbor.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/o-podborah/chto-nuzhno-znat-otpravlyayas-na-podbor')==true)
   {
	   require(ROOT_DIR.'/views/o-podborah/chto-nuzhno-znat-otpravlyayas-na-podbor.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/o-podborah/skolko-nuzhno-kraski')==true)
   {
	   require(ROOT_DIR.'/views/o-podborah/skolko-nuzhno-kraski.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/o-podborah/prichiny-nesootvetstviya-kraski')==true)
   {
	   require(ROOT_DIR.'/views/o-podborah/prichiny-nesootvetstviya-kraski.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/o-podborah/svoistva-lakokrasochnyh-materialov')==true)
   {
	   require(ROOT_DIR.'/views/o-podborah/svoistva-lakokrasochnyh-materialov.php');
	   $key=1;

   }
   
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/acura')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/acura.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/alfaromeo')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/alfaromeo.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/audi')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/audi.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/austinrover')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/austinrover.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/bmw')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/bmw.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/buick')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/buick.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/cadillac')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/cadillac.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/chevrolet')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/chevrolet.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/chrysler')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/chrysler.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/citroen')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/citroen.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/daewoo')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/daewoo.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/daihatsu')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/daihatsu.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/fiat')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/fiat.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/fordeurope')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/fordeurope.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/fordmotors')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/fordmotors.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/generalmotors')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/generalmotors.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/honda')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/honda.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/hyundai')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/hyundai.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/infiniti')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/infiniti.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/isuzu')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/isuzu.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/jaguar')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/jaguar.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/kia')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/kia.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/lada')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/lada.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/landrangerover')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/landrangerover.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/lexus')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/lexus.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/mazda')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/mazda.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/mercedesbenz')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/mercedesbenz.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/mitsubishi')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/mitsubishi.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/nissan')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/nissan.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/opel')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/opel.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/peugeot')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/peugeot.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/pontiac')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/pontiac.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/porshe')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/porshe.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/renault')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/renault.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/saab')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/saab.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/skoda')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/skoda.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/subaru')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/subaru.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/suzuki')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/suzuki.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/toyota')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/toyota.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/volkswagen')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/volkswagen.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/volvo')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/volvo.php');
	   $key1=2;

   }
        if(strstr($_SERVER['REQUEST_URI'],'/kodkraski/yugo')==true)
   {
	   require(ROOT_DIR.'/views/kodkraski/yugo.php');
	   $key1=2;

   }
         if(strstr($_SERVER['REQUEST_URI'],'/kodkraski')==true && !$key1)
   {
	   require(ROOT_DIR.'/views/kodkraski.php');
	   $key=1;

   }
   if(strstr($_SERVER['REQUEST_URI'],'/')==true && !$key && !$key1)
   {
	   require(ROOT_DIR.'/views/centr_main.php');
   }

?>

    <hr>
  </section>
   <?php
	   require(ROOT_DIR.'/views/news.php');
?>
</div>
   <?php
	   require(ROOT_DIR.'/views/footer.php');
?>

<div id="guestMail" style="display:none;">
  <div class="form">

    <form id="feedback-form" action="../mail.php" method="post">

      <div class="row">
        <label for="Feedback_name" class="required">Имя <span class="required">*</span></label>            <input size="60" maxlength="255" required placeholder="Ваше имя" name="Feedback[name]" id="Feedback_name" type="text">                    </div>

      <div class="row">
        <label for="Feedback_phone" class="required">Телефон <span class="required">*</span></label>            <input size="60" maxlength="255" name="Feedback[phone]" required placeholder="+375 66 666-66-66" id="Feedback_phone" type="text">                    </div>

      <div class="row">
        <label for="Feedback_email" class="required">Почта <span class="required">*</span></label>            <input size="60" maxlength="255" required placeholder="yourmail@mail.ru" name="Feedback[email]" id="Feedback_email" type="text">                    </div>

      <div class="row">
        <label for="Feedback_comment" class="required">Сообщение <span class="required">*</span></label>            <textarea rows="6" cols="50" name="Feedback[comment]" required placeholder="Ваше сообщение" id="Feedback_comment"></textarea>                    </div>

      <div class="row buttons">
        <input type="submit" name="yt0" value="Отправить сообщение">        </div>

    </form>
  </div>
</div>





<script type="text/javascript" src="../public/javascripts/jquery(1).js"></script>
<script type="text/javascript" src="../public/javascripts/foundation.js"></script>
<script type="text/javascript" src="../public/javascripts/foundation.orbit.js"></script>

<script>
  $(document).foundation();
</script>

<script>
  $(function() {
    var pull 		= $('#menu');
    menu 		= $('nav ul');
    menuHeight	= menu.height();

    $(pull).on('click', function(e) {
      e.preventDefault();
      menu.slideToggle();
    });
  });
</script>
<script type="text/javascript" src="../public/javascripts/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
  /*<![CDATA[*/
  jQuery(function($) {

    $('.fancybox').fancybox({'padding':20,'loop':false});

  });
  /*]]>*/
</script>
<script type="text/javascript">
  navHover = function() {
    var lis = document.getElementById("left-menu").getElementsByTagName("LI");
    for (var i=0; i<lis.length; i++) {
      lis[i].onmouseover=function() {
        this.className+=" iehover";
      }
      lis[i].onmouseout=function() {
        this.className=this.className.replace(new RegExp(" iehover\\b"), "");
      }
    }
  }
  if (window.attachEvent) window.attachEvent("onload", navHover);
</script>

<script type="text/javascript">
  var secDuration = 5;
  var image = 1;
  var maxImages = 3;
  var slider = document.getElementById('slider');
  var timeout

  // La fonction qui change les images. Peut pointer vers une image spécifique, ou bien être appelée vide, pour passer ç celle d'apres
  function changeImage(requiredImage) {

    // Début de l'algorithme  .
    if (!requiredImage && requiredImage != 0){ //Si nous n'avons pas spécifié une image
      if(image < maxImages){// Si l'image n'est pas la dernière, on avance d'une image
        image++;
      }
      else{
        image = 1;//Si Nous sommes sur la dernière, on reviens au début
      }
    }
    else{ // Si nous avont spécifié une image
      if(requiredImage > maxImages){//Si nous avont spécifié une image au dela de la dernière, on revient à la première
        image = 1;
      }
      else if(requiredImage < 1){ //Si nous avont spécifié une image 0 ou moins, on vas à la dernière image
        image = maxImages;
      }
      else{
        image = requiredImage; // Sinon, on vas à l'image spécifiée.
      }
    }
    //On dis au slider à travers sa classe quel image il doit afficher
    slider.className = "image"+image;

    // On nettoie et relance le timeout
    clearTimeout(timeout)
    timeout = setTimeout("changeImage()",secDuration*1000);
  }

  //Deux petites fonctions tres compréhensibles
  function nextImage(){
    changeImage(image+1);
  }
  function prevImage(){
    changeImage(image-1);
  }

  //On met le slide sur l'image par défaut, ici la 1ere
  changeImage(1);
</script>

</body></html>
