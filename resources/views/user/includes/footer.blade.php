<!-- === END CONTENT === -->
	<!-- === BEGIN FOOTER === -->


	<?php 
		$image = array();
		$i=1;
		foreach ($gallery as $photo)
		    $image[$i++]=$photo->image_link;
	 ?>
	 <style type="text/css">
	 	.fixed-len-thum img{
	 		height: 50px;
	 		width: 50px;
	 	}
	 </style>
	<div id="base">
		<div class="container padding-vert-30">
			<div class="row">
				<!-- Thumbs Gallery -->
				<div class="col-md-3 margin-bottom-20">
					<div class="thumbs-gallery">

						<a class="thumbBox fixed-len-thum" rel="lightbox-thumbs" href="{{ asset($image[1]) }}">
							<!-- <img src="asset/img/thumbsgallery/thumbs/image1.jpg" alt="image1.jpg"> -->
							<img src="{{ asset($image[1]) }}">
						<i></i></a>


						<a class="thumbBox fixed-len-thum" rel="lightbox-thumbs" href="{{ asset($image[2]) }}">
							<!-- <img src="asset/img/thumbsgallery/thumbs/image2.jpg" alt="image2.jpg"> -->
							<img src="{{ asset($image[2]) }}">
						<i></i></a>


						<a class="thumbBox fixed-len-thum" rel="lightbox-thumbs" href="{{ asset($image[3]) }}">
							<!-- <img src="asset/img/thumbsgallery/thumbs/image3.jpg" alt="image3.jpg"> -->
							<img src="{{ asset($image[3]) }}">
						<i></i></a>


						<a class="thumbBox fixed-len-thum" rel="lightbox-thumbs" href="{{ asset($image[4]) }}">
							<!-- <img src="asset/img/thumbsgallery/thumbs/image4.jpg" alt="image4.jpg"> -->
							<img src="{{ asset($image[4]) }}">
						<i></i></a>


						<a class="thumbBox fixed-len-thum" rel="lightbox-thumbs" href="{{ asset($image[5]) }}">
							<!-- <img src="asset/img/thumbsgallery/thumbs/image6.jpg" alt="image6.jpg"> -->
							<img src="{{ asset($image[5]) }}">
						<i></i></a>


						<a class="thumbBox fixed-len-thum" rel="lightbox-thumbs" href="{{ asset($image[6]) }}">
							<!-- <img src="asset/img/thumbsgallery/thumbs/image7.jpg" alt="image7.jpg"> -->
							<img src="{{ asset($image[6]) }}">
						<i></i></a>


						<a class="thumbBox fixed-len-thum" rel="lightbox-thumbs" href="{{ asset($image[7]) }}">
							<!-- <img src="asset/img/thumbsgallery/thumbs/image8.jpg" alt="image8.jpg"> -->
							<img src="{{ asset($image[7]) }}">
						<i></i></a>


						<a class="thumbBox fixed-len-thum" rel="lightbox-thumbs" href="{{ asset($image[8]) }}">
							<!-- <img src="asset/img/thumbsgallery/thumbs/image9.jpg" alt="image9.jpg"> -->
							<img src="{{ asset($image[8]) }}">
						<i></i></a>


						<a class="thumbBox fixed-len-thum" rel="lightbox-thumbs" href="{{ asset($image[9]) }}">
							<!-- <img src="asset/img/thumbsgallery/thumbs/image92.jpg" alt="image92.jpg"> -->
							<img src="{{ asset($image[9]) }}">

						<i></i></a>


						<a class="thumbBox fixed-len-thum" rel="lightbox-thumbs" href="{{ asset($image[10]) }}">
							<!-- <img src="asset/img/thumbsgallery/thumbs/image94.jpg" alt="image94.jpg"> -->
							<img src="{{ asset($image[10]) }}">

						<i></i></a>


						<a class="thumbBox fixed-len-thum" rel="lightbox-thumbs" href="{{ asset($image[11]) }}">
							<!-- <img src="asset/img/thumbsgallery/thumbs/image95.jpg" alt="image95.jpg"> -->
							<img src="{{ asset($image[11]) }}">

						<i></i></a>

						<a class="thumbBox fixed-len-thum" rel="lightbox-thumbs" href="{{ asset($image[12]) }}">
							<!-- <img src="asset/img/thumbsgallery/thumbs/image96.jpg" alt="image96.jpg"> -->
							<img src="{{ asset($image[12]) }}">

						<i></i></a>

						</div>			<div class="clearfix"></div>
				</div>
					<!-- End Thumbs Gallery -->
					<!-- Contact Details -->
				<div class="col-md-3 margin-bottom-20 pull-right">
					<h3 class="margin-bottom-10">Contact Details</h3>
					<p>Shahjalal University
					of Science and Technology,
					Sylhet,<br />
					Bangladesh</p>
					<p>Email: <a href="mailto:swapnotthan@gmail.com">swapnotthan@gmail.com</a><br/>
				</div>
					<!-- End Contact Details -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<style type="text/css">
		.footer-custom a{
			color: #7be073;
		}
		.footer-custom a:hover{
			color: #15a133;
			text-decoration: underline;
		}
		.footer-custom i{
			color: #ffffff;
		}
	</style>

<div id="footer">
			<div class="container">
				<div class="row">
					<div id="copyright" class="col-md-4 footer-custom">
						<p>Powered by <a href="http://www.sust.edu/d/cse" target="_blank">CSE,SUST</a> .</p>
						<p>Made with love by <a href="https://www.linkedin.com/in/abu-hanife-nayem-8a9b03119/" target="_blank">Nayem</a> & <a href="https://www.linkedin.com/in/jahid-hasan-polash-0247a2111/" target="_blank"> Polash</a> .</p>
					</div>
					<div id="footermenu" class="col-md-8">
						<ul class="social-icons circle color no-padding pull-right">
						<li class="social-facebook">
                          <a href="http://www.facebook.com/swapnotthan" title="Facebook" target="_blank"></a>
                        </li>
                        <li class="social-googleplus">
                          <a href="https://plus.google.com/communities/111796542250967090947" title="Google+" target="_blank"></a>
                        </li>
                        <li class="social-youtube">
                          <a href="https://www.youtube.com/channel/UCChibIaW-anT4w_8AZ8ov9Q" title="Youtube" target="_blank"></a>
                        </li>
                        </ul>
					</div>
				</div>
			</div>
</div>

{!! Html::script("asset/js/jquery.min.js") !!}
{!! Html::script("asset/js/bootstrap.min.js") !!}
{!! Html::script("asset/js/scripts.js") !!}
{!! Html::script("asset/js/jquery.isotope.js") !!}
{!! Html::script("asset/js/jquery.slicknav.js") !!}
{!! Html::script("asset/js/jquery.visible.js") !!}
{!! Html::script("asset/js/slimbox2.js") !!}
{!! Html::script("asset/js/modernizr.custom.js")!!}
