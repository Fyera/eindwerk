<?php require_once("init.php"); ?>
<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/8b7c26431d.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css" />
    <title>Bootstrap Theme</title>
  </head>

  <body">
  <div id="banner" class="page-header no-margin">
    <div class="container-fluid px-0">
      <div class="row">
        <div class="col-md-12 text-center">
          <img class="img-responsive w-100" src="./img/shadowlands_banner.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- navbar -->
  <nav class="navbar navbar-default navbar-static navbar-expand-md navbar-custom navbar-dark sticky-top" id="main-nav">
    <div class="container">
      <a href="index.php" class="navbar-brand"><img src="./img/world_of_warcraft.png" alt="wow_logo"></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarCollapse">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item dropdown d-none d-md-block">
            <a href="zones.php" class="nav-link dropdown-toggle">Zones</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="zone_bastion.php">Bastion</a></li>
              <li><a class="dropdown-item" href="zone_ardenweald.php">Ardenweald</a></li>
              <li><a class="dropdown-item" href="zone_maldraxxus.php">Maldraxxus</a></li>
              <li><a class="dropdown-item" href="zone_revendreth.php">Revendreth</a></li>
              <li><a class="dropdown-item" href="zone_maw.php">The Maw</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown d-block d-sm-block d-md-none">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Zones</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="zone_bastion.php">Bastion</a></li>
              <li><a class="dropdown-item" href="zone_ardenweald.php">Ardenweald</a></li>
              <li><a class="dropdown-item" href="zone_maldraxxus.php">Maldraxxus</a></li>
              <li><a class="dropdown-item" href="zone_revendreth.php">Revendreth</a></li>
              <li><a class="dropdown-item" href="zone_maw.php">The Maw</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown d-none d-md-block">
            <a href="classes.php" class="nav-link dropdown-toggle">Classes</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="death_knight.php">Death Knight</a></li>
              <li><a class="dropdown-item" href="demon_hunter.php">Demon Hunter</a></li>
              <li><a class="dropdown-item" href="druid.php">Druid</a></li>
              <li><a class="dropdown-item" href="hunter.php">Hunter</a></li>
              <li><a class="dropdown-item" href="mage.php">Mage</a></li>
              <li><a class="dropdown-item" href="monk.php">Monk</a></li>
              <li><a class="dropdown-item" href="paladin.php">Paladin</a></li>
              <li><a class="dropdown-item" href="priest.php">Priest</a></li>
              <li><a class="dropdown-item" href="rogue.php">Rogue</a></li>
              <li><a class="dropdown-item" href="shaman.php">Shaman</a></li>
              <li><a class="dropdown-item" href="warlock.php">warlock</a></li>
              <li><a class="dropdown-item" href="warrior.php">warrior</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown d-block d-sm-block d-md-none">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Classes</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="death_knight.php">Death Knight</a></li>
              <li><a class="dropdown-item" href="demon_hunter.php">Demon Hunter</a></li>
              <li><a class="dropdown-item" href="druid.php">Druid</a></li>
              <li><a class="dropdown-item" href="hunter.php">Hunter</a></li>
              <li><a class="dropdown-item" href="mage.php">Mage</a></li>
              <li><a class="dropdown-item" href="monk.php">Monk</a></li>
              <li><a class="dropdown-item" href="paladin.php">Paladin</a></li>
              <li><a class="dropdown-item" href="priest.php">Priest</a></li>
              <li><a class="dropdown-item" href="rogue.php">Rogue</a></li>
              <li><a class="dropdown-item" href="shaman.php">Shaman</a></li>
              <li><a class="dropdown-item" href="warlock.php">warlock</a></li>
              <li><a class="dropdown-item" href="warrior.php">warrior</a></li>
            </ul>
          </li>
          <?php
          if($session->is_signed_in()) { 
          echo'<li class="nav-item">
            <a href="profile.php" class="nav-link">Profile</a>
          </li>';}
          ?>
          <li class="nav-item">
          <?php
						if($session->is_signed_in()){
							echo '<a class="nav-link" href="logout.php">Logout</a>';
						}else{
							echo '<a class="nav-link" href="login.php">Login</a>';
						}?>
          </li>
        </ul>
      </div>		
    </div>
  </nav>