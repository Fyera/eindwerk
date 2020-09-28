<?php include("includes/header.php") ?>

<div class="container px-5" id="body-container">
    <header id="header" class="mb-5 pt-5">
        <div class="primary-overlay">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>THE MAW</h2>
                        <br>
                        <hr>
                        <div class="d-block d-md-none">
                            <a  href="./img/maw/maw_zone.jpg" data-fancybox="maw_zone_small" id="maw_zone_small"><img class="img-fluid" src="./img/maw/maw_zone.jpg" alt="maw_zone"></a>
                        </div>
                        <div class="d-none d-md-block">
                            <img class="img-fluid w-75" src="./img/maw/maw_zone.jpg" alt="maw_zone">
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col text-center">
                        <br>
                        <p>To be cast into the Maw is to be doomed to a bleak eternity. It is a tumultuous, hopeless land where the vilest souls in the cosmos are imprisoned forever. Should the ancient evil chained here break free, all of reality will be consumed.</p>
                        <br>
                        <p>The Maw was meant to hold the most vile and irredeemable souls, with the worst imprisoned at the center within Torghast, though since sometime around the events of Legion all souls have been redirected there instead of their intended afterlifes, siphoning anima away from the rest of the Shadowlands. It is a tumultuous, hopeless land where the vilest souls in the cosmos are imprisoned forever, and none have ever been known to escape. When Sylvanas Windrunner experienced her second death after throwing herself from the top of Icecrown Citadel, her soul was taken there for only the briefest moment before being saved by the Val'kyr; during that short time she experienced only a cold, hopeless darkness, surrounded by fear and suffering.</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="area" class="my-5">
        <div class="container">
            <div class="row mb-5" id="torghast">
                <div class="col text-center">
                    <h2>Torghast, Tower of the Damned</h2>
                    <hr>
                    <br>
                    <p>Once, the Jailer kept only the most dangerous souls in the cosmos confined in this eternal prison. Now, some of Azeroth's greatest heroes are trapped here, and you'll need to rescue them from the Jailer's tower before he expends their very souls.</p>
                    <br>
                    <p>Torghast is a procedurally generated, multi-floor, rogue-like dungeon, which serves as the principle end-game activity in Shadowlands, which players will enter in search of souls to free in order to improve their Covenants and components with which to craft legendary items. While the difficulty of Torghast increases with each floor, players will find anima powers inside which will empower them with various Torghast only bonuses.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col text-center">     
                    <div id="torghastSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <?php
                        $thumbtorghast = glob('./img/maw/area/torghast/thumb/*');
                        $i = 0; 
                        foreach($thumbtorghast as $index){
                                if($i == 0){
                        ?>
                        <li data-target="#torghastSlides" data-slide-to="<?php echo $i; ?>"></li>
                        <?php
                        $i++;  }else{
                            if($i != 0){        
                        ?>
                        <li data-target="#torghastSlides" data-slide-to="<?php echo $i; ?>" ></li>
                        <?php               
                                } $i++;
                            }
                        }
                        ?> 
                        </ol>   
                        <div class="carousel-inner">
                            <?php
                            $thumbtorghast = glob('./img/maw/area/torghast/thumb/*');
                            $i = 0;
                            foreach($thumbtorghast as $index) {
                                $image = str_replace("thumb","",$index);
                                    if($i==0){
                                        var_dump($index);
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="torghast"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="torghast_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="torghast"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="torghast_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#torghastSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#torghastSlides" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="map" class="my-5 py-1">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h4>Map of The Maw</h4>
                    <hr>
                    <br>
                    <a href="./img/maw/maw_map.jpg" data-fancybox="maw_map"><img class="img-fluid" src="./img/maw/maw_map.jpg" alt="maw_map"></a>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="my-5 py-1">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h4>Gallery</h4>
                    <hr>
                    <br>
                    <div id="mawSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                            $array = glob('./img/maw/gallery/*');
                            $i = 0; 
                            foreach($array as $index){
                                    if($i == 0){
                            ?>
                            <li data-target="#mawSlides" data-slide-to="<?php echo $i; ?>" class="active"></li>
                            <?php
                            $i++;  }else{
                                if($i != 0){        
                            ?>
                            <li data-target="#mawSlides" data-slide-to="<?php echo $i; ?>" ></li>
                            <?php               
                                    } $i++;
                                }
                            }
                            ?> 
                        </ol>
                        <div class="carousel-inner">

                            <?php
                            $array = glob('./img/maw/gallery/*');
                            $i = 0;
                            foreach($array as $index) {
                                    if($i==0){
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $index; ?>" data-fancybox="maw"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="maw_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $index; ?>" data-fancybox="maw"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="maw_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#mawSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#mawSlides" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include("includes/footer.php") ?>