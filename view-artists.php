<div class = "row">
  <div class = "col">
    <h1>Artists</h1>
    <button type="button" class="btn btn-primary" id="tutorial-button" onclick="startIntro()">Start Tutorial</button>
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
                <button type="submit" class="btn btn-danger deleteButton" id="delete-button-<?php echo $artist['ArtistID']; ?>">Delete</button>
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
  document.querySelectorAll('.deleteButton').forEach(button => {
  button.addEventListener('click', function(event) {
      event.preventDefault();

      Swal.fire({
        title: 'Wait!',
        text: 'Are you sure you want to delete this artist?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, keep it'
      }).then((result) => {
        if (result.isConfirmed) {
          button.closest('form').submit();
        }
      });
    });
  });
</script>
</script>
