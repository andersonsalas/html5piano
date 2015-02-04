<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Piano! - Por Anderson Salas</title>
        <link rel="stylesheet" href="styles.css" />
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </head>
    <body>
        <div style="display:none">
        <?php
        $sonidos = array('c','c-sharp','d','d-sharp','e','f','f-sharp','g','g-sharp','a','a-sharp','b');
        foreach($sonidos as $nota){
            ?>
                <audio class="audio-<?= $nota;?>" controls>
                  <source src="sounds/<?= $nota;?>.mp3" type="audio/mpeg">
                </audio>
            <?php
        }
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                <?php foreach($sonidos as $nota){ ?>
                    $('.play-<?= $nota;?>').mouseup(function(){
                        $(".audio-<?= $nota;?>")[0].play();
                    });
                    $('.play-<?= $nota;?>').mousedown(function(){

                        $(".audio-<?= $nota;?>")[0].pause();
                        setTimeout(function(){
                            $(".audio-<?= $nota;?>")[0].currentTime = 0;
                        },1);

                    });
                <?php } ?>
            })
        </script>

        </div>
        <div class="container-titulo">
            <img src="logo.png" alt="logo" class="centrar" />
        </div>
        <div class="container">
            <div class="piano-container">
                <div class="tecla-blanca">
                    <div class="tecla-negra play-c-sharp"></div>
                    <div class="area-tecla-blanca play-c"></div>
                </div><!--
             --><div class="tecla-blanca">
                    <div class="tecla-negra play-d-sharp"></div>
                    <div class="area-tecla-blanca play-d"></div>
                </div><!--
             --><div class="tecla-blanca">
                    <div class="area-tecla-blanca play-e"></div>
                </div><!--
             --><div class="tecla-blanca">
                    <div class="tecla-negra play-f-sharp"></div>
                    <div class="area-tecla-blanca play-f"></div>
                </div><!--
             --><div class="tecla-blanca">
                    <div class="tecla-negra play-g-sharp"></div>
                    <div class="area-tecla-blanca play-g"></div>
                </div><!--
             --><div class="tecla-blanca">
                   <div class="tecla-negra play-a-sharp"></div>
                   <div class="area-tecla-blanca play-a"></div>
               </div><!--
             --><div class="tecla-blanca play-b">
                    <div class="area-tecla-blanca play-b"></div>
                </div>
            </div>
        </div>
    </body>
</html>
