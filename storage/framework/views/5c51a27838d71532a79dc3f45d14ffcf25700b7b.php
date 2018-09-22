<?php $__env->startSection("title","Image Slide"); ?>

<?php $__env->startSection("content"); ?>

<div class="container">
	<form method="post" action="<?php echo e(route('imageslide')); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
            <label for="title">Image Title</label><br>
            <input type="text" class="form-control" required autofocus name="title" placeholder="Enter Title">
        </div>
				<div class="form-group">
            <label for="description">Description</label><br>
            <Textarea class="form-control" name="description" placeholder="Enter Description" value="BD Law Centre" required autofocus style="height: 100px;"></Textarea>
        </div>
				<div class="form-group">
            <label for="banner">Banner</label><br>
            <input type="file" required autofocus name="banner">
        </div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary ">Upload</button>
	</form>

	<h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">Active Slide</h3>
	<table class="table"> 
      <thead class="thead-light">
        <tr>
          <th scope="col">Banner</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr banner_id="<?php echo e($image->id); ?>">
            <td>
              <img src="<?php echo e(asset('picture/banner/'.$image->banner)); ?>" width="150px" height="100px">
            </td>
            <td class="banner_title"><?php echo e($image->title); ?></td>
            <td class="banner_description"><?php echo e($image->description); ?></td>
            <td>
              <a href="#" class="btn btn-primary btn-sm edit_banner_button" data-toggle="modal" data-target=".edit-banner-modal" style="margin-top: 2px;">Edit</a>
              <a href="<?php echo e(asset('/imageslide/remove/'.$image->id)); ?>" class="btn btn-danger btn-sm" style="margin-top: 2px;">Delete</a>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </tbody>
    </table>   
</div>


<!-- Banner Edit Modal -->
<div class="modal fade edit-banner-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="post" action="<?php echo e(route('updateimageslide')); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

          <input type="hidden" id="banner_id" name="id">
          <div class="modal-header">
            <h5 class="modal-title">Edit Banner</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">
          
          <div class="form-group">
              <label for="title">Image Title</label><br>
              <input type="text" id="banner_title" class="form-control" required autofocus name="title" placeholder="Enter Title">
          </div>
          <div class="form-group">
              <label for="description">Description</label><br>
              <Textarea class="form-control" id="banner_description" name="description" placeholder="Enter Description" value="BD Law Centre" required autofocus style="height: 100px;"></Textarea>
          </div>
          <div class="form-group">
              <label for="banner">Banner (If you want to change current banner)</label><br>
              <input type="file" name="banner">
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