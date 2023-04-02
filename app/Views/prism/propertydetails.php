
    <?= $this->extend('layouts/masterAL') ?>
    <?= $this->section('content') ?>
    <main style="height: fit-content; margin-left: 10px;">
     <section class="pdtls1">
        <div style="margin-top: 10px;">
          <img src="<?=base_url('public/images/images.jpg')?>" alt=""> <br><br>
          <h3 style="font-size: 20px; text-align: center;">Property ID : <span>xxxxxxxx</span> </h3>
          <h3 style="font-size: 20px; text-align: center;">Property Price: <span>xxxxxxxx</span></h3>
        </div>
        <div style="margin-top: 30px;">
          <p><span><b>Description:</b></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque provident quaerat distinctio aut minus in amet soluta sit ex quis, maxime, dolore fugiat aliquid eveniet repellat! Sed blanditiis minima reprehenderit.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque provident quaerat distinctio aut minus in amet soluta sit ex quis, maxime, dolore fugiat aliquid eveniet repellat! Sed blanditiis minima reprehenderitLorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque provident quaerat distinctio aut minus in amet soluta sit ex quis, maxime, dolore fugiat aliquid eveniet repellat! Sed blanditiis minima reprehenderitLorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque provident quaerat distinctio aut minus in amet soluta sit ex quis, maxime, dolore fugiat aliquid eveniet repellat! Sed blanditiis minima reprehenderit.</p>
          <ul style="list-style: none; float:right; margin-right:25px;">
            <li class="btn btn-info"><a href="" style="text-decoration: none; color:black">Book a visit</a><i class="fa-regular fa-calendar-check" style="margin-left: 5px;"></i></li>
            <li class="btn btn-info"><a href="" style="text-decoration: none; color:black">favourite</a><i class="fa-solid fa-star" style="margin-left: 5px;"></i></li>
            <li class="btn btn-info"><a href="" style="text-decoration: none; color:black">Share</a><i class="fa-solid fa-share" style="margin-left: 5px;"></i></li>
            <li class="btn btn-info"><a href="" style="text-decoration: none; color:black">Call Us</a><i class="fa-solid fa-phone" style="margin-left: 5px;"></i></li>
            <li class="btn btn-info"><a href="" style="text-decoration: none; color:black">Email</a><i class="fa-solid fa-envelope"  style="margin-left: 5px;"></i>
          </ul>
          <!-- <h5 style="margin-left: 25px;"><span><b>PRICE:</b></span> XXXXXXXXX </h5> -->
        </div>
      </section>
      <h4 style="text-align: center;">Property Details</h4>
      <section class="pdtls1 pdtls2">
        <div style="margin-left: 70px;">
          <p><span><b>Address: </b></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          <p><span><b>Type: </b></span>Commercial</p>
          <p><span><b>Purpose: </b></span>Rent</p>
          <p><span><b>Date Listed: </b></span>20/03/23</p>
        </div>
        <div style="margin-left: 70px;">
          <p><span><b>Size: </b></span><span>xxxx</span>sqft</p>
          <p><span><b>Beds: </b></span>3</p>
          <p><span><b>Baths: </b></span>2 </p>
          <p><span><b>Floor: </b></span>N th floor</p>
        </div>
      </section>
      <section class="pdtls3">
        <div style="margin-left: 40px;">
          <h6 style="font-size: 30px;">Amenities</h6>
          <div>
            <ul style="list-style: none; font-size: 20px;">
              <li>Lift</li>
              <li>Lobby</li>
              <li>Balcony</li>
              <li>Power back-Up</li>
              <li>Intercom</li>
            </ul>
          </div>
        </div>
        <div style="margin-left: 40px;">
          <h6 style="font-size: 30px;">Floor Plan</h6>
          <img  class="pdtls3img" src="<?=base_url('public/images/floor-plan.png')?>" alt="">
        </div>
      </section>

    </main>
      
    <!-- main -->
    <?= $this->endSection() ?>
   