<head>
<style type="text/css">

</style>
</head>
<p>Charts Example</p>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<body>
<div class="wrapper" style="width: 60%; outline: 2px solid">
<canvas id="myChart" width="200px" height="70px"></canvas>
</div>

<h1>Hello World</h1>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
Chart.defaults.line.spanGaps = true;
var myChart = new Chart(ctx, {  
    responsive:true, 

    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3, 6, 4, 9, 15, 7, 2000],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',

            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },

    options: {
        responsive: true,
        
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                    fontColor: 'black'
                    
                }
            }],
            xAxes: [{
                ticks: {
                    beginAtZero:true,
                    fontColor: 'black'
                    
                }
            }]

        },
        tooltips: {
            mode: 'point',
            intersect: false,
        },
        hover: {
            mode: 'hover',
            intersect: true,
        }
    }

});
</script>
</body>