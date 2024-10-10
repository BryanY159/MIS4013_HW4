<div class = "row">
  <div class = "col">
    <h1>Users</h1>
  </div>
  <div class = "col-auto">
    <?php
      include "view-users-add.php";
    ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>UserID</th>
        <th>Username</th>
        <th>Subscription Type</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($user = $users->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $user['UserID']; ?></td>
            <td><?php echo $user['Username']; ?></td>
            <td><?php echo $user['SubscriptionType']; ?></td>
            <td>
              <form method="post" action="">
                <input type="hidden" name="UserID" value="<?php echo $user['UserID']; ?>">
                <input type = "hidden" name = "actionType" value = "Delete">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
              </form>
            </td>
            <td>
              <form method="post" action="playlists-by-user.php">
                <input type="hidden" name="UID" value="<?php echo $user['UserID']; ?>">
                <button type="submit" class="btn btn-primary">Playlists</button>
              </form>
            </td>
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
