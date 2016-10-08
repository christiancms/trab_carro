<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Ano');
        data.addColumn('number', 'Pelotas');
        data.addColumn('number', 'Outras Cidades');
        
        <?php foreach ($clientes as $cliente) { ?>
            data.addRows([['<?= $cliente->ano ?>', <?= $cliente->num_pel ?>, <?= $cliente->num_outras ?>]]);    
        <?php } ?>
        
        var options = {
            title: 'Novos Clientes',
            hAxis: {title: 'Ano', titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>
<div class="container">
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
</div>
</body>
</html>