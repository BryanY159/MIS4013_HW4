<div class = "row">
  <div class = "col">
    <h1>Songs by Artist</h1>
  </div>
  <div class = "col-auto">
    <?php
      include "view-songs-by-artist-add.php";
    ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Artist Name</th>
        <th>SongID</th>
        <th>Title</th>
        <th>Genre</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($song = $songs->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $song['Name']; ?></td>
            <td><?php echo $song['SongID']; ?></td>
            <td><?php echo $song['Title']; ?></td>
            <td><?php echo $song['Genre']; ?></td>
            <td>
              Button Later
            </td>
            <td>
              <form method="post" action="">
                <input type="hidden" name="SongID" value="<?php echo $song['SongID']; ?>">
                <input type = "hidden" name = "actionType" value = "Delete">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
              </form>
            </td>
          </tr>
          <?php
        }
      ?>
    </tbody>
  </table>
</div>
