<?php $__env->startSection('title', $menu->title ); ?>

<?php $__env->startSection('content'); ?>

    <style>
        .content{
            padding: 40px; 
        }
    </style>

    <p><?php echo $menu->content; ?></p>
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>