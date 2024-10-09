<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertArtist($_POST['ArtistName'], $_POST['ArtistGenre'])) {
        echo '<div class="alert alert-success" role="alert"> Artist Added Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Artist Not Added </div>';
      }
      break;
    case "Edit":
      if (updateArtist($_POST['ArtistName'], $_POST['ArtistGenre'], $_POST['ArtistID'])) {
        echo '<div class="alert alert-success" role="alert"> Artist Edited Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Artist Not Edited </div>';
      }
      break;
    case "Delete":
      if (deleteArtist($_POST['ArtistID'])) {
        echo '<div class="alert alert-success" role="alert"> Artist Deleted Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Artist Not Deleted </div>';
      }
      break;
  }
}

$artists = selectArtists();

include "view-artists.php";
include "view-footer.php";
?>
