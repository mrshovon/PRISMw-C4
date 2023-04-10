<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
    <form>
        <fieldset>
          <legend>Company Profile</legend>
          
          <p>
            <label>Company Name: <input type="text" name="cname" /></label>
          </p>
          <p>
            <label>Company Vison: <br />
            <textarea name="vision" cols="100" rows="10"></textarea></label>
          </p>
          <p>
            <label>Company Address: <input type="text" name="caddress" /></label>
          </p>
          <p>
            <label>Company Email: <input type="text" name="cemail" /></label>
          </p>
          <p>
            <label>Privecy Policy: <input type="file" name="privecy" /></label>
          </p>
          <p>
            <label>Terms and Conditions: <input type="file" name="termncon" /></label>
          </p>
          
          <p>
            <button class="btn btn-success" type="submit">Add</button>
          </p>       
        </fieldset>
      </form>   
       </div>
    <?= $this->endSection() ?>