
<?php 

$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "post"){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$to = "faissaldraissi89@gmail.com";
	$headers = "From: . $email ." . "\r\n";

	// if (isset($name) && isset($email) && isset($subject) && isset($message))
	// {

	mail($to,$subject,$message,$headers);
      
}


if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message']) AND !empty($_POST['subject']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<img src="http://www.primfx.com/mailing/banniere.png"/>
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['name'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
					<img src="http://www.primfx.com/mailing/separation.png"/>
				</div>
			</body>
		</html>
		';

		mail("faissaldraissi89@gmail.com",$_POST['subject'], $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}

?>
<?php include "config.php"
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
	<title>CV - Boxed</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="common-css/bootstrap.css" rel="stylesheet">
	
	<link href="common-css/ionicons.css" rel="stylesheet">
	
	<link href="common-css/fluidbox.min.css" rel="stylesheet">
	
	<link href="01-cv-portfolio/css/styles.css" rel="stylesheet">
	
	<link href="01-cv-portfolio/css/responsive.css" rel="stylesheet">
	
</head>
<body>
	
	<header>
		<div class="container">
			<div class="heading-wrapper">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-location-outline"></i>
							<div class="right-area">
								<h5>Quartier el mohamadie </h5>
								<h5>17 Rue elhocaima Youssoufia</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-telephone-outline"></i>
							<div class="right-area">
								<h5>+212 660 79 69 48</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-chatboxes-outline"></i>
							<div class="right-area">
								<h5>faissaldraissi89@gmail.com</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
				</div><!-- row -->
			</div><!-- heading-wrapper -->
			
			<a class="downlad-btn" href="images/CV33.pdf"><?php echo $lang['telecharger CV']; ?></a>
		</div><!-- container -->
	</header>
	
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<div class="profile-img"><img src="faissaldr.jpg" alt=""></div>
						<h2><b>Draissi Faissal</b></h2>
						<h4 class="font-yellow"><?php echo $lang['Développeur web']; ?></h4>
						<ul class="information margin-tb-30">
							<li><b><?php echo $lang['Date de naissance'];?>: </b>Décembre 04, 1989</li>
							<li><b>EMAIL : </b>faissaldraissi89@gmail.com</li>
							<li><b>Situation familiale: </b>Célibataire</li>
						</ul>
						<ul class="social-icons">
							<li><a href="https://www.linkedin.com/in/draissi-faissal-0126b5173/"><i class="ion-social-linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/faissaldraissi/"><i class="ion-social-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/draissi.faissal.9"><i class="ion-social-facebook"></i></a></li>
							<li><a href="https://twitter.com/DraissiFaissal"><i class="ion-social-twitter"></i></a></li>
						</ul>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
	
	<section class="portfolio-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Portfolio</b></h3>
						<h6 class="font-lite-black"><b>Mes projets</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="portfolioFilter clearfix margin-b-80">
						<a href="#" data-filter="*" class="current"><b>ALL</b></a>
						<a href="#" data-filter=".web-design"><b>WEB DESIGN</b></a>
						<a href="#" data-filter=".branding"><b>BRANDING</b></a>
						<a href="#" data-filter=".graphic-design"><b>GRAPHIC DESIGN</b></a>
					</div><!-- portfolioFilter -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
		<center>
		<div class="portfolioContainer" style="width:70%">
			
			<div class="p-item web-design">
				<a href="images/portfolio-1-600x400.jpg" data-fluidbox>
					<img src="images/portfolio-1-600x400.jpg" height="180"alt=""></a>
			</div><!-- p-item -->
			<div class="p-item web-design">
				<a href="images/portfolio-2-600x400.jpg"   data-fluidbox>
					<img src="images/portfolio-2-600x400.jpg" height="180" alt=""></a>
			</div><!-- p-item -->
			<div class="p-item branding graphic-design">
				<a href="images/portfolio-3-600x400.jpg" data-fluidbox>
					<img src="images/portfolio-3-600x400.jpg"height="180" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item branding graphic-design">
				<a href="images/portfolio-7-600x800.jpg" data-fluidbox>
					<img src="images/portfolio-7-600x800.jpg"height="180" alt=""></a>
			</div><!-- p-item -->
			<div class="p-item  graphic-design branding">
				<a href="images/portfolio-5-600x800.jpg" data-fluidbox>
					<img src="images/portfolio-5-600x800.jpg"height="180" alt=""></a>
			</div><!-- p-item -->
			
			
			<div class="p-item branding graphic-design">
				<a class="img" href="images/portfolio-8-300x400.jpg" data-fluidbox>
					<img src="images/portfolio-8-300x400.jpg"height="180" width="300" alt=""></a>

			</div><!-- p-item -->
			
			
			
			
		</div><!-- portfolioContainer -->
		</center>
	</section><!-- portfolio-section -->
	
	
	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>A propos de moi</b></h3>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50"> Bonjour,Je suis Draissi Faissal  d'origine de Beni melal  j'ai 29ans j'ai un diplome d'infirmier.
						Actuellement Je suis un étudiant Developpeur Web  a lécole Youcode (Ecole De Developpement Web ).
						Aprés 10Mois je suis capable de faire des site Web en utilisant html Css Python JS script My SQL Php .</p>
					<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="radial-prog-area margin-b-30">
									<div class="radial-progress" data-prog-percent=".80">
										<div></div>
										<h6 class="progress-title">HTML5 & CSS3</h6>
									</div>
								</div><!-- radial-prog-area-->
							</div><!-- col-sm-6-->
						
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="radial-prog-area margin-b-30">
									<div class="radial-progress" data-prog-percent=".60">
										<div></div>
										<h6 class="progress-title">python</h6>
									</div>
								</div><!-- radial-prog-area-->
							</div><!-- col-sm-6-->
							
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="radial-prog-area margin-b-30">
									<div class="radial-progress" data-prog-percent=".60">
										<div></div>
										<h6 class="progress-title">JS</h6>
									</div>
								</div><!-- radial-prog-area-->
							</div><!-- col-sm-6-->
							
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="radial-prog-area margin-b-50">
									<div class="radial-progress" data-prog-percent=".60">
										<div></div>
				
									<h6 class="progress-title">PHP</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
					
					</div><!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
	
	<section class="experience-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Experience</b></h3>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
				
					<div class="experience margin-b-50">
						<h4><b>Stage a Hopitale Lala Hasna</b></h4>
						<h5 class="font-yellow"><b>Octobre2010-MArs2011</b></h5>
						<p class="font-semi-white margin-tb-30">j'ai passé une période de stage  des inférmier ,nous avons  appris beaucoup  d'expérience . </p>
						<ul class="list margin-b-30">
							<li>les point de suture.</li>
							<li>prélévement de sang.</li>
							<li>Soins de confort et de bien être,Observation et recueil des données cliniques.</li>
							<li>Contrôle et gestion des matériels, dispositifs médicaux et produits.</li>
						</ul>
					</div><!-- experience -->
					<div class="experience margin-b-50">
						<h4><b>Stage clinique El idrissi</b></h4>
						<h5 class="font-yellow"><b>mars2011-octobre2012</b></h5>
						<p class="font-semi-white margin-tb-30">Nous avons appris les tâche suivante. </p>
						<ul class="list margin-b-30">
							<li>Veiller au confort et à la sécurité du malade.</li>
							<li>Appliquer les prescriptions médicales des médecins.</li>
							<li>Travailler de concert avec les aides-soignants et les médecins pour prodiguer les meilleurs soins.</li>
							<li>Assurer des tâches administratives (suivi des dossiers médicaux, gestion des plannings de soins, organisation des entrées et sorties des patients…).</li>
						</ul>

					</div><!-- experience -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- experience-section -->
	
	<section class="education-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Education</b></h3>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="education-wrapper">
						<div class="education margin-b-50">
							<h4><b>Niveau baccalauréat</b></h4>
							<h5 class="font-yellow"><b>2007-2008</b></h5>
							<p class="margin-tb-30">Baccalauréat sciences expérimentales, Lycée kachkat Youssoufia. </p>
						</div><!-- education -->
						
						<div class="education margin-b-50">
							<h4><b>Diplome des infirmier</b></h4>
							<h5 class="font-yellow"><b>2008-2010</b></h5>
							<p class="margin-tb-30">Institus des infirmier Hachim . </p>
						</div><!-- education -->
					</div><!-- education-wrapper -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- about-section -->
	
			
				
	<section class="counter-section" id="counter">
			<div class="row">

	<div class="col-md-8 " style="float: none; margin: 0 auto;">
			<section class="Send me a message">
			<h1 align="center" style="padding-bottom:4rem">Contact Me </h1>
			
			<form id="form-contact" method="post" class="clearfix ts-form ts-form-email" data-php-path="assets/php/email.php">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label for="form-contact-name">Name * </label>
							<input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Name" required="" />
						</div>
						<!--end form-group -->
					</div>
					<!--end col-md-6 col-sm-6 -->
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label for="form-contact-email">Email * </label>
							<input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Email" required="" />
						</div>
						<!--end form-group -->
					</div>
					<!--end col-md-6 col-sm-6 -->
				</div>
				<!--end row -->
				<div class="form-group">
					<label for="form-contact-subject">Subject * </label>
					<input type="text" class="form-control" id="form-contact-subject" name="subject" placeholder="Subject" required="" />
				</div>
				<!--end form-group -->
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="form-contact-message">Message * </label>
							<textarea class="form-control" id="form-contact-message" rows="5" name="message" placeholder="Message" required=""></textarea>
						</div>
						<!--end form-group -->
					</div>
					<!--end col-md-12 -->
				</div>
				<!--end row -->
				<div class="form-group clearfix">
					<button type="submit" class="btn btn-primary float-right ts-btn-arrow" id="form-contact-submit">Send a Message </button>
				</div>
				<!--end form-group -->
				<div class="form-contact-status"></div>
			</form>
			<!--end form-contact -->
		</div>
	</div>
	<!--end row-->
</div>
</div>
<!--end container-->
</section>
<!--end #contact-->
</section><!-- Send me a message -->

<!-- SCIPTS -->
	
<script src="common-js/jquery-3.2.1.min.js"></script>
	
<script src="common-js/tether.min.js"></script>

<script src="common-js/bootstrap.js"></script>

<script src="common-js/isotope.pkgd.min.js"></script>

<script src="common-js/jquery.waypoints.min.js"></script>

<script src="common-js/progressbar.min.js"></script>

<script src="common-js/jquery.fluidbox.min.js"></script>

<script src="common-js/scripts.js"></script>

<footer>
		<p class="copyright">
			
		</p>


	</footer>
</body>
</html>