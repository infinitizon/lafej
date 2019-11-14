
	<!-- contact -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>ontact
				<span>U</span>s
			</h3>
			<!-- //tittle heading -->
			<div class="row contact-grids agile-1 mb-5">
				<div class="col-sm-4 contact-grid agileinfo-6 mt-sm-0 mt-2">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-map-marker-alt rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Address</h4>
						<p>13, Jamiu Afuwape street, Egbe Ikotun, Lagos
							<label>Nigeria.</label>
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6 my-sm-0 my-4">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-phone rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Call Us</h4>
						<p> (+234) 802 313 4240
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-envelope-open rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Email</h4>
						<p>
							<a href="mailto:info@lafej.com.ng"> info@lafej.com.ng</a>
						</p>
					</div>
				</div>
            </div>
            <?php

if(isset($result)) {
    ?>
    <div class="alert alert-dismissible fade show <?php echo ($result['success']) ? 'alert-success' : 'alert-danger' ?>">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong><?php echo (!$result['success']) ? 'Error!' : 'Success!' ?></strong> <?php echo $result['message'] ?>
	</div>
    <?php
}
                $this->load->view('contact-form')
            ?>

		</div>
	</div>
	<!-- //contact -->
	<!---728x90--->
	<!-- map -->
	<div class="map mt-sm-0 mt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.8390875275463!2d3.274444414522012!3d6.54199439526829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8f95c4ef43eb%3A0x7f41194cc753c6e!2sJamiu+Afuwape%2C+Egbe%2C+Lagos!5e0!3m2!1sen!2sng!4v1546089550964" 
            allowfullscreen></iframe>
	</div>
	<!-- //map -->
	<!---728x90--->