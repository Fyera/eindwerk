<?php include("includes/header.php") ?>

<div class="container px-5" id="body-container">
    <header id="header" class="py-4 px-5">
        <div class="primary-overlay">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <img class="img-fluid w-20 img-warlock" src="./img/warlock/warlock_logo.jpg" alt="warlock_logo">
                        <br>
                        <br>
                        <h2 class="warlock">Warlock</h2>
                        <hr>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col text-center">
                        <br>
                        <p>In the face of demonic power, most heroes see death. Warlocks see only opportunity. Dominance is their aim, and they have found a path to it in the dark arts. These voracious spellcasters summon demonic minions to fight beside them. At first, they command only the service of imps, but as a warlock’s knowledge grows, seductive succubi, loyal voidwalkers, and horrific felhunters join the dark sorcerer’s ranks to wreak havoc on anyone who stands in their master’s way.</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="specializations" class="py-5 px-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h2 class="warlock text-center">Specializations</h2>
                    <hr>
                    <br>
                    <p><a href="#affliction"><strong>Affliction</strong></a> (ranged dps): A master of shadow magic who specializes in drains and damage-over-time spells.</p>
                    <p><a href="#demonology"><strong>Demonology</strong></a> (ranged dps): A master of demons who compels demonic powers to aid them.</p>
                    <p><a href="#destruction"><strong>Destruction</strong></a> (ranged dps): A master of chaos who calls down fire to turn and demolish enemies.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="general" class="py-1 px-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h2 class="warlock text-center">General changes</h2>
                    <hr>
                    <br>
                    <p>All warlocks can now cast <strong>Curse of Doom</strong>, <strong>Curse of Tongues</strong>, <strong>Curse of Recklessness</strong>, and <strong>Curse of Weakness</strong> on their enemies. In addition, warlocks can use the spell <strong>Demonic Circle</strong> once again, increasing their mobility.</p>
                    <br>
                    <p>The new <strong>Tongue Tied</strong> talent boosts spells against targets affected by <strong>Curse of Tongues</strong>, preventing them from receiving healing effects and forcing them to succumb to all incoming damage for a moderate amount of time.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-1 px-5">
        <div class="container">
            <h2 id="affliction" class="warlock text-center">Affliction</h2>
            <hr>
            <br>
            <div class="row mb-5">
                <div class="col-md-4 text-center">
                    <img class="img-fluid w-100 img-warlock" src="img/warlock/warlock_affliction.jpg" alt="warlock_affliction">
                    <br>
                    <br>
                </div>
                <div class="col-md-8">
                    <p><strong>Unstable Affliction</strong> sacrifices its stack effect to torture its victim even longer without consuming a soul shard.</p>
                    <br>
                    <p>The new <strong>Malefic Rapture</strong> deals damage to all enemies afflicted by their periodic spells (increased for each periodic effect on the target)</p>
                    <br>
                    <p>In addition, Affliction Warlocks are given new talents to help them make life even more efficient. <strong>Sow the Seeds</strong> will now plant two additional seeds in nearby enemies that, when combined with the new <strong>Malefic Rapture</strong> ability, can yield an explosive crop.</p>
                    <br>
                    <p><strong>Doom</strong> now deals more damage over a shorter period of time and is also available to Affliction Warlocks. If <strong>Doom</strong> kills the target, the warlock has a small chance of summoning a <strong>Doom Guard</strong> that temporarily fights for him.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-1 px-5">
        <div class="container">
            <h2 id="demonology" class="warlock text-center">Demonology</h2>
            <hr>
            <br>
            <div class="row mb-5">
                <div class="col-md-4 text-center">
                    <img class="img-fluid w-100 img-warlock" src="img/warlock/warlock_demonology.jpg" alt="warlock_demonology">
                    <br>
                    <br>
                </div>
                <div class="col-md-8">
                    <p><strong>Dark Pact</strong> now scales with spell power and deals more damage than ever before.</p>
                    <br>
                    <p>Demonology warlocks will also find that the <strong>Dark Fury</strong> talent has a new effect: in addition to the cooldown reduction it provides, it empowers <strong>Shadowfury</strong> by increasing its area of effect as the spell crashes down on in the battlefield.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-1 px-5">
        <div class="container">
            <h2 id="destruction" class="warlock text-center">Destruction</h2>
            <hr>
            <br>
            <div class="row mb-5">
                <div class="col-md-4 text-center">
                    <img class="img-fluid w-100 img-warlock" src="img/warlock/warlock_destruction.jpg" alt="warlock_destruction">
                    <br>
                    <br>
                </div>
                <div class="col-md-8">
                    <p><strong>Fire and Brimstone</strong> has been improved in Shadowlands and now generates 2 Soul Shard fragments for each additional enemy struck by the Warlock’s empowered <strong>Incinerate</strong>.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="py-1 px-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="warlock">Gallery</h4>
                    <hr>
                    <br>
                    <div id="warlockSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                            $array = glob('./img/warlock/gallery/thumb/*');
                            $i = 0; 
                            foreach($array as $index){
                                    if($i == 0){
                            ?>
                            <li data-target="#warlockSlides" data-slide-to="<?php echo $i; ?>" class="active"></li>
                            <?php
                            $i++;  }else{
                                if($i != 0){        
                            ?>
                            <li data-target="#warlockSlides" data-slide-to="<?php echo $i; ?>" ></li>
                            <?php               
                                    } $i++;
                                }
                            }
                            ?> 
                        </ol>
                        <div class="carousel-inner">

                            <?php
                            $array = glob('./img/warlock/gallery/thumb/*');
                            $i = 0;
                            foreach($array as $index) {
                                $image = str_replace("thumb","",$index);
                                    if($i==0){
                                ?>++
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="warlock"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="warlock_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="warlock"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="warlock_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#warlockSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#warlockSlides" role="button" data-slide="next">
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