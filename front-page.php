<?php get_header(); ?>

    <!-- Header Carousel -->
    <div id="myCarousel" class="carousel slide">
        <div class="slider">
            <h3 class="intro-slider">Servicios médicos en los que puede confiar</h3>
            <?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>
        </div>
    </div>
    

<!-- Texto intro -->
<div class="container servicios">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Aprenda como la informaci&oacute;n gen&oacute;mica impacta su salud y la de sus seres queridos</h1>
        </div>
    </div>
</div>


<!-- Sesion telemedicina -->
<div class="bg-green">
    <div class="container tips">
        <div class="row">
             <div class="col-md-5">
                <img src="http://avancegen.com/wp-content/uploads/2017/04/telemedicina.jpg">
            </div>
            <div class="col-md-7">
                <ul>
                    <li>ASESOR&Iacute;A GEN&Eacute;TICA PERSONALIZADA<br>A TRAV&Eacute;S DE TELEMEDICINA</li>
                </ul>
<a href="/2017/04/conozca-sobre-la-telemedicina/" class="btn btn-home verde btn-full">Conozca sobre la Telemedicina</a>
            </div>
        </div>
    </div>
</div>


<!-- Servicios -->
<div class="container servicios">
    <div class="row">
        <div class="col-lg-12">
        <?php get_template_part('home','servicios' ); ?>
        </div>
    </div>
</div>



<!-- Iconos -->
<div class="container servicios">

    <div class="row">
        <div class="col-lg-6">
            <a href="/quien-debe-tener-una-evaluacion-genetica/" class="btn btn-home azul btn-full">
                &iquest;Quienes necesitan pedir asesor&iacute;a gen&eacute;tica?
            </a>
<ul>
<li>A una pareja esperando un bebe y con deseos de conocer los probables riesgos a la salud de su hijo(a).</li>
<li>A las personas que desean identificar las probabilidades que tienen de transmitir ciertas enfermedades o trastornos genéticos a sus hijos.</li>
</ul>
<small><a href="/quien-debe-tener-una-evaluacion-genetica/">[Ver más]</a></small>
        </div>
        <div class="col-lg-6">
            <a href="/cuando-se-hacen-pruebas-genomicas/" class="btn btn-home verde btn-full">
                &iquest;Cuando se hacen pruebas gen&eacute;ticas?
            </a>
<ul>
<li>Para determinar el riesgo a desarrollar un cáncer hereditario o alguna otra enfermedad genética.</li>
<li>Para estudiar la respuesta a ciertas medicaciones o el riesgo de toxicidad a las mismas (farmacogénetica).</li>
</ul>
<small><a href="/cuando-se-hacen-pruebas-genomicas/">[Ver más]</a></small>
        </div>
    </div>

    <!--div class="row">
        <div class="col-lg-12">
                <ul class="icon-home">
                    <li><a href="/servicios/cancer/"><i class="fa fa-user-md" aria-hidden="true"></i>Predisposici&oacute;n al c&aacute;ncer</a></li>
                    <li><a href="/servicios/cardiologia/"><i class="fa fa-heartbeat" aria-hidden="true"></i>Enfermedades cardiacas hereditarias</a></li>
                    <li><a href="/servicios/neurologia/"><i class="fa fa-stethoscope" aria-hidden="true"></i>Condiciones neurogen&eacute;ticas</a></li>
                    <li><a href="/servicios/pediatria/"><i class="fa fa-child" aria-hidden="true"></i>Enfermedades para los ni&ntilde;os</a></li>
                    <li><a href="/servicios/prenatal/"><i class="fa fa-flask" aria-hidden="true"></i>Estudios prenatales</a></li>
                </ul>
        </div>
     </div-->

</div>


<!-- Fotos -->
<div class="bg-blue">
    <div class="container tips">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Descubrir...   Entender...   Prevenir...</h1>
        </div>
     </div>


    <!--div class="row">
        <div class="col-lg-7">
            <h3 class="copy-servicios">Ofrecemos acceso a la tecnolog&iacute;a de labratorio m&aacute;s avanzada y expertos en gen&eacute;tica humana</h3>
<i class="fa fa-arrow-right ico-home" aria-hidden="true"></i>
        </div>
        <div class="col-lg-5">
            <a href="#" class="btn btn-home verde btn-full">Certificaciones</a>
        </div>
    </div-->

    </div>
</div>


<!-- Enlace -->
<div class="container border-btn">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="copy-enlace">
                <a href="/avancegen/como-contribuye-el-conocimiento-del-perfil-genomico-a-mejorar-la-calidad-de-vida-de-una-persona/">&iquest;Como contribuye el conocimiento del perfil genómico a mejorar la calidad de vida de una persona?</a>
            </h3>
            <i class="fa fa-arrow-right ico-home" aria-hidden="true"></i>
        </div>
    </div>
</div>



<!-- Areas -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <hr>
            <h2 class="titulo-portada">Áreas de servicio</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 area-serv">
            <a href="/asesoria-genetica/"><img src="http://avancegen.com/wp-content/uploads/2017/05/tab_asesoria01.png"></a>
            <h4>Asesoría Genética para Pacientes</h4>
        </div>


        <div class="col-lg-6 area-serv">
            <a href="/asesoria-a-medicos/"><img src="http://avancegen.com/wp-content/uploads/2017/05/tab_asesoria02.png"></a>
            <h4>Interconsultas Médicas</h4>
        </div>
    </div>
</div>



<!-- Noticias -->
<div class="container noticias">
    <div class="row">
        <div class="col-lg-12">
            <?php get_template_part('home','noticias' ); ?>
            <a href="/blog/" class="btn btn-home verde">Ver m&aacute;s noticias</a>
        </div>
    </div>


 

<?php get_footer(); ?>