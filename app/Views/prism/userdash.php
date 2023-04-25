    <?= $this->extend('layouts/masterAL') ?>
    <?= $this->section('content') ?>
    <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
          
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <!-- <form>
              <select class="custom-select">
                <option selected>All</option>
                <option value="1">New to Old</option>
                <option value="2">For Rent</option>
                <option value="3">For Buy</option>
              </select>
            </form> -->
          </div>
        </div>
        <?php foreach($propertylist as $index => $row) { ?> 
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <?php $ext = '.jpg'; ?>
              <img src="<?=base_url('public/img/p'.$index+1..$ext)?>" alt="" class="img-a img-fluid">
              
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a class="adrs" href="#"><?php echo $row->property_name?></a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"> <span><?php echo $row->purpose_name?></span>| tk <span><?php echo $row->price?></span></span>
                  </div>
                  <a href="<?= base_url('public/user/homeAL/propertydetails/'.$row->property_id)?>" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span><?php echo $row->property_size?> 
                        <sup>Sqft</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span><?php echo $row->beds?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span><?php echo $row->baths?></span>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
 
      </div>
      <!-- <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <span class="ion-ios-arrow-back"></span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="#">
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div> -->
    </div>
  </section>
  <!--/ Property Grid End /-->
     <?= $this->endSection() ?>