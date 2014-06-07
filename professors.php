<?php include('header.php') ?>

  <div class="content">

  <div class="professorDashboard">

    <h1>Current Games</h1>

      <table>
        <tr>
          <th>ID</th>
          <th>Game</th>
          <th>Teams</th>
          <th>Status</th>
          <th>Start</th>
          <th>End</th>
        </tr>
        <tr>
          <td>1</td>
          <td>MK101</td>
          <td>Team A, Team B</td>
          <td>Active</td>
          <td>May 12, 2013</td>
          <td>Jun 20, 2015</td>
        </tr>
        <tr>
          <td>2</td>
          <td>GB203</td>
          <td>Team A, Team C</td>
          <td>Scheduled</td>
          <td>Jan 20, 2015</td>
          <td>Jun 20, 2015</td>
        </tr>
        <tr>
          <td>3</td>
          <td>SM404</td>
          <td>Team B, Team C</td>
          <td>Draft</td>
          <td>Jan 20, 2015</td>
          <td>Jun 20, 2015</td>
        </tr>
      </table>


    <h1>Teams</h1>

      <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th></th>
        </tr>
        <tr>
          <td>1</td>
          <td>Team A</td>
          <td><button>Delete</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Team B</td>
          <td><button>Delete</button></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Team C</td>
          <td><button>Delete</button></td>
        </tr>
      </table>


    <h1>Players</h1>

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
          <td>janesmith@gmail.com</td>
          <td>Active</td>
          <td></td>
          <td><button>Delete</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jack Smith</td>
          <td>jacksmith@gmail.com</td>
          <td>Inactive</td>
          <td><button>Pay</button></td>
          <td><button>Delete</button></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Jennie Heper</td>
          <td>jennieheper@gmail.com</td>
          <td>Active</td>
          <td></td>
          <td><button>Delete</button></td>
        </tr>
      </table>

    </div>

  </div>

<?php include('footer.php') ?>