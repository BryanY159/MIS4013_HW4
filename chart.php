<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>Chart</h1>

<button type="button" class="btn btn-primary" id="tutorial-button" onclick="startIntro()">Start Tutorial</button>

const config = {
  type: 'bar',
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};

const labels = Utils.months({count: 7});
const data = {
  labels: labels,
  datasets: [{
    label: 'My First Dataset',
    data: [65, 59, 80, 81, 56, 55, 40],
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
  }]
};

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
