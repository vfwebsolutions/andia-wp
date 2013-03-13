
<?php get_header(); ?>

        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-envelope-alt page-title-icon"></i>
                        <h2>Contact Us /</h2>
                        <p>Here is how you can contact us</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us container">
            <div class="row">
                <div class="contact-form span7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <a href="">suscipit lobortis</a> nisl ut aliquip ex ea commodo consequat.</p>
                    <form method="post" action="assets/sendmail.php">
                        <label for="name" class="nameLabel">Name</label>
                          <input id="name" type="text" name="name" placeholder="Enter your name...">
                        <label for="email" class="emailLabel">Email</label>
                          <input id="email" type="text" name="email" placeholder="Enter your email...">
                        <label for="subject">Subject</label>
                          <input id="subject" type="text" name="subject" placeholder="Your subject...">
                        <label for="message" class="messageLabel">Message</label>
                          <textarea id="message" name="message" placeholder="Your message..."></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
                <div class="contact-address span5">
                    <h4>We Are Here</h4>
                    <div class="map"></div>
                    <h4>Address</h4>
                    <p>Via Principe Amedeo 9 <br> 10100, Torino, TO, Italy</p>
                    <p>Phone: 0039 333 12 68 347</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="widget span3">
                        <h4>About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <p><a href="">Read more...</a></p>
                    </div>
                    <div class="widget span3">
                        <h4>Latest Tweets</h4>
                        <div class="show-tweets"></div>
                    </div>
                    <div class="widget span3">
                        <h4>Flickr Photos</h4>
                        <ul class="flickr-feed"></ul>
                    </div>
                    <div class="widget span3">
                        <h4>Contact Us</h4>
                        <p><i class="icon-map-marker"></i> Address: Via Principe Amedeo 9, 10100, Torino, TO, Italy</p>
                        <p><i class="icon-phone"></i> Phone: 0039 333 12 68 347</p>
                        <p><i class="icon-user"></i> Skype: Andia_Agency</p>
                        <p><i class="icon-envelope-alt"></i> Email: <a href="">contact@andia.co.uk</a></p>
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="row">
                    <div class="copyright span4">
                        <p>Copyright 2012 Andia - All rights reserved. Template by <a href="http://azmind.com">Azmind</a>.</p>
                    </div>
                    <div class="social span8">
                        <a class="facebook" href=""></a>
                        <a class="dribbble" href=""></a>
                        <a class="twitter" href=""></a>
                        <a class="pinterest" href=""></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/jquery.tweet.js"></script>
        <script src="assets/js/jflickrfeed.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/jquery.quicksand.js"></script>
        <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

