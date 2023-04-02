
    <!-- main -->
    <?= $this->extend('layouts/master') ?>
    <?= $this->section('content') ?>
    <section style="height: 700px; display: flex;" class="main">
      <div class="">
        <div>
            <img style="margin-left: 100px; margin-top: 35px; width: 600px;" src="<?=base_url('public/images/hrs.jpg')?>" alt="">
        </div>
      </div>
        <form method="post" style="margin-top: 100px; width: 300px; margin-left: 100px; box-sizing: border-box;">
           <h3>Request for renovation</h3>
           <div class="">
                <div class="">
                    <div class="form-group frm">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Property ID *" value="" />
                    </div>
                    <div class="form-group frm">
                      <label for="renovate">Renovation services:</label>
                      <select class="btn btn-warning" name="renovate" id="renovate">
                        <option value="service 1">Service 1</option>
                        <option value="service 2">Service 2</option>
                        <option value="service 3">Service 3</option>
                        <option value="service 4">Service 4</option>
                        <option value="service 5">Service 5</option>
                        <option value="service 6">Service 6</option>
                        <option value="service 7">Service 7</option>
                        <option value="service 8">Service 8</option>
                      </select>
                    </div>
                    <div class="form-group frm">
                        <input  type="submit" name="btnSubmit" class="btn btn-success" value="Request for service" />
                    </div>
                </div>
            </div>
            <div class="crosschk" style="display: inline-flex;">
              <div>
                <img src="<?=base_url('public/images/images.jpg')?>" style="height:100px; width: 100px; margin-right: 3px;" alt="">
              </div>
              <div >
                <h5><b>Property ID:</b> <Span>XXXXXXXXXX</Span> </h5>
                <p><span><b>Description: </b></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea architecto eligendi sit esse accusantium, inventore deleniti id, repellendus aliquam animi enim nulla porro recusandae ut eum magni natus reiciendis repellat.
                Deserunt est vel explicabo iste consequatur, voluptatem facere temporibus blanditiis sequi quam saepe culpa molestiae corrupti cupiditate quis earum pariatur quaerat eius magni molestias delectus tempora? Asperiores rem quidem expedita.</p>
              </div>
            </div>
        </form>
      </section>   
    <?= $this->endSection() ?>
    <!-- main -->
    