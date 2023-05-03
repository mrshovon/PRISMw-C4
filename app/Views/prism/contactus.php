    <!-- main -->
    <?= $this->extend('layouts/master') ?>
    <?= $this->section('content') ?>
    <<!--/ Intro Single star /-->
  <section class="intro-single"  style="margin-top:92px">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Contact US</h1>
            <span class="color-text-a">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic neque nulla dolore quam, obcaecati, ea maxime sed blanditiis ratione dicta ipsam veniam quidem! Odio adipisci, aut asperiores sapiente suscipit consequuntur!.</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
            <form action="<?=base_url('public/Home/sendmessage')?>" method="post">
            <input type="hidden" name="actiontype" value="<?= isset($item) ? 'update' : 'insert' ?>"/>
            <input type="hidden" name="careerid" value="<?= isset($item) ? $item->career_id : '' ?>"/>
            <fieldset>
              <!-- <legend><?= isset($item) ? 'Edit' : 'Add' ?> Job</legend> -->
              <div class="form-group">
                  <!-- <label for="job_title"><i class="zmdi zmdi-account material-icons-name"></i>Job Title: </label> -->
                  <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="<?= isset($item) ? $item->job_title : '' ?>" />
              </div>
              <div class="form-group">
                  <!-- <label for="phone"><i class="zmdi zmdi-account material-icons-name"></i>Phone: </label> -->
                  <input type="text" name="phone" id="phone" placeholder="Phone" class="form-control" value="<?= isset($item) ? $item->phone : '' ?>" />
              </div>
              <div class="form-group">
                  <!-- <label for="email"><i class="zmdi zmdi-account material-icons-name"></i>Email: </label> -->
                  <input type="text" name="Address" id="Address" placeholder="Address" class="form-control" value="<?= isset($item) ? $item->email : '' ?>" />
              </div>
              <div class="form-group">
                  <!-- <label for="job_description"><i class="zmdi zmdi-account material-icons-name"></i>Job Description: </label> -->
                  <textarea name="message" cols="30" rows="3" class="form-control" value="" ><?= isset($item) ? $item->job_description : '' ?></textarea>
                  <!-- <input type="text" name="password" id="password" placeholder="password" class="form-control" value="" /> -->
              </div>
              <div class="form-group form-button">
                  <button type="submit" id="signup" class="btn btn-success" style="margin-top:2%;">Save</button> 
              </div>
             </fieldset>
          </form>      
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a"><?= $footer->company_email ?></span>
                    </p>
                    <p class="mb-1">Phone.
                      <span class="color-a">+54 356 945234</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Find us in</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1"><?= $footer->company_address ?></p>
                  </div>
                </div>
              </div>
              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="ion-ios-redo"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Social networks</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->
<?= $this->endSection() ?>
    <!-- main -->
    