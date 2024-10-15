<?php

function selectPlaylists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select Distinct PlaylistName, u.UserID, Username from playlists p join users u on p.UserID = u.userID;");
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

function insertPlaylist($UID, $SID, $PlaylistName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO playlists (UserID, SongID, PlaylistName) Values (?, ?, ?)");
        $stmt->bind_param("iis", $UID, $SID, $PlaylistName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectSongsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT SongID, Title FROM songs ORDER BY SongID");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectUsersForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT UserID, Username FROM users ORDER BY UserID");
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
