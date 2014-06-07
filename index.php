<?php include('header.php') ?>

	<div class="content">
    
    <div class="login">
      <form method="POST" action="game.php">

        <h3>Student Login</h3>

        <div class="formRow">
          <div class="formRow-label">
            <label for="email">Email</label>
          </div>
          <div class="formRow-input">
            <input id="email" type="text" />
          </div>
        </div>

        <div class="formRow">
          <div class="formRow-label">
            <label for="password">Password</label>
          </div>
          <div class="formRow-input">
            <input id="password" type="text" />
          </div>
        </div>

        <a href="#">Forgot Password</a>

        <div class="formRow">
          <input type="submit" />
        </div>

      </form>      

      <br><br>

      <form method="POST" action="manage.php">

        <h3>Professor Login</h3>

        <div class="formRow">
          <div class="formRow-label">
            <label for="email">Email</label>
          </div>
          <div class="formRow-input">
            <input id="email" type="text" />
          </div>
        </div>

        <div class="formRow">
          <div class="formRow-label">
            <label for="password">Password</label>
          </div>
          <div class="formRow-input">
            <input id="password" type="text" />
          </div>
        </div>

        <a href="#">Forgot Password</a>

        <div class="formRow">
          <input type="submit" />
        </div>
        
      </form>
    </div>

    <div class="signup">
      <form method="POST" action="manage.php">

        <h3>Create Account</h3>

        <div class="formRow">
          <div class="formRow-label">
            <label for="School">School</label>
          </div>
          <div class="formRow-input">
            <input id="School" type="text" />
          </div>
        </div>

        <div class="formRow">
          <div class="formRow-label">
            <label for="City">City</label>
          </div>
          <div class="formRow-input">
            <input id="City" type="text" />
          </div>
        </div>

        <div class="formRow">
          <div class="formRow-label">
            <label for="Province">Province</label>
          </div>
          <div class="formRow-input">
            <input id="Province" type="text" />
          </div>
        </div>

        <div class="formRow">
          <div class="formRow-label">
            <label for="Country">Country</label>
          </div>
          <div class="formRow-input">
            <input id="Country" type="text" />
          </div>
        </div>

        <br>

        <div class="formRow">
          <div class="formRow-label">
            <label for="Name">Name</label>
          </div>
          <div class="formRow-input">
            <input id="Name" type="text" />
          </div>
        </div>

        <div class="formRow">
          <div class="formRow-label">
            <label for="Email">Email</label>
          </div>
          <div class="formRow-input">
            <input id="Email" type="text" />
          </div>
        </div>

        <div class="formRow">
          <div class="formRow-label">
            <label for="Phone">Phone</label>
          </div>
          <div class="formRow-input">
            <input id="Phone" type="text" />
          </div>
        </div>

        <br>

        <div class="formRow">
          <div class="formRow-label">
            <label for="Password">Password</label>
          </div>
          <div class="formRow-input">
            <input id="Password" type="text" />
          </div>
        </div>

        <div class="formRow">
          <div class="formRow-label">
            <label for="Repeat Password">Repeat Password</label>
          </div>
          <div class="formRow-input">
            <input id="Repeat Password" type="text" />
          </div>
        </div>

        <div class="formRow">
          <input type="submit" />
        </div>        
        
      </form>
    </div>

  </div>

<?php include('footer.php') ?>