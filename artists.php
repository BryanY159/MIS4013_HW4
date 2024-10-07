<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertArtist($_POST['artistName'], $_POST['artistGenre']);
      break;
  }
}

$artists = selectArtists();

include "view-artists.php";
include "view-footer.php";
?>
