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
              <?php
                include "view-artists-edit.php";
              ?>
            </td>
            <td>
              <form method="post" action="">
                <input type="hidden" name="ArtistID" value="<?php echo $artist['ArtistID']; ?>">
                <input type = "hidden" name = "actionType" value = "Delete">
                <button type="submit" class="btn btn-danger" onclick="showSweetAlert(this.form)">Delete</button>
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

<script>
  <script>
  function showSweetAlert(form) {
    Swal.fire({
      title: 'Wait!',
      text: 'Are you sure you want to delete this artist?',
      icon: 'warning',
      showCancelButton: true,  // This adds a "Cancel" button
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, keep it'
    }).then((result) => {
      if (result.isConfirmed) {
        form.submit();  // Submit the form if the user confirms
      }
    });
  }
</script>
