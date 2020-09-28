<?php include("includes/header.php") ?>

<div class="container px-5" id="body-container">
    <header id="header" class="mb-5 pt-5">
        <div class="primary-overlay">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>MALDRAXXUS</h2>
                        <br>
                        <hr>
                        <div class="d-block d-md-none">
                            <a  href="./img/maldraxxus/maldraxxus_zone.jpg" data-fancybox="maldraxxus_zone_small" id="maldraxxus_zone_small"><img class="img-fluid" src="./img/maldraxxus/maldraxxus_zone.jpg" alt="maldraxxus_zone"></a>
                        </div>
                        <div class="d-none d-md-block">
                            <img class="img-fluid w-75" src="./img/maldraxxus/maldraxxus_zone.jpg" alt="maldraxxus_zone">
                        </div> 
                        <br>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col text-center">
                        <br>
                        <p>Within war-torn Maldraxxus, might -of all kinds- makes right. Here, in the birthplace of necromantic magic, those who master the powers of death turn legions of ambitious souls into relentless undead armies.</p>
                        <br>
                        <p>Maldraxxus is a realm of death and decay, in which souls and their anima are used to power the military might of the Shadowlands. Souls which are drawn to this realm of the afterlife are tested for unwavering loyalty and obedience, cosigned to a single minded purpose. Visually, the zone is reminiscent of the plaguelands in Azeroth, mired in decay and fungal growths.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="covenant" class="my-5 py-1">
        <div class="container">
            <h4 class="text-center">The Necrolord Covenant</h4>
            <hr>
            <div class="d-block d-md-none text-center">
                        <a  href="./img/maldraxxus/maldraxxus_covenant.jpg" data-fancybox="maldraxxus_covenant_small" id="maldraxxus_covenant"><img class="img-fluid" src="./img/maldraxxus/maldraxxus_covenant.jpg" alt="maldraxxus_covenant"></a>
                    </div>
            <div class="row mb-5">
                <div class="col text-center">
                    <br>
                    <p>The Necrolord Covenant is the embodiment of the forces of death. While other realms of the afterlife revolve around atonement, ascendance, and rebirth, the undead legions of the Necrolords embrace war and make up the military arm of the Shadowlands. Although the undead abominations and warlike nature would might make it seem so, not all souls that make their way there are evil; it calls to any who revel in the thrill of battle and challenge of conflict. While first playing through the zone, players will automatically join the Necrolord covenant while questing, though at max level they'll be given the option to choose a specific covenant, granting access to covenant specific rewards, a class-specific ability, signature ability, and cosmetic rewards!</p>
                    <br>
                    <div class="d-none d-md-block text-center">
                        <img class="img-fluid" src="./img/maldraxxus/maldraxxus_covenant.jpg" alt="maldraxxus_covenant">
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
    <section id="characters" class="my-5 py-1">
        <div class="container">
            <div class="row mb-5"  id="draka">
                <div class="col">
                    <h4 class="text-center">Notable Characters in maldraxxus</h4>
                    <hr>
                    <div class="d-block d-md-none">
                    <a  href="./img/maldraxxus/characters/draka/thumb/draka_03.jpg" data-fancybox="draka_fancybox" id="draka_fancybox"><img class="img-fluid" src="./img/maldraxxus/characters/draka/thumb/draka_03.jpg" alt="draka"></a>
                    </div>
                    <br>
                    <p><strong>Draka</strong> - Mother to Thrall and wife to Durotan, the warrior matriarch of the Frostwolf clan fell protecting her son, setting him on the path to his destiny. In the afterlife, she has found her calling as Baroness of the House of the Chosen, embroiled in a bitter war to decide the fate of Maldraxxus.</p>
                    <br>
                </div>
            </div>
            <div class="row mb-5 d-none d-md-block">
                <div class="col text-center">     
                    <div id="drakaSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <?php
                        $thumbdraka = glob('./img/maldraxxus/characters/draka/thumb/*');
                        $i = 0; 
                        foreach($thumbdraka as $index){
                                if($i == 0){
                        ?>
                        <li data-target="#drakaSlides" data-slide-to="<?php echo $i; ?>"></li>
                        <?php
                        $i++;  }else{
                            if($i != 0){        
                        ?>
                        <li data-target="#drakaSlides" data-slide-to="<?php echo $i; ?>" ></li>
                        <?php               
                                } $i++;
                            }
                        }
                        ?> 
                        </ol>   
                        <div class="carousel-inner">
                            <?php
                            $thumbdraka = glob('./img/maldraxxus/characters/draka/thumb/*');
                            $i = 0;
                            foreach($thumbdraka as $index) {
                                $image = str_replace("thumb","",$index);
                                    if($i==0){
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="draka"><img src="<?php echo $index; ?>" class="img-responsive w-75" alt="draka_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="draka"><img src="<?php echo $index; ?>" class="img-responsive w-75" alt="draka_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#drakaSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#drakaSlides" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row mb-5" id="alex">
                <div class="col">
                    <div class="d-block d-md-none">
                        <a  href="./img/maldraxxus/characters/alexandros/thumb/alex_02.jpg" data-fancybox="alexandros_fancybox" id="alexandros_fancybox"><img class="img-fluid" src="./img/maldraxxus/characters/alexandros/thumb/alex_02.jpg" alt="alexandros"></a>
                    </div>
                    <br>
                    <p><strong>Alexandros Mograine</strong> - The Ashbringer led a life of war, fighting against the undead legions of the Scourge before being betrayed by his jealous son. In death, he rose to become a Baron of the House of the Chosen, though once again faced betrayal at the hands of another Baron, trapping the once mighty Paladin within the Maw.</p>
                    <br>
                </div>
            </div>
            <div class="row mb-5 d-none d-md-block">
                <div class="col text-center">     
                    <div id="alexSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <?php
                        $thumbalex = glob('./img/maldraxxus/characters/alexandros/thumb/*');
                        $i = 0; 
                        foreach($thumbalex as $index){
                                if($i == 0){
                        ?>
                        <li data-target="#alexSlides" data-slide-to="<?php echo $i; ?>"></li>
                        <?php
                        $i++;  }else{
                            if($i != 0){        
                        ?>
                        <li data-target="#alexSlides" data-slide-to="<?php echo $i; ?>" ></li>
                        <?php               
                                } $i++;
                            }
                        }
                        ?> 
                        </ol>   
                        <div class="carousel-inner">
                            <?php
                            $thumbalex = glob('./img/maldraxxus/characters/alexandros/thumb/*');
                            $i = 0;
                            foreach($thumbalex as $index) {
                                $image = str_replace("thumb","",$index);
                                    if($i==0){
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="alexandros"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="alexandros_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="alexandros"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="alexandros_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#alexSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#alexSlides" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row mb-5" id="kelthuzad">
                <div class="col">
                    <div class="d-block d-md-none">
                        <a  href="./img/maldraxxus/characters/kelthuzad/thumb/kelthuzad_03.jpg" data-fancybox="kelthuzad_fancybox" id="kelthuzad_fancybox"><img class="img-fluid" src="./img/maldraxxus/characters/kelthuzad/thumb/kelthuzad_03.jpg" alt="kelthuzad"></a>
                    </div>
                    <br>
                    <p><strong>Kel'Thuzad</strong> - was a powerful human mage, and a member of the Kirin Tor until his interest in the dark arts caused him to be expelled. He went on to become the founder of the Cult of the Damned and one of the principal agents of the Lich King responsible for spreading the plague across Lordaeron.</p>
                    
                    <p>After bringing the plague to Lordaeron, he was slain by Arthas Menethil. When Arthas became a death knight, he resurrected Kel'Thuzad as a lich so he could summon Archimonde the Defiler into Azeroth. Following Arthas's departure for Northrend, Kel'Thuzad was left to command the Scourge of Lordaeron from his floating necropolis, Naxxramas. Following his first defeat, he and his necropolis moved to Northrend where he was defeated again.</p>

                    <p>The Archlich's phylactery was never recovered after his defeat in Northrend, though his soul was rumored to have made its way to the Shadowlands. As a master of undeath, Kel'thuzad has particular affinity for the undead legions of Maldraxxas, as well as manipulating events from the shadows.</p>
                    <br>
                </div>
            </div>
            <div class="row mb-5 d-none d-md-block">
                <div class="col text-center">     
                    <div id="kelSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <?php
                        $kelthumb = glob('./img/maldraxxus/characters/kelthuzad/thumb/*');
                        $i = 0; 
                        foreach($kelthumb as $index){
                                if($i == 0){
                        ?>
                        <li data-target="#kelSlides" data-slide-to="<?php echo $i; ?>"></li>
                        <?php
                        $i++;  }else{
                            if($i != 0){        
                        ?>
                        <li data-target="#kelSlides" data-slide-to="<?php echo $i; ?>" ></li>
                        <?php               
                                } $i++;
                            }
                        }
                        ?> 
                        </ol>   
                        <div class="carousel-inner">
                            <?php
                            $kelthumb = glob('./img/maldraxxus/characters/kelthuzad/thumb/*');
                            $i = 0;
                            foreach($kelthumb as $index) {
                                $image = str_replace("thumb","",$index);
                                    if($i== 0){
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="kelthuzad"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="kelthuzad_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="kelthuzad"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="kelthuzad_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#kelSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#kelSlides" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row mb-5" id="vashj">
                <div class="col">
                    <div class="d-block d-md-none">
                        <a  href="./img/maldraxxus/characters/vashj/thumb/vashj_02.jpg" data-fancybox="vashj_fancybox" id="vashj_fancybox"><img class="img-fluid" src="./img/maldraxxus/characters/vashj/thumb/vashj_02.jpg" alt="vashj"></a>
                    </div>
                    <br>
                    <p><strong>Lady Vashj</strong> - was once a handmaiden of Queen Azshara herself, being transformed into one of the Naga after Azshara's pact with N'Zoth. Ten thousand years later, Vashj followed the call of Illidan Stormrage and went with him and Kael'thas Sunstrider in Outland. Later on she was defeated in the Serpentshrine Cavern when heroes raided it.</p>
                    
                    <p>After death, Vashj was sent to Maldraxxus and quickly rose into the ranks of the House of Eyes, one of the houses that have fallen from the internal conflict within the houses of Maldraxxus. After locating Vashj at the request of Draka and helping her exact revenge on those that destroyed her previous House, Vashj pledges her allegiance to the necrolords.</p>
                    <br>
                </div>
            </div>
            <div class="row mb-5 d-none d-md-block">
                <div class="col text-center">     
                    <div id="vashjSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <?php
                        $vashjthumb = glob('./img/maldraxxus/characters/vashj/thumb/*');
                        $i = 0; 
                        foreach($vashjthumb as $index){
                                if($i == 0){
                        ?>
                        <li data-target="#vashjSlides" data-slide-to="<?php echo $i; ?>"></li>
                        <?php
                        $i++;  }else{
                            if($i != 0){        
                        ?>
                        <li data-target="#vashjSlides" data-slide-to="<?php echo $i; ?>" ></li>
                        <?php               
                                } $i++;
                            }
                        }
                        ?> 
                        </ol>   
                        <div class="carousel-inner">
                            <?php
                            $vashjthumb = glob('./img/maldraxxus/characters/vashj/thumb/*');
                            $i = 0;
                            foreach($vashjthumb as $index) {
                                $image = str_replace("thumb","",$index);
                                    if($i== 0){
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="vashj"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="vashj_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="vashj"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="vashj_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#vashjSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#vashjSlides" role="button" data-slide="next">
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
                    <h4>Map of maldraxxus</h4>
                    <hr>
                    <br>
                    <a href="./img/maldraxxus/maldraxxus_map.jpg" data-fancybox="maldraxxus_map"><img class="img-fluid" src="./img/maldraxxus/maldraxxus_map.jpg" alt="maldraxxus_map"></a>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="mt-5 py-1">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h4>Gallery</h4>
                    <hr>
                    <br>
                    <div id="maldraxxusSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                            $array = glob('./img/maldraxxus/gallery/*');
                            $i = 0; 
                            foreach($array as $image){
                                    if($i == 0){
                            ?>
                            <li data-target="#maldraxxusSlides" data-slide-to="<?php echo $i; ?>" class="active"></li>
                            <?php
                            $i++;  }else{
                                if($i != 0){        
                            ?>
                            <li data-target="#maldraxxusSlides" data-slide-to="<?php echo $i; ?>" ></li>
                            <?php               
                                    } $i++;
                                }
                            }
                            ?> 
                        </ol>
                        <div class="carousel-inner">

                            <?php
                            $array = glob('./img/maldraxxus/gallery/*');
                            $i = 0;
                            foreach($array as $image) {
                                    if($i==0){
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="maldraxxus"><img src="<?php echo $image; ?>" class="img-thumbnail img-responsive w-75" alt="maldraxxus_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="maldraxxus"><img src="<?php echo $image; ?>" class="img-thumbnail img-responsive w-75" alt="maldraxxus_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#maldraxxusSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#maldraxxusSlides" role="button" data-slide="next">
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
    <section id="afterlife" class="pb-1">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3wtDhxtx14c" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include("includes/footer.php") ?>