<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
    <form>
        <fieldset>
          <legend>Add Property</legend>
          
          <p>
            <label>Name: <input type="text" name="name" /></label>
          </p>
          <p>
            <label> Description: <br />
            <textarea name="jobdescription" cols="30" rows="3"></textarea>
          </p>
          <p>
            <label>City: <input type="text" name="city" /></label>
          </p>
          <p>
            <label>Size: <input type="text" name="size" /></label>
          </p>
          <p>
            <label>Property_status: <input type="text" name="pstatus" /></label>
          </p>
          <p>
            <label>Beds: <input type="text" name="bed" /></label>
          </p>
          <p>
            <label>Baths: <input type="text" name="bath" /></label>
          </p>
          <p>
            <label>Price: <input type="text" name="price" /></label>
          </p>
          <p>
            <label>Is Ocuupied: <input type="text" name="occupied" /></label>
          </p>
          <p>
            <label>Floor_plan: <input type="file" name="floorplan" /></label>
          </p>
          <p>
            <label>Phone: <input type="text" name="phone" /></label>
          </p>
          <p>
            <label>Address: <input type="text" name="address" /></label>
          </p>
          <p>
            <label>Level: <input type="text" name="level" /></label>
          </p>
          <p>
            <label>E-mail: <input type="text" name="email" /></label>
          </p>
          <p>
            <button class="btn btn-success" type="submit">Add</button>
          </p>       
        </fieldset>
      </form>       
       </div>
    <?= $this->endSection() ?>