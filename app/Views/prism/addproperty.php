<?= $this->extend('layouts/masterAL') ?>
    <?= $this->section('content') ?>
    <main style="height: 100vh;">
      <div class="container contact-form">
        <!-- <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
        </div> -->
        <form method="post">
            <h3>List Your Property</h3>
           <div class="row">
                <div class="col-md-6">
                    <div class="form-group frm">
                        <input type="text" name="txtName" class="form-control" placeholder="Property Name *" value="" />
                    </div>
                    <div class="form-group frm">
                        <input type="text" name="txtEmail" class="form-control" placeholder="City *" value="" />
                    </div>
                    <div class="form-group frm">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Property Size *" value="" />
                    </div>
                    <div class="form-group frm">
                      <input type="text" name="txtPhone" class="form-control" placeholder="Property area *" value="" />
                    </div>
                    <div class="form-group frm">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Beds *" value="" />
                    </div>
                    <div class="form-group frm">
                      <input type="text" name="txtPhone" class="form-control" placeholder="Baths *" value="" />
                    </div>
                    <div class="form-group frm">
                      <input type="text" name="txtPhone" class="form-control" placeholder="Price *" value="" />
                    </div>
                    <div class="form-group frm">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                    </div>
                    <div class="form-group frm">
                      <input type="text" name="txtPhone" class="form-control" placeholder="Address *" value="" />
                    </div>
                    <div class="form-group frm">
                      <input type="text" name="txtPhone" class="form-control" placeholder="Level *" value="" />
                    </div>
                    <div class="form-group frm">
                      <input type="text" name="txtPhone" class="form-control" placeholder="Email *" value="" />
                    </div>
                   
                    <div class="form-group frm">
                        <input type="submit" name="btnSubmit" class="btnContact" value="List This Property" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Description *" style="width: 100%; height: 150px;"></textarea>
                    </div> <br>
                    <div class="form-group frm">
                      <label for="renovate">Purpose:   </label>
                      <select class="btn btn-warning" name="renovate" id="renovate">
                        <option value="service 1">Buy</option>
                        <option value="service 2">Sell</option>
                        <option value="service 3">Rent</option>
                      </select>
                    </div> <br>
                    <div class="form-group frm">
                      <label for="renovate">Property Type:   </label>
                      <select class="btn btn-warning" name="renovate" id="renovate">
                        <option value="service 1">Type 1</option>
                        <option value="service 2">Type 2</option>
                        <option value="service 3">type 3</option>
                      </select>
                    </div> <br>
                    <h6>Ammenities available:</h6>
                    <div class="form-group frm amm" style="display: inline-flex;">
                      <input type="checkbox" id="occupied" name="occupied" value="occupied">
                      <label for="occupied"> Ammenities 1</label>
                      <input type="checkbox" id="occupied" name="occupied" value="occupied">
                      <label for="occupied">Ammenities 2</label>
                      <input type="checkbox" id="occupied" name="occupied" value="occupied">
                      <label for="occupied">Ammenities 3</label>
                    </div>
                    <div>
                      <input type="checkbox" id="occupied" name="occupied" value="occupied">
                      <label for="occupied">Check if Occupied</label>
                    </div>
                    <div>
                      <label for="floorplan">Upload Your Property Floor plan</label>
                      <input type="file" name="floorplan" id="floorplan">
                    </div>
                </div>
            </div>
        </form>
      </div>
    </main>
    <?= $this->endSection() ?>