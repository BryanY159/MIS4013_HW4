<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>Chart</h1>
        <button type="button" class="btn btn-primary" id="tutorial-button" onclick="startIntro()">Start Tutorial</button>

        <div id="myChart" style="width: 600px; height: 400px;"></div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const chartDom = document.getElementById('myChart');
        const myChart = echarts.init(chartDom);

        const option = {
            title: {
                text: 'Sample Bar Chart'
            },
            tooltip: {},
            xAxis: {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                name: 'Data',
                type: 'bar',
                data: [65, 59, 80, 81, 56, 55, 40]
            }]
        };

        myChart.setOption(option);
    });
    </script>

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
        element: '#myChart',
        intro: "Here's a chart created using Chart.js to visualize sample data.",
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
    
