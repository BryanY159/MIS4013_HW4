<div style="margin-top:10px;">
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addPlaylistModal">Add Playlist</button>
</div>   

<!-- Add Modal -->
<div class="modal fade" id="addPlaylistModal" tabindex="-1" aria-labelledby="addPlaylistModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addModalLabel">New Playlist</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="PlaylistName" class="form-label">Playlist Name</label>
            <input type="text" class="form-control" id="PlaylistName" name="PlaylistName">
          </div>
          <div class="mb-3">
            <label for="SongID" class="form-label">Username</label>
            <?php
              $userList = selectUsersForInput();
            ?>
            <select class="form-select" id="UserID" name="UserID">
              <?php while($user = $userList->fetch_assoc()) { ?>
                <option value="<?php echo $user['UserID']; ?>"><?php echo $song['Username']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="SongID" class="form-label">First Song</label>
            <?php
              $songList = selectSongsForInput();
            ?>
            <select class="form-select" id="SongID" name="SongID">
              <?php while($song = $songList->fetch_assoc()) { ?>
                <option value="<?php echo $song['SongID']; ?>"><?php echo $song['Title']; ?></option>
              <?php } ?>
            </select>
          </div>
          <input type = "hidden" name = "actionType" value = "AddPlaylist">
          <button type="submit" class="btn btn-primary">Add Playlist</button>
        </form>
      </div>
    </div>
  </div>
</div>
