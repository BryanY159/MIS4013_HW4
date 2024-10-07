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

?>
