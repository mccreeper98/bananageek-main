 <?php 
  require_once 'PHP/sendbymail.php';
 ?>
 <!DOCTYPE html>
  <html>
     
    <head><meta charset="gb18030">
    
    
      
      <title>Bananageek | Desarrollo de Apps Móviles y  Web Apps</title>
      
      <meta http-equiv="X-UA-Compatible" content="IE=8">
      <meta http-equiv="Content-Language" content="es-MX">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="keywords" content="App, Apps Moviles, Apps Web"/>
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="yellow">
      <meta name="description" content="Sitio Web de Bananageek empresa dedicada a ofrecer soluciones de app m��viles y web.">
      <meta property="og:url" content="https://bananageek.mx/"/>
      <meta property="og:type" content="Page" />
      <meta property="og:title" content="Bananageek.mx" />
      <meta property="og:description" content="Sitio Web de Bananageek empresa dedicada a ofrecer soluciones de app m��viles y web."/>
      <meta property="og:image" content="https://bananageek.mx/img/logos/BananaGeekHorizontal.png"/>
      <link rel="shortcut icon" href="img/fav.png" type="image/x-icon"/>
      <link rel="shortcut icon" href="img/fav.png" />
      <link rel="alternate" hreflang="es-MX" href="https://bananageek.mx/"/>
      <meta name="robots" content="index,follow"/>
      <!--Import Google Icon Font-->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Palanquin:200" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="css/apps.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no">
      
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159863353-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159863353-1');
</script>

<!-- Messenger plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "283785362306713");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
      
    </head>

    <body>
      
      <main>

        <div class="exito">
          <div class="cabecera hide-on-med-and-down">
          <div class="logo">
              <div id="menuGrup">
                <img id="banana" src="img/new/logohorizontal.png">
              <a href="#" data-activates="slide-out" id="menu" class=" button-collapse "><i class="material-icons">menu</i></a>
              </div>
            </div>
            <p class="flow-text" id="titulon">NOSOTROS</p>
        </div>

        <div class="center hide-on-large-only">
          <div class="logom">
              <div id="">
                <img id="banana" src="img/logos/BananaGeekSombraHorizontal.png">
                <br>
              <a href="#" data-activates="slide-out" id="menum" class="button-collapse "><i class="material-icons">menu</i></a>
              </div>
            </div>
            <p class="flow-text" id="titulom">NOSOTROS</p>
        </div>

<div class="fixed-action-btn " >
    <a class="btn-floating btn-large" style="background-color: #25d366; margin-right: 0px;" onclick="return gtag_report_conversion('https://api.whatsapp.com/send?phone=525616140226');" 
    href="https://api.whatsapp.com/send?phone=525616140226" target="_blank"><i class="fab fa-whatsapp fa-5x"></i></a>
</div>


        <ul id="slide-out" class="side-nav menu">
              <!--li><div class="user-view"><img id="bananaMenu" src="img/logos/BananaGeekSombraHorizontal.png"></div></li-->
              <li><a class="waves-effect white-text" href="index.php">INICIO</a></li>
              <li>
                <ul class="collapsible collapsible-accordion">
                  <li>
                    <a class="collapsible-header white-text" onclick="cambiar();">&nbsp;&nbsp;&nbsp;&nbsp;SERVICIOS&nbsp;<i class="material-icons" id="down" style="color: #d1d1d1; position: absolute;">keyboard_arrow_down</i><i class="material-icons white-text hide" id="up" style="color: #d1d1d1; position: absolute;">keyboard_arrow_up</i> </a>
                    <div class="collapsible-body" id="serviciosMenu">
                      <ul>
                        <li><a class=" white-text" href="servicios.html#apps">Apps</a></li>
                        <li><a class=" white-text" href="servicios.html#web">Sitio Web</a></li>
                        <li><a class=" white-text" href="servicios.html#realidad">Realidad Aumentada</a></li>
                        <li><a class=" white-text" href="servicios.html#modelado">Modelados</a></li>
                        <li><a class=" white-text" href="servicios.html#virtual">Realidad Virtual</a></li>
                        <li><a class=" white-text" href="servicios.html#diseno">Dise&ntilde;o UI/UX</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </li>
              <li><a class="waves-effect white-text supra" href="#!">NOSOTROS</a></li>
              <li><a class="waves-effect white-text" href="index.php#contacto">CONTACTO</a></li>
            </ul>

        <div class="divider"></div>
        <div class="container center">
          <p class="mis">Somos una <b>empresa</b> de <b>tecnología</b> especializada en el <b>desarrollo</b> de <b>software</b> a la <b>medida</b>.</p>
          <p class="mis">Apoyamos a nuestros clientes en su <b>transición digital</b>, <b>optimizando</b> sus <b>procesos</b> por medio de <b>aplicativos</b>.</p>
          <p class="mis">"T&uacute; lo imaginas, nosotros lo desarrollamos"</p>
        </div>
        <br><br>
        <img src="img/nosotros.png" style="width: 100%; height: auto;">
        <!--div class="row">
          <div class="container">
            <div>
              <div class="col s12 m6 l4 center">
              <img src="img/anabel.png" class="circle" style="width: 50%; height: auto;">
              <p class="nombre">Anabel Mont.</p>
              <span class="puesto"><b>Directora Dise&ntilde;o UI/UX.</b></span>
            </div>
            <div class="hide-on-large-only col s12 m6"><br></div>
            <div class="col s12 m6 l4 center">
              <img src="img/Avatar-CarlosM.png" class="circle" style="width: 50%; height: auto;">
              <p class="nombre">Carlos Montes</p>
              <span class="puesto"><b>Director Comercial.</b></span>
            </div>
            <div class="hide-on-large-only col s12 m6"><br></div>
            <div class="col s12 m6 l4 center">
              <img src="img/Avatar-Raul.png" class="circle" style="width: 50%; height: auto;"  >
              <p class="nombre">Ra&uacute;l Arias</p>
              <span class="puesto"><b>Director de Proyectos.</b></span>
            </div>
            <div class="hide-on-large-only col s12 m6"><br></div>
            </div>
            <div class="col s12 m6 l12"><br></div>
            <div>
              <div class="col s12 m6 l4 center">
              <img src="img/Avatar-Carlos.png" class="circle" style="width: 50%; height: auto;">
              <p class="nombre">Carlos Hershs.</p>
              <span class="puesto"><b>Director Legal.</b></span>
            </div>
            <div class="hide-on-large-only col s12 m6"><br></div>
            <div class="col s12 m6 l4 center">
              <img src="img/luis.png" class="circle" style="width: 50%; height: auto;">
              <p class="nombre">Luis Tolentino</p>
              <span class="puesto"><b>Gerente TI.</b></span>
            </div>
            <div class="hide-on-large-only col s12 m6"><br></div>
            <div class="col s12 m6 l4 center">
              <img src="img/andre.png" class="circle" style="width: 50%; height: auto;"  >
              <p class="nombre">Andr&eacute; Ortiz</p>
              <span class="puesto"><b>Gerente Web.</b></span>
            </div>
            </div>
          </div>  
        </div-->

        </div>

        <br><br>

      <div class="footer">
          <div class="titulo">
            <p class="coppy" style="color: #9b9b9b;">Banana Geek 2021 &reg;</p>
          </div>
      </div>
      </main>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript">
        $('.button-collapse').sideNav({
          menuWidth: 200, // Default is 300
          edge: 'left', // Choose the horizontal origin
          closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
          draggable: true, // Choose whether you can drag to open on touch screens,
          onOpen: function(el) { $('#menuGrup').addClass('hide'); }, // A function to be called when sideNav is opened
          onClose: function(el) { $('#menuGrup').removeClass('hide'); }, // A function to be called when sideNav is closed
        });
        $('.dropdown-button').dropdown({
          inDuration: 300,
          outDuration: 225,
          constrainWidth: false, // Does not change width of dropdown to that of the activator
          hover: true, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: false, // Displays dropdown below the button
          alignment: 'left', // Displays dropdown with edge aligned to the left of button
          stopPropagation: false // Stops event propagation
        });

        $(document).ready(function(){
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
          $('.modal').modal();
        });

        function cambiar() {
          if (!($('#down').hasClass('hide')) && $('#up').hasClass('hide')) {
            $('#down').addClass('hide');
            $('#up').removeClass('hide');
          }else{
            $('#down').removeClass('hide');
            $('#up').addClass('hide');
          }
        }

      </script>
    </body>
  </html>