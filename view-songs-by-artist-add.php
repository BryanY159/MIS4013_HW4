<div style="margin-top:10px;">
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addModalLabel">New Song</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="SongTitle" class="form-label">Song Title</label>
            <input type="text" class="form-control" id="SongTitle" name="SongTitle">
          </div>
          <div class="mb-3">
            <label for="SongGenre" class="form-label">Song Genre</label>
            <input type="text" class="form-control" id="SongGenre" name="SongGenre">
          </div>
          <input type="hidden" name="ArtistID" value=26>
          <input type = "hidden" name = "actionType" value = "Add">
          <button type="submit" class="btn btn-primary">Add Song</button>
        </form>
      </div>
    </div>
  </div>
</div>
