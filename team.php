<?php include('header.php') ?>

  <div class="content">

    <div class="professorDashboard">

      <h1>Team Players - Team A</h1>


      <div class="addPlayer">
        <select name="players" id="players">
          <!-- This can be only players not already in a team -->
          <option value="user-2193">Joseph William</option>  
          <option value="user-2193">James William</option>  
          <option value="user-2193">Janice William</option>        
        </select>

        <button>Add Player</button>        
      </div>      

      <table>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th></th>
          </tr>
          <tr>
            <td>1</td>
            <td>Jane Smith</td>
            <td><a href="mailto:janesmith@gmail.com">janesmith@gmail.com</a></td>
            <td><button>Remove</button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jack Smith</td>
            <td><a href="mailto:jacksmith@gmail.com">jacksmith@gmail.com</a></td>
            <td><button>Remove</button></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Jennie Heper</td>
            <td><a href="mailto:jennieheper@gmail.com">jennieheper@gmail.com</a></td>
            <td><button>Remove</button></td>
          </tr>
        </table>

    </div>

  </div>

<?php include('footer.php') ?>