<!DOCTYPE html>
<html>
<head>
	<title>PhyCalc | Kinematics</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="kinematics.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<?php
		include_once "navSearch.php";
	?>

	<section id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="animated bounceInDown section-heading">Kinematics: Big Five</h2>
					<div class="pages-nav" id="top-pager">
						<ul class="pager">
							<li><a href="acceleration.php" class="prev-page-btn"><span class="glyphicon glyphicon-chevron-left"></span>Previous: Acceleration</a></li>
							<li><a href="circularMotion.php" class="next-page-btn">Next: Circular Motion<span class="glyphicon glyphicon-chevron-right"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row animated fadeInRight">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<div class="given-variables">
									<form>
										<span class="badge">1</span>
										<span><b>Given:&nbsp;</b></span>
										<label class="checkbox-btn">
										 	<input type="checkbox" class="given-btns" name="checkbox-one" id="given-velocity">
										    <span class="checkmark">V</span> |
										</label>
										<label class="checkbox-btn">
										 	<input type="checkbox" class="given-btns" name="checkbox-one" id="given-initial-velocity">
										    <span class="checkmark">V <sub>i</sub></span> |
										</label>
										<label class="checkbox-btn">
										 	<input type="checkbox" class="given-btns" name="checkbox-one" id="given-final-velocity">
										    <span class="checkmark">V <sub>f</sub></span> |
										</label>
										<label class="checkbox-btn">
										 	<input type="checkbox" class="given-btns" name="checkbox-one" id="given-initial-position">
										    <span class="checkmark">X <sub>i</sub></span> |
										</label>
										<label class="checkbox-btn">
										 	<input type="checkbox" class="given-btns" name="checkbox-one" id="given-final-position">
										    <span class="checkmark">X <sub>f</sub></span> |
										</label>
										<label class="checkbox-btn">
										 	<input type="checkbox" class="given-btns" name="checkbox-one" id="given-acceleration">
										    <span class="checkmark">a</span> |
										</label>
										<label class="checkbox-btn">
										 	<input type="checkbox" class="given-btns" name="checkbox-one" id="given-time">
										    <span class="checkmark">T</span> |
										</label>
										<label class="checkbox-btn">
										 	<input type="checkbox" class="given-btns" name="checkbox-one" id="given-displacement">
										    <span class="checkmark">&Delta;x</span>
										</label>
									</form>
								</div>

								<div class="solve-selection">
									<form>
										<span class="badge">2</span>
										<span><b>Find:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btns" name="radio-one" id="solve-velocity">
										    <span class="checkmark">V</span> |
										</label>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btns" name="radio-one" id="solve-initial-velocity">
										    <span class="checkmark">V <sub>i</sub></span> |
										</label>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btns" name="radio-one" id="solve-final-velocity">
										    <span class="checkmark">V <sub>f</sub></span> |
										</label>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btns" name="radio-one" id="solve-initial-position">
										    <span class="checkmark">X <sub>i</sub></span> |
										</label>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btns" name="radio-one" id="solve-final-position">
										    <span class="checkmark">X <sub>f</sub></span> |
										</label>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btns" name="radio-one" id="solve-acceleration">
										    <span class="checkmark">a</span> |
										</label>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btns" name="radio-one" id="solve-time">
										    <span class="checkmark">T</span> |
										</label>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btns" name="radio-one" id="solve-displacement">
										    <span class="checkmark">&Delta;x</span>
										</label>
									</form>
								</div>

								<div class="unit-selection">
									<form>
										<span class="badge">3</span>
										<span><b>Units:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="unit-btn" name="radio-three" units="m" id="meter-radio-btn"/>
										    <span class="checkmark">meters</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" name="radio-three" units="mi" id="mile-radio-btn"/>
										    <span class="checkmark">miles</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" name="radio-three" units="ft" id="feet-radio-btn"/>
										    <span class="checkmark">meet</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" name="radio-three" units="km" id="kilometer-radio-btn"/>
										    <span class="checkmark">kilometer</span>
										</label>
									</form>
								</div>

								<div class="time-selection">
									<form>
										<span class="badge">4</span>
										<span><b>Time:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="time-units" name="radio-four" units="sec" id="sec-radio-btn">
										    <span class="checkmark">second</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="time-units" name="radio-four" units="min" id="min-radio-btn">
										    <span class="checkmark">minute</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="time-units" name="radio-four" units="hr" id="hour-radio-btn">
										    <span class="checkmark">hour</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="time-units" name="radio-four" units="day" id="day-radio-btn">
										    <span class="checkmark">day</span>
										</label>
									</form>
								</div>

							</div>
						</div>
						<div class="panel-body" id="main-panel">
							<div class="row">
								<div class="col-md-4">
									<h4 class="text-center"><span class="badge">5</span> <strong>Values</strong></h4>
									<form class="form-group">
										<input class="form-control" type="number" id="displacement-field" placeholder="Displacement">
										<input class="form-control" type="number" id="velocity-field" placeholder="Velocity">
										<input class="form-control" type="number" id="initial-velocity-field" placeholder="Initial Velocity">
										<input class="form-control" type="number" id="final-velocity-field" placeholder="Final Velocity">
										<input class="form-control" type="number" id="initial-position-field" placeholder="Initial Position">
										<input class="form-control" type="number" id="final-position-field" placeholder="Final Position">
										<input class="form-control" type="number" id="acceleration-field" placeholder="Acceleration">
										<span class="accl-units">/s<sup>2</sup></span>
										<input class="form-control" type="number" id="time-field" placeholder="Time">
										<div class="form-divider"></div>
										<div class="calc-and-clear">
											<button type="button" id="calculate-btn">Calculate</button>
											<button type="button" id="clear-btn">Clear</button>
										</div>
									</form>
								</div>
								<div class="col-md-8 text-center">
									<h4 id="equation-heading"><strong>Equation</strong></h4>
									<div id="slide-arrows-container">
										<div class="slide-arrow-btn" id="prev-slide-btn"><span class="glyphicon glyphicon-chevron-left"></span></div>
										<div class="slide-arrow-btn" id="next-slide-btn"><span class="glyphicon glyphicon-chevron-right"></span></div>
									</div>
									<div id="outer-image-container">
										<div id="inner-image-container">
											<img src="../img/bigFiveOne.png" class="img-responsive slide" alt="d = (v)(t)"/>
											<img src="../img/bigFiveTwo.png" class="img-responsive slide" alt="Cos Equation"/>
											<img src="../img/bigFiveThree.png" class="img-responsive slide" alt="Tan Equation"/>
											<img src="../img/bigFiveFour.png" class="img-responsive slide" alt="Inv Sin Equation"/>
											<img src="../img/bigFiveFive.png" class="img-responsive slide" alt="Inv Cos Equation"/>
										</div>
										<div id="slide-bar-indicators">
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
										</div>
									</div>
									<div id="animation-btns-container">
										<div class="animate-car-btn"><b>a = 0</b></div>
										<div class="animate-car-btn"><b>V &uarr; &amp; a &uarr;</b></div>
										<div class="animate-car-btn"><b>V &darr; &amp; a &darr;</b></div>
									</div>
									<div id="solo-image">
										<img src="img/equationImageTemplate.png" class="img-responsive" alt="Trig Triangle"/>
										<div class="car-icon" id="car-icon-one"><img src="../img/automobile.png" alt="Car"></div>
										<div class="car-icon" id="car-icon-two"><img src="../img/automobile.png" alt="Car"></div>
										<div class="car-icon" id="car-icon-three"><img src="../img/automobile.png" alt="Car"></div>
										<img src="img/streetlight.png" id="street-light-img"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title text-center"><strong>Background:</strong></div>
						</div>
						<div class="panel-body module-section">
							<div class="module-box">
								<div class="module">
									<div class="module-front" id="first-front">Constant Acceleration</div>
									<div class="module-back" id="first-back">
										Uniform acceleration = constant acceleration
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Constant Velocity</div>
									<div class="module-back">
									 If an object's velocity is not changing, then its acceleration is constant
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Velocity to Acceleration</div>
									<div class="module-back">
										Changing velocity -> experiencing acceleration or deceleration
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front" id="last-front">Object Positioning</div>
									<div class="module-back" id="last-back">
										Net displacement is the difference b/w final and initial position
									</div>
								</div>
							</div>
							<div class="module-img">
								<img src="../img/bigFiveModuleImage.png" class="img-responsive" alt="Big Five Equations">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-body" id="third-panel">
					<div class="row animated fadeInLeft" id="third-pics-row">
						<div class="col-sm-4 third-page-pics">
							<img src="../img/blue-angel.jpeg" alt="Blue Angel Jet" class="img-responsive">
							<div class="img-caption">
								<p>"The highest speed flown during an air show is 700 mph (just under Mach 1) and the lowest speed is 120 mph." <a href="https://web.archive.org/web/20120404171459/http://www.blueangels.navy.mil/show/faq.aspx" target="_blank">(Source)</a></p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<img src="../img/hockey.jpg" alt="Hockey" class="img-responsive">
							<div class="img-caption">
								<p>"The NHL slapshot record belongs to Zdeno Chára of the Boston Bruins, which clocked 108.8 miles per hour." <a href="http://www.nhl.com/ice/page.htm?id=76951&navid=DL%7cNHL%7chome" target="_blank">(Source)</a></p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<img src="../img/trains.jpg" alt="Trains" class="img-responsive">
							<div class="img-caption">
								<p>"Maglev trains can reach up to 431 km/h (268 mph) and remain the fastest high-speed service in the world." <a href="https://en.wikipedia.org/wiki/High-speed_rail" target="_blank">(Source)</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="line-divider"></div>

			<div class="row text-center" id="practice-btns-outer">
				<div class="text-center" id="practice-btns-container">
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-one">Example 1</button>
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-two">Example 2</button>
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-three">Example 3</button>
				</div>
			</div>


				<div class="modal fade example-modal" id="my-modal-one" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="text-center">Displacement</h4>
							</div>
							<div class="modal-body">
								<button class="accordion first-accordion"><strong>Problem</strong></button>
									<div class="modal-panel">
										<p>
											A baseball is thrown from ground level with an initial velocity of 100 m/s at an angle of  25 degrees from the horizontal. How long was the ball in the air for and how far did it travel?
										</p>
									</div>
									<button class="accordion"><strong>Illustration</strong></button>
									<div class="modal-panel">
										<img src="img/kinematicsAccordionImg1.png" alt="Angle Throw" class="img-responsive"/>
									</div>
									<button class="accordion"><strong>Given Variables</strong></button>
									<div class="modal-panel">
										<p>
											<ul>
												<li><b>V(x)-initial</b> : (Vi)(cos&Delta;)</li>
												<li><b>V(y)-initial</b> : (Vy)(sin&Delta;)</li>
												<li><b>Initial Velocity</b> : V(i) = 100 m/s</li>
												<li><b>&Theta;</b> : 25 deg above horizontal</li>
												<li><b>Gravity on Earth</b> : 9.8 m/s<sup>2</sup></li>
												<li><b>Final Velocity</b> : 0 m/s because ball comes to a stop</li>
											</ul>
										</p>
									</div>
									<button class="accordion last-accordion"><strong>Solution</strong></button>
									<div class="modal-panel">
										<p>
											<ol>
												<li><b>V(x)-initial</b> : (100)(cos25&deg;) = 90.63 m/s</li>
												<li><b>V(y)-initial</b> : (100)(sin25&deg;) = 42.26 m/s</li>
												<li><b>Solve for (t)</b> : t = V(y)-initial / g = (100)(sin25&deg;) / 9.8 = 4.31 s</li>
												<li><b>Solve for X(f)</b> : X(f) = V(x)-initial * t = (90.63)(4.31) = 390.6 meters</li>
												<li><b>Ball Traveled</b> : 390.6 meters</li>
											</ol>
										</p>
									</div>
							</div>
							<div class="modal-footer text-center">
								<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade example-modal" id="my-modal-two" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="text-center">Net Displacement</h4>
							</div>
							<div class="modal-body">
								<button class="accordion first-accordion"><strong>Problem</strong></button>
									<div class="modal-panel">
										<p>
											A soccer ball is kicked from the edge of a cliff that is of unknown height with an initial speed of 13 m/s. If it hits the ground 6 seconds later, how high is the cliff and how far from the cliff does the ball land?
										</p>
									</div>
									<button class="accordion"><strong>Illustration</strong></button>
									<div class="modal-panel">
										<img src="img/kinematicsAccordionImg2.png" alt="Cliff kick ball"  class="img-responsive"/>
									</div>
									<button class="accordion"><strong>Given Variables</strong></button>
									<div class="modal-panel">
										<p>
											<ul>
												<li><b>V(x)-initial</b> : 13 m/s</li>
												<li><b>V(y)-initial</b> : 0 because we measure its falling distance</li>
												<li><b>Time interval</b> : 6 seconds</li>
												<li><b>Equation for Cliff Height</b> : Y = V(y)-initial * t + (1/2)(g)(t<sup>2</sup>)</li>
												<li><b>Final Position</b> : X-final = V(x)-initial * t</li>
											</ul>
										</p>
									</div>
									<button class="accordion last-accordion"><strong>Solution</strong></button>
									<div class="modal-panel">
										<p>
											<ol>
												<li><b>Height of Cliff</b> : V(y)-initial = 0, Y(f) = 1/2(-9.8)(6<sup>2</sup>) = -176.4 meters</li>
												<li>Negative Displacement means the ball fell 176.4 meters
													<ul>
														<li>NOTE: we use -9.8 b/c the acceleration is downwards (direction matters)</li>
													</ul>
												</li>
												<li><b>X-final</b> :V(x)-initial * t = (13 m/s)(6 sec) = 78 meters</li>
											</ol>
										</p>
									</div>
							</div>
							<div class="modal-footer text-center">
								<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
							</div>
						</div>
					</div>
				</div>


				<div class="modal fade example-modal" id="my-modal-three" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="text-center">Net Displacement</h4>
							</div>
							<div class="modal-body">
								<button class="accordion first-accordion"><strong>Problem</strong></button>
									<div class="modal-panel">
										<p>
											A kickball is kicked from the ground and travels in a parabolic path and hits the ground 5 seconds later. If the initial vertical speed was 25 m/s, how high did the ball travel?
										</p>
									</div>
									<button class="accordion"><strong>Illustration</strong></button>
									<div class="modal-panel">
										<p>
											<img src="img/kinematicsAccordionImg3.png" alt="Parabolic Path"  class="img-responsive"/>
										</p>
									</div>
									<button class="accordion"><strong>Given Variables</strong></button>
									<div class="modal-panel">
										<p>
											<ul>
												<li><b>V(y)-initial</b> : 25 m/s</li>
												<li><b>Time Interval</b> : 5 seconds (from kick to ball landing)</li>
												<li><b>Gravity on Earth</b> : - 9.8 m/s<sup>2</sup> (downward acceleration)</li>
											</ul>
										</p>
									</div>
									<button class="accordion last-accordion"><strong>Solution</strong></button>
									<div class="modal-panel">
										<p>
											<ol>
												<li><b>Y-max</b> : V(y)-initial * t + (1/2)(g)(t<sup>2</sup>)</li>
												<li><b>Solve for Y-max</b> : (25 m/s)(2.5 sec) + (1/2)(-9.8 m/s<sup>2</sup>)(6.25 sec) = 31.8 meters high
													<ul>
														<li><b>NOTE:</b> We used 2.5 sec becase ball reaches Y-max at (total t) / 2</li>
													</ul>
												</li>
											</ol>
										</p>
									</div>
							</div>
							<div class="modal-footer text-center">
								<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
							</div>
						</div>
					</div>
				</div>

				<?php
					include_once "conversion-calculator.php";
				?>


			<div class="row">
				<ul class="pager">
					<li><a href="acceleration.php" class="prev-page-btn"><span class="glyphicon glyphicon-chevron-left"></span>Previous: Acceleration</a></li>
					<li><a href="circularMotion.php" class="next-page-btn">Next: Circular Motion<span class="glyphicon glyphicon-chevron-right"></span></a></li>
				</ul>
			</div>
	</section>

	<!-- Calculator Modal -->
			<div class="modal fade" id="calculator-modal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center">Calculator</h4>
						</div>
							<div class="modal-body">

								<?php
									include_once "calculator.php";
								?>

								<div id="calculator-tooltip"></div>
							</div>
						<div class="modal-footer text-center" id="calc-modal-footer">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
				<div class="close-modal-btn">
					<span class="btn glyphicon glyphicon-remove"></span>
				</div>
			</div>
			<!-- End of Calculator Modal -->

			<!-- Go back to top -->
			<div id="go-up-container">
				<button type="button" id="go-up-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
			</div>


	<script type="text/javascript" src="kinematics.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="jsCalculator.js"></script>


</body>
</html>
