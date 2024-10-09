<?php
require_once("util-db.php");
require_once("model-songs-by-artist.php");

$pageTitle = "Songs by Artist";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    /*
    case "Add":
      if (insertSong($_POST['SongTitle'], $_POST['SongGenre'], $_POST['ArtistID'])) {
        echo '<div class="alert alert-success" role="alert"> Song Added Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Song Not Added </div>';
      }
      break;
    */
    /*
    case "Edit":
      if (updateSong($_POST['SongTitle'], $_POST['SongGenre'], $_POST['SongID'])) {
        echo '<div class="alert alert-success" role="alert"> Song Edited Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Song Not Edited </div>';
      }
      break;
    */
    /*
    case "Delete":
      if (deleteSong($_POST['SongID'])) {
        echo '<div class="alert alert-success" role="alert"> Song Deleted Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Song Not Deleted </div>';
      }
      break;
    */
  }
}

$songs = selectSongsByArtist($_GET['id']);

include "view-songs-by-artist.php";
include "view-footer.php";
?>
