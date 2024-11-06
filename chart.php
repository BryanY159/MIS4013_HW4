<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>Chart</h1>

<button type="button" class="btn btn-primary" id="tutorial-button" onclick="startIntro()">Start Tutorial</button>

<!-- Add the canvas element for the Chart.js pie chart -->
<canvas id="myPieChart" width="400" height="400"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Add Chart.js CDN -->

<script>
  // Chart.js initialization for a pie chart
  const ctx = document.getElementById('myPieChart').getContext('2d');
  const myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Rock', 'Pop', 'Jazz', 'Classical', 'Hip Hop'],
      datasets: [{
        label: 'Genres',
        data: [12, 19, 3, 5, 2], // Sample data, replace with actual data if needed
        backgroundColor: [
          'rgba(255, 99, 132, 0.6)',
          'rgba(54, 162, 235, 0.6)',
          'rgba(255, 206, 86, 0.6)',
          'rgba(75, 192, 192, 0.6)',
          'rgba(153, 102, 255, 0.6)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom'
        }
      }
    }
  });

  // Intro.js tutorial steps
  function startIntro() {
    const step = parseInt(localStorage.getItem('currentStep') || 0);

    const steps = [
      {
        intro: "Welcome to HW6 Dr. Bellah! Click through this tutorial to find where my JavaScript libraries are implemented!",
      },
      {
        element: '#tutorial-button',
        intro: "This is Intro.js, the library for interactive tutorials like this one.",
        position: 'bottom'
      },
      {
        element: '#artists-page',
        intro: "On the Artists page, I used SweetAlert2 and Toastify.js for notifications when adding, editing, or deleting artists.",
        position: 'bottom'
      },
      {
        element: '#myPieChart',
        intro: "Here's a chart created using Chart.js to visualize genre distribution.",
        position: 'top'
      },
      {
        intro: "Thank you for exploring the tutorial! Feel free to navigate to other pages to see more.",
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
      wi
