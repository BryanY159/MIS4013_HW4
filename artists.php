<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";

$toastMessage = "";
$toastType = "success";
$actionType = "";

if (isset($_POST['actionType'])) {

  $actionType = $_POST['actionType'];
  
  switch ($_POST['actionType']) {
    case "Add":
      if (insertArtist($_POST['ArtistName'], $_POST['ArtistGenre'])) {
        $toastMessage = "Artist Added Successfully";
      } else {
        $toastMessage = "Error: Artist Not Added";
        $toastType = "error";
      }
      break;
    case "Edit":
      if (updateArtist($_POST['artistName'], $_POST['artistGenre'], $_POST['artistID'])) {
        $toastMessage = "Artist Edited Successfully";
      } else {
        $toastMessage = "Error: Artist Not Edited";
        $toastType = "error";
      }
      break;
    case "Delete":
      if (deleteArtist($_POST['ArtistID'])) {
        $toastMessage = "Artist Deleted Successfully";
      } else {
        $toastMessage = "Error: Artist Not Deleted";
        $toastType = "error";
      }
      break;
  }
}

$artists = selectArtists();

include "view-artists.php";
include "view-footer.php";
?>

<script>
  const toastMessage = "<?php echo $toastMessage; ?>";
  const toastType = "<?php echo $toastType; ?>";
  const actionType = "<?php echo $actionType; ?>";

  if (toastMessage) {
    let backgroundColor = actionType === "Delete" ? "red" :
                          actionType === "Add" ? "green" : 
                          actionType === "Edit" ? "yellow" : "blue";

    Toastify({
      text: toastMessage,
      duration: 3000,
      gravity: "top",
      position: "right",
      style: {
        background: backgroundColor,
        color: "black" // Optional: Set text color for better visibility on yellow
      }
    }).showToast();
  }

function startIntro() {
    const steps = [
      {
        intro: "Welcome to the Artists Page! I adjusted the alerts from HW4 on this page." // Step without element
      },
      {
        element: '#add-button',
        intro: "Click here to add a new artist.",
        position: 'left'
      },
      {
        element: '#edit-button-1',
        intro: "Click here to edit an artist.",
        position: 'top'
      },

      {
        element: '#delete-button-1',
        intro: "Click here to delete an artist.",
        position: 'top'
      }
    ];

    introJs().setOptions({
      steps: steps
    })
    .start()
    .onexit(function() {
      // Optional: actions when the tutorial is exited
    });
  }
</script>
