<?php
require_once("util-db.php");
require_once("model-playlists-with-songs.php");

$pageTitle = "Playlists with Songs";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "AddPlaylist":
      if (insertPlaylist($_POST['UserID'], $_POST['SongID'], $_POST['PlaylistName'])) {
        echo '<div class="alert alert-success" role="alert"> Playlist Added Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Playlist Not Added </div>';
      }
      break;
    /*
    case "Add":
      if (insertSong()) {
        echo '<div class="alert alert-success" role="alert"> Song Add Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Song Not Added </div>';
      }
      break;
    */
    /*
    case "Delete":
      if (deleteSong()) {
        echo '<div class="alert alert-success" role="alert"> Song Deleted Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Song Not Deleted </div>';
      }
      break;
    */
  }
}

$playlists = selectPlaylists();

include "view-playlists-with-songs.php";
include "view-footer.php";
?>
