<html>
    <head>
        <title>Graph</title>
    </head>
    <meta charset="UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <body>
        <table style="width:100%">
            <tr>
            <td style="width:50%">
                <div class="chartjs-size-monitor" style="position: absolute; inset: 0px;
                    overflow: hidden; pointer-event: none; visibility: hidden; z-index: -1;">
                    <div class ="chartjs-size-monitor-expand" style="position: absolut; left:0;top:0;right:0;bottom:0;overflow:hidden;
                         pointer-event: none; visibility: hidden; z-index: -1;">
                        <div style="position:absolut; width:1000000px; height:1000000px; left:0; top:0;"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink" style="position: abolute; left:0;top:0;right:0;bottom:0;overflow:hidden;
                         pointer-event: none; visibility: hidden; z-index: -1;">
                        <div style="position:absolut; width:200%; height:200%; left:0; top:0;"></div>
                    </div>
                </div>
                <canvas id="chart1"  class="chartjs-render-monitor" style="display: block; width: 670px; height: 335px;" width="670" height="335"></canvas>
            </td>

            <td style="width:50%">
                <div class="chartjs-size-monitor" style="position: absolute; inset: 0px;
                overflow: hidden; pointer-event: none; visibility: hidden; z-index: -1;">
                <div class ="chartjs-size-monitor-expand" style="position: absolut; left:0;top:0;right:0;bottom:0;overflow:hidden;
                    pointer-event: none; visibility: hidden; z-index: -1;">
                    <div style="position:absolut; width:1000000px; height:1000000px; left:0; top:0;"></div>
                </div>
                <div class="chartjs-size-monitor-shrink" style="position: abolute; left:0;top:0;right:0;bottom:0;overflow:hidden;
                     pointer-event: none; visibility: hidden; z-index: -1;">
                    <div style="position:absolut; width:200%; height:200%; left:0; top:0;"></div>
                </div>
            </div>
                <canvas id="chart2"  class="chartjs-render-monitor" style="display: block; width: 670px; height: 335px;" width="670" height="335"></canvas>
            </td>
        </tr>
        </table>

        <script>
            var url = "https://www.trcloud.co/test/api.php"; //ประกาศตัวแปร url 
            $.ajax({ //ใช้ ajax ในการดึง api
                dataType: "json",
                url: url,
                type: "GET",
                //data: data,
                success: function(res){
                    var labels = []; //ประกาศตัวแปร lables
                    var data = []; //ประกาศตัวแปร data
                $.each(res,function(index,item){
                    labels.push(item.City);
                    data.push(item.Population);
                });
                var ctx = document.getElementById("chart1").getContext('2d');
                var myChart = new Chart(ctx, { type: 'bar', data: { labels: labels, datasets: [{ label: 'Range by Country', 
                data: data, backgroundColor: [ 'rgba(255, 99, 132, 0.2)',
                /*red*/ 'rgba(54, 162, 235, 0.2)', /*blue*/ 'rgba(255, 206, 86, 0.2)', /*yellow*/ 'rgba(75, 192, 192, 0.2)',
                /*green*/ 'rgba(153, 102, 255, 0.2)', /*purple*/ 'rgba(255, 159, 64, 0.2)', /*orange*/ 'rgba(255, 99, 132, 0.2)', 
                /*red*/ 'rgba(54, 162, 235, 0.2)', /*blue*/ 'rgba(255, 206, 86, 0.2)', /*yellow*/ 'rgba(75, 192, 192, 0.2)',
                /*green*/ 'rgba(153, 102, 255, 0.2)', /*purple*/ 'rgba(255, 159, 64, 0.2)' ],
                borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'], borderWidth: 1 }] }, options: { scales: { yAxes: [{ ticks: { beginAtZero: true } }] } } });

                var ctx = document.getElementById("chart2").getContext('2d');
                var myChart = new Chart(ctx, { type: 'pie', data: { labels: labels, datasets: [{ label: 'Range by Country', 
                data: data, backgroundColor: [ 'rgba(255, 99, 132, 0.2)',
                /*red*/ 'rgba(54, 162, 235, 0.2)', /*blue*/ 'rgba(255, 206, 86, 0.2)', /*yellow*/ 'rgba(75, 192, 192, 0.2)',
                /*green*/ 'rgba(153, 102, 255, 0.2)', /*purple*/ 'rgba(255, 159, 64, 0.2)', /*orange*/ 'rgba(255, 99, 132, 0.2)', 
                /*red*/ 'rgba(54, 162, 235, 0.2)', /*blue*/ 'rgba(255, 206, 86, 0.2)', /*yellow*/ 'rgba(75, 192, 192, 0.2)',
                /*green*/ 'rgba(153, 102, 255, 0.2)', /*purple*/ 'rgba(255, 159, 64, 0.2)' ],
                borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'], borderWidth: 1 }] }, options: { scales: { yAxes: [{ ticks: { beginAtZero: true } }] } } });
                }
            });
        </script>
    </body>
    </html>