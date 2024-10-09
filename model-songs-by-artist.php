<?php

function selectSongsByArtist($AID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select s.SongID, Title, s.Genre, a.Name from songs s join artists a on s.ArtistID = a.ArtistID where s.ArtistID = ?;");
        $stmt->bind_param("i", $AID);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertSong($Title, $Genre, $AID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO songs (Title, Genre, ArtistID) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $Title, $Genre, $AID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSong($Title, $Genre, $,AID, $SID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE songs SET Name = ?, Genre = ?, ArtistID = ? WHERE SongID = ?");
        $stmt->bind_param("ssii", $Name, $Genre, $AID, $SID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteSong($SID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM songs WHERE SongID = ?");
        $stmt->bind_param("i", $SID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
