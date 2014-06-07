<?php include('header.php') ?>

  <div class="content">
    
    <div class="profile">

      <h1>User Profile</h1>
      
      <form method="POST">
        
        <div class="formRow">
          <div class="formRow-label"><label>Name</label></div>
          <div class="formRow-input"><input type="text" value="" /></div>
        </div>

        <div class="formRow">
          <div class="formRow-label"><label>Email</label></div>
          <div class="formRow-input"><input type="text" value="" /></div>
        </div>

        <br>

        <div class="formRow">
          <div class="formRow-label"><label>Password</label></div>
          <div class="formRow-input"><input type="text" value="" /></div>
        </div>

        <div class="formRow">
          <div class="formRow-label"><label>Repeat Password</label></div>
          <div class="formRow-input"><input type="text" value="" /></div>
        </div>

        <br>

        <input type="submit" />

      </form>

    </div>

  </div>

<?php include('footer.php') ?>