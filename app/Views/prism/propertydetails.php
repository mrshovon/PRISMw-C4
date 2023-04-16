
    <?= $this->extend('layouts/masterAL') ?>
    <?= $this->section('content') ?>
    <main style="height: fit-content; margin-left: 10px; margin-top:10%">
    <?php foreach($propertylist as $index => $row) { ?> 
    <section class="pdtls1">
        <div style="margin-top: 10px;">
          <img src="<?= base_url().$row->floor_plan?>" alt="" style="width:250px"> <br><br>
          <h3 style="font-size: 20px; text-align: center;">Property ID : <span><?php echo $row->property_id?></span> </h3>
          <h3 style="font-size: 20px; text-align: center;">Property Price: <span><?php echo $row->price?></span></h3>
        </div>
        <div style="margin-top: 30px;">
          <p><span><b>Description:</b></span> <?php echo $row->description?></p>
          <ul style="list-style: none; float:right; margin-right:25px;">
            <li class="btn btn-info"><a href="" style="text-decoration: none; color:black">Book a visit</a><i class="fa-regular fa-calendar-check" style="margin-left: 5px;"></i></li>
            <li class="btn btn-info"><a href="" style="text-decoration: none; color:black">favourite</a><i class="fa-solid fa-star" style="margin-left: 5px;"></i></li>
            <li class="btn btn-info"><a href="" style="text-decoration: none; color:black">Share</a><i class="fa-solid fa-share" style="margin-left: 5px;"></i></li>
            <li class="btn btn-info"><a href="" style="text-decoration: none; color:black"><?php echo $row->phone_number?></a><i class="fa-solid fa-phone" style="margin-left: 5px;"></i></li>
            <li class="btn btn-info"><a href="" style="text-decoration: none; color:black"><?php echo $row->email?></a><i class="fa-solid fa-envelope"  style="margin-left: 5px;"></i>
          </ul>
          <!-- <h5 style="margin-left: 25px;"><span><b>PRICE:</b></span> XXXXXXXXX </h5> -->
        </div>
      </section>
      <h4 style="text-align: center;">Property Details</h4>
      <section class="pdtls1 pdtls2">
        <div style="margin-left: 70px;">
          <p><span><b>Address: </b></span><?php echo $row->property_address?> </p>
          <p><span><b>Type: </b></span><?php echo $row->property_type_name?></p>
          <p><span><b>Purpose: </b></span><?php echo $row->purpose_name?></p>
          <?php 
              $date = explode(" ",$row->action_date);
          ?>
          <p><span><b>Date Listed: </b></span><?php echo $date[0];?></p>
        </div>
        <div style="margin-left: 70px;">
          <p><span><b>Size: </b><?php echo $row->property_size?></span></p>
          <p><span><b>Beds: </b></span><?php echo $row->beds?></p>
          <p><span><b>Baths: </b></span><?php echo $row->baths?> </p>
          <p><span><b>Floor: </b></span><?php echo $row->level?></Span></p>
        </div>
      </section>
      <section class="pdtls3">
        <div style="margin-left: 40px;">
          <h6 style="font-size: 30px;">Amenities</h6>
          <div>
            <ul style="list-style: none; font-size: 20px;">
              <li><?php echo $row->amenities_name?></li>
              <li><?php echo $row->amenities_name?></li>
              <li><?php echo $row->amenities_name?></li>
              <li><?php echo $row->amenities_name?></li>
            </ul>
          </div>
        </div>
        <div style="margin-left: 40px;">
          <h6 style="font-size: 30px;">Floor Plan</h6>
          <img  class="pdtls3img" src="<?=base_url('public/images/floor-plan.png')?>" alt="">
        </div>
      </section>
      <?php } ?>
    </main>
      
    <!-- main -->
    <?= $this->endSection() ?>
   