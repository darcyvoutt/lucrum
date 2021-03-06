<?php include('header.php') ?>

  <div class="content">

  <div class="professorDashboard">

    <h1>Current Games</h1>

      <a href="create_game.php">
        <!-- Hyperlink only for demonstration, remove when building structure -->
        <button>Create Game</button>
      </a>

      <table>
        <tr>
          <th>ID</th>
          <th>Game</th>
          <th>Teams</th>
          <th>Status</th>
          <th>Start</th>
          <th>End</th>
          <th></th>
        </tr>
        <tr>
          <td>1</td>
          <td><a href="dashboard.php">MK101</a></td>
          <td>Team A, Team B</td>
          <td>Active</td>
          <td>May 12, 2013</td>
          <td>Jun 20, 2015</td>
          <td><button>End Game</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td><a href="dashboard.php">GB203</a></td>
          <td>Team A, Team C</td>
          <td>Scheduled</td>
          <td>Jan 20, 2015</td>
          <td>Jun 20, 2015</td>
          <td></td>
        </tr>
        <tr>
          <td>3</td>
          <td><a href="dashboard.php">SM404</a></td>
          <td>Team B, Team C</td>
          <td>Draft</td>
          <td>Jan 20, 2015</td>
          <td>Jun 20, 2015</td>
          <td></td>
        </tr>
      </table>


    <h1>Teams</h1>

      <a href="create_team.php">
        <!-- Hyperlink only for demonstration, remove when building structure -->
        <button>Create Team</button>
      </a>

      <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th></th>
        </tr>
        <tr>
          <td>1</td>
          <td><a href="team.php">Team A</a></td>
          <td><button>Delete</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td><a href="team.php">Team B</a></td>
          <td><button>Delete</button></td>
        </tr>
        <tr>
          <td>3</td>
          <td><a href="team.php">Team C</a></td>
          <td><button>Delete</button></td>
        </tr>
      </table>


    <h1>Players</h1>

      <a href="create_player.php">
        <!-- Hyperlink only for demonstration, remove when building structure -->
        <button>Create Player</button>
      </a>

      <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Status</th>
          <th></th>
          <th></th>
        </tr>
        <tr>
          <td>1</td>
          <td>Jane Smith</td>
          <td><a href="mailto:janesmith@gmail.com">janesmith@gmail.com</a></td>
          <td>Active</td>
          <td></td>
          <td><button>Delete</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jack Smith</td>
          <td><a href="mailto:jacksmith@gmail.com">jacksmith@gmail.com</a></td>
          <td>Inactive</td>
          <td><button>Pay</button></td>
          <td><button>Delete</button></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Jennie Heper</td>
          <td><a href="mailto:jennieheper@gmail.com">jennieheper@gmail.com</a></td>
          <td>Active</td>
          <td></td>
          <td><button>Delete</button></td>
        </tr>
      </table>

    </div>

  </div>

<?php include('footer.php') ?>