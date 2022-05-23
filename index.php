<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title();?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #cdcdcd">
<php get_header();?>
        
        <br><br>

        <div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
					 <center>
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" width="650" height="250">
                    <br><br><br>
                    <h2>Bem-vindo à uma mini seleção de evoluções de pokémons fofos.</h2>
                     </center>  
				</div>
			</div>
		</div>

       	<br><br>

        <div class="container">
            <div class="row">
            <div class="col-lg-4">
                <div class="card">
                <img
                    src="<?php echo get_template_directory_uri()?>/assets/images/pk1.jpg">
                <div class="card-body">
                    <h5 class="card-title">Mega Charizard Y &nbsp;&nbsp;<span class="badge" style="background-color:#000080";>#006</span></h5>
                    <p class="card-text">
                    Mega Charizard Y é uma das versões finais do Charizard, um pokémon de tipo fogo/voador introduzido na Geração I. O Charizardite Y é a mega stone, introduzida na Geração VI, que permite que Charizard Mega Evolua para Mega Charizard Y. 
                    </p>
                </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                <img
                    src="<?php echo get_template_directory_uri()?>/assets/images/pk2.jpg"
                /><br>
                <div class="card-body">
                    <h5 class="card-title">Ivysaur &nbsp;&nbsp;<span class="badge" style="background-color:#000080";>#002</span></h5>
                    <p class="card-text">
                    Ivysaur é um pokémon de tipo grama/veneno introduzido na Geração I. Ele evolui de Bulbasaur a partir do nível 16 e evolui para Venusaur a partir do nível 32. Possui uma habilidade oculta de clorofila.<br><br><br>
                    </p>
                </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                <img
                    src="<?php echo get_template_directory_uri()?>/assets/images/pk3.jpg"
                />
                <div class="card-body">
                    <h5 class="card-title">Dartrix &nbsp;&nbsp;<span class="badge" style="background-color:#000080";>#723</span></h5>
                    <p class="card-text">
                    Dartrix é um pokémon de tipo grama/voador introduzido na Geração VII. Ele evolui de Rowlet a partir do nível 17 e evolui para Decidueye a partir do nível 34. Possui uma habilidade oculta de longo alcance.<br><br>
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <br><br>

        <div class="container">
            <div class="row">
            <div class="col-lg-4">
                <div class="card">
                <img
                    src="<?php echo get_template_directory_uri()?>/assets/images/pk4.jpg"
                />
                <div class="card-body">
                    <h5 class="card-title">Sylveon &nbsp;&nbsp;<span class="badge" style="background-color:#000080";>#700</span></h5>
                    <p class="card-text">
                    Sylveon é um pokémon do tipo fada introduzido na Geração VI. Ele evolui de Eevee quando sobe de nível conhecendo um movimento do tipo fairy e tendo pelo menos dois níveis de afeto (nas Gerações VI e VII ) ou alta amizade ( Sword and Shield e Legends: Arceus ). 
                    </p>
                </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                <img
                    src="<?php echo get_template_directory_uri()?>/assets/images/pk7.jpg"
                />
                <div class="card-body">
                    <h5 class="card-title">Mewtwo &nbsp;&nbsp;<span class="badge" style="background-color:#000080";>#150</span></h5>
                    <p class="card-text">
                   Mewtwo é um pokémon Lendário do tipo Psíquico introduzido na Geração I. Embora não seja conhecido por evoluir para ou de qualquer outro Pokémon, Mewtwo pode Mega Evoluir em duas formas diferentes: Mega Mewtwo X ou Y.<br><br>
                    </p>
                </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                <img
                    src="<?php echo get_template_directory_uri()?>/assets/images/pk6.jpg"
                />
                <div class="card-body">
                    <h5 class="card-title">Wartortle &nbsp;&nbsp;<span class="badge" style="background-color:#000080";>#008</span></h5>
                    <p class="card-text">
                    Wartortle é um pokémon do tipo Água introduzido na Geração I. Ele evolui de Squirtle a partir do nível 16 e evolui para Blastoise a partir do nível 36. Possui uma habilidade oculta de Prato de Chuva.<br><br><br>
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>   
    </div>

	</center>

    <style>
           h2{
           color: #000080;
           font-size: 25px;
           font-family: 'Montserrat', sans-serif;
           }
           h5{
           color: #000080;
           font-size: 20px;
           font-weight: bold;
           font-family: 'Montserrat', sans-serif;
           }
           p{
           font-size: 15px;
           font-family: 'Montserrat', sans-serif;
           }
       </style>
 
<?php get_footer();?>
</body>
</html>

