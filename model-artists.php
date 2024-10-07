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

?>
