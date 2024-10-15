<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $playlist['PlaylistName']; ?>">Edit</button>

<!-- Edit Modal -->
<div class="modal fade" id="editModal<?php echo $playlist['PlaylistName']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $playlist['PlaylistName']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel<?php echo $playlist['PlaylistName']; ?>">Edit Playlist</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="NewPlaylistName<?php echo $playlist['PlaylistName']; ?>" class="form-label">Playlist Name</label>
            <input type="text" class="form-control" id="NewPlaylistName<?php echo $playlist['PlaylistName']; ?>" name="NewPlaylistName" value="<?php echo $playlist['PlaylistName']; ?>">
          </div>
          <input type="hidden" name="OldPlaylistName" value="<?php echo $playlist['PlaylistName']; ?>">
          <input type="hidden" name="UID" value="<?php echo $_POST['UID']; ?>">
          <input type = "hidden" name = "actionType" value = "Edit">
          <button type="submit" class="btn btn-primary">Edit Playlist</button>
        </form>
      </div>
    </div>
  </div>
</div>
