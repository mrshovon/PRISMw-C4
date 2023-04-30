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

  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Services</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-home"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Buy/Sell<br>and Rent  </h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et voluptatum minima officia totam earum aperiam unde esse iste, tempora natus soluta nulla tempore dolores! Quis tempore animi vel itaque expedita!
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-usd"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Loans</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et voluptatum minima officia totam earum aperiam unde esse iste, tempora natus soluta nulla tempore dolores! Quis tempore animi vel itaque expedita!
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-file"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Documentation and Renovation</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et voluptatum minima officia totam earum aperiam unde esse iste, tempora natus soluta nulla tempore dolores! Quis tempore animi vel itaque expedita!
              </p>
            </div>
            <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Services End /-->
<?= $this->endSection() ?>
    
   