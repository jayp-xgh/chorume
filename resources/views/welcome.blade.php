<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
    <div class="grafico"></div>
    <script>
        let grafico = document.querySelector('.grafico');
        let options = {
            chart: {
                type: 'line',
                height: 350,
                width: '100%',
            },
            series: [{
                name: 'sales',
                data: [1030,40,45,50,49,60,70,91,125]
            }],
        }
        let chart = new ApexCharts(grafico, options);
        chart.render();
    </script>
</body>
</html>