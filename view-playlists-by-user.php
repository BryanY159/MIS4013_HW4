<div class = "row">
    <div class = "col">
        <h1>Playlists by User</h1>
    </div>
   <div class = "col-auto">
       <?php
            include "view-playlists-by-user-add.php";
        ?>
    </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Playlist Name</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($playlist = $playlists->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $playlist['Username']; ?></td>
            <td><?php echo $playlist['PlaylistName']; ?></td>
            <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $playlist['PlaylistName']; ?>">Edit</button></td>
            <td><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button></td>
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
