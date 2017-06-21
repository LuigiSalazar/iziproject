<?php get_header(); ?>
    <div id="sec1" style="background: url(<?php $image = get_field('fondo'); echo $image['url']?>) no-repeat fixed;  background-size: cover;">
        <div class="fondo" style="background-color: rgba(0, 0, 0, .85); height:100vh;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 text-center">
                        <p class="hi">
                            <?php $value = get_field("titulofondo"); echo $value;?> </br> <span class="cosasquehago"><?php $value = get_field("ocupacionfondo"); echo $value;?></span></p>
                    </div>
                    <div class="col-md-12 col-xs-12 text-center transixion seewk">
                        <a href="#sec4" class="btn btn-default btn-lg active transixion" role="button">
                            <?php $value = get_field("botonseeworks"); echo $value;?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container sabout" id="sec2">
        <div class="row">
            <div class="col-sm-5 col-xs-12 col-md-5 fotoportada" align="center">
                <img class="paddingfoto circulo" src="<?php $value = get_field("imgabout"); echo $value['url'];?>" alt="">
                <p class="paddingfoto">
                    <?php $value = get_field("nameabout"); echo $value;?>
                    </br> <span><?php $value = get_field("ocupacionabout"); echo $value;?></span></p>
            </div>
            <div class="col-sm-7 col-xs-12 col-md-7">
                <p class="little" align="left">
                    <?php $value = get_field("titulohistoria"); echo $value;?>
                </p>
                <p class="info text-muted justify">
                    <?php $value = get_field("historia"); echo $value;?>
                </p>
                <div class="keke">
                    <button type="button" class="btn btn-default yoloswag btn-lg paddingbtncontac transicion"><?php $value = get_field("botoncontact"); echo $value;?></button>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 title sservices text-center" id="sec3">
                <h2 class="services">
                    <?php $value = get_field("ourserv"); echo $value;?>
                </h2>
            </div>
            <?php if( have_rows('services_rows') ):?>
            <?php while( have_rows('services_rows')):the_row() ?>
            <div class="col-md-4 col-xs-12 col-sm-6 mgbot mgbot">
                <div class="fondoblanco">
                    <p class="texto"><i class="glyphicon glyphicon-time"></i><span class="titulos"><?php $value = the_sub_field("stitulo"); echo $value;?></span></p>
                    <p class="relleno justify justify">
                        <?php $value = the_sub_field("srelleno"); echo $value;?>
                    </p>
                </div>
            </div>
            <?php endwhile; endif; ?>
            <div class="col-md-12 col-xs-12 title sworks text-center" id="sec4">
                <p class="services">
                    <?php $value = get_field("myworks"); echo $value;?>
                </p>
            </div>
            <div class="col-md-12 col-xs-12 wer" align="center">
                <ul>
                    <li class="botonespers transicion active2" id="all">
                        <?php $value = get_field("all"); echo $value;?>
                    </li>
                    <li class="botonespers transicion " id="web">
                        <?php $value = get_field("web"); echo $value;?>
                    </li>
                    <li class="botonespers transicion " id="seo">
                        <?php $value = get_field("seo"); echo $value;?>
                    </li>
                    <li class="botonespers transicion " id="inter">
                        <?php $value = get_field("internet"); echo $value;?>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-xs-12 imagenes">
                <?php if( have_rows('myworks_rows') ):?>
                <?php while( have_rows('myworks_rows')):the_row() ?>
                <div class="col-md-4 col-sm-6 col-xs-12 <?php $valor = the_sub_field('categoria'); echo $valor;?>">
                    <div class="figcaption">
                        <p class="proy1">
                            <?php $valor = the_sub_field("nameproject"); echo $valor;?>
                        </p>
                        <p class="proy2 justify">
                            <?php $valor = the_sub_field('rellenop'); echo $valor;?>
                        </p>
                        <p><i class="fa ikonos fa-search"></i><i class="fa ikonos fa-shopping-cart"></i></p>
                    </div>
                    <img src="<?php $valor = the_sub_field("wimg"); echo $valor['url']; ?>" alt="">
                </div>
                <?php endwhile; endif;?>
            </div>
            <div class="col-md-12 col-xs-12 sskills" id="sec5">
                <p class="servicees uhy text-center">
                    <?php $value = get_field("myskills"); echo $value;?>
                </p>
            </div>
            <?php if( have_rows('myskills_rows') ):?>
            <?php while( have_rows('myskills_rows')):the_row() ?>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p class="arriba">
                    <?php $value = the_sub_field("habilidades"); echo $value;?>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-percent="<?php $value = the_sub_field("porcentaje"); echo $value;?>%" style="width: <?php $value = the_sub_field("porcentaje"); echo $value;?>%;">
                    </div>
                </div>
            </div>
            <?php endwhile; endif;?>
            <div class="col-md-12 col-xs-12 sln " id="sec6">
                <p class="services text-center">
                    <?php $value = get_field("latestnews"); echo $value;?>
                </p>
            </div>
            <?php if( have_rows('latestnews_rows') ):?>
            <?php while( have_rows('latestnews_rows')):the_row() ?>
            <div class="col-md-4 col-sm-6 col-xs-12 mgbot">
                <div class="fondoblanco3 gogo">
                    <div class="imagen">
                        <img class="transicion" src="<?php $value = the_sub_field("lnimg"); echo $value['url'];?>" alt="">
                    </div>
                    <p class="titullos transicion">
                        <a class="titullos transicion" href="#">
                            <?php $value = the_sub_field("lntitle"); echo $value;?>
                        </a>
                    </p>
                    <div class="col-md-6">
                        <p class="fechas"><i class="glyphicon glyphicon-calendar"></i>
                            <?php echo date("M   d,Y"); ?>
                        </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="fechas">
                            <i class="glyphicon glyphicon-comment"></i> Comment : 40
                        </p>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <p class="otrorelleno justify text-muted">
                            <?php $value = the_sub_field("lnrelleno"); echo $value;?>
                        </p>
                    </div>
                    <div class="col-md-12 col-xs-12 text-right">
                        <a class="readm transicion" href="#">
                            <?php $value = the_sub_field("lnread"); echo $value;?>
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; endif;?>
            <div class="col-md-12 col-xs-12 sot mgbot" id="sec7">
                <p class="text-center services">
                    <?php $value = get_field("ourteams"); echo $value;?>
                </p>
            </div>
        </div>
        <?php if( have_rows('teams') ):?>
        <?php while( have_rows('teams')):the_row() ?>
        <div class="col-md-4 col-sm-4 col-xs-12 plop ">
            <div class="fondoblanco4 transicion">
                <div class="col-md-12 col-xs-12 text-center fotoportada" align="center">
                    <img class=" circulo" src="<?php $valor = the_sub_field('timg'); echo $valor['url']; ?>" alt="">
                    <p class="fotodesc text-muted"><span class="nombresteam"><?php $value = the_sub_field('tname'); echo $value;?></span></br> <span class="cargo"><?php $value = the_sub_field('tocupation'); echo $value;?></span></p>
                </div>
                <div class="col-md-12 col-xs-12 text-center">
                    <i class="fa fa-facebook-square"></i>
                    <i class="fa fa-facebook-square"></i>
                    <i class="fa fa-facebook-square asdasd"></i>
                </div>
                <div class="col-md-12 col-xs-12 text-center uq text-muted">
                    <p><span class="cantidad">5K</span><span class="cantidad">1.5K</span><span class="cantidad asdasd">1K</span></p>
                </div>
                <div class="col-md-12 col-xs-12 text-center text-muted">
                    <p class="relleno justify">
                        <?php $value = the_sub_field('trelleno'); echo $value;?>
                    </p>
                    <button class="btn mrg_top20 resume transicion" align="center">Download Resume</button>
                </div>
            </div>
        </div>
        <?php endwhile;
    endif;
    ?>
    </div>
    </div>
<?php get_footer(); ?>