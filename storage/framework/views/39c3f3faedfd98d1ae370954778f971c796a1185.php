<?php $__env->startSection("title", $title); ?>

<?php $__env->startSection("content"); ?>

<div class="container">

	<form method="post" action="">
    <?php echo e(csrf_field()); ?>

        <div class="row">
			<div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="form-group">
                            <label for="title">Title</label><br>
                            <input type="text" class="form-control" id='title' required autofocus name="title" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div id="parent-section" class="form-group">
                            <label for="title">Parent Menu</label><br>
                            <select class="form-control" id='parent' required name="parent">
                                <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($parent->id); ?>'><?php echo e($parent->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Content</label><br>

                    <textarea class="content" class="ckeditor" id="summernote2" name="content">
                        <?php if(isset($menu)): ?>
                            <?php echo e($menu->content); ?>

                        <?php endif; ?>
                    </textarea>
                </div>
            </div>
        </div>
            
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

    <?php if(isset($menu)): ?>
        <script src="<?php echo e(asset('content/js/jquery.min.js')); ?>"></script>
        <script>
            $("#title").val("<?php echo e(($menu['title'])); ?>");

            <?php if($menu->parent > 0): ?>
                $("#parent").val("<?php echo e(($menu['parent'])); ?>");
            <?php else: ?> 
                $("#parent").append('<option value=0 selected>Root</option>');
                $("#parent-section").hide();
                
            <?php endif; ?> 
        </script>
    <?php endif; ?> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.adminpanellayout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>