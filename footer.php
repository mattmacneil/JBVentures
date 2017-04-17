
<footer>

	<div class="u-Fill-green">

		<div class="u-Section-wrap">

			<div class="Footer-newsletter u-Section-Pad--side u-Color-white u-Fill-green greenhaze">

				<div class="Layout-left">
				
					<span class="headliner">Stay in the loop:</span>

				</div><!-- layout left -->

				<div class="Layout-right u-Section-Pad--side Footer-newsletter-CTA">

					<div class="Footer-newsletter-button t-dinregular t-center greenhaze toggleNewsletter">
						Sign up for our monthly newsletter
					</div>

				</div><!-- layout right -->

				<div class="clearfix"></div>

			</div><!-- footer newsletter -->

			<div class="NewsletterFields u-Section-Pad--side u-Fill-green u-Color-white">

				<div class="Layout-right u-Float--right u-Section-Pad--side">

					<div class="NewsletterFields-Wrapper">

						<div class="NewsletterFields-left t-dinregular">

							Name:

						</div><!-- newsletter fields left -->

						<div class="NewsletterFields-right">

							<input type="text" name="name" placeholder="First and Last" />

						</div><!-- newsletter fields right -->

						<div class="clearfix"></div>

					</div><!-- newsletter fields wrapper -->

					<div class="NewsletterFields-Wrapper">

						<div class="NewsletterFields-left t-dinregular">

							Email:

						</div><!-- newsletter fields left -->

						<div class="NewsletterFields-right">

							<input type="email" name="name" placeholder="you@youremail.com" />

						</div><!-- newsletter fields right -->

						<div class="clearfix"></div>

					</div><!-- newsletter fields wrapper -->

					<div class="NewsletterFields-Wrapper">

						<input type="submit" value="Sign up" />

					</div><!-- newsletter fields wrapper -->

				</div><!-- layout right -->

				<div class="clearfix"></div>

			</div><!-- newsletter fields -->

		</div><!-- section wrap (footer newsletter) -->

	</div><!-- footer newsletter bg -->

	<div class="u-Fill-lightblue">

		<div class="u-Section-wrap">

			<div class="u-Section-Pad u-Color-darkblue Footer">

				<div class="Layout-left Footer-logo">
				
					<a href="index.php">
					<img src="images/Footer-logo.png" alt="JetBlue Technology Ventures" />
					</a>

				</div><!-- layout left -->

				<div class="Layout-right u-Section-Pad--side">

					<div class="Footer-block-container">

						<div class="footer-block">

							<a href="XXX">Our mission</a><br />
							<a href="XXX">The crew</a><br />
							<a href="XXX">Our portfolio</a><br />
							<a href="XXX">Latest news</a><br />
							<a href="XXX">Connect</a>

						</div><!-- footer block -->

						<div class="footer-block">

							<a href="XXX">Media inquiries</a><br />
							<a href="XXX">Careers</a><br />
							<a href="XXX">Location</a><br />
							<a href="XXX">Advisory team</a><br />
							<a href="XXX">Jetblue.com</a><br />

						</div><!-- footer block -->

						<div class="footer-block">

							<a href="https://twitter.com/JetBlueVentures" target="_blank" style="margin-bottom: 5px;">
							<div class="Footer-block-social u-Fill-darkblue u-Color-lightblue t-right Footer-block-social--twitter">

								<span>@Twitter</span>

							</div>
							</a>

							<a href="https://www.linkedin.com/company/jetblue-technology-ventures?trk=ppro_cprof" target="_blank">
							<div class="Footer-block-social Footer-block-social--linkedin u-Fill-darkblue u-Color-lightblue t-right">

								<span>LinkedIn</span>

							</div>
							</a>

							<a href="#" class="noline">
							<div class="Footer-block-home t-right">
								<span>Go to Top</span>
							</div><!-- footer block home -->
							</a>

						</div><!-- footer block -->

					</div><!-- footer blocks container -->

				</div><!-- layout right -->

				<div class="clearfix"></div>

			</div><!-- .Footer -->

		</div><!-- section wrap (footer) -->

	</div><!-- footer bg -->

	<div class="u-Fill-darkblue Footer-grave u-Color-grey t-center">

		&copy;2017 JetBlue Technology Ventures - NASDAQ : <a href="https://www.google.com/finance?cid=670841" target="_blank">JBLU</a>

	</div>

</footer>

<div class="Navigation-fixed-contact u-Section-Pad--side u-Color-darkblue">

	<div class="Navigation-fixed-contact-link t-center greenhaze">

		<span>Interested<em> in learning more</em>?</span> <span><a href="connect.php" class="noline">Connect With Us<em>!</em></a></span>

		<div class="clearfix"></div>

	</div><!-- navigation fixed contact link -->

</div><!-- navigation fixed contact -->

<div class="Navigation-fix-gutter u-Fill-darkblue u-Color-white t-center">
	<span>Interested<em> in learning more</em>?</span> <span><a href="connect.php" class="noline">Connect With Us<em>!</em></a></span>
</div><!-- navigation fix gutter -->

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

<!-- 
     (c)2017
     Built by matt@mattmacneil.com
-->

</body>
</html>

<script type="text/javascript">

$(function()
{
     $(".toggleNewsletter").click(function()
     {
         $(".NewsletterFields").slideToggle();
         return false;
     }); 
});	

</script>

 <script>
      function initMap() {
        var uluru = {lat: 37.507268, lng: -122.247061};



        var map = new google.maps.Map(document.getElementById('Landing-map-gmaps'), {
          zoom: 11,
          mapTypeControl: false,
          zoomControl: false,
          scaleControl: false,
          scrollwheel: false,
          streetViewControl: false,
          fullscreenControl: false,
          center: uluru,
					styles: [
    			{
        		"elementType": "labels.text",
       			 "stylers": [
            {
                "visibility": "on"
            }
       			 ]
			    },
			    {
			        "featureType": "landscape.natural",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "color": "#f5f5f2"
			            },
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "administrative",
			        "stylers": [
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "transit",
			        "stylers": [
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.attraction",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "landscape.man_made",
			        "elementType": "geometry.fill",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            },
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.business",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.medical",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.place_of_worship",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.school",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.sports_complex",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "road.highway",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            },
			            {
			                "visibility": "simplified"
			            }
			        ]
			    },
			    {
			        "featureType": "road.arterial",
			        "stylers": [
			            {
			                "visibility": "simplified"
			            },
			            {
			                "color": "#ffffff"
			            }
			        ]
			    },
			    {
			        "featureType": "road.highway",
			        "elementType": "labels.icon",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            },
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "road.highway",
			        "elementType": "labels.icon",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "road.arterial",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            }
			        ]
			    },
			    {
			        "featureType": "road.local",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.park",
			        "elementType": "labels.icon",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "poi",
			        "elementType": "labels.icon",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "water",
			        "stylers": [
			            {
			                "color": "#478dc9"
			            }
			        ]
			    },
			    {
			        "featureType": "landscape",
			        "stylers": [
			            {
			                "color": "#000000"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.park",
			        "stylers": [
			            {
			                "color": "#69c040"
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "stylers": [
			            {
			                "color": "#ffffff"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.sports_complex",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "color": "#c7c7c7"
			            },
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "water",
			        "stylers": [
			            {
			                "color": "#478dc9"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.park",
			        "stylers": [
			            {
			                "color": "#69c040"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.park",
			        "stylers": [
			            {
			                "gamma": 1.51
			            }
			        ]
			    },
			    {
			        "featureType": "road.local",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "road.local",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "poi.government",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "landscape",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "elementType": "labels",
			        "stylers": [
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "road.arterial",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "visibility": "simplified"
			            }
			        ]
			    },
			    {
			        "featureType": "road.local",
			        "stylers": [
			            {
			                "visibility": "simplified"
			            }
			        ]
			    }
			]
        });

        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'JetBlue Technology Ventures'
        });

      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKNOrEi9N-L2RrZAgITHaKIyJlj5BjouU&callback=initMap">
    </script>