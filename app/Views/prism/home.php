<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>
    <h1 class="head-tag">Welcome to PRISM Properties</h1>
      <div class="carousel-container">
        <div class="carousel-slide">
          <img src="<?=base_url('public/images/demo 1.jpg')?>" alt="image1">
          <img src="<?=base_url('public/images/demo 2.jpg')?>" alt="image2">
          <img src="<?=base_url('public/images/demo3.jpg')?>" alt="image3">
        </div>
        <div class="carousel-prev"><</div>
        <div class="carousel-next">></div>
      </div>
<?= $this->endSection() ?>
    
   