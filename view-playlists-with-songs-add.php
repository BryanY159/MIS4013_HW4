<?php $cleanedPlaylistName2 = str_replace(' ', '_', $playlist['PlaylistName']); ?>

<div>
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal<?php echo $cleanedPlaylistName2 ?>">Add</button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal<?php echo $cleanedPlaylistName2 ?>" tabindex="-1" aria-labelledby="addModalLabel<?php echo $cleanedPlaylistName2 ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addModalLabel<?php echo $cleanedPlaylistName2 ?>">Add Song</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="SongID" class="form-label">Song</label>
            <?php
              $songList = selectSongsForInput();
            ?>
            <select class="form-select" id="SongID" name="SongID">
              <?php while($song = $songList->fetch_assoc()) { ?>
                <option value="<?php echo $song['SongID']; ?>"><?php echo $song['Title']; ?></option>
              <?php } ?>
            </select>
          </div>
          <input type = "hidden" name = "UserID" value = "<?php echo $playlist['UserID']; ?>">
          <input type = "hidden" name = "PlaylistName" value = "<?php echo $playlist['PlaylistName']; ?>">
          <input type = "hidden" name = "actionType" value = "Add">
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>
