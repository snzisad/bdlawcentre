<?php $__env->startSection('title',"Welcome to BD Law Centre"); ?>

<?php $__env->startSection('content'); ?>
	<!-- Image Slide -->
	<div class="home">

		<div class="row banner" >
			<div class="col-lg-9" style="margin-top: 5px;">

				<?php if(count($slideimages) > 0): ?>
				<div id="carouselSlideShowIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselSlideShowIndicators" data-slide-to="0" class="active"></li>
					<?php for($i = 1 ; $i< count($slideimages); $i++): ?>
						<li data-target="#carouselSlideShowIndicators" data-slide-to="<?php echo e($i); ?>"></li>
					<?php endfor; ?>
				</ol>

				<div class="carousel-inner">
					
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?php echo e(asset('picture/banner/'.$slideimages[0]->banner)); ?>"/>
					<div class="carousel-text">
						<p class="title"><?php echo e($slideimages[0]->title); ?></p>
						<p class="description"><?php echo e($slideimages[0]->description); ?></p>
						<p class="button carousel_button" data-toggle="modal" data-target="#descriptionModalCenter">Learn More</p>
					</div>
					</div>

					<?php for($i = 1 ; $i< count($slideimages); $i++): ?>
						<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo e(asset('picture/banner/'.$slideimages[$i]->banner)); ?>">
						<div class="carousel-text">
							<p class="title"><?php echo e($slideimages[$i]->title); ?></p>
							<p class="description"><?php echo e($slideimages[$i]->description); ?></p>
							<p class="button carousel_button" data-toggle="modal" data-target="#descriptionModalCenter">Learn More</p>
						</div>
						</div>
					<?php endfor; ?>

				</div>

				<a class="carousel-control-prev" href="#carouselSlideShowIndicators" role="button" data-slide="prev" style="width: 5%">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselSlideShowIndicators" role="button" data-slide="next" style="width: 8%">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-3">

				<div class="modal-dialog  modal-dialog-centered modal-sm help-section">
					<div class="modal-content">
						<form method="post" action="<?php echo e(route('askHelp')); ?>">
							<?php echo e(csrf_field()); ?>

							<div class="modal-header">
								<h5 class="modal-title">HOW CAN WE HELP YOU?</h5>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<input type="text" class="form-control" name="user_name" required autofocus placeholder="Name...">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="user_email" required autofocus placeholder="Email...">
								</div>
								<div class="form-group">
									<input type="number" class="form-control" name="phone" required autofocus placeholder="Phone...">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="message" placeholder="Message..." required autofocus></textarea>
								</div>
								<button type="submit" class="btn btn-outline-secondary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>

	</div>


	<div class="features" id="trainings" style="margin-top: 10px;">
		<div class="container">
			<!-- <div class="row">
				<div class="col-lg-8">
					<div class="section_title_container text-center">
						<h2 class="section_title ">TRAINING</h2>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="section_title_container text-center">
						<h2 class="section_title ">GET IN TOUCH WITH</h2>
					</div>
				</div>

			</div> -->

			<div class="row">

				<div class="col-lg-8">
					<h2 class="section_title" style="text-align: center;">TRAINING</h2>

					<?php if(count($trainings) >0): ?>
					<div class="container">
						<div id="carouselTrainingListIndicators" class="carousel slide" data-ride="carousel">

							<div class="carousel-inner" style="margin-top: 20px;">
							    <div class="carousel-item active">
							    	<div class="row">
										<?php for($i=0; $i< count($trainings) && $i < 2 ; $i++): ?>
									    	<a class="training_list" href="#" data-toggle="modal" data-target="#descriptionModalCenter" style=" margin: auto; margin-top: 0px; margin-bottom: 10px;">
												<img src="<?php echo e(asset('picture/training/'.$trainings[$i]->picture)); ?>">
												<h1 class="training_title"><?php echo e($trainings[$i]->title); ?></h1>
												<p class="training_description"><?php echo e($trainings[$i]->description); ?> </p>
											</a>
							    		<?php endfor; ?>
									</div>
							    </div>

							    <?php for($j=2; $j< count($trainings); $j=$j+2): ?>
								    <div class="carousel-item ">
								    	<div class="row">
							    			<?php for($i=$j; $i< count($trainings) && $i < $j+2 ; $i++): ?>
										    	<a class="training_list" href="#" data-toggle="modal" data-target="#descriptionModalCenter" style=" margin: auto; margin-top: 0px; margin-bottom: 10px;">
													<img src="<?php echo e(asset('picture/training/'.$trainings[$i]->picture)); ?>">
													<h1 class="training_title"><?php echo e($trainings[$i]->title); ?></h1>
													<p class="training_description"><?php echo e($trainings[$i]->description); ?></p>
												</a>
							    			<?php endfor; ?>
										</div>
								    </div>
							    <?php endfor; ?>
							  </div>

							  <a class="carousel-control-prev" href="#carouselTrainingListIndicators" role="button" data-slide="prev"  style="width: 0%">
							    <span class="fa fa-arrow-circle-left fa-2x text-dark" aria-hidden="true"	></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselTrainingListIndicators" role="button" data-slide="next"  style="width: 0%">
							    <span class="fa fa-arrow-circle-right fa-2x text-dark" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
						</div>
						
					</div>
					<?php endif; ?>
				</div>

				<div class="col-lg-4 ">
					<h2 class="section_title" style="text-align: center;">GET IN TOUCH</h2>

					<!-- for mobile and tab-->
					<div class="get_touch_mobile" style="margin-top: 0px;">
						<div class="row">
							<div class="col-lg-5">
								<div class="shape" style="background-image: url(https://image.freepik.com/free-vector/books-stack-realistic_1284-4735.jpg);" data-toggle="modal" data-target=".book-appoinment-modal">
								</div>
								<h1  data-toggle="modal" data-target=".book-appoinment-modal">BOOK APPOINMENT</h1>

							</div>
							<div class="col-lg-5">
								<div class="shape" style="background-image: url(http://www.entitcs.com/style/images/art/s3.jpg);">
								</div>
								<h1>GET LEGAL CONSULTANCY</h1>
							</div>
							<div class="col-lg-5 ">
								<div class="shape" style="background-image: url(https://thumb9.shutterstock.com/display_pic_with_logo/5589/127880048/stock-photo-ask-questions-info-text-word-cloud-concept-word-cloud-tag-cloud-text-business-concept-word-127880048.jpg);">
								</div>
								<h1>ASK YOUR QUESTION</h1>
							</div>
							<div class="col-lg-5">
								<div class="shape" style="background-image: url(http://www.medianv.com/wp-content/uploads/2017/10/how-can-we-help-v2.jpg);"  data-toggle="modal" data-target=".get-help-modal">
								</div>
								<h1   data-toggle="modal" data-target=".get-help-modal">HOW CAN WE HELP YOU?</h1>
							</div>
							
						</div>
					</div>

					<!-- for pc  -->
					<div class="get_touch">
						<div class="row text-center">
							<div class="col-lg-5" data-toggle="modal" data-target=".book-appoinment-modal">
								<div class="shape" style="background-image: url(https://image.freepik.com/free-vector/books-stack-realistic_1284-4735.jpg);">
								</div>
								<h1>BOOK APPOINMENT</h1>

							</div>
							<div class="col-lg-5">
								<div class="shape" style="background-image: url(http://www.entitcs.com/style/images/art/s3.jpg);">
								</div>
								<h1 style="top: 10px; left: -2px;">GET LEGAL CONSULTANCY</h1>
							</div>
							<div class="col-lg-5 ">
								<div class="shape" style="background-image: url(https://thumb9.shutterstock.com/display_pic_with_logo/5589/127880048/stock-photo-ask-questions-info-text-word-cloud-concept-word-cloud-tag-cloud-text-business-concept-word-127880048.jpg);">
								</div>
								<h1 style="left: 25px;top: 13px;">ASK YOUR QUESTION</h1>
							</div>
							<div class="col-lg-5" data-toggle="modal" data-target=".get-help-modal">
								<div class="shape" style="background-image: url(http://www.medianv.com/wp-content/uploads/2017/10/how-can-we-help-v2.jpg);">
								</div>
								<h1 style="left: 10px;">HOW CAN WE HELP YOU?</h1>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Practices -->
<?php if(count($practices) > 0): ?>
	<div class="features" id="practices">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">PRACTICES</h2>
					</div>
				</div>
			</div>

			<div class="row features_row service-row">

				<?php $__currentLoopData = $practices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $practice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-lg-4 feature_col">
						<i class="fa fa-arrow-right text-dark"></i> 
						<a class="practice_title" href="#" data-toggle="modal" data-target="#descriptionModalCenter"> <?php echo e($practice->title); ?></a>
						<p class="practice_descrption" style="display: none;"><?php echo e($practice->description); ?></p>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
		</div>
	</div>
<?php endif; ?>

<?php if(count($practices) > 0): ?>
	<!-- Services (Criminal) -->

	<div class="features" id="service-criminal">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">DETAILS OF PRACTICES</h2>
					</div>
				</div>
			</div>

			<div id="carouselPractiseIndicators" class="carousel slide" data-ride="carousel">

				<div class="carousel-inner">
	
				    <div class="carousel-item active">
						<div class="row features_row">
							<!-- Features Item -->
				    		<?php for($i=0; $i< count($practices) && $i < 4 ; $i++): ?>
								<div class="col-lg-3 feature_col text-center">
									<div class="service_col_1" style="margin: auto;">
										<a href="#" class="practice_details" data-toggle="modal" data-target="#descriptionModalCenter">
											<img src="<?php echo e(asset('picture/practice/'.$practices[$i]->picture)); ?>">
											<div class="title_bg"></div>
											<h5 class="feature_title"><br><?php echo e($practices[$i]->title); ?></h5>
											<p class="feature_description"> <?php echo e($practices[$i]->description); ?></p>
											<div class="more_button">Learn More</div>
										</a>
									</div>
								</div>
							<?php endfor; ?>
						</div>
				    </div>

					<?php for($j=4; $j< count($practices); $j=$j+4): ?>
				    <div class="carousel-item ">
						<div class="row features_row" style="margin: 20px;">
							<!-- Features Item -->
				    		<?php for($i=$j; $i< count($practices) && $i < $j+4 ; $i++): ?>
								<div class="col-lg-3 feature_col text-center">
									<div class="service_col_1" style="margin: auto;">
										<a href="#" class="practice_details" data-toggle="modal" data-target="#descriptionModalCenter">
											<img src="<?php echo e(asset('picture/practice/'.$practices[$i]->picture)); ?>">
											<div class="title_bg"></div>
											<h5 class="feature_title"><br><?php echo e($practices[$i]->title); ?></h5>
											<p class="feature_description"> <?php echo e($practices[$i]->description); ?></p>
											<div class="more_button">Learn More</div>
										</a>
									</div>
								</div>
							<?php endfor; ?>
						</div>
				    </div>
				    <?php endfor; ?>
				  </div>

				  <a class="carousel-control-prev" href="#carouselPractiseIndicators" role="button" data-slide="prev" style="width: 10%;">
				    <span class="fa fa-chevron-circle-left fa-2x text-light" aria-hidden="true"	></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselPractiseIndicators" role="button" data-slide="next" style="width: 10%;">
				    <span class="fa fa-chevron-circle-right fa-2x text-light" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>

		</div>
	</div>
<?php endif; ?>

	<!-- Services (civil) -->
	<div class="features" id="service-civil" style="display: none;">
		<div class="container">
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://d30y9cdsu7xlg0.cloudfront.net/png/666590-200.png" alt="">
						</div>
						<h3 class="feature_title">Land</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/company-visit-907436.png" alt="">
						</div>
						<h3 class="feature_title">Company</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://cdn.icon-icons.com/icons2/1153/PNG/512/1486564172-finance-loan-money_81492.png" alt="">
						</div>
						<h3 class="feature_title">Banking and Finance</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="http://esbinlaw.com/images/parch.png" alt=""></div>
						<h3 class="feature_title">Writ (constitutional) Petitions</h3>
					</div>
				</div>

			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="http://peacockjohnston.co.uk/wp-content/uploads/2015/12/employment-law.png" alt="">
						</div>
						<h3 class="feature_title">Employment Matters</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://www.lawfirms.co.uk/wp-content/themes/law-firms/images/immigration.png" alt="">
						</div>
						<h3 class="feature_title">Immigration</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://research.bournemouth.ac.uk/wp-content/themes/research-site/library/images/theme-icons/entrepreneurship-economic-growth.png" alt="">
						</div>
						<h3 class="feature_title">Opening new business in Bangladesh (FDI)</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://png2.kisspng.com/20180510/riw/kisspng-regulation-computer-icons-regulatory-compliance-me-5af4eaacd50b42.2302424815260003008726.png" alt="">
						</div>
						<h3 class="feature_title">Regulatory Approvals</h3>
					</div>
				</div>
				
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://static.thenounproject.com/png/74832-200.png" alt="">
						</div>
						<h3 class="feature_title">Power of Attorneys and Notary Public services</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://image.flaticon.com/icons/svg/69/69899.svg" alt="">
						</div>
						<h3 class="feature_title">Property disputes</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://tstoaddicts.files.wordpress.com/2015/07/landexpansionicon.png" alt="">
						</div>
						<h3 class="feature_title">Land issues</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://static.wixstatic.com/media/d2e9d0_86cf39fd3afd4ce48948964fb34a94ed~mv2.png/v1/fill/w_565,h_393,al_c,usm_0.66_1.00_0.01/d2e9d0_86cf39fd3afd4ce48948964fb34a94ed~mv2.png" alt="">
						</div>
						<h3 class="feature_title">Succession</h3>
					</div>
				</div>
				
			</div>
			<div class="row features_row">

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="http://www.tringtele.com/img/telecom.png" alt="">
						</div>
						<h3 class="feature_title">Tele Communication</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://static.thenounproject.com/png/10148-200.png" alt="">
						</div>
						<h3 class="feature_title">Public Interest Litigation</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="http://icons-for-free.com/free-icons/png/512/473802.png" alt="">
						</div>
						<h3 class="feature_title">Company matters</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://image.flaticon.com/icons/png/512/18/18281.png" alt="">
						</div>
						<h3 class="feature_title">Admiralty</h3>
					</div>
				</div>
				
			</div>
			<div class="row features_row">

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://cdn0.iconfinder.com/data/icons/industry-oil-gas-power-solid-style/91/Industry_Oil_Gas_Power_12-512.png" alt="">
						</div>
						<h3 class="feature_title">Bankruptcy</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://s17952.pcdn.co/wp-content/uploads/2017/01/wills-probate-no-spouse-no-children-no-parents-but-siblings-icon.png" alt="">
						</div>
						<h3 class="feature_title">Wills and Waqf</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://cdn2.iconfinder.com/data/icons/blue-transports-3/237/Untitled-14-512.png" alt="">
						</div>
						<h3 class="feature_title">Shipping</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://i1.wp.com/bcpslscentral.ca/wp-content/uploads/2014/12/ADR-purple2-icon.png" alt="">
						</div>
						<h3 class="feature_title">ADR</h3>
					</div>
				</div>
				
			</div>
			<div class="row features_row">

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://realtylab.files.wordpress.com/2011/06/a-is-for-arbitration.png" alt="">
						</div>
						<h3 class="feature_title">Arbitration</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://cdn0.iconfinder.com/data/icons/business-management-and-growth-1/64/98-512.png" alt="">
						</div>
						<h3 class="feature_title">Intellectual Property & Trademarks</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://bdembassy.gr/wp-content/uploads/2015/10/bdgovt.png" alt="">
						</div>
						<h3 class="feature_title">Immigration for foreigners in Bangladesh</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/National_emblem_of_Bangladesh.svg/1200px-National_emblem_of_Bangladesh.svg.png" alt="">
						</div>
						<h3 class="feature_title">BEPZA & SPECIAL Economic Zone</h3>
					</div>
				</div>
				
			</div>
			<div class="row features_row">

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon">
							<img src="https://cdn1.iconfinder.com/data/icons/tax-2/92/iconN135-27-512.png" alt="">
						</div>
						<h3 class="feature_title">Income TAX & Customs matter</h3>
					</div>
				</div>

			</div>
		</div>
	</div>


<?php if(count($lawers) > 0): ?>
	<!-- Our Team -->
	<div class="features" id="lawers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title ">LAWYERS</h2>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<?php $__currentLoopData = $lawers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lawer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-lg-3 feature_col">
						<div class="our-team text-center trans_400">
							<div class="team-mate">
								<img src="<?php echo e(asset('picture/lawer/'.$lawer->picture)); ?>">
								<div class="name"><?php echo e($lawer->name); ?></div>
								<p class="designation"><?php echo e($lawer->occupation); ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
		</div>
	</div>
<?php endif; ?>


<?php if(count($clients) > 0): ?>
	<!-- Our Client -->
	<div class="features" id="Client">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title ">OUR CLIENTS</h2>
					</div>
				</div>
			</div>
			
			<div class="row features_row">	
				<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-lg-2">
						<div class="client">
							<img src="<?php echo e(asset('picture/client/'.$client->picture)); ?>">
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
<?php endif; ?>


<?php if(count($feedback) > 0): ?>
	<!-- CLient Feedback -->
	<div class="features" id="feedback">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">CLIENT FEEDBACK</h2>
					</div>
				</div>
			</div>

			<div id="carouselFeedbackIndicators" class="carousel slide" data-ride="carousel">

				<div class="carousel-inner">
	
				    <div class="carousel-item active">
						<div class="row features_row">

		    				<?php for($i=0; $i< count($feedback) && $i < 2 ; $i++): ?>
								<div class="col-lg-6">
									<div class="feedback">
										<p class="feedback-text"><?php echo e($feedback[$i]->feedback); ?></p>
										<p  class="Feedback-user"><?php echo e($feedback[$i]->client); ?>, <?php echo e($feedback[$i]->occupation); ?></p>
									</div>
								</div>
							<?php endfor; ?>
						</div>
				    </div>

					<?php for($j=2; $j< count($feedback); $j=$j+2): ?>				
					    <div class="carousel-item">
							<div class="row features_row">    		

								<?php for($i=$j; $i< count($feedback) && $i < $j+2 ; $i++): ?>
									<div class="col-lg-6">
										<div class="feedback">
											<p class="feedback-text"><?php echo e($feedback[$i]->feedback); ?></p>
											<p  class="Feedback-user"><?php echo e($feedback[$i]->client); ?>, <?php echo e($feedback[$i]->occupation); ?></p>
										</div>
									</div>
								<?php endfor; ?>
							</div>
					    </div>
				    <?php endfor; ?>

				  </div>

				  <a class="carousel-control-prev" href="#carouselFeedbackIndicators" role="button" data-slide="prev" style="width: 8%;">
				    <span class="fa fa-caret-left fa-3x text-dark" aria-hidden="true"	></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselFeedbackIndicators" role="button" data-slide="next" style="width: 8%;">
				    <span class="fa fa-caret-right fa-3x text-dark" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>

		</div>
	</div>
<?php endif; ?>


<?php if(count($membership) > 0): ?>
	<!-- Membership -->
	<div class="features" id="Membership">
		<div class="container">
			<div class="row" style="margin-bottom: 40px;">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title ">MEMBERSHIP</h2>
					</div>
				</div>
			</div>
			
			<div class="row">	

				<?php $__currentLoopData = $membership; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-lg-2">
						<div class="membership">
							<img src="<?php echo e(asset('picture/membership/'.$member->picture)); ?>">
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if(count($links) > 0): ?>
	<div class="features" id="links">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">USEFUL LINKS</h2>
					</div>
				</div>
			</div>

			<div class="row features_row service-row">

				<?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-lg-4 feature_col">
							<i class="fa fa-chrome text-dark"></i> 
							<a href="<?php echo e($link->link); ?>"><?php echo e($link->link); ?>/</a>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
		</div>
	</div>
<?php endif; ?>


<!-- Book Appoinment Modal -->
<div class="modal fade book-appoinment-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-sm">
    <div class="modal-content">
		<form method="post" action="<?php echo e(route('bookAppoinment')); ?>">
    		<?php echo e(csrf_field()); ?>

	      	<div class="modal-header">
		        <h5 class="modal-title">BOOK APPOINMENT</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
	      	</div>
		    <div class="modal-body">

				<div class="form-group">
					<input type="text" class="form-control" name="user_name" required autofocus placeholder="Name...">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="user_email" required autofocus placeholder="Email...">
				</div>
				<div class="form-group">
					<input type="number" class="form-control" name="phone" required autofocus placeholder="Phone...">
				</div>
				<div class="form-group">
		    		<label>Visit Date</label>
		            <input type="date" class="form-control" name="visit_date" required autofocus placeholder="Visit Date...">
		        </div>
				<div class="form-group">
					<textarea class="form-control" name="message" placeholder="Message..." required autofocus></textarea>
				</div>

		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		        <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</form>
    </div>
  </div>
</div>


<!-- Help Modal -->
<div class="modal fade get-help-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-sm">
    <div class="modal-content">
		<form method="post" action="<?php echo e(route('askHelp')); ?>">
			<?php echo e(csrf_field()); ?>


	      	<div class="modal-header">
		        <h5 class="modal-title">HOW CAN WE HELP YOU?</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
	      	</div>

		    <div class="modal-body">
				<div class="form-group">
					<input type="text" class="form-control" name="user_name" required autofocus placeholder="Name...">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="user_email" required autofocus placeholder="Email...">
				</div>
				<div class="form-group">
					<input type="number" class="form-control" name="phone" required autofocus placeholder="Phone...">
				</div>
				<div class="form-group">
					<textarea class="form-control" name="message" placeholder="Message..." required autofocus></textarea>
				</div>
		    </div>

		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		        <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</form>
    </div>
  </div>
</div>

	
<?php $__env->stopSection(); ?>

<div class="modal fade" id="descriptionModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="descriptionModalTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="descriptionModalContent">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php echo $__env->make('layout/layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>