<?php $__env->startSection("title","Membership"); ?>

<?php $__env->startSection("content"); ?>

<div class="container">
	<form method="post" action="<?php echo e(route('membership')); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
            <label for="name">Name</label><br>
            <input type="text" class="form-control" required autofocus name="name" placeholder="Enter Name">
        </div>
				<div class="form-group">
            <label for="picture">Picture</label><br>
            <input type="file" required autofocus name="picture">
        </div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary ">Save</button>
	</form>

	<h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">Membership</h3>
	<table class="table"> 
      <thead class="thead-light">
        <tr>
          <th scope="col">Picture</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php $__currentLoopData = $allmembership; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membership): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr membership_id="<?php echo e($membership->id); ?>">
            <td>
              <img src="<?php echo e(asset('picture/membership/'.$membership->picture)); ?>" width="60px" height="60px">
            </td>
            <td class="membership_name"><?php echo e($membership->name); ?></td>
            <td>
              <a href="#" class="btn btn-primary btn-sm edit_membership_button" data-toggle="modal" data-target=".edit-membership-modal" style="margin-top: 2px;">Edit</a>
              <a href="<?php echo e(asset('/membership/remove/'.$membership->id)); ?>" class="btn btn-danger btn-sm" style="margin-top: 2px;">Delete</a>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </tbody>
    </table>   
</div>


<!-- Edit Modal -->
<div class="modal fade edit-membership-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="post" action="<?php echo e(route('updateMembership')); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

          <input type="hidden" id="membership_id" name="id">
          <div class="modal-header">
            <h5 class="modal-title">Edit Membership</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">

          <div class="form-group">
              <label for="name">Name</label><br>
              <input type="text" class="form-control" id="membership_name" required autofocus  name="name" placeholder="Enter Title">
          </div>
          <div class="form-group">
              <label for="picture">Picture (If you want to change current picture)</label><br>
              <input type="file" name="picture">
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