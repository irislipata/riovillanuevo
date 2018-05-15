<?php
require_once "header.php";
require_once "modal.php";
require_once "navbar.php";
?>
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- <div style="position:absolute;width:100%;height:100%;background-color:rgba(0,0,0,0.5);z-index:6"></div> -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" id="startchange">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="overlay"></div>
      <div class="hero">
        <hgroup>
            <h2 class="h2-hero">Rio Villa Nuevo Mineral Water Resort</h2>
            <p class="p-hero">I remember a long long time ago, when i was about 3-4 years old, my dad walked into our house with this very large box in his hands. Sat down on the floor, like a cat, i carefully watched as he pulled out thing after thing from it. One of those things was a large...</p>
        </hgroup>
        <a class="btn btn-hero btn-lg" href="reservation.php" role="button">Reserve Now.</a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="overlay"></div>
      <div class="hero">
        <hgroup>
            <h2 class="h2-hero">Rio Villa Nuevo Mineral Water Resort</h2>
            <p class="p-hero">I remember a long long time ago, when i was about 3-4 years old, my dad walked into our house with this very large box in his hands. Sat down on the floor, like a cat, i carefull  y watched as he pulled out thing after thing from it. One of those things was a large...</p>
        </hgroup>
        <a class="btn btn-hero btn-lg" href="reservation.php" role="button">Reserve Now.</a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="overlay"></div>
      <div class="hero">
        <hgroup>
            <h2 class="h2-hero">Rio Villa Nuevo Mineral Water Resort</h2>
            <p class="p-hero">I remember a long long time ago, when i was about 3-4 years old, my dad walked into our house with this very large box in his hands. Sat down on the floor, like a cat, i carefully watched as he pulled out thing after thing from it. One of those things was a large...</p>
        </hgroup>
        <a class="btn btn-hero btn-lg" href="reservation.php" role="button">Reserve Now.</a>
      </div>
    </div>
  </div>
</div>
<?php require_once "footer.php";?>