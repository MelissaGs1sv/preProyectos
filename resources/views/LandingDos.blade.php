<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Landing Page</title>
    <!-- HTML -->
<link rel="stylesheet" href="{{ asset('estilos/css/estilos2.css') }}"/>
<link rel="stylesheet" href="{{ asset('estilos/css/style.css') }}"/>
<link rel="stylesheet" href="{{ asset('estilos/css/content.css') }}"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>

<div class="Contenedor-principal">
<div class="header ">
    <a class="logo" href="https://www.gs1sv.org/" target="_blank"><img class="logoImg" src="{{ asset('estilos/img/logosGS1/apple-touch-icon-72x72.png') }}" alt="" /></a>

  </div>
  <header class="hero">        

    <div class="textos-hero gs1-color-white">
    
    </div>
    </div>
  </header>

  <section class="wave-contenedor website">
    <div class="contenedor-textos-main">
        <br>
      <p class="parrafo parrafo3">Bienvenido al foro de innovación en Logistica para el comercio e 
        industria un espacio que permitirá conocer soluciones al futuro de la Innovación de 
        Herramientas Tecnológicas para el Desarrollo Logístico, veremos los avances que se 
        están logrando e implementando en el mundo logístico y como estas permiten que las 
        empresas continúen a la vanguardia ofreciendo el mejor escenario y experiencia al cliente. </p>
    
    </div>

    <form action="{{ route('post.store') }}" class="form" method="POST">
    @csrf
    
      <div class="title">Registrate ahora</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" placeholder=" " name="nombre" />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Nombre Completo</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="email" placeholder=" " name="correo" />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Correo</label>
      </div>
      <div class="input-container ic2">
        <input id="empresa" class="input" type="text" placeholder=" " name="empresa" />
        <div class="cut cut-short"></div>
        <label for="empresa" class="placeholder">Empresa</label>
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
      <h2 class="titulo left">¡Juntos de nuevo en persona!</h2>
      <p>Noviembre de 2022 marcará dos años desde que la comunidad de GS1 se reunió en persona. Es un 
        gran placer invitarlo al Foro de Innovación Logística para el Sector Comercio e Industria que se 
        llevará a cabo en el hotel Barceló. en donde conocemos las soluciones que contribuyen al desarrollo 
        logístico.</p>
    </div>
  </section>

  <section class="info ">
    <div class="contenedor">
      <h2 class="titulo left">¿Tú qué sacas de esto?</h2>
      <p>Descubra cómo los estándares pueden ayudarlo a usted y a la Logistica del sector retail Benefíciese aprendiendo en un ambiente de innovación.
         Conozca los últimos desarrollos regulatorios. Obtenga información y contactos nuevos y valiosos. </p>
    </div>
  </section>

  <section class="info info2 ">
    <div class="contenedor">
      <h2 class="titulo left">A quien va dirigido </h2>
    <p>Tomadores de decisiones del área Logística en el comercio e industria </p>
        <section>
		<div class="columnasx3">
			<h4>Fabricantes</h4>
			<i  aria-hidden="true"><img src="{{ asset('estilos/img/iconosSmall/fabricante (1).ico') }}" align="right"  ></i>
	 
		</div>
		<div class="columnasx3">
			<p>Distribuidoras</p>
			<i  aria-hidden="true"><img src="{{ asset('estilos/img/iconosSmall/distribuidor (1).ico') }}" align="right" ></i>
	 
		</div>
		<div class="columnasx3">
			<p>Compradores</p>
			<i  aria-hidden="true"><img src="{{ asset('estilos/img/iconosSmall/compradores (1).ico') }}" align="right"  ></i>
	 
		</div>
	</section>
    <section>
    <div class="columnasx3">
			<p>Asociaciones</p>
			<i  aria-hidden="true"><img src="{{ asset('estilos/img/iconosSmall/asociacion (1).ico') }}" align="right" ></i>
	 
		</div>
        <div class="columnasx3">
			<p>Cadenas</p>
			<i  aria-hidden="true"><img src="{{ asset('estilos/img/iconosSmall/cadena (1).ico') }}" align="right"  ></i>
	 
		</div>
        <div class="columnasx3">
			<p>Gremiales</p>
			<i  aria-hidden="true"><img src="{{ asset('estilos/img/iconosSmall/gremial (1).ico') }}" align="right" ></i>
	 
		</div>
    </section>
    </div>
  </section>


  <section class="wave-contenedor website personWeb ">
    <div class="contenedor-textos-main">
      <h2 class="titulo left">Una agenda muy emocionante</h2>
      <p class="parrafo">
      La agenda comprenderá una amplia gama de oradores respetados que compartirán sus experiencias sobre el uso de
        estándares globales en áreas como la trazabilidad e innovaciones en el sector logístico, ayudar a mejorar los
        resultados de disponibilidad de mercadería en góndola, la eficiencia de la cadena de suministro, la migración al
        código 2D mundial y mucho más.
      </p>
    <a href="#popUp" id="openPopUp">Agenda</a>
    
  <!-- POP UP -->
  <aside id="popUp" class="popup">
      <div class="popUpContainer">
         <header>
          <a href="#!" class="closePopUp">x</a>
          <h3>Agenda</h3>
         </header>
        <article>
        <div class="agenda-img"> 
        <img src="{{ asset('estilos/img/logosGS1/Agenda-Retail-2022.jpg') }}" alt="" width="100%" height="390" style="border:0" >
    </div>
        </article>
     </div>        
     <a href="#!" class="closePopUpOutSide"></a>    
  </aside>


    
    </div>
    <div class="agenda-img"> 
        <img src="{{ asset('estilos/img/logosGS1/Agenda-Retail-2022.jpg') }}" alt="" width="100%" height="390" style="border:0" >
    </div>
  </section>

    <!-- <nav>
<label for="touch"><span>Ver Agenda</span></label>               
  <input type="checkbox" id="touch"> 

  <ul class="slide">
    <li><a class="links" href="#">Lorem Ipsum</a></li> 
    <li><a class="links" href="#">Lorem Ipsum</a></li>
    <li><a class="links" href="#">Lorem Ipsum</a></li>
    <li><a  href="#">Lorem Ipsum</a></li>
  </ul>
  
<div class="imgen slide">
    <img src="{{ asset('estilos/img/logosGS1/Agenda-Retail-2022.jpg') }}" alt="" srcset="" width="500px" height="350px">
  </div>
</nav> -->

  </section>


  <section class="wave-contenedor website">
    <div class="contenedor-textos-main">
      <h2 class="titulo left">Lugar y reserva</h2>
      <p class="parrafo">
        Conoce como llegar y donde será Foro de Innovación Logística para el Sector Comercio e Industria.
      <br> Hotel Barceló
        Hora: 7:30 AM – 12:30 PM.
      </p>
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15505.675493915061!2d-89.237793!3d13.693062!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf157d983b46f169!2sBarcel%C3%B3%20San%20Salvador!5e0!3m2!1ses!2ssv!4v1666649393571!5m2!1ses!2ssv"
          width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    </div>
    <div> 
        <img src="{{ asset('estilos/img/recursosUno/hotelBarcelo.jpg') }}" alt="" width="100%" height="475" style="border:0"  class="hotel-img">
    </div>
  </section>

  <section class="galeria">
    <div class="contenedor">
      <h2 class="titulo">¡Con el apoyo de nuestros aliados! </h2>
      <p>Podemos impulsar la adopción de nuestros estándares GS1 en el sector retail
        para brindar trazabilidad en todo el panorama de Innovación de Herramientas Tecnológicas que ayudan a agilizar y
        controlar los procesos logísticos. </p>
      <article class="galeria-cont ">
        <img src="{{ asset('estilos/img/patrocinadores/antares_0.png') }}" alt="public" class="card1" />
        <img src="{{ asset('estilos/img/patrocinadores/jj-logo.png') }}" alt="" class="card1" />
        <img src=" {{ asset('estilos/img/patrocinadores/movilitas-logo.png') }}" alt="" class="card1" />
        <img src="estilos/img/patrocinadores/pfizer-logo-300.png" alt="" class="card1" />
        <img src="estilos/img/patrocinadores/zebra-logo.png" alt="" class="card1" />
        <img src="estilos/img/patrocinadores/wipotec.png" alt="" class="card1" />
      </article>
    </div>
  </section>



<section class="info-last">
<section id="footer">
  <div class="main-footer gs1-background-color-blue  gs1-color-white">
    <div class="logoinfo" data-aos="fade-up">
      <h2>GS1 El Salvador</h2>
      <div class="contact-details">
        <h1>Contactanos</h1>
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
 
  <div class="info" data-aos="fade-up">
    <h1>Redes Sociales</h1>
    <div class="sociallogos">
      <div class="logobox">
        <a href="#" class="fa fa-instagram"><i class="bi bi-twitter"></i></a>
        <a href="https://www.linkedin.com/company/gs1elsalvador/" target="_blank" ><i class="bi bi-linkedin"></i></a>
        <a href="https://www.facebook.com/codigodebarraselsalvador/" target="_blank" ><i class="bi bi-facebook"></i></a>
        <a href="#" class="fa fa-youtube-play"><i class="bi bi-youtube"></i></a>
      </div>
    </div>
  </div>
  </div>
<footer>Copyright © 2022 GS1 El Salvador</footer>
</section>
</section>
</div>

</body>
</html>