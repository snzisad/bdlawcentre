<?php $__env->startSection("title","Add Menu"); ?>

<?php $__env->startSection("content"); ?>

<div class="container">

	<form method="post" action="<?php echo e(route('menu_add')); ?>">
    <?php echo e(csrf_field()); ?>

        <div class="row">
			<div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="form-group">
                            <label for="title">Title</label><br>
                            <input type="text" class="form-control" required autofocus name="title" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label for="title">Parent Menu</label><br>
                            <select class="form-control" required autofocus name="parent">
                                <option value=0>Root</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Content</label><br>
                    <div id="summernote2" name="content"></div>
                    <textarea id="summernote" name="content"></textarea>
                </div>
            </div>
        </div>
            
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

    <script>
      $('#summernote').summernote({
        placeholder: 'Enter your text here',
        tabsize: 2,
        height: 200
      });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.adminpanellayout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>