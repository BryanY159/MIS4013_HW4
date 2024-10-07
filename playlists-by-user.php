<?php
require_once("util-db.php");
require_once("model-playlists-by-user.php");

$pageTitle = "Playlists by User";
include "view-header.php";

$playlists = selectPlaylistsByUser($_POST['UID']);

include "view-playlists-by-user.php";
include "view-footer.php";
?>
