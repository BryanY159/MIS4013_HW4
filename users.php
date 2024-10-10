<?php
require_once("util-db.php");
require_once("model-users.php");

$pageTitle = "Users";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertUser($_POST['Username'], $_POST['SubscriptionType'])) {
        echo '<div class="alert alert-success" role="alert"> Artist Added Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Artist Not Added </div>';
      }
      break;
    case "Edit":
      if (updateUser($_POST['Username'], $_POST['SubscriptionType'], $_POST['UserID'])) {
        echo '<div class="alert alert-success" role="alert"> Artist Edited Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Artist Not Edited </div>';
      }
      break;
    case "Delete":
      if (deleteUser($_POST['UserID'])) {
        echo '<div class="alert alert-success" role="alert"> Artist Deleted Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Artist Not Deleted </div>';
      }
      break;
  }
}

$users = selectUsers();

include "view-users.php";
include "view-footer.php";
?>
