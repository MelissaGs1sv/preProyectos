<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Landing Page</title>
    <!-- HTML -->
<link rel="stylesheet" href="{{ asset('estilos/css/estilos.css') }}"/>
<link rel="stylesheet" href="{{ asset('estilos/css/style.css') }}"/>
<link rel="stylesheet" href="{{ asset('estilos/css/content.css') }}"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>

<div class="Contenedor-principal">
<div class="header ">
    <a class="logo" href="https://www.gs1sv.org/" target="_blank"><img class="logoImg" src="{{ asset('estilos/img/cafePacas-Sour/apple-touch-icon-72x72.png') }}" alt="" /></a>
    <!-- <h4>GS1 EL SALVADOR</h2> -->
  </div>
  <header class="hero">        

    <div class="textos-hero gs1-color-white">
      <!-- <h1>37th Global GS1 Healthcare Conference</h1>
      <h3>
        15-17 November 2022 | Paris & Virtual<br />
        Building on Solid Foundations
      </h3> -->
    </div>
    </div>
  </header>

  <section class="wave-contenedor website">
    <div class="contenedor-textos-main">
      <p class="parrafo">Bienvenido al foro de innovación en Logistica para el comercio e industria un espacio que permitirá conocer soluciones al futuro de la Innovación de Herramientas Tecnológicas para el Desarrollo Logístico, veremos los avances que se están logrando e implementando en el mundo logístico y como estas permiten que las empresas continúen a la vanguardia ofreciendo el mejor escenario y experiencia al cliente. </p>
      <h2 class="titulo left">¡Juntos de nuevo en persona!</h2>
      <p class="parrafo">
        Noviembre de 2022 marcará dos años desde que la comunidad de GS1 se
        reunió en persona. Es un gran placer invitarlo al Foro de Innovación
        Logística para el Sector Comercio e Industria que se llevará a cabo en
        el hotel Barceló. en donde conocemos las soluciones que contribuyen al
        desarrollo logístico.
      </p>
      <h2>¿Tú qué sacas de esto? </h2>
      <p class="parrafo">Descubra cómo los estándares pueden ayudarlo a usted y a la Logistica del sector retail

        Benefíciese aprendiendo en un ambiente de innovación.

        Conozca los últimos desarrollos regulatorios.

        Obtenga información y contactos nuevos y valiosos. </p>

        <h2>A quien va dirigido </h2>
        <p>Tomadores de decisiones del área Logística en el comercio e industria </p>
        <ul class="lista">
          <li>Fabricantes</li>
          <li>Distribuidoras </li>
          
          <li>Compradores</li>
          
          <li>Asociaciones  </li>
          
          <li>Cadenas</li>
          
          <li>Gremiales</li>
          
        </ul>
    </div>
    <form class="form" method="GET">
      <div class="title">Registrate ahora</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" placeholder=" " name="nombre" />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Nombre Completo</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="text" placeholder=" " name="correo" />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Correo</label>
      </div>
      <div class="input-container ic2">
        <input id="empresa" class="input" type="text" placeholder=" " name="empresa" />
        <div class="cut cut-short"></div>
        <label for="empresa" class="placeholder">Empresa/Organizacion</label>
      </div>
      <div class="input-container ic2">
        <input id="tel" class="input" type="text" placeholder=" " name="telefono" />
        <div class="cut cut-short"></div>
        <label for="tel" class="placeholder">Telefono</label>
      </div>
      <button type="submit" class="submit">Enviar</button>
    </form>

  </section>

  <section class="info gs1-background-color-ui-2">
    <div class="contenedor">
      <h2 class="titulo left">Una agenda muy emocionante</h2>
      <p>La agenda comprenderá una amplia gama de oradores respetados que compartirán sus experiencias sobre el uso de
        estándares globales en áreas como la trazabilidad e innovaciones en el sector logístico, ayudar a mejorar los
        resultados de disponibilidad de mercadería en góndola, la eficiencia de la cadena de suministro, la migración al
        código 2D mundial y mucho más. </p>
    </div>
  </section>


  <section class="wave-contenedor website">
    <div class="contenedor-textos-main">
      <h2 class="titulo left">Lugar y reserva</h2>
      <p class="parrafo">
        Conoce como llegar y donde será Foro de Innovación Logística para el Sector Comercio e Industria.
      <br> Hotel Barceló
        Hora: 7:30 AM – 12:30 PM.
      </p>
      <div>
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15505.675493915061!2d-89.237793!3d13.693062!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf157d983b46f169!2sBarcel%C3%B3%20San%20Salvador!5e0!3m2!1ses!2ssv!4v1666649393571!5m2!1ses!2ssv"
          width="440" height="200" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div> 
        <img src="{{ asset('estilos/img/recursosUno/hotelBarcelo.jpg') }}" alt="" width="390" height="390" style="border:0"  class="hotel-img">
    </div>
  </section>

  <section class="galeria">
    <div class="contenedor">
      <h2 class="titulo">¡Gracias a nuestros patrocinadores y expositores! </h2>
      <p>Con el apoyo de nuestros aliados, podemos impulsar la adopción de nuestros estándares GS1 en el sector retail
        para brindar trazabilidad en todo el panorama de Innovación de Herramientas Tecnológicas que ayudan a agilizar y
        controlar los procesos logísticos. </p>
      <article class="galeria-cont">
        <img src="{{ asset('estilos/img/patrocinadores/antares_0.png') }}" alt="public" />
        <img src="{{ asset('estilos/img/patrocinadores/jj-logo.png') }}" alt="" />
        <img src=" {{ asset('estilos/img/patrocinadores/movilitas-logo.png') }}" alt="" />
        <img src="estilos/img/patrocinadores/pfizer-logo-300.png" alt="" />
        <img src="estilos/img/patrocinadores/zebra-logo.png" alt="" />
        <img src="estilos/img/patrocinadores/wipotec.png" alt="" />
      </article>
    </div>
  </section>

  <!-- <section class="info-last">
    <div class="contenedor last-section">
      <div class="contenedor-textos-main">
        <h2 class="titulo left">Title of section</h2>
        <p class="parrafo">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum
          reprehenderit nostrum expedita quasi odio architecto laudantium sunt
          nemo dicta atque?
        </p>
      </div>
      
    </div>
  </section> -->


<section class="info-last">
<section id="footer">
  <div class="main-footer gs1-background-color-blue  gs1-color-white">
    <div class="logoinfo" data-aos="fade-up">
      <h2>GS1 El Salvador</h2>
      <div class="contact-details">
        <h1>Contact Us</h1>
        <li>
        <div class="fa fa-phone"></div><a href="tel:+919326048690">Calle el Mirador, 87 Av. Norte, Local N9-09</a></li>
          <div class="fa fa-phone"></div>Condominio Torre de Oficinas Quattro San Salvador, El Salvador, CA</li>
          <div class="fa fa-phone"></div>(503) 2205 - 1000</li>
        <li>
          <div class="fa fa-envelope"></div><a href="https://www.gs1sv.org/" target="_blank">www.gs1sv.org</a></li>
          <div class="fa fa-envelope"></div>info@gs1sv.org</li>
        </li>
    </div>
  </div>
  <!-- <div class="com " data-aos="fade-up">
    <h1>About</h1>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div> -->
  <div class="info" data-aos="fade-up">
    <h1>Social Media</h1>
    <div class="sociallogos">
      <div class="logobox">
        <!-- <a href="#" class="fa fa-instagram"><i class="bi bi-twitter"></i></a> -->
        <a href="https://www.linkedin.com/company/gs1elsalvador/" target="_blank" ><i class="bi bi-linkedin"></i></a>
        <a href="https://www.facebook.com/codigodebarraselsalvador/" target="_blank" ><i class="bi bi-facebook"></i></a>
        <!-- <a href="#" class="fa fa-youtube-play"><i class="bi bi-youtube"></i></a> -->
      </div>
    </div>
  </div>
  </div>
<footer>Copyright © 2022 GS1 El Salvador</footer>
</section>
</section>


 <!-- FOOTER HERE 2 <hr>
    <section class="info-last gs1-background-color-blue  gs1-color-white size1">
        <div class="contenedor last-section">
      <div class="container">
        <div class="row">
          <div>
            <p class="parrafo">Contáctenos:
               Calle el Mirador, 87 Av. Norte,
         Local N9-09
         Condominio Torre de Oficinas Quattro
         San Salvador, El Salvador, CA.
         (503) 2205 - 1000
         info@gs1sv.org
         www.gs1sv.org</p>
          </div>

          <div>
            <ul class="social-icons">
              <li><a class="facebook" href="#">Link 1<i class="bi bi-facebook"></i></a></li>
              <li><a class="twitter" href="#">Link 2<i class="bi bi-twitter"></i></a></li>
              <li><a class="youtube" href="#">Link 3<i class="bi bi-youtube"></i></a></li>
              <li><a class="linkedin" href="#">Link 4<i class="bi bi-linkedin"></i></a></li>   
            </ul>
          </div>
          <div>
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">GS1 El Salvador</a>.
            </p>
          </div>
        </div>
      </div>
     </div>
    </section> -->

  
<!-- FOOTER SECTION -->
  <!-- <section class="info-last gs1-background-color-blue  gs1-color-white size1">
    <div class="contenedor last-section">
    <section class="grid-container">
      <div class="logo1">
        <a  href="https://www.gs1sv.org/" target="_blank"><img src="/sources/logosGS1/apple-touch-icon-60x60.png" alt="" /></a>
      </div>
      <div>
        <h4>Section Two</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa
          mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla
        </p>
      </div>
      <div>
        <h4>Section One</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa
          mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla
        </p>
      </div>
    </section>
    <hr />
    <div class="grid-container">
      <div>
      <div class="linked"><a href="http://"><i class="bi bi-linkedin"></i></a></div>
      <div class="twitter"><a href="http://"><i class="bi bi-twitter"></i></a></div>
      <div class="facebook"><a href="http://"><i class="bi bi-facebook"></i></a></div>
      <div class="youtube"><a href="http://"><i class="bi bi-youtube"></i></a></div>
    </div>
      <div>
      <a href="http://" target="_blank" rel="noopener noreferrer">Link 1</a>
      <a href="http://" target="_blank" rel="noopener noreferrer">Link 2</a>
      <a href="http://" target="_blank" rel="noopener noreferrer">Link 3</a>
     </div>
</div>
      
    </div>
  </section> -->




<!-- 
  <footer id="contacto">
    <section class="grid-container">
      <div class="logo1">
        <a  href="https://www.gs1sv.org/" target="_blank"><img src="/sources/logosGS1/apple-touch-icon-60x60.png" alt="" /></a>
      </div>
      <div>
        <h4>Section Two</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa
          mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla
        </p>
      </div>
      <div>
        <h4>Section One</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa
          mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla
        </p>
      </div>
    </section>
    <hr />
    <section>
      <div class="linked"><a href="http://"></a></div>
      <div class="twitter"><a href="http://"></a></div>
      <div class="facebook"><a href="http://"></a></div>
      <div class="youtube"><a href="http://"></a></div>
      <a href="http://" target="_blank" rel="noopener noreferrer">Link 1</a>
      <a href="http://" target="_blank" rel="noopener noreferrer">Link 2</a>
      <a href="http://" target="_blank" rel="noopener noreferrer">Link 3</a>
    </section>
  </footer> -->

</div>



    
</body>
</html>