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

?>
