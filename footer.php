 <!-- begin The Footer -->
   <footer class="site-footer" style="background: rgb(71,118,99) !important;color:white;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">About Desvy International School</h4>
                        <p>At Desvy International School we exhibit creative skills in children, 
                        because we believe that the goal of education is not only to increase the amount of knowledge, 
                        but to create men who are capable of doing new things in our society. 
                        </br>
                        </br>Contact :</br>055 741 3250</br> 054 159 1550 </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Favourites</h4>
                        <ul class="list-links">
                            <li><a href="index.php">A to Z Index</a></li>
                            <li><a href="admission.php">Admissions</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="mission.php">Mission and Vision</a></li>
                            <li><a href="Curriculum.php">Curriculum</a></li>
                            <li><a href="Contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">QUICKLINKS</h4>
                        <ul class="list-links">
                            <li><a href="#">Future Students</a></li>
                            <li><a href="#">Current Students</a></li>
                            <li><a href="#">Staff</a></li>
                            <li><a href="#">International</a></li>
                            <li><a href="#">Postdocs</a></li>
                            <li><a href="#">Alumni</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">QUICKLINKS</h4>
                        <ul class="list-links">
                            <li><a href="admission.php">Courses</a></li>
                            <li><a href="admission.php">Apply Now</a></li>
                           <!-- <li><a href="gallery.php">Scholarships</a></li> -->
                            <li><a href="gallery.php">FAQs</a></li>
                            <li><a href="contact.php">Enquiries</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <ul class="footer-media-icons">
                            <li><a href="https://www.facebook.com/desvyinternationalschool/" class="fa fa-facebook"></a></li>
                            <!--<li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-youtube"></a></li>
                            <br>  <br>  <br>
                            <li><a href="#" class="fa fa-linkedin"></a></li>-->
                            <li><a href="https://www.instagram.com/desvyinternational/" class="fa fa-instagram"></a></li>
                            <!--<li><a href="#" class="fa fa-apple"></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li> -->
                        </ul>
                    </div>
                </div>
            </div> <!-- /.row -->

            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-5">
                        <p class="small-text">&copy; Desvy International School 2022. Designed by <a href="#">2it Consults</a></p>
                    </div> <!-- /.col-md-5 -->
                    <div class="col-md-7">
                        <ul class="footer-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="aims.php">About</a></li>
                            <li><a href="gallery.php">Events</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="admission.php">Admissions</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div> <!-- /.col-md-7 -->
                </div> <!-- /.row -->
            </div> <!-- /.bottom-footer -->

        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->


    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>


 
    <script>
        function initialize() {
          var mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(5.7063635, -0.0826331)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>


    </body>


</html>