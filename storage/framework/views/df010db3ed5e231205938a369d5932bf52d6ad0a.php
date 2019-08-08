<?php $__env->startSection("title","Clients Feedback"); ?>

<?php $__env->startSection("content"); ?>

<div class="container">
	<form method="post" action="<?php echo e(route('feedback')); ?>">
    <?php echo e(csrf_field()); ?>

		<div class="row">
			<div class="col-lg-5">

        <div class="form-group">
            <label for="client">Client Name</label><br>
            <input type="text" class="form-control" name="client" placeholder="Enter Client Name">
        </div>
				<div class="form-group">
            <label for="occupation">Occupation</label><br>
            <input type="text" class="form-control" name="occupation" placeholder="Enter Client Occupation">
        </div>
				<div class="form-group">
            <label for="feedback">Feedback</label><br>
            <Textarea class="form-control" name="feedback" placeholder="Enter Feedback" style="height: 100px;"></Textarea>
        </div>

			</div>
		</div>
		<button type="submit" class="btn btn-primary ">Save</button>
	</form>

	<h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">All Feedback</h3>
	<table class="table"> 
      <thead class="thead-light">
        <tr>
          <th scope="col">Client</th>
          <th scope="col">Occupation</th>
          <th scope="col">Feedback</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      	<?php $__currentLoopData = $allfeedback; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr feedback_id="<?php echo e($feedback->id); ?>">
            <td class="feedback_client"><?php echo e($feedback->client); ?></td>
            <td class="feedback_client_occupation"><?php echo e($feedback->occupation); ?></td>
            <td class="feedback_client_feedback"><?php echo e($feedback->feedback); ?></td>
            <td>
              <a href="#" class="btn btn-primary btn-sm edit_feedback_button" data-toggle="modal" data-target=".edit-feedback-modal" style="margin-top: 2px;">Edit</a>
              <a href="<?php echo e(asset('/feedback/remove/'.$feedback->id)); ?>" class="btn btn-danger btn-sm" style="margin-top: 2px;">Delete</a>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </tbody>
    </table>   
</div>


 <!-- Edit Modal -->
<div class="modal fade edit-feedback-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="post" action="<?php echo e(route('updateFeedback')); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

          <input type="hidden" id="feedback_id" name="id">
          <div class="modal-header">
            <h5 class="modal-title">Edit Feedback</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="client">Client Name</label><br>
            <input type="text" id="feedback_client" class="form-control" name="client" placeholder="Enter Client Name">
          </div>
          <div class="form-group">
              <label for="occupation">Occupation</label><br>
              <input type="text" id="feedback_client_occupation" class="form-control" name="occupation" placeholder="Enter Client Occupation">
          </div>
          <div class="form-group">
              <label for="feedback">Feedback</label><br>
              <Textarea class="form-control" id="feedback_client_feedback" name="feedback" placeholder="Enter Feedback" style="height: 100px;"></Textarea>
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
<?php echo $__env->make("layout.adminpanellayout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>