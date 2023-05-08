<?= $this->extend('layouts/master') ?>
<?= $this->section('content') ?>
<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <?= $i=0 ?>
      <?php foreach($propertylist as $index => $row) { if($i>=3) break; $i++ ?>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?=base_url('public/img/slide-'.$i.'.jpg')?>)">
        <span hidden><?= $row->property_id ?></span>
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top"><?= $row->property_area ?>, <?= $row->city ?></p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b"><?= $row->property_name ?> </span> <?= $row->city ?>
                      <br> <?= $row->property_area ?></h1>
                    <p class="intro-subtitle intro-price">
                      <a href="<?=base_url('public/login')?>"><span class="price-a"><?=$row->purpose_name ?> | tk <?= $row->price ?></span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
     </div>
  </div>
  <!--/ Carousel end /-->
  <style>
    section img{
      height: 230px;
    }
    section h5{
      color:#2eca6a;
    }
    .zoom {
      transition: transform .3s; /* Animation */
      margin: 0 auto;
    }
    .zoom:hover {
      transform: scale(0.5);
    }
  </style>
  <!--/ Services Star /-->
  <br>
  <section class="section-services section-t8">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box-d">
                <h2 class="title-d">Our Services</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 animate__animated animate__fadeInDown animate__delay-1s ">
          <div class="col" >
            <div class="card h-100 border-success" >
              <img src="<?=base_url('public/img/buildyourhome.jpg')?>" class="card-img-top zoom" alt="...">
              <div class="card-body">
                <h5 class="card-title">Build Your Home</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam ad atque quam vitae id doloribus repudiandae asperiores. Temporibus iure reiciendis atque, vero enim minima optio delectus eveniet quia! Deleniti, repudiandae..</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border-success">
              <img src="<?=base_url('public/img/advisoryservice.jpg')?>" class="card-img-top zoom" alt="...">
              <div class="card-body">
                <h5 class="card-title">Advisory Services</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae praesentium natus provident saepe deserunt laudantium laborum officia officiis aliquam est. Voluptas, sint similique cum reprehenderit eveniet recusandae autem hic modi?</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border-success">
              <img src="<?=base_url('public/img/homerenovationservice.jpg')?>" class="card-img-top zoom" alt="...">
              <div class="card-body">
                <h5 class="card-title">Renovation Services</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, et veritatis architecto commodi inventore quibusdam voluptate repudiandae consequatur repellat! Asperiores odio nulla molestiae dolores dolorum animi odit, magnam veritatis pariatur!</p>
              </div>
            </div>
          </div>
        </div>   
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-4 animate__animated animate__fadeInUp animate__delay-2s">
          <div class="col">
            <div class="card h-100 border-success">
              <img src="<?=base_url('public/img/buysell.png')?>" class="card-img-top zoom " alt="...">
              <div class="card-body">
                <h5 class="card-title">Property Buy/Sell Services</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae praesentium natus provident saepe deserunt laudantium laborum officia officiis aliquam est. Voluptas, sint similique cum reprehenderit eveniet recusandae autem hic modi?</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border-success">
              <img src="<?=base_url('public/img/rentalservice.png')?>" class="card-img-top zoom" alt="...">
              <div class="card-body">
                <h5 class="card-title">Renting Services</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, et veritatis architecto commodi inventore quibusdam voluptate repudiandae consequatur repellat! Asperiores odio nulla molestiae dolores dolorum animi odit, magnam veritatis pariatur!</p>
              </div>
            </div>
          </div>
          <div class="col" style="display: block">
            <div class="card h-100 border-success">
              <img src="<?=base_url('public/img/homeloan.jpg')?>" class="card-img-top zoom" alt="...">
              <div class="card-body">
                <h5 class="card-title">Home Loan Services</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima totam vel expedita id, maiores ut obcaecati minus iusto odio quas laborum at? Qui mollitia autem voluptatibus esse quaerat, nulla quasi!</p>
              </div>
            </div>
          </div>
        </div>   
      </div>
    </div>
  </section>
  <!--/ Services End /-->
<?= $this->endSection() ?>
    
   