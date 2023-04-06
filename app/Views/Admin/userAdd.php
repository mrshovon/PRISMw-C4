<?= $this->extend('layouts/masterAdmin') ?>
    <?= $this->section('content') ?>
    
    <div class="main-body col">
             
             <form>
            <fieldset>
              <legend>Add User</legend>
        
              <p>
                <label>Name: <input name="name" /></label>
              </p>
              <p>
                <label>Phone: <input type="text" name="phone" /></label>
              </p> 
                <label>Email:<input type="email" name="email" /></label>
              </p>
          
              <p>
                <label>
                      Password : <input type="password" name="password"/>  
                </label>
              </p>
        <p>
                <button class="btn btn-success" type="submit">Add</button>
              </p>
         
         
             </fieldset>
          </form>      
       </div>
    <?= $this->endSection() ?>