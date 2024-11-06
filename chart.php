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

  function startIntro() {
    const step = parseInt(localStorage.getItem('currentStep') || 0);

    const steps = [
      {
        intro: "This is a Chart made with the ECharts library! There's not much more to say about this one. It is just a sample chart with random data!",
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
    
