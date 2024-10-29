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
        intro: "Welcome to the Artists Page! I adjusted the alerts from HW4 on this page."
      },
      {
        element: '#add-button',
        intro: "Here's the add button. Adding a new artist will trigger a green Toastify alert in the top right.",
        position: 'left'
      },
      {
        element: '#edit-button-1',
        intro: "Here's the edit button. Editing an existing artist will trigger a yellow Toastify alert in the top right.",
        position: 'left'
      },

      {
        element: '#delete-button-1',
        intro: "Here's the delete button. After clicking the delete button, you will get a confirmation alert using SweetAlerts2. This has the same function as the previous alert, but it is more visualizing appealing. Deleting an existing artist will trigger a red Toastify alert in the top right.",
        position: 'right'
      },
      {
        intro: "Try this out by adding, editing, and deleting a temporary artist into the database!"
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
