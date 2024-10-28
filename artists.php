<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertArtist($_POST['ArtistName'], $_POST['ArtistGenre'])) {
        $toastMessage = "Artist Added Successfully";
      } else {
        $toastMessage = "Error: Artist Not Added";
        $toastType = "error";
      }
      break;
    case "Edit":
      if (updateArtist($_POST['artistName'], $_POST['artistGenre'], $_POST['artistID'])) {
        $toastMessage = "Artist Edited Successfully";
      } else {
        $toastMessage = "Error: Artist Not Edited";
        $toastType = "error";
      }
      break;
    case "Delete":
      if (deleteArtist($_POST['ArtistID'])) {
        $toastMessage = "Artist Deleted Successfully";
      } else {
        $toastMessage = "Error: Artist Not Deleted";
        $toastType = "error";
      }
      break;
  }
}

$artists = selectArtists();

include "view-artists.php";
include "view-footer.php";
?>

<script>
  const toastMessage = "<?php echo $toastMessage; ?>";
  const toastType = "<?php echo $toastType; ?>";

  if (toastMessage) {
    Toastify({
      text: toastMessage,
      duration: 3000,
      gravity: "top",  // Position of the toast
      position: "right", // Right side of the screen
      style: {
        background: toastType === "success" ? "green" : "red",
      }
    }).showToast();
  }
</script>
