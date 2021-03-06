<!DOCTYPE html>
<html>
<head>
	<?php  include('header_files.php'); ?>
</head>
<body>
<div class="wrapper">
	<div>
		<?php  include('header.php'); ?>	
	</div>
	
	<!-- Home Design Inner Pages -->
	<div class="ulockd-inner-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ulockd-icd-layer">
						<ul class="list-inline ulockd-icd-sub-menu">
							<li><a href="#"> HOME </a></li>
							<li><a href="#"> > </a></li>
							<li> <a href="#"> CONTACT US </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Inner Pages Main Section -->
	<section class="ulockd-contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<div class="ulockd-cp-title">
						<h2 class="text-uppercase">CONTACT DETAILS</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, excepturi ipsam quae quasi, reprehenderit voluptates ratione tempore.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="contact-info">
						<div class="contact-details one">
							<ul class="contact-place one">
								<li><span class="fa fa-envelope" title="CHeart@email.com"> <small>CHeart@email.com </small></span></li>
								<li><span class="fa fa-phone" title="99 55 66 88 526"> <small> +99 55 66 88 526 </small></span></li>
								<li><span class="fa fa-map-marker" title="Victoria 8007 Australia Envato HQ 121 King Street, Melbourne"> <small>Victoria 8007 Australia Envato  </small></span></li>
								<li><span class="fa fa-checkbox-pen-outline" title="Written Your Message"> <small>Left Some Word </small></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="ulockd-contact-form">
                        <form id="contact_form" name="contact_form" class="contact-form" action="" method="post" novalidate="novalidate">
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_name" name="form_name" class="form-control ulockd-form-fg required" placeholder="Your name" required="required" data-error="Name is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_email" name="form_email" class="form-control ulockd-form-fg required email" placeholder="Your email" required="required" data-error="Email is required." type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
	                            <div class="col-md-3">
	                                <div class="form-group">
	                                    <input id="form_phone" name="form_phone" class="form-control ulockd-form-fg required" placeholder="Phone" required="required" data-error="Phone Number is required." type="text">
	                                    <div class="help-block with-errors"></div>
	                                </div>
	                            </div>
	                            <div class="col-md-3">
	                                <div class="form-group">
	                                    <input id="form_subject" name="form_subject" class="form-control ulockd-form-fg required" placeholder="Subject" required="required" data-error="Subject is required." type="text">
	                                    <div class="help-block with-errors"></div>
	                                </div>
	                            </div>
                                <div class="col-md-12">
		                            <div class="form-group">
		                                <textarea id="form_message" name="form_message" class="form-control ulockd-form-tb required" rows="12" placeholder="Your massage" required="required" data-error="Message is required."></textarea>
		                                <div class="help-block with-errors"></div>
		                            </div>
		                            <div class="form-group ulockd-contact-btn">
		                                <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
		                                <button type="submit" class="btn btn-default ulockd-btn-thm2" data-loading-text="Getting Few Sec...">SUBMIT</button>
		                            </div>
                                </div> 
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
<!--		<div class="container-fluid ulockd-padz">-->
<!--			<div class="row">-->
<!--				<div class="col-md-12">-->
<!--					<div class="ulockd-google-map">-->
<!--		                <div class="" id="map-location" style="height: 312px;"></div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
	</section>

	<div>
		<?php  include('footer.php'); ?>
	</div>
</div>
<?php  include('footer_files.php'); ?>
</body>
</html>