<?php include("includes/header.php") ?>

<div class="container px-5" id="body-container">
    <header id="header" class="mb-5 py-4">
        <div class="primary-overlay">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>REVENDRETH</h2>
                        <br>
                        <hr>
                        <img class="img-fluid w-75" src="./img/revendreth/revendreth_zone.jpg" alt="revendreth_zone">
                        <br>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col text-center">
                    <br>
                    <p>A realm of looming keeps and gothic villages, Revendreth is home to the Venthyr, the harvesters of sin. The wretched souls who arrive here may find penance for their misdeeds… or merely indulge the appetites of their keepers.</p>
                    <br>
                    <p>Revendreth is a dark, Gothic zone with ominous castles, Victorian towns, and nightmarish creatures. Much of its architecture bears a resemblance to the fortresses of Icecrown, as well as a surprising overlap with that of Gilneas.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="covenant" class="my-5 py-1 px-5">
        <div class="container">
            <h4 class="text-center">The Venthyr Covenant</h4>
            <hr>
            <div class="row mb-5">
                <div class="col text-center">
                    <br>
                    <p>The Venthyr Covenant punishes those condemned to Revendreth for their sins in life, allowing them to atone for their crimes, rather than spend an eternity in the Maw. While first playing through the zone, players will automatically join them while questing, though at max level they'll be given the option to choose a specific covenant, granting access to covenant specific rewards, a class-specific ability, signature ability, and cosmetic rewards!</p>
                    <br>
                    <a href="./img/revendreth/revendreth_covenant.jpg" data-fancybox="revendreth_covenant" id="revendreth_covenant"><img class="img-fluid" src="./img/revendreth/revendreth_covenant.jpg" alt="revendreth_covenant"></a>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
    <section id="characters" class="my-5 py-1 px-5">
        <div class="container">
            <div class="row mb-5"  id="kaelthas">
                <div class="col">
                    <h4 class="text-center">Notable Characters in revendreth</h4>
                    <hr>
                    <br>
                    <p><strong>Kael'thas Sunstrider</strong> -  was the Prince of Quel'Thalas, the last of the House of Sunstrider, as well as a senior member of the Kirin Tor. After the fall of Quel'Thalas, Kael'thas led what remained of his people, the sin'dorei, in the service of the Alliance. Striving to placate his people's addiction to magic, he later covertly allied with Illidan Stormrage, but betrayed him to the Burning Legion when its master, the demon lord Kil'jaeden, enticed Kael'thas with the promise of salvation for the blood elves.</p>
                    <br>
                    <p>He was branded a traitor after his allegiance to the Legion was revealed, losing the support of Quel'Thalas. Defeated in the Tempest Keep, he would be brought back by his demon masters and return to Azeroth a shadow of his former self. Kael'thas' purpose was to summon Kil'jaeden through the Sunwell, but his plans were foiled by the Shattered Sun Offensive agents and the sacrifice of Anveena Teague. He was defeated by their forces in Magisters' Terrace.</p>
                    <br>
                    <p>Now condemned to Revendreth to suffer for the crimes he committed in life, Kael'thas seeks vengeance, but suffers at the hands of Sire Denathrius.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col text-center">     
                    <div id="kaelthasSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <?php
                        $thumbkaelthas = glob('./img/revendreth/characters/kaelthas/thumb/*');
                        $i = 0; 
                        foreach($thumbkaelthas as $index){
                                if($i == 0){
                        ?>
                        <li data-target="#kaelthasSlides" data-slide-to="<?php echo $i; ?>"></li>
                        <?php
                        $i++;  }else{
                            if($i != 0){        
                        ?>
                        <li data-target="#kaelthasSlides" data-slide-to="<?php echo $i; ?>" ></li>
                        <?php               
                                } $i++;
                            }
                        }
                        ?> 
                        </ol>   
                        <div class="carousel-inner">
                            <?php
                            $thumbkaelthas = glob('./img/revendreth/characters/kaelthas/thumb/*');
                            $i = 0;
                            foreach($thumbkaelthas as $index) {
                                $image = str_replace("thumb","",$index);
                                    if($i==0){
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="kaelthas"><img src="<?php echo $index; ?>" class="img-responsive w-75" alt="kaelthas_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="kaelthas"><img src="<?php echo $index; ?>" class="img-responsive w-75" alt="kaelthas_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#kaelthasSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#kaelthasSlides" role="button" data-slide="next">
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
    <section id="map" class="my-5 py-1 px-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h4>Map of revendreth</h4>
                    <hr>
                    <br>
                    <a href="./img/revendreth/revendreth_map.jpg" data-fancybox="revendreth_map"><img class="img-fluid" src="./img/revendreth/revendreth_map.jpg" alt="revendreth_map"></a>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="my-5 py-1 px-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h4>Gallery</h4>
                    <hr>
                    <br>
                    <div id="revendrethSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                            $array = glob('./img/revendreth/gallery/*');
                            $i = 0; 
                            foreach($array as $image){
                                    if($i == 0){
                            ?>
                            <li data-target="#revendrethSlides" data-slide-to="<?php echo $i; ?>" class="active"></li>
                            <?php
                            $i++;  }else{
                                if($i != 0){        
                            ?>
                            <li data-target="#revendrethSlides" data-slide-to="<?php echo $i; ?>" ></li>
                            <?php               
                                    } $i++;
                                }
                            }
                            ?> 
                        </ol>
                        <div class="carousel-inner">

                            <?php
                            $array = glob('./img/revendreth/gallery/*');
                            $i = 0;
                            foreach($array as $image) {
                                    if($i==0){
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="revendreth"><img src="<?php echo $image; ?>" class="img-thumbnail img-responsive w-75" alt="revendreth_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="revendreth"><img src="<?php echo $image; ?>" class="img-thumbnail img-responsive w-75" alt="revendreth_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#revendrethSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#revendrethSlides" role="button" data-slide="next">
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
    <section id="afterlife" class="my-5 py-1 px-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SM90NNF3oMw" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include("includes/footer.php") ?>