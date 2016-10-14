<script src= "<?php echo (base_url('assets/js/Chart.js'))?>"></script>
 <?php 
foreach ($opcoes as $opcao) 
{
    if($opcao['avaliacao']!=null && sizeof($opcao['avaliacao'])>=2){
?>
    <h4><b> <?php echo $opcao['nome']; ?> </b></h4>
    <canvas id="<?php echo $opcao['nome']; ?>" width="100%" height="50%"></canvas>

    <script>
        var ctx = document.getElementById("<?php echo $opcao['nome']; ?>");
        var myChart = new Chart(ctx, {
        type: 'line',
            data: {
                labels: [
                    <?php 
            	    foreach ($opcao['avaliacao'] as $avaliacao)
                    {
                        echo ("'".$avaliacao['data']."', ");
            	    }
                ?>
                ],
                datasets: [{
                    label: 'Indice de Massa Corporal (IMC)',
                    data: [
                        <?php
            	        foreach($opcao['avaliacao'] as $avaliacao)
            	        {
            		      echo ($avaliacao['imc'].",");
            	        }
                        ?>
                    ],
                backgroundColor: [
                    'rgb(180, 255, 180)'
                ],
                borderColor: [
                    'rgb(100, 200, 100)'
                ],
                borderWidth: 1
            }]
        },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
<?php
} 
}
?>