<?php include("includes/header.php") ?>

<div class="container px-5" id="body-container">
    <header id="header" class="mb-5 py-4">
        <div class="primary-overlay">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>BASTION</h2>
                        <br>
                        <hr>
                        <img class="img-fluid w-75" src="./img/bastion/bastion_zone.jpg" alt="bastion_zone">
                        <br>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col text-center">
                        <br>
                        <p>Those who have lived a life of service are drawn to Bastion to assume the highest duty of all-carrying souls to the Shadowlands. Amongst Bastion’s gleaming spires and sweeping vistas await challenges to test the mettle of the steadfast Kyrians.</p>
                        <br>
                        <p>Bastion is one of the five playable outdoor zones in the Shadowlands expansion, and is the primary home of the Kyrian covenant. A land of soaring angelic architecture, light, and purity, Bastion is a fitting home to the guardians of the noble dead. It is also the first of the four Covenant realms (Bastion, Maldraxxus, Ardenweald, and Revendreth) that new players will quest through to gain the privilege of choosing a covenant at level 60.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="covenant" class="my-5 py-1 px-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h4>The Kyrian Covenant</h4>
                    <hr>
                    <br>
                    <p>The Kyrian Covenant is made up of souls that shed their emotions and regrets to ascended into higher beings. They take on the role of angelic guides, tasked with shuttling souls between the lands of the living and the dead. The Val'kyr are ranked among the highest echelon of the Kyrian, and while players will automatically align with the Kyrian while questing through Bastion, at max level they'll be given the option to join the Kyrian covenant and access Kyrian-specific rewards, including a class-specific ability, signature ability, and cosmetic rewards!
                    </p>
                    <br>
                    <a href="./img/bastion/bastion_covenant.jpg" data-fancybox="bastion_covenant" id="bastion_covenant"><img class="img-fluid" src="./img/bastion/bastion_covenant.jpg" alt="bastion_covenant"></a>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
    <section id="characters" class="my-5 py-1 px-5">
        <div class="container">
            <div class="row mb-5" id="uther">
                <div class="col">
                    <h4 class="text-center">Notable Characters in Bastion</h4>
                    <hr>
                    <br>
                    <p><strong>Uther the Lightbringer</strong> - Fallen hero of the Alliance and founder of the Knights of the Silver Hand Paladin order, slain by Arthas during the fall of Lordaeron (Warcraft III). Now a Forsworn Kyrian, though his motivations are unknown.</p>
                    <br>
                    <p>Lord Uther the Lightbringer studied and worshiped the Light since his youth. He began as an apprentice to Archbishop Alonsus Faol during the First War. During this war, Uther first met the young Prince Arthas, and then escorted him to Capital City of Lordaeron.</p>
                    <p>Uther really shined during the Second War. He became the first Paladin of the Knights of the Silver Hand. He aided in defeating the horde at Lordaeron, and stopped them from taking the kingdom. He fought alongside Anduin Lothar in the final battle of Blackrock Spire. He and Turalyon — the person who gave Uther the nickname Lightbringer — led the final assault against the Burning Blade clan at the Dark Portal.</p>
                    <p>After the successful war — from the Alliance’s viewpoint — the Knights of the Silver Hand were stationed in the Cathedral of Light in Stormwind. Uther had many tasks in this service, but one of the most prestigious was training the son of King Terenas, Prince Arthas, in the ways of the Light.</p>
                    <p>In the Third War, Uther was honored to have Arthas at his side, defending the town of Strahnbrad, and that went well when fighting against Orcs. Then came Stratholme, which was infected by the Plague. Arthas ordered Uther to purge the city. Uther refused, not willing to kill innocent people so Arthas accused him of treason, and disbanded the Knights of the Silver Hand on the spot.</p>
                    <p>Uther and King Terenas discussed and agreed that something was wrong with Arthas, so they requested Arthas return from Northrend so they could meet with him. Arthas returned as requested, but when he did, he slayed his father as he sat on his throne. King Terenas’ ashes were placed in a magical urn. Uther took the urn, trying to protect it — but Arthas needed it. There was an epic battle and in the end, the Lich King aided Arthas.</p>
                    <p>Uther was on his knees when Arthas drove his sword Frostmourne through him. From <a href="zone_bastion.php#afterlife">Afterlives: Bastion</a>, Uther’s soul was split in two, one absorbed into Frostmourne, and one moving on to the Shadowlands.</p>
                    <p>Uther was remembered with a tomb dedicated to him in the Western Plaguelands. The only light in a land of darkness.</p>
                    <br>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col text-center">     
                    <div id="utherSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <?php
                        $array = glob('./img/bastion/characters/uther/*');
                        $i = 0; 
                        foreach($array as $image){
                                if($i == 0){
                        ?>
                        <li data-target="#utherSlides" data-slide-to="<?php echo $i; ?>"></li>
                        <?php
                        $i++;  }else{
                            if($i != 0){        
                        ?>
                        <li data-target="#utherSlides" data-slide-to="<?php echo $i; ?>" ></li>
                        <?php               
                                } $i++;
                            }
                        }
                        ?> 
                        </ol>   
                        <div class="carousel-inner">
                            <?php
                            $array = glob('./img/bastion/characters/uther/*');
                            $i = 0;
                            foreach($array as $image) {
                                    if($i==0){
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="uther"><img src="<?php echo $image; ?>" class="img-thumbnail img-responsive w-75" alt="Uther_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="uther"><img src="<?php echo $image; ?>" class="img-thumbnail img-responsive w-75" alt="Uther_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#utherSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#utherSlides" role="button" data-slide="next">
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
                    <h4>Map of Bastion</h4>
                    <hr>
                    <br>
                    <p><strong>Sub-Areas:</strong> Aspirant's Crucible | Citadel of Loyalty | Elysian Hold | Hero's Rest | Purity's Pinnacle | Temple of Humility | The Eternal Forge | The Temple of Courage | Vestibule of Etermity |</p>
                    <br>
                    <a href="./img/bastion/bastion_map.jpg" data-fancybox="bastion_map"><img class="img-fluid" src="./img/bastion/bastion_map.jpg" alt="bastion_map"></a>
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
                    <div id="bastionSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                            $array = glob('./img/bastion/gallery/*');
                            $i = 0; 
                            foreach($array as $image){
                                    if($i == 0){
                            ?>
                            <li data-target="#bastionSlides" data-slide-to="<?php echo $i; ?>" class="active"></li>
                            <?php
                            $i++;  }else{
                                if($i != 0){        
                            ?>
                            <li data-target="#bastionSlides" data-slide-to="<?php echo $i; ?>" ></li>
                            <?php               
                                    } $i++;
                                }
                            }
                            ?> 
                        </ol>
                        <div class="carousel-inner">

                            <?php
                            $array = glob('./img/bastion/gallery/*');
                            $i = 0;
                            foreach($array as $image) {
                                    if($i==0){
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="bastion"><img src="<?php echo $image; ?>" class="img-thumbnail img-responsive w-75" alt="Bastion_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="bastion"><img src="<?php echo $image; ?>" class="img-thumbnail img-responsive w-75" alt="Bastion_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#bastionSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#bastionSlides" role="button" data-slide="next">
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
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LNSnOAumlB8" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include("includes/footer.php") ?>