<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Marca');
        data.addColumn('number', 'Nº de Veículos');
        
        <?php foreach ($veiculos as $veiculo) { ?>
           data.addRows([['<?= $veiculo->marca ?>', <?= $veiculo->num ?>]]);     
        <?php } ?>

        var options = {
            title: 'Gráfico Relacionando Nº de Veículos por Marca'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
<div class="container">
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</div>
</body>
</html>