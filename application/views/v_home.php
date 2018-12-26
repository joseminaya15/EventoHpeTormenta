<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="HPE Siguiendo Tormentas">
    <meta name="keywords"               content="HPE Siguiendo Tormentas">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="December 15, 2018"/>
    <meta name="language"               content="en">
    <meta name="theme-color"            content="#425563">
	<title>HPE Siguiendo Tormentas</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
</head>
<body>
    <div class="js-header">
        <div class="js-header--container">
            <div class="js-header--left">
                <img src="<?php echo RUTA_IMG?>logo/hpe-logo.png">
            </div>
            <div class="js-header--right">
                <p>P&aacute;gina de Registro</p>
            </div>
        </div>
    </div>
    <section id="home">
        <div class="js-fondo"></div>
        <div class="js-container">
            <div class="js-home js-flex">
                <div class="js-contenido">
                    <h2>Persiguiendo las grandes tormentas</h2>
                    <p>Un evento de tendencias globales</p>
                </div>
            </div>
        </div>
    </section>
    <section id="register" class="js-section">
        <div class="js-container">
            <div class="js-information">
                <h2>Jueves 24 de Enero, 2019</h2>
                <h3>Hora de inicio: 4:00 p.m.</h3>
                <p>K'abel Sala de eventos</p>
                <span>6A Avenida 9-18 zona 10, Edificio Sixtino nivel 10, Ciudad de Guatemala</span>
            </div>
            <div class="js-title">
                <h2>Reg&iacute;strese completando el siguiente formulario</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Nombre*</label>
                        <input type="text" id="name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Apellido*</label>
                        <input type="text" id="surname">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Email*</label>
                        <input type="text" id="email" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Tel&eacute;fono*</label>
                        <input type="text" id="phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                     <div class="js-input">
                        <label for="text">Empresa*</label>
                        <input type="text" id="company" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="js-input">
                        <label for="text">Cargo*</label>
                        <input type="text" id="position">
                    </div>
                </div>
                <div class="col-xs-12 text-center jm-subtitle">
                    <p>Parte de la filosofia de componentes El Orbe es compartir conocimiento por lo que queremos  obsequiarle un 
                    libro de esta coleccion de reciente lanzamiento. Marque el de su preferencia el cual se le entregara en el evento.</p>
                </div>
                <div class="col-xs-12">
                    <div class="col-md-3 col-sm-6 col-xs-12 jm-book">
                        <img src="<?php echo RUTA_IMG?>logo/book1.png">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked onclick="openModalLibro(this.id)">
                        </label>
                        <h2>Irresistible<h2>
                        <p>En su revolucionario libro, el profesor de Psicolog&iacute;a y Marketing de la Universidad de Nueva York Adam Alter analiza el auge de las 
                        adicciones del comportamiento y explica por qu&eacute; tantos de los productos que consumimos hoy d&iacute;a son irresistibles. Estos milagrosos productos 
                        tienen el poder de acortar las distancias que nos separan de las personas de cualquier parte del mundo, pero su extraordinario —y en 
                        ocasiones perjudicial— magnetismo no es fruto de la casualidad. Las empresas que dise&ntilde;an estos productos los ajustan y reajustan hasta que 
                        logran que sea pr&aacute;cticamente imposible resistirse a ellos.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 jm-book">
                        <img src="<?php echo RUTA_IMG?>logo/book2.png">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                            <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="1" onclick="openModalLibro(this.id)">
                        </label>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 jm-book">
                        <img src="<?php echo RUTA_IMG?>logo/book3.png">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                            <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="1" onclick="openModalLibro(this.id)">
                        </label>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 jm-book">
                        <img src="<?php echo RUTA_IMG?>logo/book4.png">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
                            <input type="radio" id="option-4" class="mdl-radio__button" name="options" value="1" onclick="openModalLibro(this.id)">
                        </label>
                    </div>
                </div>
            </div>
            <div class="js-section--button text-center">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-login" onclick="sendInformation()">Enviar</button>
            </div>
            <div id="confirmation" class="js-confirmation">
                <h2>Registro realizado correctamente. Lo esperamos</h2>
            </div>
        </div>
    </section>
    <footer class="js-section p-t-20 p-b-20">
        <div class="js-container text-center">
            <p>&copy;Copyright 2018 Hewlett Packard Enterprise Development LP</p>
            <p class="content">*Completando está información participa en un sorteo al final del evento.</p>
        </div>
    </footer>

    <div class="modal fade" id="ModalLibro" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-sm jm-modal" role="document">
			<div class="modal-content">
				<div class="mdl-card">
					<div class="mdl-card__title">
						<h2></h2>
					</div>
					<div class="mdl-card__supporting-text">
						<p></p>
						<div class="jm-modal--texto"></div>
					</div>
				</div>
				<div class="mdl-card__menu">
					<button class="mdl-button mdl-js-button mdl-button--icon" data-dismiss="modal">
						<i class="mdi mdi-close"></i>
					</button>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
        // var URLactual = window.location;
        // if(URLactual['href'] != 'http://www.marketinghp.net/microsite/DCN/evento_cr/'){
        //     location.href = 'http://www.marketinghp.net/microsite/DCN/evento_cr/';
        // }
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
            $('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
    </script>
</body>
</html>