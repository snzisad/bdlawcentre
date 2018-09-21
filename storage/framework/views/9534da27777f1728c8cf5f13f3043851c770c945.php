<?php $__env->startSection("title","Information"); ?>

<?php $__env->startSection("content"); ?>

<div class="container">
	<form method="post" action="<?php echo e(route('saveinfo')); ?>">
		<?php echo e(csrf_field()); ?>

		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
	                <label for="title">Title</label><br>
	                <input type="text" class="form-control" name="title" placeholder="Enter Title" required autofocus value="BD Law Centre">
	            </div>
	            <div class="form-group">
	                <label for="moto">Moto</label><br>
	                <input type="text" class="form-control" name="moto" placeholder="Enter Moto" required autofocus value="Fast Frowarding Law Cember">
	            </div>
	            <div class="form-group">
	                <label for="address">Address</label><br>
	                <input type="text" class="form-control" name="address" placeholder="Enter Address" required autofocus value="Dhaka, Bangladesh">
	            </div>
				<div class="form-group">
	                <label for="email">Email</label><br>
	                <input type="text" class="form-control" name="email" placeholder="Enter Email" required autofocus value="contact@bdlawcentre.com">
	            </div>
	            <div class="form-group">
	                <label for="phone">Phone</label><br>
	                <input type="text" class="form-control" name="phone" placeholder="Enter Contact Number" required autofocus value="0186545215">
	            </div>
				<div class="form-group">
	                <label for="facebook">Facebook</label><br>
	                <input type="text" class="form-control" name="facebook" placeholder="Enter Facebook ID Link" required autofocus value="http://facebook.com/bdlawcentre">
	            </div>
	            <div class="form-group">
	                <label for="whatsapp">Whatsapp</label><br>
	                <input type="text" class="form-control" name="whatsapp" placeholder="Enter Whatsapp Number" required autofocus value="0186545215">
	            </div>
				<div class="form-group">
	                <label for="skype">Skype</label><br>
	                <input type="text" class="form-control" name="skype" placeholder="Enter Skype ID" required autofocus value="bdlawcentre">
	            </div>
			</div>
			<div class="col-lg-5">
	            <div class="form-group">
	                <label for="viber">Viber</label><br>
	                <input type="text" class="form-control" name="viber" placeholder="Enter Viber Number" required autofocus value="018656548">
	            </div>
				<div class="form-group">
	                <label for="imo">Imo</label><br>
	                <input type="text" class="form-control" name="imo" placeholder="Enter Imo Number" required autofocus value="0184684946">
	            </div>
	            <div class="form-group">
	                <label for="youtube">Youtube</label><br>
	                <input type="text" class="form-control" name="youtube" placeholder="Enter Youtube Link" required autofocus value="http://youtube.com/bdlawcentre">
	            </div>
				<div class="form-group">
	                <label for="twitter">Twitter</label><br>
	                <input type="text" class="form-control" name="twitter" placeholder="Enter Twitter Link" required autofocus value="http://twitter.com/bdlawcentre">
	            </div>
	            <div class="form-group">
	                <label for="linkedin">Linked IN</label><br>
	                <input type="text" class="form-control" name="linkedin" placeholder="Enter Linked In ID" required autofocus value="http://linkedin.com">
	            </div>
				<div class="form-group">
	                <label for="gplus">Google Plus</label><br>
	                <input type="text" class="form-control" name="gplus" placeholder="Enter Google Plus ID" required autofocus value="http://plus.google.com/bdlawcentre">
	            </div>
	            <div class="form-group">
	                <label for="instagram">Instagram</label><br>
	                <input type="text" class="form-control" name="instagram" placeholder="Enter Instagram ID" required autofocus value="http://instagram.com">
	            </div>
	            <div class="form-group">
	                <label for="pinterest">Pinterest</label><br>
	                <input type="text" class="form-control" name="pinterest" placeholder="Enter Pinterest ID" required autofocus value="http://pinterest.com">
	            </div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary ">Save</button>
	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminpanellayout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>