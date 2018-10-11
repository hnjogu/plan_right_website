  <!-- Custom JavaScript -->
	<script src="js/jquery.bxslider.min.js"></script>

<div class="clearfix"></div>
		<!---start footer---->
        <footer>
            <div id="banner-wrapper">
                <div class="icon-text">
                    <div class="icon-text-icon">
                        <ul class="footer-nav">
                            <li><a href="index.html">Home</a></li>
                            <li ><a href="about-us.html">About Us</a></li>
							<li ><a href="services.html">Services</a></li>
							<li ><a href="consultants.html">Consultants</a></li>
							<li ><a href="contact.html">Contacts</a></li>                            
                        </ul>
                    </div>
                    <div class="icon-text-text">
                        <ul class="social">
                           
                            <li><a href="mailto:christine@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
                            <li>
                            	<a href="https://www.facebook.com/christinenasike"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                            	<a href="https:plus.google.com/christinenasike"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                             	<a href="https://www.twitter.com/christinenasike"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                              	<a href="https://www.youtube.com/christinenasike"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <hr>
    <!-- Page Content -->
<div class="footer-bottom">
    <div class="container text-center">
        <footer class="footer section-padding">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_copyright">
                        <p> Planright &copy;
                            <script>
                              var currentDate = new Date(),
                                  day = currentDate.getDate(),
                                  month = currentDate.getMonth() + 1,
                                  year = currentDate.getFullYear();
                              document.write(day + "/" + month + "/" + year)
                            </script> 
                            All rights  Reserved | by
                        </p>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>
    </div>
</div>
        <!---end footers---->

	
</body>


</html>     
     <!--Slider show controller -->   
        <script type="text/javascript">
			$('.slider1').bxSlider({
				mode: 'fade',
				captions: false,
				auto:true,
				pager:false,
				
			});
			$('.slider2').bxSlider({
				pager:false,
				captions: true,
				maxSlides: 3,
				minSlides: 1,
				slideWidth: 230,
				slideMargin: 10
			});
			$('.slider3').bxSlider({
				mode: 'fade',
				captions: false,
				auto:true,
				pager:false,
				controls:false,
			});
		</script>