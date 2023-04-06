<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
             
             <form>
            <fieldset>
              <legend>Add Job</legend>
        
        <p>
                <label>Job Title: <input name="jobtitle" /></label>
              </p>
        <p>
                <label>Phone: <input type="text" name="phone" /></label>
              </p> 
        
                <label>Email:<input type="email" name="email" /></label>
              </p>
          
        <p><label>
                  Job description :
                  <br />
                  <textarea name="jobdescription" cols="30" rows="3"></textarea>
                </label>
              </p>
        <p>
                <button class="btn btn-success" type="submit">Add</button>
              </p>
         
         
             </fieldset>
          </form>
       </div>
    <?= $this->endSection() ?>