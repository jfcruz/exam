<?php
include("_include/functions.php");
$info = procesApi();
?>
<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Maqueta Francisco</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <!--bootstrap style-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />
        <!--normalize style-->
        <link rel="stylesheet" href="_assets/css/normalize.css">
        <link rel="stylesheet" href="_assets/css/main.css">
        <!--lightbox style-->
        <link rel="stylesheet" href="_assets/css/lightbox.css" />
        <!--costum style-->
        <link rel="stylesheet" href="_assets/css/layout.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="wrapper_head_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-3">
                        <ul class="header_top">
                            <li><i class="fa fa-phone-btl icon_phone"></i>  ATENCIÓN AL CLIENTE <span class="vertical_separator">|</span></li>
                            <li><span class="icon_user sprite"></span> ACCEDER / REGISTRAR <span class="vertical_separator">|</span></li>
                            <li><i class="fa fa-shopping-cart shoping_cart"></i> CARRITO <span class="num_items"> 2 </span><span class="vertical_separator">|</span></li>
                            <li>MXN - $ <span class="vertical_separator">|</span></li>
                            <li><span class="sprite lang_flag">flag</span> IDIOMA </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper_head_middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a class="logo" href="#">
                            <div class="logo_text">LOGOTIPO</div>
                            <div class="logo_sub">OPERADO POR <strong>EXPERIENCIAS XCARET</strong></div>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <nav class="wrapper_nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-home-btl"></i> INICIO <span class="vertical_separator">|</span></a></li>
                                <li><a href="#"><i class="fa fa-camera"></i> MIS FOTOS <span class="vertical_separator">|</span></a></li>
                                <li><a href="#">PREGUNTAS FRECUENTES<span class="vertical_separator">|</span></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list_wanna">
                            <li class="list_wanna_arrow"><p>QUIERO</p><i class="fa fa-media-play"></i></li>
                            <li><p>SABER MáS</p> <p>DEL PARQUE...</p></li>
                            <li><p>COMPRAR MI</p><p> ENTRADA A...</p></li>
                            <li><p>AHORRAR</p> <p>MÁS</p></li>
                            <li><p>VER LA GALERÍA</p><p> DE...</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bradcrums">
                        <span>Inicio </span> <span>/</span> <span> <?= $info["seccion"]; ?>...</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="content_tabs">
                        <div class="tab-1">
                            <iframe class="video" src="https://www.youtube.com/embed/<?= clearYoutube($info["videoYT"]); ?>?autoplay=1&rel=0&controls=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <a class="btn_tabs btn_view_img" href="<?= $info["img"][0]["source"]; ?>" data-lightbox="set1"><i class="fa fa-photo"></i>Ver imágenes</a><a class="btn_view_360 btn_tabs"><i class="fa fa-eye"></i>Vista 360º</a>
                    </div>
                    <section>
                        <p class="title"><?= $info["tituloH1"]; ?></p>
                        <div class="hr_line"></div>
                        <p><?= $info["descripcion"]; ?></p>
                        <p class="title">Atractivos principales</p>
                        <div class="hr_line"></div>
                        <?php
                        foreach($info["atractivos"] as $node_atractivos){
                        ?>
                        <div class="row row_attractive">
                            <div class="col-md-5">
                                <a href="<?= $node_atractivos["link"]; ?>">
                                    <img src="<?= $node_atractivos["img"]; ?>">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="<?= $node_atractivos["link"]; ?>">
                                    <p><?= $node_atractivos["desc"]; ?></p>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="book_now">Cotizar mi entrada ahora</div>
                    </section>
                </div>
                <div class="col-md-3">
                    <aside>
                        <div class="wrapper_buy_here">
                            <p>COMPRA AQUÍ</p>
                            <p>Y obtén hasta un 15% de descuento</p>
                        </div>
                        <div class="details">
                            <p class="sub_aside">NOMBRE DEL PRODUCTO</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Precio regular:</p>
                                    <p class="old_price">$0,000.00 MXN</p>
                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-check-btl"></i>
                                </div>
                            </div>
                            <p class="sub_aside">Precio en línea: $0,000.00 MXN</p>
                            <p><span><input type="checkbox"checked="checked" /></span>gregar transportación redonda desde tu hotel: </p>
                            <p class="price_adds">$0,000.00 MXN</p>
                            <p><span><input type="checkbox" checked="checked" /></span>Agregar Foto Pase: </p>
                            <p class="price_adds">$0,000.00 MXN</p>
                            <p class="sub_aside">TOTAL:  $0,000.00 MXN</p>
                            <div class="buy_now">COMPRAR AHORA</div>
                            <p class="small_letters">*10% de descuento - reservando con 7-20 días de anticipación.</p>
                            <p class="small_letters">15% de descuento -reservando con 21 días o más de anticipación.</p>
                            <p class="small_letters">*Precios sujetos a cambios sin previo aviso.</p>
                            <div class="hr_line"></div>
                            <div class="why_the_rito">¿Porqué reservar con nosotros?</div>
                            <div class="line">
                                <span>
                                    <p>-10%</p>
                                    <p>EN TU</p>
                                    <p>COMPRA*</p>
                                </span>
                                <span>
                                    <p>-15%</p>
                                    <p>EN TU  </p>
                                    <p>COMPRA*</p>
                                </span>
                                <span>
                                    <p>-50%</p>
                                    <p>PARA</p>
                                    <p>NIÑOS*</p>
                                </span>
                            </div>
                            <div class="line">
                                <span>
                                    <P><i class="fa fa-credit-card"></i></P>
                                    <P>MESES SIN</P>
                                    <P>INTERESES</P>
                                </span>
                                <span>
                                    <P><i class="fa fa-lock"></i></P>
                                    <P>COMPRA</P>
                                    <P>SEGURA</P>
                                </span>
                                <span>
                                    <P>$</P>
                                    <P>PRECIO + BAJO</P>
                                    <P>GARANTIZADO</P>
                                </span>
                            </div>
                            <div class="line">
                                <span>
                                    <P>VIP</P>
                                    <P>TAQUILLAS</P>
                                    <P>ESPECIALES </P>
                                </span>
                                <span>
                                    <P><i class="fa fa-cloud-fa"></i></P>
                                    <P>GARANTIA</P>
                                    <P>MAL CLIMA</P>
                                </span>
                                <span>
                                    <P><i class="fa fa-shield"></i></P>
                                    <P>SEGURO</P>
                                    <P>DE VIAJE</P>
                                </span>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="wrapper_payment methods">
                <div class="mons">
                    <p>HASTA 9 MESES</p>
                    <p>SIN INTERESES</p>
                </div>
                <div class="cards_logos">
                    <img src="_assets/img/logo_cards.png">   
                </div>
                <div class="conditions">Con los principales bancos y tarjetas emitidas en México. No aplica con Paypal. <a href="view_options"> Ver opciones »</a></div>
            </div>
        </div>
        <footer>
            <div class="top_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="footer_title">experiencias xcaret</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                            <img class="footer_logos" src="_assets/img/xcaret0.png">   
                        </div>
                        <div class="col-md-2 col-md-offset-2">
                            <img class="footer_logos" src="_assets/img/xelha-1.png">   
                        </div>
                        <div class="col-md-2 col-md-offset-2">
                            <img class="footer_logos" src="_assets/img/xplor-1.png">   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                            <img class="footer_logos" src="_assets/img/xichen-1.png">   
                        </div>
                        <div class="col-md-2 col-md-offset-2">
                            <img class="footer_logos" src="_assets/img/xenotes-1.png">   
                        </div>
                        <div class="col-md-2 col-md-offset-2">
                            <img class="footer_logos" src="_assets/img/xoximilco-3.png">   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="sub_titles">ACERCA DE</div>
                            <ul>
                                <li>Nuestra Empresa</li>
                                <li>Bolsa de trabajo</li>
                                <li>Conoce Quintana Roo</li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <div class="sub_titles">DE INTERÉS </div>
                            <ul>
                                <li>Afiliados</li>
                                <li>Agencias Online</li>
                                <li>Grupos</li>
                                <li>Bodas</li>
                                <li>Avión + Hotel + Transportación</li>
                                <li>Sala de Prensa</li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-md-offset-2">
                            <div class="sub_titles">LEGAL</div>
                            <ul>
                                <li>Términos de uso</li>
                                <li>Aviso de privacidad</li>
                                <li>Mapa de sitio</li>
                                <li>Contáctanos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sub_titles">Atención a Clientes / Ventas:</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <ul>
                                <li><strong>Cancún:</strong> 000-000-0000</li>
                                <li><strong>Brasil:</strong> 000-000-0000</li>
                                <li><strong>Colombia:</strong> 000-000-0000</li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <ul>
                                <li><strong>Playa del Carmen:</strong> 000-000-0000</li>
                                <li><strong>Argentina:</strong> 000-000-0000</li>
                                <li><strong>España:</strong> 000-000-0000</li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-md-offset-2">
                            <ul>
                                <li><strong>USA/Canadá:</strong> 000-000-0000</li>
                                <li><strong>Venezuela:</strong> 000-000-0000</li>
                                <li><strong>Chile:</strong> 000-000-0000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="p_footer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer purus neque, posuere ac accumsan quis, gravida vitae neque. </p>
                            <p class="p_footer">Sed tristique mi libero, vel facilisis ipsum ultricies nec. Nulla bibendum in urna vehicula bibendum. </p>
                            <p class="p_footer">©Mauris fringilla auctor vulputate. </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="pop_up">
            <div class="close_pop_up"><i class="fa fa-close"></i></div>
            <iframe src="https://maps.google.com/maps?cbll=20.581521,-87.117985&layer=c&panoid=O9sjsQpyG_apcFrkq20Q_A&cbp=13,10.62,,0,4.48&ie=UTF8&ll=20.581521,-87.117985&spn=0.136599,0.232773&t=h&z=13&source=embed&output=svembed"  frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <?php
        foreach($info["img"] as $node_images){
        ?>
        <a href="<?= $node_images['source']; ?>" data-lightbox="set1" title=""></a>
        <?php
        }
        ?>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="_assets/js/plugins.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://use.fortawesome.com/40c1616f.js"></script>
        <script type="text/javascript" src="_assets/js/lightbox-2.6.min.js"></script>
        <script src="_assets/js/main.js"></script>
    </body>
</html>
<?php
//pre($info);
?>