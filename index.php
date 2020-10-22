<?php
	include "gui/textbox.php";
	include "gui/textboxvalue.php";
	include "gui/button.php";
?> 
<html>
	<head>
		<meta charset="utf-8">
		<title>Enregistrement des demandes envoyées au entreprise</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="index.css"/>
	</head>
	<body>
		<div class="container">

			<header>
				<h1>Enregistrement des demandes envoyées au entreprise</h1>
				<?php include("menu.php"); ?>
			</header>

			<form action="send_donnees.php" method="post"/>
				<?php 
				$textbox = new Gui\TextBox("Nom de l'entreprise", "company_name");
				$textbox->insert();
				
				$textbox1 = new Gui\TextBox("Adresse de l'entreprise", "company_address");
				$textbox1->insert();
				
				$textbox2 = new Gui\TextBox("Site web de l'entreprise", "company_url");
				$textbox2->insert();
				
				$textbox3 = new Gui\TextBox("Téléphone de l'entreprise", "company_phone");
				$textbox3->insert();
				
				$textbox4 = new Gui\TextBox("Mail de l'entreprise", "company_email");
				$textbox4->insert();
				?>
				<div class="form-group"/>
				<label for="envoie">Envoie : </label>
					<select name="company_send" id="envoie" class="form-control">
						<option value="E-mail">par e-mail</option>
						<option value="Courrier">par courrier</option>
						<option value="Site web">par site web</option>
					</select>
				</div>
				<?php
					$button = new Gui\Button("Copier l'adresse email", "copyEmail");		
					$button->insert();		
					$button1 = new Gui\Button("Copier l'objet de l'e-mail", "copyObjet");		
					$button1->insert();		
					$button2 = new Gui\Button("Copier l'e-mail", "copy");		
					$button2->insert();	
				?>
				<button type="submit" class="btn btn-primary">Enregistrer</button>
			</form>
			<form action="save_mail.php" method="post"/>
			
			<?php
			$textboxvalue = new Gui\TextBoxValue("Objet du mail", "objetmail", "objet_mail.txt");
			$textboxvalue->insert();
			$textboxvalue1 = new Gui\TextBoxValue("Contenue du mail", "contenuemail", "mail.txt");
			$textboxvalue1->insert();
			?>
			<button type="submit" class="btn btn-primary" type="button">Sauvegarder le mail</button>
			</form>
		</div>
		<script src="copy.js"></script>
	</body>
 </html>
