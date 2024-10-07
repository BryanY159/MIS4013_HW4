<?php
require_once("util-db.php");
require_once("model-songs-by-artist.php");

$pageTitle = "Songs by Artist";
include "view-header.php";

$songs = selectSongsByArtist($_GET['id']);

include "view-songs-by-artist.php";
include "view-footer.php";
?>
