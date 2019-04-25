
<?php
	require_once("partial/header.php");
?>
        <!-- CONTENT -->
        <div id="content">

            <div id="page-header" class="style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">

                            <h4>Nous joindre</h4>

                        </div><!-- col -->
						<div class="col-sm-9">

							<ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li class="active">Nous joindre</li>
                            </ol>

						</div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- page-header -->

			<div class="container">
				<div class="row">
					<div class="col-sm-12">

						<div class="headline">

							<h1>Nous joindre</h1>

						</div><!-- headline -->

					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->

			<div class="container">
				<div class="row">
					<div class="col-sm-7">

						<form id="contact-form" name="contact-form" method="post" action="assets/php/send.php">
                            <fieldset>

                                <div id="alert-area"></div>

                                <input class="col-xs-12" id="name" type="text" name="name" placeholder="Nom">

                                <input class="col-xs-12" id="email" type="email" name="email" placeholder="Courriel">

                                <input class="col-xs-12" id="subject" type="text" name="subject" placeholder="Sujet">

                                <textarea class="col-xs-12" id="message" name="message" rows="8" cols="25" placeholder="Message"></textarea>

                                <input class="btn btn-blue" id="submit" type="submit" name="submit" value="Soumettre">

                            </fieldset>
                        </form>

					</div><!-- col -->
					<div class="col-sm-5">

						<div class="widget widget-contact" style="margin-bottom:50px;">

							<h4 class="widget-title">CRISPESH</h4>

							<ul>
								<li>
									<i class="mt-icons-map-marker"></i>
									255, rue Ontario Est <br>
									Montréal (QC) H2X 1X6
								</li>
								<li>
									<i class="mt-icons-telephone"></i>
									<span class="hidden-xs">514-982-3437 #2836</span>
									<a class="visible-xs-inline" href="tel:5149823437">514-982-3437 #2836</a>
								</li>
								<li>
									<i class="mt-icons-mail"></i>
									<a href="mailto:crispesh@cvm.qc.ca">crispesh@cvm.qc.ca</a>
								</li>
							</ul>

						</div><!-- widget-contact -->

						<div class="widget widget-social">
							<div class="rond_background bleu droite grosseur_2" id="cercle_14"></div>
							<div class="rond_background rouge droite grosseur_1" id="cercle_15"></div>
							<div class="social-media">

								<a class="facebook" href="https://www.facebook.com/Crispesh" target="_blank"><i class="mt-icons-facebook"></i></a>
								<a class="linkedin" href="https://www.linkedin.com/in/catherine-loiselle-22ab77b4?authType=NAME_SEARCH&authToken=WM3S&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A408988546%2CauthType%3ANAME_SEARCH%2Cidx%3A1-4-4%2CtarId%3A1479849945623%2Ctas%3Acatheri" target="_blank"><i class="mt-icons-linkedin"></i></a>


							</div><!-- social-media -->

						</div><!-- widget-social -->

					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">

						<div class="headline">

							<h3>Adresse</h3>

							<br>

							<address class="text-center">
									255, rue Ontario Est <br>
									Montréal (QC) H2X 1X6
							</address>

						</div><!-- headline -->

					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->

		</div><!-- CONTENT -->

        <!-- FOOTER -->
<!-- FOOTER -->
<footer class="site_footer">
    <div id="footer-bottom">

        <div class="container">
            <div class="row">
                <div class="col-sm-5">

                    <div class="widget widget-text">

                        <div>
                            <p class="last">
                                <img src="assets/images/logo-footer.png" alt="">
                            </p>
                        </div>

                    </div><!-- widget-text -->

                </div><!-- col -->
                <div class="col-sm-2">
                        <a href="plan_du_site.php">Plan du site</a>
                </div>
                <div class="col-sm-5">

                    <div class="widget widget-text">

                        <div>
                            <p class="copy-right">Conception Web par <a href="http://conceptionfocus.ca/" target="_blank">Conception Focus</a></p>
                        </div>

                    </div><!-- widget-text -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

    </div><!-- footer-bottom -->

</footer><!-- FOOTER -->

    </div><!-- PAGE-WRAPPER -->


    <!-- GO TOP -->
    <a id="go-top"><i class="mt-icons-arrow-up2"></i></a>


    <!-- jQUERY -->
    <script src="assets/plugins/jquery/jquery-2.1.3.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- VIEWPORT -->
    <script src="assets/plugins/viewport/jquery.viewport.js"></script>

    <!-- MENU -->
	<script src="assets/plugins/menu/hoverIntent.js"></script>
    <script src="assets/plugins/menu/superfish.js"></script>

    <!-- FANCYBOX -->
    <script src="assets/plugins/fancybox/jquery.fancybox.pack.js"></script>

	<!-- REVOLUTION SLIDER -->
    <script src="assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- OWL Carousel -->
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>

    <!-- PARALLAX -->
    <script src="assets/plugins/parallax/jquery.stellar.min.js"></script>

    <!-- ISOTOPE -->
    <script src="assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>

    <!-- PLACEHOLDER -->
    <script src="assets/plugins/placeholders/jquery.placeholder.min.js"></script>

    <!-- CONTACT FORM VALIDATE & SUBMIT -->
    <script src="assets/plugins/validate/jquery.validate.min.js"></script>
    <script src="assets/plugins/submit/jquery.form.min.js"></script>

    <!-- GOOGLE MAPS -->
	<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="assets/plugins/googlemaps/gmap3.min.js"></script>

    <!-- CHARTS -->
	<script src="assets/plugins/charts/jquery.easypiechart.min.js"></script>

	<!-- COUNTER -->
	<script src="assets/plugins/counter/jQuerySimpleCounter.js"></script>

	<!-- STATISTICS -->
	<script src="assets/plugins/statistics/chart.min.js"></script>

	<!-- YOUTUBE PLAYER -->
    <script src="assets/plugins/ytplayer/jquery.mb.YTPlayer.js"></script>

	<!-- HOVERDIR -->
	<script src="assets/plugins/hoverdir/hoverdir.js"></script>

	<!-- MAGNIFY -->
	<script src="assets/plugins/magnify/jquery.magnify.js"></script>

	<!-- INSTAFEED -->
	<script src="assets/plugins/instafeed/instafeed.min.js"></script>

	<!-- TWITTERFETCHER -->
	<script src="assets/plugins/twitterfetcher/twitterfetcher.js"></script>

	<!-- TEXT ROTATOR -->
	<script src="assets/plugins/text-rotator/morphext.min.js"></script>

    <!-- ANIMATIONS -->
    <script src="assets/plugins/animations/wow.min.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>
