<?php include("includes/header.php") ?>

<div class="container px-5" id="body-container">
    <header id="header" class="mb-5 py-4">
        <div class="primary-overlay">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>ARDENWEALD</h2>
                        <br>
                        <hr>
                        <img class="img-fluid w-75" src="./img/ardenweald/ardenweald_zone.jpg" alt="ardenweald_zone">
                        <br>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col text-center">
                        <br>
                        <p>A vibrant afterlife for those closely connected to the wild, Ardenweald is a domain of endless restoration tended by the mystic night fae. Within this ethernal forest, massive dream trees draw in precious anima -soul essence- to feed the spirits of nature awaiting rebirth.</p>
                        <br>
                        <p>Ardenweald is a counterpart of the Emerald Dream representing an eternal season in a continual cycle of death, hibernation, and rebirth. Powerful beings of nature are called here to infuse their anima into slumbering spirits, and reawaken renewed with the knowledge of the spirits of old. This prepares them for rebirth among the living, to begin the cycle of life again. Throughout the zone, players will encounter various beings of nature, including Drust, Faeries, Satyr, Spriggan, Sylvar, Tirnenn, Vorkai, and the mysterious Winter Queen.</p>
                        <br>
                        <p>The demigod Cenarius spent time recovering in Ardenweald so that he could return to Azeroth during the events of the Cataclysm. It is a beautiful, yet deceptively dangerous land.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="covenant" class="my-5 py-1 px-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h4>The Night Fae Covenant</h4>
                    <hr>
                    <br>
                    <p>The Night Fae Covenant is closely tied to the forces of nature, particularly the cycle of rebirth. It was through their aid that the demigod Cenarius was able to return to Azeroth, though not all practitioners of Druidic or other natural magic will necessarily make their way to Ardenweald in the afterlife. While first playing through the zone, players will automatically join them while questing, though at max level they'll be given the option to choose a specific covenant, granting access to covenant specific rewards, a class-specific ability, signature ability, and cosmetic rewards!
                    </p>
                    <br>
                    <a href="./img/ardenweald/ardenweald_covenant.jpg" data-fancybox="ardenweald_covenant" id="ardenweald_covenant"><img class="img-fluid" src="./img/ardenweald/ardenweald_covenant.jpg" alt="ardenweald_covenant"></a>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
    <section id="characters" class="my-5 py-1 px-5">
        <div class="container">
            <div class="row mb-5" id="ysera">
                <div class="col">
                    <h4 class="text-center">Notable Characters in Ardenweald</h4>
                    <hr>
                    <br>
                    <p><strong>Ysera</strong> - Corrupted by Xavius and killed by her former allies, Ysera was one of the last souls taken to their proper place within the Shadowlands, rather than being confined to the Maw. The green dragon aspect's story continues in Shadowlands, as her restless spirit continually relives her final moments.</p>
                    <br>
                    <p>Ysera is the former Dragon Aspect of the green dragonflight, charged with keeping watch over the flowering wilds of Azeroth from within the Emerald Dream. Bound to this ethereal realm, she descended into an endless trance and became known thereafter as the Dreamer.She would later fight off the Emerald Nightmare and the corruption of her children.</p>
                    <p>Ysera, now nicknamed the Awakened, recently awoke from her slumber within the Emerald Dream during the events of World of Warcraft: Cataclysm, though she was not yet able to consistently tell the difference between dream and reality; while she was still sane, she was not yet entirely coherent. Ysera aided the Guardians of Hyjal when the Twilight's Hammer and other forces of Ragnaros attacked Mount Hyjal. She, along with her fellow Aspects, eventually gave up their titan-given power to stop their mad brother Deathwing during his last stand.</p>
                    <p>She continued to provide guidance and wisdom to all who revere nature, acting as mentor to the druids of Azeroth. Ysera was ultimately corrupted by the satyr Xavius and the Emerald Nightmare, and was, with much sadness, slain by Tyrande Whisperwind and the Cenarion Circle.</p>
                    <p>Ysera is also the foster mother of the demigod Cenarius.</p>
                    <br>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col text-center">     
                    <div id="yseraSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <?php
                        $thumbysera = glob('./img/ardenweald/characters/ysera/thumb/*');
                        $i = 0; 
                        foreach($thumbysera as $index){
                                if($i == 0){
                        ?>
                        <li data-target="#yseraSlides" data-slide-to="<?php echo $i; ?>"></li>
                        <?php
                        $i++;  }else{
                            if($i != 0){        
                        ?>
                        <li data-target="#yseraSlides" data-slide-to="<?php echo $i; ?>" ></li>
                        <?php               
                                } $i++;
                            }
                        }
                        ?> 
                        </ol>   
                        <div class="carousel-inner">
                            <?php
                            $thumbysera = glob('./img/ardenweald/characters/ysera/thumb/*');
                            $i = 0;
                            foreach($thumbysera as $index) {
                                $image = str_replace("thumb","",$index);
                                    if($i==0){
                                        var_dump($index);
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="ysera"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="ysera_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="ysera"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="ysera_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#yseraSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#yseraSlides" role="button" data-slide="next">
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
                    <h4>Map of ardenweald</h4>
                    <hr>
                    <br>
                    <a href="./img/ardenweald/ardenweald_map.jpg" data-fancybox="ardenweald_map"><img class="img-fluid" src="./img/ardenweald/ardenweald_map.jpg" alt="ardenweald_map"></a>
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
                    <div id="ardenwealdSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                            $array = glob('./img/ardenweald/gallery/*');
                            $i = 0; 
                            foreach($array as $image){
                                    if($i == 0){
                            ?>
                            <li data-target="#ardenwealdSlides" data-slide-to="<?php echo ($i-1); ?>" class="active"></li>
                            <?php
                            $i++;  }else{
                                if($i != 0){        
                            ?>
                            <li data-target="#ardenwealdSlides" data-slide-to="<?php echo ($i-1); ?>" ></li>
                            <?php               
                                    } $i++;
                                }
                            }
                            ?> 
                        </ol>
                        <div class="carousel-inner">

                            <?php
                            $array = glob('./img/ardenweald/gallery/*');
                            $i = 0;
                            foreach($array as $image) {
                                    if($i==0){
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="ardenweald"><img src="<?php echo $image; ?>" class="img-thumbnail img-responsive w-75" alt="ardenweald_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="ardenweald"><img src="<?php echo $image; ?>" class="img-thumbnail img-responsive w-75" alt="ardenweald_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#ardenwealdSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#ardenwealdSlides" role="button" data-slide="next">
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
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/p_IHQJy8feU" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include("includes/footer.php") ?>