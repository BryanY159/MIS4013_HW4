<?php

function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select * from artists");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertArtist($Name, $Genre) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO artists (Name, Genre) VALUES (?, ?)");
        $stmt->bind_param("ss", $Name, $Genre);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCourse($Name, $Genre, $AID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE artists SET Name = ?, Genre = ? WHERE ArtistID = ?");
        $stmt->bind_param("ssi", $Name, $Genre, $AID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCourse($AID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM artists WHERE ArtistID = ?");
        $stmt->bind_param("i", $AID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
