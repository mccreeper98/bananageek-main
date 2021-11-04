<?php 
  require_once 'PHP/sendbymail.php';
 ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <title>Bananageek | Desarrollo de Apps Móviles y  Web Apps</title>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=8">
  <meta http-equiv="Content-Language" content="es-MX">
  <meta name="keywords" content="App, Apps Moviles, Apps Web" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="yellow">
  <meta name="description"
    content="Sitio Web de Bananageek, empresa dedicada a ofrecer soluciones de aplicaciones móviles y web apps a la medida.">
  <meta property="og:url" content="https://bananageek.mx/" />
  <meta property="og:type" content="Page" />
  <meta property="og:title" content="Bananageek.mx" />
  <meta property="og:description"
    content="Sitio Web de Bananageek, empresa dedicada a ofrecer soluciones de aplicaciones móviles y web apps a la medida." />
  <meta property="og:image" content="https://bananageek.mx/img/logos/BananaGeekHorizontal.png" />
  <link rel="shortcut icon" href="img/fav.png" type="image/x-icon" />
  <link rel="shortcut icon" href="img/fav.png" />
  <link rel="alternate" hreflang="es-MX" href="https://bananageek.mx/" />
  <meta name="robots" content="index,follow" />
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Palanquin:100,200,700" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
  <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159863353-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-159863353-1');
  </script>



</head>

<body>

  <main>
    <div class="first">
      <img src="img/new/header.png" style="width:100%" alt="">
    </div>

    <div class="exito">
      <div class="cabecera hide-on-med-and-down">
        <div class="logo">
          <div id="menuGrup">
            <img id="banana" src="img/new/logohorizontal.png">
            <a href="#" data-activates="slide-out" id="menu" class=" button-collapse"><i
                class="material-icons">menu</i></a>
          </div>
        </div>
        <p id="titulo">CASOS DE ÉXITO</p>
      </div>

      <div class="center hide-on-large-only">
        <div class="logom">
          <div id="">
            <img id="banana" src="img/new/logohorizontal.png">
            <br>
            <a href="#!" data-activates="slide-out" id="menum" class="button-collapse"><i
                class="material-icons">menu</i></a>
          </div>
        </div>
        <p class="flow-text" id="titulom">CASOS DE ÉXITO</p>
      </div>

      <ul id="slide-out" class="side-nav menu">
        <li>
          <div class="user-view"><img id="bananaMenu" src="img/new/logohorizontal.png"></div>
        </li>
        <li><a class="waves-effect white-text supra" href="#!">INICIO</a></li>
        <li>
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header white-text" onclick="cambiar();">&nbsp;&nbsp;&nbsp;&nbsp;SERVICIOS&nbsp;<i
                  class="material-icons" id="down" style="color: #d1d1d1; position: absolute;">keyboard_arrow_down</i><i
                  class="material-icons white-text hide" id="up"
                  style="color: #d1d1d1; position: absolute;">keyboard_arrow_up</i> </a>
              <div class="collapsible-body" id="serviciosMenu">
                <ul>
                  <li><a class=" white-text" href="servicios.html#apps">Apps</a></li>
                  <li><a class=" white-text" href="servicios.html#web">Sitio Web</a></li>
                  <li><a class=" white-text" href="servicios.html#realidad">Realidad Aumentada</a></li>
                  <li><a class=" white-text" href="servicios.html#modelado">Modelados</a></li>
                  <li><a class=" white-text" href="servicios.html#virtual">Realidad Virtual</a></li>
                  <li><a class=" white-text" href="servicios.html#diseno">Diseño UI/UX</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li><a class="waves-effect white-text" href="nosotros.php">NOSOTROS</a></li>
        <li><a class="waves-effect white-text" href="#contacto">CONTACTO</a></li>
      </ul>

      <div class="row">
        <div class="col s12 m6 l6" style="padding-left: 0; padding-right: 0; padding-top: 0; padding-bottom: 0;">
          <a class="modal-trigger" href="#modal1">
            <div class="case">
              <img src="img/new/1.png">
              <div class="info">
                <p class="title"></p>
                <span class="subtitle"><b></b></span>
              </div>
            </div>
          </a>
          <a class="modal-trigger" href="#modal9">
            <div class="case">
              <img src="img/new/3.png">
              <div class="infoe">
                <p class="title"></p>
                <span class="subtitle"><b></b></span>



              </div>
            </div>
          </a>
          <a class="modal-trigger" href="#modal3">
            <div class="case">
              <img src="img/new/6.png">
              <div class="inforr">
                <p class="title"></p>
                <span class="subtitle"><b></b></span>
              </div>
            </div>
          </a>
          <div class="col s12 m6 l6"
            style="padding-left: 0; padding-right: 0; padding-top: 0; padding-bottom: 0; margin: 0px;">
            <a class="modal-trigger" href="#modal4">
              <div class="case">
                <img src="img/new/9.png">
                <div class="infoc">
                  <p class="title"></p>
                  <span class="subtitle"><b></b></span>
                </div>
              </div>
            </a>
          </div>
          <div class="col s12 m6 l6"
            style="padding-left: 0; padding-right: 0; padding-top: 0; padding-bottom: 0; margin: 0px;">
            <a class="modal-trigger" href="#modal5">
              <div class="case">
                <img src="img/new/10.png">
                <div class="infoc">
                  <p class="title"></p>
                  <span class="subtitle"><b></b></span>
                </div>
              </div>
            </a>
          </div>
          <div class="col 12 m6 l12"
            style="padding-left: 0; padding-right: 0; padding-top: 0; padding-bottom: 0; margin: 0px;">
            <a class="modal-trigger" href="#modal6">
              <div class="case">
                <img src="img/new/11.png">
                <div class="inforr">
                  <p class="title"></p>
                  <span class="subtitle"><b></b></span>
                </div>
              </div>
            </a>
            <a class="modal-trigger" href="#modal7">
              <div class="case">
                <img src="img/new/8.png">
                <div class="infos">
                  <p class="title"></p>
                  <span class="subtitle"><b></b></span>
                </div>
              </div>
            </a>
          </div>
        </div>





        <!--//////////////////////////Columna Derecha/////////////////////////// -->
        <div class="col s12 m6 l6" id="derecha"
          style="padding-left: 0; padding-right: 0; padding-top: 0; padding-bottom: 0;">
          <a class="modal-trigger" href="#modal8">
            <div class="case">
              <!--video autoplay="autoplay" loop="loop" id="video_background" preload="auto" muted="muted"  style="width: 100%; margin-bottom: -10px" />
            <source src="videos/a/costena/lata.mov" type="video/mp4" />
          </video/-->
              <img src="img/new/2.png ">
              <div class="inforr">
                <p class="title"></p>
                <span class="subtitle"><b></b></span>
              </div>
            </div>
          </a>
          <div class="col 12 m6 l12"
            style="padding-left: 0; padding-right: 0; padding-top: 0; padding-bottom: 0; margin: 0px;">
            <a class="modal-trigger" href="#modal2">
                <div class="case">
                  <img src="img/new/4.png ">
                  <div class="infoaa">
                    <p class="title"></p>
                    <span class="subtitle"><b></b></span>
                  </div>
                </div>
              </a>
            <!-- <div class="col s12 m6 l6"
              style="padding-left: 0; padding-right: 0; padding-top: 0; padding-bottom: 0; margin: 0px;">
              
            </div>
            <div class="col s12 m6 l6"
              style="padding-left: 0; padding-right: 0; padding-top: 0; padding-bottom: 0; margin: 0px;">
              <a class="modal-trigger" href="#modal10">
                <div class="case">
                  <img src="img/new/5.png">
                  <div class="infoc">
                    <p class="title">Yo Manejo</p>
                    <span class="subtitle"><b>Aplicación Móvil</b></span>
                  </div>
                </div>
              </a>
            </div> -->
          </div>
          <div class="col s12 m6 l12"
            style="padding-left: 0; padding-right: 0; padding-top: 0; padding-bottom: 0; margin: 0px;">
            <a class="modal-trigger" href="#modal11">
              <div class="case">
                <img src="img/new/7.png">
                <div class="inforr">
                  <p class="title"></p>
                  <span class="subtitle"><b></b></span>
                </div>
              </div>
            </a>
            <a class="modal-trigger" href="#modal12">
              <div class="case">
                <img src="img/new/13.png">
                <div class="infoe">
                  <p class="title"></p>
                  <span class="subtitle"><b></b></span>
                </div>
              </div>
            </a>
            <a class="modal-trigger" href="#modal13">
              <div class="case">
                <!--video autoplay="autoplay" loop="loop" id="video_background" preload="auto" muted="muted"  style="width: 100%; margin-bottom: -10px" />
            <source src="videos/a/siemens/P1.mp4" type="video/mp4" />
          </video-->
                <img src="img/new/12.png ">
                <div class="inforr">
                  <p class="title"></p>
                  <span class="subtitle"><b></b></span>
                </div>
              </div>
            </a>
          </div>
          <div class="col s12 m6 l6"
            style="padding-left: 0; padding-right: 0; padding-top: 0; padding-bottom: 0; margin: 0px;">
            <a class="modal-trigger" href="#modal14">
              <div class="case">
                <img src="img/new/14.png">
                <div class="infoc">
                  <p class="title"></p>
                  <span class="subtitle"><b></b></span>
                </div>
              </div>
            </a>
          </div>
          <div class="col s12 m6 l6"
            style="padding-left: 0; padding-right: 0; padding-top: 0; padding-bottom: 0; margin: 0px;">
            <a class="modal-trigger" href="#modal15">
              <div class="case">
                <img src="img/new/15.png">
                <div class="infoc">
                  <p class="title"></p>
                  <span class="subtitle"><b></b></span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- ********************************MODALS************************************* -->


      <!-- Modal Structure -->
      <div id="modal1" class="modal">
      <img src="img/detalles/spirit1.png" class="detima" alt="" style="padding-top: 5%";>
        <div class="container">
              <div class="center">
                <p class="enc">SPIRIT Ü</p>
                <p class="senc">App móvil iOS y Android</p>
              </div>
              <div class="det">
                <p>
                Funcionalidades que han apoyado a apps reconocidas internacionalmente a tener éxito como: Geolocalización, Integración con herramientas de Google Cloud, Push Notification, Manejo de información en tiempo real, Búsquedas y Filtros inteligentes,  se encuentran en este desarrollo. También cuenta con dos consolas administrativas para apoyar a los usuarios a la autogestión de sus anuncios y al personal interno para la gestión de la app
                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal2" class="modal">
      <img src="img/detalles/bikini.png" class="detima" alt="" style="padding-top: 5%";>
        <div class="container">
              <div class="center">
                <p class="enc">BIKINI RESET LA VÍA FIT</p>
                <p class="senc">App móvil iOS, Android</p>
              </div>
              <div class="det">
                <p>
                La aplicación Healthcare que ofrece una amplia base de datos de alimentos con valiosa información nutricional con la que podrás personalizar tu dieta creando tu propio plan de acuerdo con tus preferencias. Muestra videos de ejercicios, motivacionales y de recetas. Tracking semanal por medio de graficas que miden los resultados obtenidos
                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal3" class="modal">
      <img src="img/detalles/ticforum.png" class="detima" alt="">
        <div class="container">
              <div class="center">
                <p class="enc">APP TIC FORÚM 2019</p>
                <p class="senc">App móvil iOS y Android</p>
              </div>
              <div class="det">
                <p>
                Aplicación móvil iOS, Android y Web desarrollada para la empresa Telefónica Movistar México. Secciones como agenda, ponentes, Push Notification, ubicación y encuesta permitieron la interacción en tiempo real del Evento Tic Fórum 2019.
                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal4" class="modal">
      <img src="img/detalles/modelo.png" class="detima" alt="">
        <div class="container">
              <div class="center">
                <p class="enc">REALIDAD AUMENTADA</p>
                <p class="senc">Modelados en Realidad Aumentada</p>
              </div>
              <div class="det">
                <p>
                Desarrollo e integración de realidad aumentada con Licencias Unity y Vuforia para la aplicación de Siemens Electriclub en iOS y Android. Dentro de la App te permite enfocar un target a través de la cámara del dispositivo móvil para observar diferentes productos Siemens en Realidad Aumentada
                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal5" class="modal">
      <img src="img/detalles/chatbot.png" class="detima" alt="" style="padding-top: 5%";>
        <div class="container">
              <div class="center">
                <p class="enc">ISABOT</p>
                <p class="senc">Chatbot para WhatsApp</p>
              </div>
              <div class="det">
                <p>
                Un bot es un software de inteligencia artificial con la característica diferencial de ser capaz de realizar una serie de tareas por su cuenta, sin la ayuda del ser humano. Las principales ventajas del uso de chatbots son:

1.- Permite ahorrar costos en formación y personal del departamento de atención al cliente.
Están disponible las 24 horas del día, los 7 días de la semana.
2.- Permite atender las principales dudas y gestiones de los usuarios de manera rápida.
3.- Posibilita una interacción muy ágil con el cliente.
4.- Mejora de las posibilidades y el nivel de sofisticación de los softwares de inteligencia, llegando a simular con gran realismo conversaciones bastante complejas.
5.- Se trata de una tecnología que está abriendo nuevas fuentes de ingresos y oportunidades de negocio.
6.- Te ayudan a conocer mejor a tus clientes.

                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal6" class="modal">
      <img src="img/detalles/petgame.png" class="detima" alt="">
        <div class="container">
              <div class="center">
                <p class="enc">PETGAME</p>
                <p class="senc">App para Tableta Android</p>
              </div>
              <div class="det">
                <p>
                Aplicación tipo Gaming para tableta android para la empresa ADM que ayuda a incentivar la compra en los Puntos de Venta. La App es un telón para la recolección de DATA que se muestran por medio de una plataforma web a través de un Dashboard y sirve como herramienta de administración para campañas de Marketing BTL
                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal7" class="modal">
      <img src="img/detalles/fsb.png" class="detima" alt="">
        <div class="container">
              <div class="center">
                <p class="enc">FSB TEAM</p>
                <p class="senc">Plataforma Web  </p>
              </div>
              <div class="det">
                <p>
                Sitio Web de comercio electrónico para la compra/venta de productos. Cuenta con herramientas de pago Stripe y PayPal que facilitan la transacción de compra.
Tiene una consola administrativa que actúa como un CRM para la gestión de la tienda: Seguimiento a pedidos, información de ventas, editar productos, etc
                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal8" class="modal">
      <img src="img/detalles/minino.png" class="detima" alt="">
        <div class="container">
              <div class="center">
                <p class="enc">MININO XMAS</p>
                <p class="senc">Plataforma Web  </p>
              </div>
              <div class="det">
                <p>
                Sitio web para la campaña de marketing Minino Xmas 2019 de la empresa ADM. Cada producto suma puntos ¡Entre mas tickets registres mas oportunidades tienes de ganar! La plataforma cuenta con integración de OCR para automatizar la suma de puntos y productos contenidos en el ticket de compra.
                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal9" class="modal">
      <img src="img/detalles/masterclass.png" class="detima" alt="" style="padding-top: 5%";>
        <div class="container">
              <div class="center">
                <p class="enc">MASTERCLASS ISAGENIX</p>
                <p class="senc">Plataforma Web  </p>
              </div>
              <div class="det">
                <p>
                Diseño, Desarrollo e Implementación de Plataforma Web responsiva para el evento MasterClass de la empresa Isagenix México. Secciones como: Registro, Notificaciones vía correo electrónico, Agenda al evento, Ponentes, Videos, Compartir a redes sociales, Acceso al evento streaming, permitieron eficientar y mejorar la experiencia de los usuarios al evento. Automatizar procesos por medio del uso de la tecnología permite a las empresas centrar sus esfuerzos en otras áreas que necesiten supervisión
                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal10" class="modal">
        <div class="row" style="padding: 0; margin: 0;">
          <div class="col s12 m6 l6" id="pal">
            <img src="img/modal/5.png">
          </div>
          <div class="col s12 m6 l6">
            <div class="container">
              <div class="center">
                <p class="enc">Yomanejo.mx</p>
                <p class="senc">Movilidad</p>
              </div>
              <br>
              <div style="text-align: justify;">

                <p style="text-align: justify;">
                  Desarrollo de aplicación nativa para iOS y Android.<br>
                  “Conductor de reemplazo al alcance de un botón” Nuestro servicio te garantiza regreso seguro a casa a
                  bordo de tu auto. Con solo registrarte, un botón te enlaza con nuestras oficinas centrales en donde
                  con gusto atenderemos tus servicios enviando un conductor sustituto a la ubicación señalada por el
                  GPS.

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal11" class="modal">
      <img src="img/detalles/electriclub.png" class="detima" alt="">
        <div class="container">
              <div class="center">
                <p class="enc">APP ELECTRICLUB</p>
                <p class="senc">App móvil iOS, Android y Web</p>
              </div>
              <div class="det">
                <p>
                Aplicación móvil iOS, Android y Web para la empresa Siemens México. Esta herramienta incentiva la venta con un plan de recompensas, capacitación de productos por medio de Moodle y apoya la venta de los distribuidores mostrando los productos en realidad aumentada. Publicada en 13 países a nivel Latinoamérica
                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal12" class="modal">
      <img src="img/detalles/lacost.png" class="detima" alt="" style="padding-top: 5%";>
        <div class="container">
              <div class="center">
                <p class="enc">TITA LA COSTEÑA</p>
                <p class="senc">Animación y Modelado 3D</p>
              </div>
              <div class="det">
                <p>
                Modelado y animación 3D con producción y post producción para video "Tita" La Costeña 2016
                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal13" class="modal" >
        <img src="img/detalles/isagenix.png" class="detima" alt="">
        <div class="container">
              <div class="center">
                <p class="enc">E-LEARNING ISAGENIX</p>
                <p class="senc">Plataforma de capacitación LMS</p>
              </div>
              <div class="det">
                <p>
                Plataforma web para la gestión de aprendizaje en línea con un desarrollo exclusivo para móvil y otro para web. Apoya al equipo de marketing de Isagenix México en la capacitación sobre el desarrollo del negocio y productos de la compañía. El proyecto cuenta con una plataforma de administración que permite al cliente la gestión del contenido.
                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal14" class="modal">
      <img src="img/detalles/perros.png" class="detima" alt="" style="padding-top: 5%";>
        <div class="container">
              <div class="center">
                <p class="enc">APP MASCOTAS</p>
                <p class="senc">Diseño UX/UI</p>
              </div>
              <div class="det">
                <p>
                Médico veterinario o dueño de una clínica veterinaria podrán llevar a cabo la gestión de las atenciones médicas y estéticas de las mascotas de tus clientes. En ella podrás tener registro de tu veterinaria de manera organizada, limpia y fácil. Además podrás dar acceso a diferentes administradores, cada uno con diferentes roles y permisos en la consola de administración.
                </p>
                </p>
              </div>
            </div>
      </div>

      <!-- Modal Structure -->
      <div id="modal15" class="modal">
      <img src="img/detalles/augusta.png" class="detima" alt="" style="padding-top: 5%";>
        <div class="container">
              <div class="center">
                <p class="enc">AUGUSTA RESIDENCIAL</p>
                <p class="senc">Diseño UX/UI</p>
              </div>
              <div class="det">
                <p>
                Se enfocó en crear un diseño muy intuitivo y claro, apto para diferentes rangos de edades. Desde dicha aplicación el interesado de los departamentos podrá conocer las disponibilidades que hay y tomar la decisión de comprar el departamento de su gusto. Solicitar una cotización y comunicarse directamente con un asesor para agendar una cita o completar dicha compra
                </p>
                </p>
              </div>
            </div>
      </div>



      <!-- *************************************************************************** -->

    </div>
    <div class="contacto" id="contacto">
      <div class="titulo">
        <p class="">CONTACTO</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col s12 m6 l4">
            <p class="left" id="direccion">
              Dirección: Avenida Álvaro Obregón 151, Colonia Roma Norte, CP 06700, CDMX
            </p>
            <br>
            <div class="social">
              &nbsp;
              <a href="https://www.facebook.com/bananageekmx" target="_blank"><img src="img/icn_facebook.png"></a>
              &nbsp;&nbsp;
              <a href="https://www.instagram.com/bananageekmx/" target="_blank"><img src="img/icn_instagram.png"></a>
              &nbsp;&nbsp;
              <a href="https://www.linkedin.com/company/banana-geek/" target="_blank"><img
                  src="img/icn_linkedin.png"></a>
              &nbsp;&nbsp;
            </div>

            <div class="fixed-action-btn ">
              <a class="btn-floating btn-large" style="background-color: #25d366; margin-right: 0px;"
                onclick="return gtag_report_conversion('https://api.whatsapp.com/send?phone=525616140226');"
                href="https://api.whatsapp.com/send?phone=525616140226" target="_blank"><i
                  class="fab fa-whatsapp fa-5x"></i></a>
            </div>
            <div class="contact" style="position: relative;">
              <img src="img/icn-phone.png" style="position: absolute; top:5%; left:0;">
              <ul>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+52 (55) 7675 2619</li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+52 (55) 6273 2378</li>
                <li>&nbsp;&nbsp;</li>
                <li><img src="img/icn-whatsapp.png">&nbsp;&nbsp;(52) 56 1614-0226</li>
                <li>&nbsp;&nbsp;</li>
                <li><img src="img/icn-mail.png">&nbsp;&nbsp;hola@bananageek.mx</li>
              </ul>
            </div>
          </div>
          <div class="col s12 m6 l1">
            &nbsp;
          </div>
          <div class="col s12 m6 l7">
            <div class="row">
              <form class="col s12" method="POST" onsubmit="return valida();" id="form">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="nombre" type="text" onkeypress="return validaL(event)" name="nombre" class="validate"
                      required="">
                    <label for="nombre">Nombre</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="telefono" onkeypress="return validap(event)" type="tel" class="validate" name="telefono"
                      required="">
                    <label for="telefono">Teléfono</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="correo" type="email" class="validate" name="correo" required="">
                    <label for="correo">Correo Electrónico</label>
                  </div>
                  <div class="input-field col s12">
                    <textarea id="mensaje" name="mensaje" class="materialize-textarea"></textarea>
                    <label for="mensaje">Mensaje</label>
                  </div>
                  <div class="switch">
                    <label>
                      <input type="checkbox" name="check" id="check">
                      <span class="lever"></span>
                      <a href="https://bananageek.mx/appsmoviles/empresas/aviso_privacidad.pdf" target="_blank" id="textav">Acepto el <span class="supra">Aviso de privacidad</span></a>
                    </label>
                  </div>
                </div>
                <button class="btn-flat waves-effect waves-light col s12" id="btne" name="action">Enviar
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="titulo">
        <p class="coppy" style="color: #9b9b9b;">Banana Geek 2021 &reg;</p>
      </div>
    </div>
  </main>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="dist/sweetalert-dev.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6Lfbh9MaAAAAADXcNP3TzCt7NOGWTUDR7XJ2oBRI"></script>
  <script type="text/javascript">


function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6Lfbh9MaAAAAADXcNP3TzCt7NOGWTUDR7XJ2oBRI', {action: 'submit'}).then(function(token) {
            document.getElementById("form").submit();
          });
        });
      }


    $('.button-collapse').sideNav({
      menuWidth: 200, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function (el) { $('#menuGrup').addClass('hide'); }, // A function to be called when sideNav is opened
      onClose: function (el) { $('#menuGrup').removeClass('hide'); }, // A function to be called when sideNav is closed
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

    $(document).ready(function () {
      // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
    });

    function cambiar() {
      if (!($('#down').hasClass('hide')) && $('#up').hasClass('hide')) {
        $('#down').addClass('hide');
        $('#up').removeClass('hide');
      } else {
        $('#down').removeClass('hide');
        $('#up').addClass('hide');
      }
    }

    function valida() {
      var name = document.getElementById('nombre').value;
      var tel = document.getElementById('telefono').value;
      var correo = document.getElementById('correo').value;
      var men = document.getElementById('mensaje').value;

      if ($('#check').prop('checked')) { } else {
        sweetAlert('Error', 'Acepte el Aviso de Privacidad!', 'error');
        return false;
      }

      if (name == null || name == "") {
        sweetalert('Error', 'Ingrese su nombre!', 'error');
        return false;
      }

      if (tel == null || tel == "") {
        sweetalert('Error', 'Ingrese su telefono!', 'error');
        return false;
      }

      if (correo == null || correo == "") {
        sweetalert('Error', 'Ingrese su correo!', 'error');
        return false;
      }

      if (men == null || men == "") {
        sweetalert('Error', 'Ingrese un mensaje!', 'error');
        return false;
      }

      return true;

    }

    function validap(e) {
      tecla = (document.all) ? e.keyCode : e.which;

      //Tecla de retroceso para borrar, siempre la permite
      if (tecla == 8) {
        return true;
      }

      // Patron de entrada, en este caso solo acepta numeros
      patron = /[0-9]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }

    function validaL(e) {
      tecla = (document.all) ? e.keyCode : e.which;

      //Tecla de retroceso para borrar, siempre la permite
      if (tecla == 8) {
        return true;
      }

      // Patron de entrada, en este caso solo acepta numeros
      patron = /[A-Za-z\s]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }

  </script>

  <?php 

      if (!empty($message)) {

      if ($message==1) {
        ?>
  <script type="text/javascript">
    sweetAlert('Error', 'Todos los campos son requeridos!', 'error');
  </script>
  <?php
         $message="";  
      }

      if ($message==2) {
        ?>
  <script type="text/javascript">
    sweetAlert('Bien', 'Sus datos se registrarón con éxito!', 'success');
  </script>
  <?php 
        $message="";
      }

      if ($message==3) {
        ?>
  <script type="text/javascript">
    sweetAlert('Error', 'Error al registrar los datos, recargue la pagina e intente nuevamente!', 'error');
  </script>
  <?php  
        $message="";
      }

      if ($message==4) {
        ?>
  <script type="text/javascript">
    sweetAlert('Error', 'Es necesario aceptar el aviso de privacidad!', 'error');
  </script>
  <?php  
        $message="";
      }

    } ?>
</body>

</html>