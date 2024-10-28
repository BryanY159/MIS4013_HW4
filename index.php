<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>Home</h1>

<button type="button" class="btn btn-primary" id="tutorial-button" onclick="startIntro()">Start Tutorial</button>

<script>
  function startIntro() {
    const step = parseInt(localStorage.getItem('currentStep') || 0);

    const steps = [
      {
        element: '#entire-navbar',
        intro: "Welcome to HW6 Dr. Bellah! Click on the following pages to find where my JavaScript libraries are implemented",
        position: 'bottom'
      },
      {
        element: '#tutorial-button',
        intro: "My first library is Intro.js. I will use it on each of the prompted pages to explain the JavaScript library. It allows for interactive tutorials like this.",
        position: 'bottom'
      },
      {
        element: '#artists-page',
        intro: "My second and third library will be shown here on the Artists Page. I used SweetAlerts2 and Toastify.js to change the button alerts for adding, editing, and deleting (I only did it on this page to avoid just copying code).",
        position: 'bottom'
      },
      {
        element: '#users-page',
        intro: "PLACEHOLDER FOR FOURTH LIBRARY!",
        position: 'bottom'
      },
      {
        intro: "Navigate to these pages to find more tutorial buttons! Thank you!",
      }
    ];

    introJs().setOptions({
      initialStep: step,
      steps: steps
    })
    .start()
    .onchange(function() {
      const currentStep = introJs().currentStep();
      localStorage.setItem('currentStep', currentStep);
    })
    .oncomplete(function() {
      localStorage.setItem('currentStep', 0); // Reset for next page
      window.location.href = 'artists.php'; // Redirect to Songs page
    })
    .onexit(function() {
      localStorage.removeItem('currentStep');  // Clear progress if exited
    });
  }
</script>

</body>
</html>

<?php
include "view-footer.php";
?>
