<?php include("includes/header.php") ?>

<div class="container px-5" id="body-container">
    <header id="header" class="py-4">
        <div class="primary-overlay">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <img class="img-fluid w-20 img-dh" src="./img/demonhunter/demon_hunter_logo.jpg" alt="demon_hunter_logo">
                        <br>
                        <br>
                        <h2 class="dh">Demon Hunter</h2>
                        <hr>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col text-center mx-5">
                        <br>
                        <p>Demon Hunters, disciples of Illidan Stormrage, uphold a dark legacy, one that frightens their allies and enemies alike. The Illidari embrace fel and chaotic magics – energies that have long threatened the world of Azeroth – believing them necessary to challenge the Burning Legion. Wielding the powers of demons they’ve slain, they develop demonic features that incite revulsion and dread in fellow elves.</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="specializations" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h2 class="dh text-center">Specializations</h2>
                    <hr>
                    <br>
                    <p><a href="#havoc"><strong>Havoc</strong></a> (dps): A brooding master of warglaives and the destructive power of Fel magic.</p>
                    <p><a href="#vengeance"><strong>Vengeance</strong></a> (tank): Embraces the demon within to incinerate enemies and protect their allies.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="general" class="py-1">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h2 class="dh text-center">General changes</h2>
                    <hr>
                    <br>
                    <p>All demon hunters now share a common resource – <strong>Fury</strong>  – that they can use to channel their fiery hatred into relentless demonic attacks. In addition, <strong>Immolation Aura</strong> (originally for Vengeful Demon Hunters only) will be available for both specializations.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-1">
        <div class="container">
            <h2 id="havoc" class="dh text-center">Havoc</h2>
            <hr>
            <br>
            <div class="row mb-5">
                <div class="col-md-4 text-center">
                    <img class="img-fluid w-100 img-dh" src="img/demonhunter/demon_hunter_havoc.jpg" alt="demon_hunter_havoc">
                    <br>
                    <br>
                </div>
                <div class="col-md-8">
                    <p>Havoc Demon Hunters have a new passive ability called <strong>Unending Hatred</strong> which expands their Fury’s maximum capacity, allowing them to perform an additional attack or two.</p>
                    <br>
                    <p>They also have a new talent called <strong>Essence Break</strong>. This talent deals Chaos damage and significantly increases the damage that both <strong>Chaos Strike</strong> and <strong>Blade Dance</strong> do for a short duration.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-1">
        <div class="container">
            <h2 id="vengeance" class="dh text-center">Vengeance</h2>
            <hr>
            <br>
            <div class="row mb-5">
                <div class="col-md-4 text-center">
                    <img class="img-fluid w-100 img-dh" src="img/demonhunter/demon_hunter_vengeance.jpg" alt="demon_hunter_vengeance">
                    <br>
                    <br>
                </div>
                <div class="col-md-8">
                    <p>Vengeance Demon Hunters will notice some changes to <strong>Soul Cleave</strong> and their talents that serve to make other builds more attractive in addition to <strong>Spirit Bomb</strong>.</p>
                    <br>
                    <p>Among other things, you will receive <strong>Demonic</strong> as a talent option and <strong>Fel Devastation</strong> as the standard ability of this specialization. This allows demon hunters to do more destruction than ever before. Similar to their Havoc Demon Hunters counter part, the Demonic talent temporarily turns Vengeance Demon Hunter into their demon form after using <strong>Fel Devastation</strong>.</p>
                    <br>
                    <p>Overall, the talents of the vengeance specialization have been significantly revised. They have pooled several popular talents, moved others, and introduced new talents to enable new builds. One such talent is <strong>Bulk Extraction</strong>, which immediately rips a soul fragment from up to five enemies around the Demon Hunter and consumes them.</p>
                    <br>
                    <p>In situations where the Vengeance Demon Hunter has to take a few hits, the <strong>Ruinous Bulwark</strong> talent increases the healing of <strong>Fel Devastation</strong> and converts excess healing into an absorption shield that lasts for a moderate amount of time.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="py-1 d-none d-sm-block">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="dh">Gallery</h4>
                    <hr>
                    <br>
                    <div id="dhSlides" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                            $array = glob('./img/demonhunter/gallery/thumb/*');
                            $i = 0; 
                            foreach($array as $index){
                                    if($i == 0){
                            ?>
                            <li data-target="#dhSlides" data-slide-to="<?php echo $i; ?>" class="active"></li>
                            <?php
                            $i++;  }else{
                                if($i != 0){        
                            ?>
                            <li data-target="#dhSlides" data-slide-to="<?php echo $i; ?>" ></li>
                            <?php               
                                    } $i++;
                                }
                            }
                            ?> 
                        </ol>
                        <div class="carousel-inner">

                            <?php
                            $array = glob('./img/demonhunter/gallery/thumb/*');
                            $i = 0;
                            foreach($array as $index) {
                                $image = str_replace("thumb","",$index);
                                    if($i==0){
                                ?>
                                <div class="carousel-item active">
                                <a href="<?php echo $image; ?>" data-fancybox="dh"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="dh_<?php echo $i; ?>"/></a>
                                </div>
                                <?php
                                $i++; }else{
                                    if($i != 0){
                                ?>
                                <div class="carousel-item">
                                <a href="<?php echo $image; ?>" data-fancybox="dh"><img src="<?php echo $index; ?>" class="img-thumbnail img-responsive w-75" alt="dh_<?php echo $i; ?>"/></a>
                                </div>
                                <?php                           
                                    } $i++;
                                }  
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#dhSlides" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#dhSlides" role="button" data-slide="next">
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