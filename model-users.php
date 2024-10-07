<?php

function selectUsers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select * from users");
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
