<?php include('header.php') ?>

  <div class="content">

    <h1>Create Player</h1>
      
    <form method="POST" action="manage.php">
      
      <div class="formRow">
        <div class="formRow-label"><label>Name</label></div>
        <div class="formRow-input"><input type="text" placeholder="Full Name"/></div>
      </div>

      <div class="formRow">
        <div class="formRow-label"><label>Email</label></div>
        <div class="formRow-input"><input type="text" placeholder="Email Address" /></div>
      </div>

      <input type="submit" />

    </form>

  </div>

<?php include('footer.php') ?>