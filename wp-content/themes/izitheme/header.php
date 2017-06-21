<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><----- O:</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
     <link rel="icon" type="image/gif" href="<?php $valor = get_field('icono'); echo $valor['url'];?>"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
    <body data-spy="scroll" data-target="#myScrollspy">
        <div class="wrapper">
            
           <div id="nav-container">
  <div class="toggle-icon kn">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </div>
</div>
            <i class="fa fa-arrow-up"></i>
            <div class="slider-left slider transicion">
                <p class="stitulo text-center">
                    <span class="zeta">Z</span><span class="o">OO</span><span class="zeta">M</span>
                </p>
                <p class="ssubt text-muted text-center">
                    <?php $value = get_field("titulo"); echo $value;?>
                </p>
                <div class="text-center"> <img src="<?php $imagen = get_field('imgmenu'); echo $imagen['url']; ?>" alt="">
                    <p class="paddingfoto6 text-center">
                        <?php $value = get_field("nombremenu"); echo $value;?> <br>
                        <span class="wd"><?php $value = get_field("ocupationmenu"); echo $value;?></span>
                    </p>
                    <button class="btn cv">Download Cv</button>
                </div>
                <div id="myScrollspy">
                    <ul class="nav navbar-nav" align="center">
                        <?php if( have_rows('menu_rows') ):?>
                        <?php while( have_rows('menu_rows')):the_row() ?>
                        <li class="jiji" id="shome">
                            <a href="<?php $valor=the_sub_field("section"); echo $valor;?>">
                                <?php $value = the_sub_field("linkname"); echo $value;?>
                            </a>
                        </li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>