
    <?= $this->extend('layouts/masterAL') ?>
    <?= $this->section('content') ?>
    <main style="height: fit-content; margin-left: 10px; margin-top:10%">
    <?php foreach($propertylist as $index => $row) { ?> 
    <section class="">
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single"><?php echo $row->property_address?></h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ Intro Single End /-->

      <!--/ Property Single Star /-->
      <section class="property-single nav-arrow-b">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                <div class="carousel-item-b">
                  <img src="<?=base_url('public/img/slide-2.jpg')?>" alt="">
                </div>
                <div class="carousel-item-b">
                  <img src="<?=base_url('public/img/slide-3.jpg')?>" alt="">
                </div>
                <div class="carousel-item-b">
                  <img src="<?=base_url('public/img/slide-1.jpg')?>" alt="">
                </div>
              </div>
              <div class="row justify-content-between">
                <div class="col-md-5 col-lg-4">
                  <div class="property-price d-flex justify-content-center foo">
                    <div class="card-header-c d-flex">
                      <div class="card-box-ico">
                        <span class="ion-money">Tk</span>
                      </div>
                      <div class="card-title-c align-self-center">
                        <h5 class="title-c"><?php echo $row->price?></h5>
                      </div>
                    </div>
                  </div>
                  <div class="property-summary">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="title-box-d section-t4">
                          <h3 class="title-d">Quick Summary</h3>
                        </div>
                      </div>
                    </div>
                    <div class="summary-list">
                      <ul class="list">
                        <li class="d-flex justify-content-between">
                          <strong>Property ID:</strong>
                          <span><?php echo $row->property_id?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Location:</strong>
                          <span><?php echo $row->city?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Area:</strong>
                          <span><?php echo $row->property_area?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Property Type:</strong>
                          <span><?php echo $row->property_type_name?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Purpose:</strong>
                          <span><?php echo $row->purpose_name?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Size:</strong>
                          <span><?php echo $row->property_size?> Sqft</span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Beds:</strong>
                          <span><?php echo $row->beds?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Baths:</strong>
                          <span><?php echo $row->baths?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Level:</strong>
                          <span><?php echo $row->level?></span>
                        </li>                        
                        <li class="d-flex justify-content-between">
                          <strong>Occupied:</strong>
                          <span><?php echo ($row->is_occupied == true ? 'Yes' : 'No');?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 col-lg-7 section-md-t3">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d">
                        <h3 class="title-d">Property Description</h3>
                      </div>
                    </div>
                  </div>
                  <div class="property-description">
                    <p class="description color-text-a"><?php echo $row->description?></p>
                    <ul class="" style="list-style: none; float:right; margin-right:25px;">
                      <li class="btn btn-info" style="margin-top: 2px;"><a href="" style="text-decoration: none; color:black;" data-toggle="modal" data-target="#exampleModalCenter" >Book a visit</a><i class="fa-regular fa-calendar-check" style="margin-left: 5px;"></i></li>
                      <li class="btn btn-info" style="margin-top: 2px;"><a href="" style="text-decoration: none; color:black;">favourite</a><i class="fa-solid fa-star" style="margin-left: 5px;"></i></li>
                      <li class="btn btn-info" style="margin-top: 2px;"><a href="" style="text-decoration: none; color:black;" data-toggle="modal" data-target="#exampleModalCenter2">Share</a><i class="fa-solid fa-share" style="margin-left: 5px;"></i></li>
                      <li class="btn btn-info" style="margin-top: 2px;"><a href="" style="text-decoration: none; color:black;"><?php echo $row->phone_number?></a><i class="fa-solid fa-phone" style="margin-left: 5px;"></i></li>
                      <li class="btn btn-info" style="margin-top: 2px;"><a href="" style="text-decoration: none; color:black;"><?php echo $row->email?></a><i class="fa-solid fa-envelope"  style="margin-left: 5px;"></i>
                    </ul>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Book Visit</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                              <input type="hidden" name="property_id" value="<?php $row->property_id ?>"/>
                              <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-account material-icons-name"></i>Email: </label>
                                    <input type="text" name="email" id="email"  class="form-control" value="" />
                                </div>
                                <div class="form-group">
                                    <label for="start_time"><i class="zmdi zmdi-account material-icons-name"></i>Start Time: </label>
                                    <input type="datetime-local" name="start_time" id="start_time"  class="form-control" value="" />
                                </div>
                                <div class="form-group">
                                    <label for="end_time"><i class="zmdi zmdi-account material-icons-name"></i>End Time: </label>
                                    <input type="datetime-local" name="end_time" id="end_time"  class="form-control" value="" />
                                </div>
                                <div class="modal-footer">
                                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                  <button type="submit" class="btn btn-primary">Book Visit</button>
                                </div>
                            </form>      
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal End -->
                  <!-- Modal 2 -->
                  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Share</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="icon-container1 d-flex">
                              <div class="smd" style="padding:15px;">
                                  <i class=" img-thumbnail fab fa-twitter fa-2x"style="color:#4c6ef5;background-color: aliceblue"></i>
                                   <a href=""><p>Twitter</p></a>                              </div>
                              <div class="smd" style="padding:15px;">
                                  <i class="img-thumbnail fab fa-facebook fa-2x"style="color: #3b5998;background-color: #eceff5;"></i>
                                   <a href=""><p>Facebook</p></a>
                              </div>
                              <div class="smd" style="padding:15px;">
                                  <i class="img-thumbnail fab fa-reddit-alien fa-2x"style="color: #FF5700;background-color: #fdd9ce;"></i>
                                   <a href=""><p>Reddit</p></a>                             </div>
                              <div class="smd" style="padding:15px;">
                                  <i class="img-thumbnail fab fa-discord fa-2x"style="color: #738ADB;background-color: #d8d8d8;"></i>
                                   <a href=""><p>Discord</p></a>                              </div>
                          </div>
                          <div class="icon-container2 d-flex">
                              <div class="smd" style="padding:15px;">
                                  <i class="img-thumbnail fab fa-whatsapp fa-2x"style="color:  #25D366;background-color: #cef5dc;"></i>
                                  <a href=""><p>Whatsapp</p></a>                              
                                </div>
                              <div class="smd" style="padding:15px;">
                                  <i class="img-thumbnail fab fa-facebook-messenger fa-2x"style="color: #3b5998;background-color: #eceff5;"></i>
                                  <a href=""><p>Messenger</p></a>
                              </div>
                              <div class="smd" style="padding:15px;">
                                  <i class="img-thumbnail fab fa-telegram fa-2x"style="color:  #4c6ef5;background-color: aliceblue"></i>
                                  <a href=""><p>Telegram</p></a>                              
                                </div>
                              <div class="smd" style="padding:15px;">
                                  <i class="img-thumbnail fab fa-weixin fa-2x"style="color: #7bb32e;background-color: #daf1bc;"></i>
                                  <a href=""><p>WeChat</p></a>                            
                                </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal 2 End -->
                  <div class="row section-t3">
                    <div class="col-sm-12">
                      <div class="title-box-d">
                        <h3 class="title-d">Amenities</h3>
                      </div>
                    </div>
                  </div>
                  <div class="amenities-list color-text-a">
                    <ul class="list-a no-margin">
                      <li>Balcony</li>
                      <li>Outdoor Kitchen</li>
                      <li>Cable Tv</li>
                      <li>Deck</li>
                      <li>Tennis Courts</li>
                      <li>Internet</li>
                      <li>Parking</li>
                      <li>Sun Room</li>
                      <li>Concrete Flooring</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-10 offset-md-1">
              <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
                    aria-controls="pills-video" aria-selected="true">Floor Plan</a>
                </li>
                
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                  <iframe src="<?= base_url().$row->floor_plan?>" width="100%" height="460" frameborder="0"
                    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
      <?php } ?>
    </main>
      
    <!-- main -->
    <?= $this->endSection() ?>
   