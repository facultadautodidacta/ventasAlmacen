<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">

    <title>Graficos</title>
</head>

<body>
    <div class="col-lg-12" style="padding: top 20px;">
        <div class="card">
            <div class="card-header">
                Grafica Cantidad Articulos
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                       
                    </div>
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
                
            </div>
        </div>
    </div>


</body>

</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script>
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['HELIX HX8 4litros', 'HELIX HX8 1 Litro', 'Duralast Platinum AGM', 'Duralast Max Balata', 'Autolite Iridium', 'Turtle Wax Cera','Dual Receptor de FM con Bluetooth','K&N High Performance'],
            datasets: [{
                label: 'Cantidad',
                data: [40, 20, 5, 60, 100, 60, 20, 40],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
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
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    function CargarDatosGraficoBar() {
        $.ajax({
            url:'controlador_grafico.php',
            type:'POST'
        }).done(function(resp){
            var data = JSON.parse(resp);
            for(var i=0; i<data.lenght;i++){
               alert(data[0][1]) 
            }
            
        })
    }
</script>