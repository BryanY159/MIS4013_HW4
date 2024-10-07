<div class = "row">
  <div class = "col">
    <h1>Artists</h1>
  </div>
  <div class = "col-auto">
    <?php
      include "view-artists-add.php";
    ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ArtistID</th>
        <th>Name</th>
        <th>Genre</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($artist = $artists->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $artist['ArtistID']; ?></td>
            <td><?php echo $artist['Name']; ?></td>
            <td><?php echo $artist['Genre']; ?></td>
            <td>
              <form method="post" action="">
                <input type="hidden" name="AID" value="<?php echo $artist['ArtistID']; ?>">
                <input type = "hidden" name = "actionType" value = "Edit">
                <button type="submit" class="btn btn-warning">Edit</button>
              </form>
            </td>
            <td>
              <form method="post" action="">
                <input type="hidden" name="ArtistID" value="<?php echo $artist['ArtistID']; ?>">
                <input type = "hidden" name = "actionType" value = "Delete">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
              </form>
            </td>
            <td><a href="songs-by-artist.php?id=<?php echo $artist['ArtistID']; ?>">Songs</a></td>
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
