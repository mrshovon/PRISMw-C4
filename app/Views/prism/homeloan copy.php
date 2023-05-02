    <!-- main -->
    <?= $this->extend('layouts/masterAL') ?>
    <?= $this->section('content') ?>
    <section style="height: 1100px; display: flex; margin-top:6%;" class="main">
          <div class="">
            <div class="zoom-box">
                <img style="margin-left: 100px; margin-top: 100px;" src="<?=base_url('public/images/hlimg.png')?>" alt="">
            </div>
          </div>
          <form action="<?=base_url('public/user/HomeAL/reqhomeloan')?>" method="post" style="margin-top: 100px; width: 500px; margin-left: 100px; box-sizing: border-box;">
              <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
              <?php endif;?>
              <h3>Request a Loan</h3> <br>
              <div class="">
                    <div class="">
                      <div class="form-group frm">
                        <label for="phone">Phone Number:   </label>
                        <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div> <br>
                      <div class="form-group frm">
                        <label for="property_id">Property ID:   </label>
                        <input type="text" name="property_id" class="form-control" placeholder="Your Property ID *" value="" />
                        </div> <br>
                        <div class="form-group frm">
                            <input  type="submit" name="btnSubmit" class="btn btn-success" value="Request" />
                        </div> <br>
                  </div>
                </div>
                <!-- <div class="crosschk" style="display: inline-flex;">
                  <div>
                    <img src="<?=base_url('public/images/images.jpg')?>" style="height:100px; width: 100px; margin-right: 3px;" alt="">
                  </div>
                  <div >
                    <h5><b>Property ID:</b> <Span>XXXXXXXXXX</Span> </h5>
                    <p><span><b>Description: </b></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea architecto eligendi sit esse accusantium, inventore deleniti id, repellendus aliquam animi enim nulla porro recusandae ut eum magni natus reiciendis repellat.
                    Deserunt est vel explicabo iste consequatur, voluptatem facere temporibus blanditiis sequi quam saepe culpa molestiae corrupti cupiditate quis earum pariatur quaerat eius magni molestias delectus tempora? Asperiores rem quidem expedita.</p>
                  </div>
                </div> -->
            </form>
    </section>
    <?= $this->endSection() ?>
  <!-- main -->
    