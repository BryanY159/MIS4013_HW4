<?php

function selectPlaylists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select distinct PlaylistName from Playlists;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectSongsByPlaylist($PName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select s.SongID, Title, Genre from songs s join playlists p on s.SongID = p.SongID where PlaylistName = ?;");
        $stmt->bind_param("s", $PName);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
