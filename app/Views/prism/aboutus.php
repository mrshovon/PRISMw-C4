
    <!-- main -->
    <?= $this->extend('layouts/master') ?>
    <?= $this->section('content') ?>
    <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="<?= base_url('public/img/slide-about-1.jpg')?>" alt="" class="img-fluid">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title"><?= strtoupper($company->company_name) ?>
              <span></span>
              <br></h3>
            <p>Since 2023</p>
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <img src="<?=base_url('public/img/about-2.jpg')?>" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2  d-none d-lg-block">
              <div class="title-vertical d-flex justify-content-start">
                <span><?= strtoupper($company->company_name) ?></span>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">COMPANY
                  <span class="color-d">VISION</span> 
                  <br> </h3>
              </div>
              <p class="color-text-a">
              <?= strtoupper($company->company_vision) ?>
              </p>
              <!-- <p class="color-text-a">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est non impedit eaque accusamus dolorem, asperiores harum officiis in, beatae, quaerat assumenda voluptatum omnis officia similique facilis recusandae fugiat? Saepe, porro.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio fugit error voluptatum voluptas dolorum corrupti tenetur, illum distinctio aperiam quaerat aliquam aut fuga, perspiciatis saepe. Id eum doloribus obcaecati fuga.
              </p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <?= $this->endSection() ?>
    <!-- main -->
    