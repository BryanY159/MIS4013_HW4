<?php

function selectPlaylistsByUser($UID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select Distinct Username, PlaylistName From Users u join Playlists p on u.UserID = p.UserID where u.UserID = ?;");
        $stmt->bind_param("i", $UID);
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

function updatePlaylist($NewPlaylistName, $OldPlaylistName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE playlists SET PlaylistName = ? WHERE PlaylistName = ?");
        $stmt->bind_param("ss", $NewPlaylistName, $OldPlaylistName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlaylist($PlaylistName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM playlists WHERE PlaylistName = ?");
        $stmt->bind_param("s", $PlaylistName);
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
        $stmt = $conn->prepare("SELECT SongID, Title FROM songs ORDER BY Title");
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
