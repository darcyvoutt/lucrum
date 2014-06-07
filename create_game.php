<?php include('header.php') ?>

  <div class="content">

    <div class="createGame">
    
      <h1>Create Game</h1>

      <form method="POST" action="manage.php">
        
        <div class="formRow">
          <div class="formRow-label"><label>Game Name</label></div>
          <div class="formRow-input"><input type="text" placeholder="eg. Marketing 101" /></div>
        </div>

        <h3>Select Teams</h3>

        <ul>
          <li><input type="checkbox" value="1">Team A</li>
          <li><input type="checkbox" value="2">Team B</li>
          <li><input type="checkbox" value="3">Team C</li>
        </ul>    

        <h3>Schedule</h3>

        <div class="formRow">
          <div class="formRow-label"><label>Start Date</label></div>
          <div class="formRow-input"><input type="date" /></div>
        </div>

        <div class="formRow">
          <div class="formRow-label"><label>First Round Close</label></div>
          <div class="formRow-input"><input type="date" /></div>
        </div>

        <div class="formRow">
          <div class="formRow-label"><label>Number of Weeks</label></div>
          <div class="formRow-input"><input type="number" /></div>          
        </div>

        <p class="note">Note: This is number of weeks from first round close.</p>

        <input type="submit" value="Create Game"/>

      </form>

    </div>

  </div>

<?php include('footer.php') ?>