<?php 
    $nomeClinica = 'Exsicatas a serviço do Cerrado';
    $inicio="";
    $game="";
    $referencia="active";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<?php
			include 'head.php'
		?>
    </head>
    <body id="about" data-spy="scroll" data-target=".navbar" data-offset="60">
		<div class="jumbotron">	
        <?php
			include 'navegacao.php';
			include 'cabecalho.php';
		?>
		
			<div class="interna" style="background-color: #F5FFFA;" align="justify">
                <div class="container-fluid" style="background-color: #F8F8FF;">
					<div class="row">
						<div class="col-sm-10">
							<h2>Referências</h2><hr>
							<h4>
                            <br>
                            <br>    
                            <p>
                            Ministério do Meio Ambiente. O Bioma Cerrado. Disponível em: <<a href="https://www.mma.gov.br/biomas/cerrado">https://www.mma.gov.br/biomas/cerrado</a>>. Acesso em 27 de setembro de 2020.
                            </p>
                            <p>ICMBio. Fitofisionomias. Disponível em: <<a href="https://www.icmbio.gov.br/projetojalapao/pt/biodiversidade-3/fitofisionomias.html?showall=1&limitstart=">https://www.icmbio.gov.br/projetojalapao/pt/biodiversidade-3/fitofisionomias.html?showall=1&limitstart=</a>>. Acesso em 27 de setembro de 2020.</p>
                            </h4>
                            <br>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="#about">
						<center><span class="glyphicon glyphicon-chevron-up"></span></center>
					</a>
				</div>
			</div>
        </div>
        </div>
        
				
        <?php
			include 'rodape.php'
		?>
    </body>
</html>

