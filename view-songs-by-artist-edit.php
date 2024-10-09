<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $song['SongID']; ?>">Edit</button>

<!-- Edit Modal -->
<div class="modal fade" id="editModal<?php echo song['SongID']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo song['SongID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel<?php echo song['SongID']; ?>">Edit Song</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="SongTitle<?php echo $song['SongID']; ?>" class="form-label">Song Name</label>
            <input type="text" class="form-control" id="SongTitle<?php echo $song['SongID']; ?>" name="SongTitle" value="<?php echo $song['Title']; ?>">
          </div>
          <div class="mb-3">
            <label for="SongGenre<?php echo $song['SongID']; ?>" class="form-label">Song Genre</label>
            <input type="text" class="form-control" id="SongGenre<?php echo $song['SongID']; ?>" name="SongGenre" value="<?php echo $song['Genre']; ?>">
          </div>
          <input type="hidden" name="SongID" value="<?php echo $song['SongID']; ?>">
          <input type = "hidden" name = "actionType" value = "Edit">
          <button type="submit" class="btn btn-primary">Edit Song</button>
        </form>
      </div>
    </div>
  </div>
</div>
