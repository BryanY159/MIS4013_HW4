<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $artist['ArtistID']; ?>">Edit</button>

<!-- Edit Modal -->
<div class="modal fade" id="editModal<?php echo $artist['ArtistID']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $artist['ArtistID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel<?php echo $artist['ArtistID']; ?>">Edit Artist</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="artistName<?php echo $artist['ArtistID']; ?>" class="form-label">Artist Name</label>
            <input type="text" class="form-control" id="artistName<?php echo $artist['ArtistID']; ?>" name="artistName" value="<?php echo $artist['Name']; ?>">
          </div>
          <div class="mb-3">
            <label for="artistGenre<?php echo $artist['ArtistID']; ?>" class="form-label">Artist Genre</label>
            <input type="text" class="form-control" id="artistGenre<?php echo $artist['ArtistID']; ?>" name="artistGenre" value="<?php echo $artist['Genre']; ?>">
          </div>
          <input type="hidden" name="artistID" value="<?php echo $artist['ArtistID']; ?>">
          <input type = "hidden" name = "actionType" value = "Edit">
          <button type="submit" class="btn btn-primary">Edit Artist</button>
        </form>
      </div>
    </div>
  </div>
</div>
