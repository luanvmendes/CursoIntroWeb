<!DOCTYPE html>
<html>
	<head>
		<title>SÃO MIGUEL ARCANJO</title>
		<meta charset="utf-8" />
		<link type="image/png" href="logo.png" rel="shortcut icon" />
		<meta name="description" content="Página dedicada à cidade de São Miguel Arcanjo" />
		<meta name="keywords" content="são miguel arcanjo, santuário, capital da uva" />
		<meta name="author" content="Luan" />
		<!-- Fontes Google -->
		<link href="https://fonts.googleapis.com/css?family=Cookie|Crete+Round|Macondo" rel="stylesheet">
		<!-- Bootstrap Menu e slides -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<!-- Ícones -->
		<script src="https://use.fontawesome.com/8ecc1aa731.js"></script>
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	</head>
	<body>
		<?php include ("includes/menu.html"); ?>
		<section class="intro bg-light py-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="text-center">São Miguel Arcanjo</h1>
						<h3 class="text-justify">
							Emancipada em 1º de Abril de 1889, São Miguel Arcanjo é um município brasileiro do estado de São Paulo, localizado na Região Metropolitana de Sorocaba.<br><br>
							Sua economia está voltada para o setor agrícola, com o predomínio do cultivo de uvas do tipo Itália e Rubi.<br><br>
							A cidade de São Miguel Arcanjo, está inserida no Maior Contínuo de Mata Atlântica, denominado Contínuo de Paranapiacaba, o principal patrimônio ecológico de um bioma único, no qual vem se destacando nas práticas do Ecoturismo, dado a grande importância dos Parques, que são os grandes impulsionadores desta prática.<br><br>
							Atualmente devido a elevação da cidade a Santuário de São Miguel Arcanjo, o turismo religioso vem se destacando.
						</h3>
					</div>
				</div>
			</div>
		</section>
		<section class="eventos bg-light p-4">
			<div class="container bg-white rounded ">
				<div class="row pt-4">
					<div class="col-md-12 text-center">						
						<h2>Próximos Eventos</h2>
						<div id="navegar" class="carousel slide" data-ride="carousel">
							<ul class="carousel-indicators">
								<li data-slide-to="0" class="active"></li>
								<li data-slide-to="1"></li>
								<li data-slide-to="2"></li>
								<li data-slide-to="3"></li>
								<li data-slide-to="4"></li>
								<li data-slide-to="5"></li>
							</ul>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="img/slide-eventos/seminario.png" alt="Seminário">
								</div>
								<div class="carousel-item">
									<img src="img/slide-eventos/carnacao.jpg" alt="Palestra">
								</div>
								<div class="carousel-item">
									<img src="img/slide-eventos/palestra.png" alt="Palestra">
								</div>
								<div class="carousel-item">
									<img src="img/slide-eventos/festa-da-uva.jpg" alt="Festa da Uva 2018">
								</div>
								<div class="carousel-item">
									<img src="img/slide-eventos/capoeira.png" alt="Capoeira">
								</div>
								<div class="carousel-item">
									<img src="img/slide-eventos/kayak-polo.png" alt="Campeonato Brasileiro Kayak Polo">
								</div>
							</div>
							<a class="carousel-control-prev" href="#navegar" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#navegar" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
						<div class="col-md-12 agenda">
				          <!-- Button to Open the Modal -->
				          <button type="button" class="btn btn-lg mt-5" data-toggle="modal" data-target="#calendar">
				            Visualizar Google Agenda
				          </button>

				          <!-- The Modal -->
				          <div class="modal fade" id="calendar">
				            <div class="modal-dialog modal-dialog-centered">
				              <div class="modal-content">
				              
				                <!-- Modal Header -->
				                <div class="modal-header">
				                  <h4 class="modal-title">Eventos - São Miguel Arcanjo</h4>
				                  <button type="button" class="close" data-dismiss="modal">&times;</button>
				                </div>
				                
				                <!-- Modal body -->
				                <div class="modal-body">
				                  <div class="agenda-mobile">
				                    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=7q2bcgd1eaqo9upqkmad3bhfuo%40group.calendar.google.com&amp;color=%231B887A&amp;ctz=America%2FSao_Paulo" style="border-width:0" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
				                  </div>
				                  <div class="agenda-desk">
				                    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=7q2bcgd1eaqo9upqkmad3bhfuo%40group.calendar.google.com&amp;color=%231B887A&amp;ctz=America%2FSao_Paulo" style="border-width:0" width="100%" height="450" frameborder="0" scrolling="no"></iframe>
				                  </div>
				                </div>
				                
				                <!-- Modal footer -->
				                <div class="modal-footer">
				                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				                </div>
				                
				              </div>
				            </div>
				          </div>
				        </div>
					</div>
					<div class="col-md-12 pb-4 pb-md-5 share">
						<h4>Tem fotos da nossa cidade? Que tal compartilhar conosco?</h4>
						<a href="https://goo.gl/forms/xgCUSmxoGmKisLrC3" target="_blank"><i class="fa fa-camera fa-2x"></i> Clique aqui</a>
					</div>
				</div>
			</div>
		</section>

		<?php include("includes/footer.html"); ?>
	</body>
</html>