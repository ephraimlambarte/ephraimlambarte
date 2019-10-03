<?php
	require_once 'dompdf/lib/html5lib/Parser.php';
	require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
	require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
	require_once 'dompdf/src/Autoloader.php';
	Dompdf\Autoloader::register();
	use Dompdf\Dompdf;

	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	
	$html = "
			<html>
				<head>
					<style>
						@page { margin: 0cm; }
						body {
							margin:0;
						}
						.header{
							display:inline-block;
						}
						.white{
							color:white;
						}
						.helv {
							font-family: Arial, Helvetica, sans-serif;
						}
						.skillsContainer{
							display:inline-block;
							background-color:red;
						}
						.ratingsContainer {
							list-style: none;
						}
						.ratingsColored{
							display:inline-block;
							background-color:#479099;
							height:20px;
							width:20px;
							border-style:solid;
							border-color:red;
							border-radius:11px;
							border-color:#479099;
						}
						.ratings{
							display:inline-block;
							height:20px;
							width:20px;
							border-width:2px;
							border-style:solid;
							border-color:red;
							border-radius:11px;
							border-color:#479099;
						}
						.skills{
							padding:5px;
							background-color:#479099;
							color:white;
							border-radius:5px;
							border-style:solid;
							border-width:1px;
							border-color:#479099;
						}
						.date{
							font-size:12px;
						}
						.certificates {
							margin-top:5px;
							margin-bottom:0px;
						}
					</style>
				</head>
				<body>
					<div style = 'margin-top:50px; margin-left:30px;'>
						<div class='header' style= '
													width:30%;
													margin:0px;'>
							<img src = './ephraim2.jpg' style = 'height:150px; 
																 width:150px;
																 border-radius:75px;margin:0px;'>
						</div>
						<div class='header' style = 'background-color:#479099;
													 height:150px;
													 width:70%;
													 margin:0px;
													 padding-left:20px;'>
							<h2 class='white helv'>Ephraim Lambarte</h2>
							<h4 class='white helv' style = 'margin-bottom:10px;'>Software Developer</h4>
							<div style = 'width:200px; 
										  border-color:white; 
										  border-width:2px; 
										  height:1px; 
										  border-top-style:solid;
										  margin:0px;'>
							</div>
							<h5 class='white helv' style ='margin-bottom:5px; margin-top:5px;'>
								I'm a self-motivated developer with an appetite for learning new things and developing new ideas.
							</h5>
						</div>
						<div style = 'width:234px; 
									  height:880px; 
									  position:absolute;
									  top:140px;
									  left:30px;'>
							<div>
								<img src = './mail.png' style = 'height:20px;
																	width:20px;
																	margin-bottom:0px;'>
								<p class='helv' style = 'margin-top:0px;
														font-size:15px;'>lambarteephraim@gmail.com</p>
								<img src = './phone.png' style = 'height:20px;
																width:20px;
																margin-bottom:0px;'>
								<p class='helv' style = 'margin-top:0px;
														font-size:15px;'>+639557221727</p>		
								<p class='helv' style = 'margin-top:0px;
														font-size:15px;'>+639293724697</p>															
							</div>
							<div style='
										height:240px;'>
								<h2 class='white helv' style = 'margin-bottom:0px;
																margin-top:0px;
																color:#479099;'>Frameworks Used</h2>
								<div style = 'width:100%; 
											border-color:#479099; 
											border-width:2px; 
											height:1px; 
											border-top-style:solid;
											margin:0px;'>
								</div>
								<h5 class='skills helv' style = 'position:absolute;
															top:180px;
															left:0px;
															width:65px;'>Bootstrap</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:158px;
									left:85px;
									width:40px;'>.NET</h5>
							
								<h5 class='skills helv' style = 'position:absolute;
									top:195px;
									left:0px;
									width:70px;'>Materialize</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:195px;
									left:90px;
									width:80px;'>React-native</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:232px;
									left:0px;
									width:50px;'>Laravel</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:232px;
									left:70px;
									width:45px;'>Django</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:232px;
									left:135px;
									width:45px;'>Odoo</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:269px;
									left:0px;
									width:50px;'>Jquery</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:269px;
									left:70px;
									width:100px;'>Android Studio</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:306px;
									left:0px;
									width:50px;'>Arduino</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:306px;
									left:70px;
									width:35px;'>Vuejs</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:306px;
									left:125px;
									width:35px;'>Vuex</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:343px;
									left:0px;
									width:49px;'>Angular</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:343px;
									left:70px;
									width:55px;'>GraphQL</h5>
								<h5 class='skills helv' style = 'position:absolute;
									top:343px;
									left:145px;
									width:90px;'>Laravel Nova</h5>
							</div>
							<div>
								<h2 class='white helv' style = 'margin-bottom:0px;
								margin-top:0px;
								color:#479099;'>Languages</h2>
								<div style = 'width:100%; 
										border-color:#479099; 
										border-width:2px; 
										height:1px; 
										border-top-style:solid;
										margin:0px;'>
								</div>
								<div>
									<div>
										<p class='helv'>JAVA</p>
										<div class='ratingsContainer'>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
											<div class='ratings'></div>
											<div class='ratings'></div>
											<div class='ratings'></div>
										</div>
									</div>
									<div>
										<p class='helv'>C++</p>
										<div class='ratingsContainer'>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
											<div class='ratings'></div>
											<div class='ratings'></div>
											<div class='ratings'></div>
										</div>
									</div>
									<div>
										<p class='helv'>VB</p>
										<div class='ratingsContainer'>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
											<div class='ratings'></div>
											<div class='ratings'></div>
										</div>
									</div>
									<div>
										<p class='helv'>PHP</p>
										<div class='ratingsContainer'>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
										</div>
									</div>
									<div>
										<p class='helv'>Python</p>
										<div class='ratingsContainer'>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
											<div class='ratings'></div>
											<div class='ratings'></div>
										</div>
									</div>
									<div>
										<p class='helv'>Javascript</p>
										<div class='ratingsContainer'>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
											<div class='ratingsColored'></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div style ='width:500px; height:900px; position:absolute; top:140px; left:265px; margin:0px;
						page-break-after: always;'>
							<h2 class='white helv' style = 'margin-bottom:0px;
															margin-top:0px;
															color:#479099;
															padding-left:20px;'>Work Experience</h2>
							<div style = 'width:100%; 
										border-color:#479099; 
										border-width:2px; 
										height:1px; 
										border-top-style:solid;
										margin:0px;'>
							</div>
							<div style = 'padding-left:20px;'>
								<h3 class='helv' style = 'color:#479099; margin-bottom:0px;'>IT Consultant</h3>
								<label class='helv' style ='margin:0px;'>Logyc</label>
								<p class='helv date' style = 'color:#479099; margin-top:5px; margin-bottom:5px;'>July, 2019 – Present</p>
								<p class='helv date' style = 'color:#479099;  margin-top:5px; margin-bottom:5px;'>Achievement/Tasks:</p>
								<ul style ='margin:0px;'>
									<li class='helv' style = 'font-size:12px; margin:0px;'>Lead and develop a supply chain platform that can help industrial businesses in their supply chain</li>
								</ul>
								
							</div>
							<div style = 'padding-left:20px;'>
								<h3 class='helv' style = 'color:#479099; margin-bottom:0px;'>Software Engineer II</h3>
								<label class='helv' style ='margin:0px;'>Nelsoft Systems Inc.</label>
								<p class='helv date' style = 'color:#479099; margin-top:5px; margin-bottom:5px;'>8C Marc 2000 Tower, 1973 Taft Ave., Manila, Metro Manila, Philippines</p>
								<p class='helv date' style = 'color:#479099; margin-top:5px; margin-bottom:5px;'>October 22, 2018 – February 25, 2019</p>
								<p class='helv date' style = 'color:#479099;  margin-top:5px; margin-bottom:5px;'>Achievement/Tasks:</p>
								<ul style ='margin:0px;'>
									<li class='helv' style = 'font-size:12px; margin:0px;'>Enhancement and maintenance of our “Business
									Inventory and Retail System Application
									Program” through the internet cloud. </li>
								</ul>
								
							</div>
							<div style = 'padding-left:20px;'>
								<h3 class='helv' style = 'color:#479099; margin-bottom:0px;'>Lead Web Developer</h3>
								<label class='helv' style ='margin:0px;'>Zamboanga City Medical Center</label>
								<p class='helv date' style = 'color:#479099; margin-top:5px; margin-bottom:5px;'>Zamboanga City, Philippines</p>
								<p class='helv date' style = 'color:#479099; margin-top:5px; margin-bottom:5px;'>01/2017 - 03/2017</p>
								<p class='helv date' style = 'color:#479099;  margin-top:5px; margin-bottom:5px;'>Achievement/Tasks:</p>
								<ul style ='margin:0px;'>
									<li class='helv' style = 'font-size:12px; margin:0px;'>To develop a website that can track documents.</li>
								</ul>
								<p class='helv date' style = 'color:#479099;  margin-top:5px; margin-bottom:5px; display:inline;'>Contact:</p>
								<p class='helv date' style = ' margin-top:5px; margin-bottom:5px; display:inline;'> Bartolome L. Madriaga - +63906 305 3124</p>
							</div>
							<div style = 'padding-left:20px;'>
								<h3 class='helv' style = 'color:#479099; margin-bottom:0px;'>Junior Odoo Developer</h3>
								<label class='helv' style ='margin:0px;'>Ameci Tumauini Based</label>
								<p class='helv date' style = 'color:#479099; margin-top:5px; margin-bottom:5px;'>Isabela City, Philippines</p>
								<p class='helv date' style = 'color:#479099;  margin-top:5px; margin-bottom:5px; display:inline;'>Contact:</p>
								<p class='helv date' style = ' margin-top:5px; margin-bottom:5px; display:inline;'>Engr. Marc Philippe De Villeres–mpdevilleres@gmail.com</p>
							</div>
							<h2 class='white helv' style = 'margin-bottom:0px;
							margin-top:20px;
							color:#479099;
							padding-left:20px;'>Education</h2>
							<div style = 'width:100%; 
									border-color:#479099; 
									border-width:2px; 
									height:1px; 
									border-top-style:solid;
									margin:0px;'>
							</div>
							<div style = 'padding-left:20px; '>
								<h3 class='helv' style = 'color:#479099; margin-bottom:0px;'>BS Computer Science</h3>
								<label class='helv' style ='margin:0px;'>Western Mindanao State University</label>
								<p class='helv date' style = 'color:#479099; margin-top:5px; margin-bottom:5px;'>Zamboanga City, Philippines</p>
								<p class='helv date' style = 'color:#479099; margin-top:5px; margin-bottom:5px;'>06/2014 - 03/2018</p>
							</div>
							
						</div>
						<div>
							
							<h2 class='white helv' style = 'margin-bottom:0px;
							margin-top:20px;
							color:#479099;
							padding-left:20px;'>Personal Projects</h2>
							<div style = 'width:95%; 
								border-color:#479099; 
								border-width:2px; 
								height:1px; 
								border-top-style:solid;
								margin:0px;'>
							</div>
							<div style = 'padding-left:20px;'>
								<h5 class='helv'>Expiry Date Tracker</h5>
								<ul style ='margin:0px;'>
									<li class='helv' style = 'font-size:12px; margin:0px;'> https://ephraimlambarte@bitbucket.org/ephraimlambarte/echoweaveprofiling.git</li>
									<li class='helv' style = 'font-size:12px; margin:0px;'>A website project for tracking documents that are about to expire.</li>
								</ul>
							</div>
							<div style = 'padding-left:20px;'>
								<h5 class='helv'>Guidance System</h5>
								<ul style ='margin:0px;'>
									<li class='helv' style = 'font-size:12px; margin:0px;'> https://ephraimlambarte@bitbucket.org/ejsolution/project-i.git</li>
									<li class='helv' style = 'font-size:12px; margin:0px;'>A website project for generic guidance system at school administration.</li>
								</ul>
							</div>
							<div style = 'padding-left:20px;'>
								<h5 class='helv'>Greenlight</h5>
								<ul style ='margin:0px;'>
									<li class='helv' style = 'font-size:12px; margin:0px;'> https://ephraimlambarte@bitbucket.org/greenlight20/greenlight.git</li>
									<li class='helv' style = 'font-size:12px; margin:0px;'>A mobile application that uses online api to controll a specific microcontroller</li>
								</ul>
							</div>
							<div style = 'padding-left:20px;'>
								<h5 class='helv'>Inventory System</h5>
								<ul style ='margin:0px;'>
									<li class='helv' style = 'font-size:12px; margin:0px;'> https://ephraimlambarte@bitbucket.org/ephraimlambarte/weddingbells.git</li>
									<li class='helv' style = 'font-size:12px; margin:0px;'>A desktop application for tracking items of a specific inventory.</li>
								</ul>
							</div>
							<div style = 'padding-left:20px;'>
								<h5 class='helv'>Ephraim Lambarte's Resume</h5>
								<ul style ='margin:0px;'>
									<li class='helv' style = 'font-size:12px; margin:0px;'> https://github.com/ephraimlambarte/ephraimlambarte.git</li>
									<li class='helv' style = 'font-size:12px; margin:0px;'>This resume is generated by a script.</li>
								</ul>
							</div>
							<h2 class='white helv' style = 'margin-bottom:0px;
							margin-top:20px;
							color:#479099;
							padding-left:20px;'>References</h2>
							<div style = 'width:95%; 
								border-color:#479099; 
								border-width:2px; 
								height:1px; 
								border-top-style:solid;
								margin:0px;'>
							</div>
							<div style = 'padding-left:20px; margin-top:20px;'>
								<label class='helv' style ='margin:0px;'>Engr. Ferdinand Guardo</label>
								<p class='helv date' style = ' margin-top:5px; margin-bottom:5px;'>Institute of Computer Studies, Instructor I</p>
								<p class='helv date' style = 'margin-top:5px; margin-bottom:5px;'>Western Mindanao State University</p>
								<p class='helv date' style = 'margin-top:5px; margin-bottom:5px;'> Normal Road, Baliwasan, Zamboanga City</p>
								<p class='helv date' style = 'color:#479099;  margin-top:5px; margin-bottom:5px; display:inline;'>Contact:</p>
								<p class='helv date' style = ' margin-top:5px; margin-bottom:5px; display:inline;'>+63915-579-4693</p>
							</div>

							<div style = 'padding-left:20px; margin-top:20px;'>
								<label class='helv' style ='margin:0px;'>Engr. Gadmar Belamide</label>
								<p class='helv date' style = ' margin-top:5px; margin-bottom:5px;'>Institute of Computer Studies, Instructor I</p>
								<p class='helv date' style = 'margin-top:5px; margin-bottom:5px;'>Western Mindanao State University</p>
								<p class='helv date' style = 'margin-top:5px; margin-bottom:5px;'> Normal Road, Baliwasan, Zamboanga City</p>
								<p class='helv date' style = 'color:#479099;  margin-top:5px; margin-bottom:5px; display:inline;'>Contact:</p>
								<p class='helv date' style = ' margin-top:5px; margin-bottom:5px; display:inline;'>+63927-381-0441</p>
							</div>
							<div style = 'padding-left:20px; margin-top:20px;'>
								<label class='helv' style ='margin:0px;'>Mr. Salimar Tahil </label>
								<p class='helv date' style = ' margin-top:5px; margin-bottom:5px;'>Institute of Computer Studies, Instructor I</p>
								<p class='helv date' style = 'margin-top:5px; margin-bottom:5px;'>Western Mindanao State University</p>
								<p class='helv date' style = 'margin-top:5px; margin-bottom:5px;'> Normal Road, Baliwasan, Zamboanga City</p>
								<p class='helv date' style = 'color:#479099;  margin-top:5px; margin-bottom:5px; display:inline;'>Contact:</p>
								<p class='helv date' style = ' margin-top:5px; margin-bottom:5px; display:inline;'>+63905-319-3314</p>
							</div>
						</div>
					</div>
				</body>
			</html>
			";
	
	$dompdf->loadHtml($html);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'portrait');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

	exit(0);
?>