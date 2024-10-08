<div style="margin-top:10px;">
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addModalLabel">New Artist</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="ArtistName" class="form-label">Artist Name</label>
            <input type="text" class="form-control" id="ArtistName" name="ArtistName">
          </div>
          <div class="mb-3">
            <label for="ArtistGenre" class="form-label">Artist Genre</label>
            <input type="text" class="form-control" id="ArtistGenre" name="ArtistGenre">
          </div>
          <input type = "hidden" name = "actionType" value = "Add">
          <button type="submit" class="btn btn-primary">Add Artist</button>
        </form>
      </div>
    </div>
  </div>
</div>
