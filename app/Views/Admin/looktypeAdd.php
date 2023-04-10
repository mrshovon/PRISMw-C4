<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
      <form>
        <fieldset>
          <legend>Add Look Type</legend>
          
          <p>
            <label>Look Up Name: <input type="text" name="lookupname" /></label>
          </p>
          
          <p>
            <button class="btn btn-success" type="submit">Add</button>
          </p>       
        </fieldset>
      </form>   
    </div>
    <?= $this->endSection() ?>