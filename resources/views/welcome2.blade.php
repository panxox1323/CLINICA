
@extends('frontend.partials.layouts')

@section('content')
    <div class="cuerpo">
        <div class="container">
            <div class="row">
                <!-- Slider -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="effect5">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="img/picture1.jpg" class="img-responsive" alt="...">
                                    <div class="carousel-caption hidden-xs hidden-sm">
                                        <p class="uno-slide">Para tener</p>

                                        <p class="dos-slide">una sonrisa</p>

                                        <p class="tres-slide">bien amplia</p>
                                        <p class="color-p">Cuidamos por tu salud bucal.</p>
                                        <p class="color-p">Los mejores tratamientos de limpieza bucal.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/picture2.jpg" class="img-responsive" alt="...">
                                    <div class="carousel-caption hidden-xs hidden-sm">
                                        <p class="uno-slide">Los &uacute;ltimos tratamientos</p>

                                        <p class="dos-slide">en est&eacute;tica</p>

                                        <p class="tres-slide">dental</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/picture3.jpg" class="img-responsive" alt="...">
                                    <div class="carousel-caption hidden-xs hidden-sm">
                                        <p class="uno-slide c1">La mejor</p>

                                        <p class="dos-slide c1">odontologia</p>

                                        <p class="tres-slide c1">para tus dientes</p>

                                    </div>
                                </div>
                            </div>

                            <!-- Controles -->
                            <a href="#carousel-example-generic" class="left carousel-control" data-slide="prev">
                                <span class="icon-chevron-left glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a href="#carousel-example-generic" class="right carousel-control" data-slide="next">
                                <span class="icon-chevron-right glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-justify caja">
                        <div class="color-letra">
                            <h2 class="text-bold text-center">Nuestra Cl&iacute;nica</h2>
                            En la Cl&iacute;nica Dental Oral Plus le atenderemos con rapidez, profesionalidad y cortes&iacute;a, garantiz&aacute;ndole la mayor calidad posible en todos los tratamientos dentales que ofrecemos.
                            <br><br>
                            En nuestra cl&iacute;nica garantizamos a nuestros pacientes la m&aacute;s absoluta privacidad de los datos que nos aporten seg&uacute;n lo establecido por la Ley de Protecci&oacute;n de Datos.
                            <br><br>
                            Disponemos de sistemas de financiaci&oacute;n con los que podr&aacute; elegir el que m&aacute;s se aproxime a sus necesidades, evitando molestias y preocupaciones.
                            <br><br>
                            En esta Web encontrar&aacute; informaci&oacute;n que esperamos le sea de utilidad, tambi&eacute;n dispondr&aacute; de unos conceptos b&aacute;sicos sobre ciertos tratamientos dentales.
                            <br><br>
                            Ponemos a su disposici&oacute;n nuestro e-mail para cualquier consulta o duda que le pueda surgir sobre nuestra web.
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 caja">
                        <div class="color-letra">
                            <h2 class="text-bold text center">Tratamientos</h2>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title color-heading">
                                            <a class="text-center" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="icon-chevron-right"></span> Odontolog&iacute;a Restauradora y Est&eacute;tica
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body text-justify cuerpo-panel">
                                            <p>La odontolog&iacute;a restauradora trata las alteraciones del tejido dentario (caries, traumatismos, tinciones, etc...).</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title color-heading">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span class="icon-chevron-right"></span> Peridoncia
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body cuerpo-panel">
                                            <p class="text-justify">La enfermedad periodontal mal llamada "piorrea" va afectando progresivamente al periodonto (tejido de soporte del diente), avanzando desde los tejidos m&aacute;s superficiales (enc&iacute;a) hasta los m&aacute;s profundos (hueso).</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title color-heading">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <span class="icon-chevron-right"></span> Implantes Dentales
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p class="text-justify">
                                                Un implante es la colocaci&oacute;n de un diente artificial insertado en el hueso maxilar o de la mand&iacute;bula. Consiste en una ra&iacute;z de titanio que se introduce en el hueso mediante una peque&ntilde;a operaci&oacute;n quir&uacute;rgica.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title color-heading">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <span class="icon-chevron-right"></span> Endodoncia
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <p class="text-justify">
                                                Es un tratamiento que se realiza bajo anestesia local , es indoloro y permite conservar la pieza dentaria en su lugar.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h4 class="panel-title color-heading">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                <span class="icon-chevron-right"></span> Pr&oacute;tesis Dental
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <p class="text-justify">
                                                Los tratamientos de restauraci&oacute;n tales como las coronas y puentes, reemplazan los dientes da&ntilde;ados o perdidos, brindando una est&eacute;tica similar.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h4 class="panel-title color-heading">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                <span class="icon-chevron-right"></span> Empaste Dental
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            <p class="text-justify">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eius fugit illum impedit ipsa itaque officiis quibusdam ullam vel velit.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingSeven">
                                        <h4 class="panel-title color-heading">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                <span class="icon-chevron-right"></span> Incrustaciones de Porcelana
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                        <div class="panel-body">
                                            <p class="text-justify">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eius fugit illum impedit ipsa itaque officiis quibusdam ullam vel velit.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingEight">
                                        <h4 class="panel-title color-heading">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                <span class="icon-chevron-right"></span> Extracci&oacute;n de Muelas del Juicio
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                        <div class="panel-body">
                                            <p class="text-justify">
                                                Las muelas del juicio son los terceros molares, que suelen aparecer a las edades entre 16 y 20 a&ntilde;os, pudiendo incluso no hacerlo nunca, aunque pueden aparecer a edades m&aacute;s tempranas o mucho m&aacute;s adelante.
                                                <br>
                                            </p>
                                            <p class="text-justify">
                                                Las muelas del juicio son los dientes que con m&aacute;s frecuencia se hallan escondidos y suelen provocar dolor u otros problemas, por lo que en la mayor&iacute;a de los casos el tratamiento dental recomendado es su extracci&oacute;n.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="panel panel-info">
                                        <div class="panel-heading" role="tab" id="headingNine">
                                            <h4 class="panel-title color-heading">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                    <span class="icon-chevron-right"></span> Brackets
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                            <div class="panel-body">
                                                <p class="text-justify">
                                                    Los brackets permiten alinear y enderezar los dientes, ayudando tambi&eacute;n a posicionarlos de una forma adecuada para tener una correcta mordida, logrando mejorar la imagen y salud dental.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-justify caja">
                        <div class="color-letra">
                            <h2 class="text-bold text center">Peque&ntilde;os Consejos</h2>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margen">
                                <div class="cabecera-panel"><span class="icon-comments"></span> Hilo Dental</div>
                                <div class="panel-mensajes">
                                    <p>Al usar hilo dental a diario, aumenta la posibilidad de mantener sus dientes toda la vida y disminuye la probabilidad de padecer enfermedad en las enc&iacute;as.</p>
                                    <em></em>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margen">
                                <div class="cabecera-panel"><span class="icon-comments"></span> Bruxismo</div>
                                <div class="panel-mensajes">
                                    <p>Como el estr&eacute;s es uno de los principales factores involucrados en este problema, las t&eacute;cnicas de relajaci&oacute;n pueden ser &uacute;tiles, como por ejemplo tomar manzanilla, y evite los productos con cafe&iacute;na.
                                        <em></em>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margen">
                                <div class="cabecera-panel"><span class="icon-comments"></span> Deja Fumar</div>
                                <div class="panel-mensajes">
                                    <p>El tabaco es el peor enemigo de tu boca y es casi incompatible con una boca sana y bonita. Es malo para los dientes, las enc&iacute;as y las mucosas de la boca. Desde aqu&iacute; queremos animarte a que dejes de fumar.
                                        <em></em>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






