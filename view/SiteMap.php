<?php
require_once 'public/header.php';
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"> 
<!---- Must Add above thing or you can use alternative icons or CSS Entities---->



<div class="card w-50" style="width: auto; margin: auto ;" id="card1">
<!--
  <marquee direction="right" >    
    <img src="public\img\animacion.gif" width="200" heigth="50"> 
  </marquee>
-->
  <div class="card-body">
        

        <div class="tree ">
            <ul>
                <li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse" href="#Web" aria-expanded="true" aria-controls="Web"><i class="collapsed"><i class="fas fa-folder"></i></i>
                <i class="expanded"><i class="far fa-folder-open"></i></i> T & E Travels</a></span>
                <div id="Web" class="collapse show">
                    <ul>
                        <li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse" href="#page1" aria-expanded="false" aria-controls="page1"><i class="collapsed"><i class="fas fa-folder"></i></i>
                            <i class="expanded"><i class="far fa-folder-open"></i></i> Usuario</a></span>
                            <ul><div id="page1" class="collapse">
                                <li><span><i class="far fa-file"></i><a href="?controller=Login&action=showLogin"> Iniciar Sesion</a></span></li>
                                <li><span><i class="far fa-file"></i><a href="?controller=Login&action=showRegistrarse"> Registrarse</a></span></li>
                            </ul>
                        </li>

                        <li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse" href="#folder1" aria-expanded="false" aria-controls="folder1"><i class="collapsed"><i class="fas fa-folder"></i></i>
                            <i class="expanded"><i class="far fa-folder-open"></i></i> Pagina Principal</a></span>
                                <ul>
                                    <div id="folder1" class="collapse">
                                    <li><span><i class="far fa-file"></i><a href="?controller=Recomendaciones&action=showRecomendaciones"> Recomendaciones</a></span></li>
                                    <li><span><i class="far fa-file"></i><a href="?controller=Destinos&action=showDestinos"> Destinos</a></span></li>
                                    <li><span><i class="far fa-file"></i><a href="?controller=Home&action=showSiteMap"> Mapa del sitio </a></span></li>
                                     </div>
                                 </ul>
        </div>
  </div>
</div>

