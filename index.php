<?php
	session_start();

	require "controller.php";

	$controller = new Controller();

?>
<html>
	<head>
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="styles/customStyles.css">

		<title>tidtag</title>
	</head>

	<body>
	<!--
		<nav class = "navbar navbar-default navbar-fixed-top" role = "navigation">
			<div class = "container">
				
				<div class = "navbar-header">
					<button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#navHeader">
						<span class="sr-only">Toggle navigation</span>
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
					</button>

					<a href = "#hem" class = "navbar-brand">[logotyp] tidtag</a>
				</div>

				<div class = "collapse navbar-collapse" id = "navHeader">
					<ul class = "nav navbar-nav navbar-right">
						<li><a href = "#hem">Hem</a></li>
						<li><a href = "#tjanster">Tjänster</a></li>
						<li><a href = "#om">Om oss</a></li>
						<li><a href = "#kontakt">Kontakt</a></li>
					</ul>
				</div>
			</div>
		</nav>
	-->

		<div id = "hem" style = "background-size:cover;" class = "content-section home-page">
			<div class = "container">

				<div class = "row top-menu">
					<div class = "col-md-2">
						<a href = "#" class = "headerLink"><div>HEM</div><div><span class = "glyphicon glyphicon-menu-down"></span></div></a>
					</div>
					<div class = "col-md-2">
						<a href = "#tjanster" class = "headerLink"><div>TJÄNSTER</div></a>
					</div>
					<div class = "col-md-2">
						<a href = "#vision" class = "headerLink"><div>VISION</div></a>
					</div>
					<div class = "col-md-2">
						<a href = "#om" class = "headerLink"><div>OM OSS</div></a>
					</div>
					<div class = "col-md-2">
						<a href = "#kontakt" class = "headerLink"><div>KONTAKT</div></a>
					</div>
				</div>

				<div class = "row">
					<div class = "page-title">
						<div>[logo] tidtag</div>
					</div>
				</div>

				<div class = "row">
					<div class = "col-md-4 pull-right">
						<div class = "panel panel-default">
							<div class = "panel-body">
								<span class = "pull-left">[twitterflöde]</span>
								<span class = "pull-right">
									<a href = "http://twitter.com/tidtag" class = "btn btn-info"><big><span class = "fa fa-twitter"></span></big>  Följ</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id = "tjanster" class = "content-section black-bg">
			<div class = "container">

				<div class = "row">
					<div class = "col-md-1"></div>
					<div class = "col-md-3">
						<div class = "section-header"> TJÄNSTER </div>
					</div>
				</div>

				<div class = "row">
					<div class = "col-md-1"></div>
					<div class = "col-md-4">
						<h3>Journalistik</h3>
						<div style = "white-space: pre-wrap; line-height: 175%;">
Vi erbjuder journalistik om aktuella ämnen med historiska vinklar. Ur historiska perspektiv skriver vi både komplexare och enklare texter.
	Historia är inte bara något som har varit, utan även något som pågår. Med klockan i vår hand visar vi i vilken hastighet vår tid rullar. Vi tar tid på varifrån historiens vindar kommer, hur de drar över samtiden och vartåt de viner mot framtiden. Vi ser tillbaka till historiska ögonblick, trycker ner tummen så att tiden stannar, och försöker förstå hur den frusna tidpunkten kan förklara sin tid, vår tid och de historiska vägskäl vi nu står inför.
	Dagens människor och samhällen är historiska. Att vara historisk betyder dels att komma ur historien, dels att vara föränderlig.
	Läran om människan, humaniora, berör alla skilda mänskliga skapelser från historien, så som ekonomi, politik, massmedier och Kalle Ankas julafton. Människor använder och tolkar dessa skapelser, på olika sätt. Vi försöker förstå hur och varför.
	Vi försöker förstå människor genom att kritiskt lyssna på dem. Tillsammans med dem, och historiens människor, bryter vi upp med invanda tankesätt och tänker nytt.
	Tidtag Journalistik arbetar med:
						</div>
     					<ul>
							<li>Artiklar och reportage om aktuella ämnen med historiska vinklar.</li><br>
							<li>Populärvetenskapliga artiklar och reportage som presenterar humanistisk vetenskap.</li><br>
							<li>Vetenskapsjournalistisk granskning av politik, massmedier och vetenskaper.</li>
						</ul>
					</div>
					<div class = "col-md-1"></div>
					<div class = "col-md-4">
						<h3>Kommunikation</h3>
						<div style = "white-space: pre-wrap; line-height: 175%;">
Vi erbjuder kommunikationsvetenskaplig och språklig korrekturläsning av texter. Vi kan snabbt identifiera en texts struktur, bedöma dess delar var för sig och som delar av en helhet. Vi granskar texters berättarstruktur, meningsuppbyggnad, grammatik, ordval och stavfel.
	Om så önskas kan vi bedöma texter och eventuella bilder utifrån avsändarens avsikter med kommunikationen. Journalistiskt kan vi värdera om språket flyter på ett klart, enkelt, intresseväckande och tankeväckande sätt. Idéhistorisk kan vi värdera om tankar och argument presenteras på ett sammanhängande, nyanserat, historiskt motiverande och medborgerligt engagerande sätt.
	Vi arbetar självgående, metodiskt, noggrant och effektivt.
	Tidtag Kommunikation arbetar med:
						</div>
     					<ul>
							<li>Språklig korrekturläsning av skrifter, så som rapporter, informationsutskick, journalistiska texter och litteratur.</li>
						</ul>
					</div>
					<!--?php 
						$sectionID = "section1";
						include "view/section.php";
					?-->
				</div>
			</div>
		</div>

		<div id = "vision" class = "content-section">
			<div class = "container">
				<div class = "row">
					<div class = "col-md-4"></div>
					<div class = "col-md-3">
						<div class = "section-header"> VISION </div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-4"></div>
					<?php 
						$sectionID = "section2";
						include "view/section.php";
					?>
				</div>
			</div>
		</div>

		<div id = "om" class = "content-section black-bg">
			<div class = "container">
				<div class = "row">
					<div class = "col-md-6">
						<img src = "images/IMG_8048.jpg" height = "50%" alt = "Ingen bild :-("></img>
					</div>
					<div class = "row">
						<div class = "col-md-4"></div>
						<div class = "col-md-3">
							<div class = "section-header"> OM OSS </div>
						</div>
						<div class = "col-md-4">
						<div style = "white-space: pre-wrap; word-break: normal; line-height: 175%;">
Vi bakom <i>Tidtag Journalistik &amp; Kommunikation</i>, Jenny Gustafsson och Johan Cederqvist, har båda en masterexamen i idéhistoria samt en examen i journalistik. Under vår studietid har vi lärt oss att skriva vetenskapliga uppsatser, akademisk engelska, forskningsöversikter, journalistiska texter, populärvetenskap och vetenskapsjournalistik, att granska politik, massmedier och vetenskap, att försöka förstå människor kritiskt, och att kommunicera muntligt genom att ställa öppna frågor, lyssna aktivt och ställa följdfrågor.
						</div>
					</div>
						<!--?php 
							$sectionID = "section3";
							include "view/section.php";
						?-->
					</div>
				</div>
			</div>
		</div>

		<?php $contact = $controller->getSectionData("contact"); ?>
		<div id = "kontakt" class = "content-section">
			<div class = "container">
				<div class = "row">
					<div class = "col-md-5"></div>
					<div class = "col-md-3">
						<div class = "section-header"> KONTAKT </div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-5"></div>
					<?php if(isset($_SESSION["id"]))
						echo "<div class = \"col-md-3 contactEdit\" contenteditable = \"true\">";
					else
						echo "<div class = \"col-md-3\">"; ?>
						<div id = "telephone">
							<span class = "glyphicon glyphicon-earphone"></span> <?php echo $contact["telephone"]; ?>	
						</div>
						<div id = "address">
							<span class = "glyphicon glyphicon-map-marker"></span> <?php echo $contact["address"]; ?>
						</div>
						<div id = "email">
							<span class = "glyphicon glyphicon-envelope"></span> <?php echo $contact["email"]; ?>
						</div>
						<?php if(isset($_SESSION["id"])) { ?>
							<div class = "pull-right contactButton" style = "display: none; padding-bottom: 10px;">
								<a class = "btn btn-primary" contenteditable = "false">Spara</a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="view.js"></script>

	</body>

</html>