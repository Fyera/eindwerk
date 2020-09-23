<?php include("includes/header.php") ?>

<div class="container px-5" id="body-container">
    <header id="header" class="py-4 px-5">
        <div class="primary-overlay">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <img class="img-fluid w-20 img-priest" src="./img/priest/priest_logo.jpg" alt="priest_logo">
                        <br>
                        <br>
                        <h2 class="priest">Priest</h2>
                        <hr>

                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col text-center">
                        <br>
                        <p>Priests are devoted to the spiritual, and express their unwavering faith by serving the people. For millennia they have left behind the confines of their temples and the comfort of their shrines so they can support their allies in war-torn lands. In the midst of terrible conflict, no hero questions the value of the priestly orders.</p>
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
                    <h2 class="priest text-center">Specializations</h2>
                    <hr>
                    <br>
                    <p><a href="#discipline"><strong>Discipline</strong></a> (healer): Uses magic to shield allies from taking damage as well as heal their wounds.</p>
                    <p><a href="#holy"><strong>Holy</strong></a> (healer): A versatile healer who can reverse damage on individuals or groups and even heal from beyond the grave.</p>
                    <p><a href="#shadow"><strong>Shadow</strong></a> (ranged dps): Uses sinister Shadow magic, especially damage-over-time spells, to eradicate enemies.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="general" class="py-1 px-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h2 class="priest text-center">General changes</h2>
                    <hr>
                    <br>
                    <p>All priests will be able to use the following spells regardless of their active specialization: <strong>Mind Blast</strong>, <strong>Mind Soothe</strong>, <strong>Power Infusion</strong>, <strong>Shadow Word: Death</strong>, and <strong>Shadow Word: Pain</strong>.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-1 px-5">
        <div class="container">
            <h2 id="discipline" class="priest text-center">Discipline</h2>
            <hr>
            <br>
            <div class="row mb-5">
                <div class="col-md-4 text-center">
                    <img class="img-fluid w-100 img-priest" src="img/priest/priest_discipline.jpg" alt="priest_discipline">
                    <br>
                    <br>
                </div>
                <div class="col-md-8">
                    <p>Discipline Priests masterfully know how to balance the powers of light and shadow. The changes in Shadowlands affect both ends of the spectrum.</p>
                    <br>
                    <p><strong>Light’s Caress</strong> is a new talent that enables Discipline Priests to heal their allies by blessing them with <strong>Power Word: Barrier</strong>, and healing them again if they’re still under the barrier when it expires.</p>
                    <br>
                    <p>Discipline Priests who are brave enough to use dark magic can learn the reworked <strong>Shadow Covenant</strong> talent. This instantly heals a chosen hero and four other injured allies within a small area and moderately increases the damage the Priest deals for a short period of time, during which they cannot cast any Holy spells.</p>
                    <br>
                    <p>New for Discipline Priests in Shadowlands is <strong>Mind Blast</strong> which will provide them with a powerful burst of damage and <strong>Atonement</strong> healing; along with an absorption shield for a significant mana cost.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-1 px-5">
        <div class="container">
            <h2 id="holy" class="priest text-center">Holy</h2>
            <hr>
            <br>
            <div class="row mb-5">
                <div class="col-md-4 text-center">
                    <img class="img-fluid w-100 img-priest" src="img/priest/priest_holy.jpg" alt="priest_holy">
                    <br>
                    <br>
                </div>
                <div class="col-md-8">
                    <p>Now that the protective veils of the Shadowlands are torn, the Naaru’s grace can penetrate the barrier and be channeled by their most loyal servants. </p>
                    <br>
                    <p><strong>Circle of Healing</strong> is now baseline for all Holy Priests. This leaves them free to choose a new talent instead: <strong>Prayer Circle</strong>. <strong>Prayer Circle</strong> empowers <strong>Circle of Healing</strong>, reducing the cast time of <strong>Prayer of Healing</strong> moderately for a short period of time when cast.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-1 px-5">
        <div class="container">
            <h2 id="shadow" class="priest text-center">shadow</h2>
            <hr>
            <br>
            <div class="row mb-5">
                <div class="col-md-4 text-center">
                    <img class="img-fluid w-100 img-priest" src="img/priest/priest_shadow.jpg" alt="priest_shadow">
                    <br>
                    <br>
                </div>
                <div class="col-md-8">
                    <p>In the realm of the dead, Shadow Priests can learn a new talent to fully reach their potential: <strong>Death and Madness</strong>. Every time a target dies after being slain with <strong>Shadow Word: Death</strong>, the Shadow Priest gains a substantial amount of Insanity over a few seconds; in addition, <strong>Shadow Word: Death</strong> resets instantly, making it ready for use on their next victim.</p>
                    <br>
                    <p><strong>Surrender to Madness</strong> returns with a nasty surprise. Merging current <strong>Dark Ascension</strong> and <strong>Surrender to Madness</strong> – The Shadow Priest instantly gains a huge spike of Insanity and casts <strong>Void Eruption</strong> on the target. Over a long duration, Insanity-generating abilities grant 100% more Insanity, and you can cast your spells while moving. However, if the caster fails to slay their target during the buff window, they succumb to the shadows and die.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="py-1 px-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="priest">Gallery</h4>
                    <hr>
                    <br>
                    <div id="priestSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                            $array = glob('./img/priest/gallery/thumb/*');
                            $i = 0; 
                            foreach($array as $index){
                                    if($i == 0){
                            ?>
                            <li data-target="#priestSlides" data-slide-to="<?php echo $i; ?>" class="active"></li>
                            <?php
                            $i++;  }else{
                                if($i != 0){        
                            ?>
                            <li data-target="#priestSlides" data-slide-to="<?php echo $i; ?>" ></li>
                            <?php               
                                    } $i++;
                                }
                            }
                            ?> 
                        </ol>
                        <div class="carousel-inner">

                            <?php
                            $array = glob('./img/priest/gallery/thumb/*');
                            $i = 0;
                            foreach($array as $index) {
                                $image = str_replace("thumb","",$index);
                                    if($i==0){
                                ?>++
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="priest"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="priest_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="priest"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="priest_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#priestSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#priestSlides" role="button" data-slide="next">
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