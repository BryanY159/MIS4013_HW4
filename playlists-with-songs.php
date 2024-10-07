<?php
require_once("util-db.php");
require_once("model-playlists-with-songs.php");

$pageTitle = "Playlists with Songs";
include "view-header.php";

$playlists = selectPlaylists();

include "view-playlists-with-songs.php";
include "view-footer.php";
?>
