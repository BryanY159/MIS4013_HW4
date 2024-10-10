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

function insertUser($Username, $SubType) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO users (Username, SubscriptionType) VALUES (?, ?)");
        $stmt->bind_param("ss", $Username, $SubType);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateUser($Username, $SubType, $UserID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE users SET Username = ?, SubscriptionType = ? WHERE UserID = ?");
        $stmt->bind_param("ssi", $Username, $SubType, $UserID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteUser($UserID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM users WHERE UserID = ?");
        $stmt->bind_param("i", $UserID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
