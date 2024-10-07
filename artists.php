<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertArtist($_POST['artistName'], $_POST['artistGenre'])) {
        echo '<div class="alert alert-success" role="alert"> Artist Added Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Artist Not Added </div>';
      }
      break;
  }
}

$artists = selectArtists();

include "view-artists.php";
include "view-footer.php";
?>
