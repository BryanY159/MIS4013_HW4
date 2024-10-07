<h1>Playlists by User</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Playlist Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($playlist = $playlists->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $playlist['Username']; ?></td>
            <td><?php echo $playlist['PlaylistName']; ?></td>
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
