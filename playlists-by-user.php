<?php
require_once("util-db.php");
require_once("model-playlists-by-user.php");

$pageTitle = "Playlists by User";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertPlaylist($_POST['UID'], $_POST['SongID'], $_POST['PlaylistName'])) {
        echo '<div class="alert alert-success" role="alert"> Playlist Added Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Playlist Not Added </div>';
      }
      break;
    case "Edit":
      if (updatePlaylist($_POST['NewPlaylistName'], $_POST['OldPlaylistName'])) {
        echo '<div class="alert alert-success" role="alert"> Playlist Edited Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Playlist Not Edited </div>';
      }
      break;
    case "Delete":
      if (deletePlaylist($_POST['PlaylistName'])) {
        echo '<div class="alert alert-success" role="alert"> Playlist Deleted Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Playlist Not Deleted </div>';
      }
      break;
  }
}

$playlists = selectPlaylistsByUser($_POST['UID']);

include "view-playlists-by-user.php";
include "view-footer.php";
?>
