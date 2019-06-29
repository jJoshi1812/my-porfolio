<!DOCTYPE html>
<html>
	<?php include 'head.php'  ?>
	<body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-container container container-lg">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.html">
											<img alt="Porto" width="100" height="100" src="img/jj.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links">
										<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-arrow header-nav-main-effect-3 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<?php include 'header.php' ?>
											</nav>
										</div>

									</div>

							</div>
						</div>
					</div>
				</div>
			</header>
<div role="main" class="main">
  <div class="container">
    <div class="row">


      <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
        <h1 class=""><strong>Contact Me</strong></h1>

      </div>
    </div>
  </div>
  <div class="container py-4">

    <div class="row mb-5">
      <div class="col">

        <form id="contactForm" class="contact-form-recaptcha-v3" action="php/contact-form-recaptcha-v3.php" method="POST">
          <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
            <strong>Success!</strong> Your message has been sent to us.
          </div>

          <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
            <strong>Error!</strong> There was an error sending your message.
            <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
          </div>

          <div class="form-row">
            <div class="form-group col-lg-6">
              <label class="required font-weight-bold text-dark text-2">Full Name</label>
              <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group col-lg-6">
              <label class="required font-weight-bold text-dark text-2">Email Address</label>
              <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <label class="font-weight-bold text-dark text-2">Subject</label>
              <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <label class="required font-weight-bold text-dark text-2">Message</label>
              <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
            </div>
          </div>
        </form>

      </div>
    </div>
    <div class=" order-2 order-md-1 align-self-center p-static">
      <h1 class=""><strong>Official Contact</strong></h1>

    </div>
    <div class="row mb-5">

      <div class="col-lg-4">

        <div class="overflow-hidden mb-3">
          <h4 class="pt-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200" data-plugin-options="{'accY': -200}">Amcipher <strong>Labs</strong></h4>
        </div>
        <div class="overflow-hidden mb-3">
          <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400" data-plugin-options="{'accY': -200}">A software Development Company</p>
        </div>
        <div class="overflow-hidden">
          <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600" data-plugin-options="{'accY': -200}">We help you to build great and scalable product
            with proven innovation processes. If you are an individual, startup, or running an existing company then we can help you with every phase of new product development.</p>
        </div>

      </div>
      <div class="col-lg-4 offset-lg-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800" data-plugin-options="{'accY': -200}">

        <h4 class="pt-5"> <strong>Office</strong></h4>
        <ul class="list list-icons list-icons-style-3 mt-2">
          <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Address:</strong> 247, Paschim Vihar, Near Vaishali Police Station, Vaishali Nagar, Jaipur, Rajasthan</li>
          <li><i class="fas fa-phone top-6"></i> <strong>Phone:</strong>083870 87822</li>
          <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:info@amcipher.com">info@amcipher.com</a></li>
        </ul>

      </div>
      <div class="col-lg-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000" data-plugin-options="{'accY': -200}">

        <h4 class="pt-5">Business <strong>Hours</strong></h4>
        <ul class="list list-icons list-dark mt-2">
          <li><i class="far fa-clock top-6"></i> Monday - Saturday - 10am to 7pm</li>
          <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
        </ul>

      </div>
    </div>

  </div>
<?php include 'footer.php'?>
</div>
<?php include 'scripts.php'?>
