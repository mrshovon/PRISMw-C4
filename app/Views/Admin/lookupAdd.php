<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
    <form>
            <fieldset>
              <legend>Add Look Up</legend>
        
        <p>
                <label>Look Up Name: <input type="text" name="lookupname" /></label>
              </p>
        <p>
                <label>Short Name: <input type="text" name="shortname" /></label>
              </p> 
        
                <label>Sort Order:<input type="text" name="sortorder" /></label>
              </p>
          
        <p><label>
                  Look type ID :
                  <input type="text" name="looktypeid" />
                </label>
              </p>
        <p>
                <button class="btn btn-success" type="submit">Add</button>
              </p>
         
         
             </fieldset>
          </form>  
       </div>
    <?= $this->endSection() ?>