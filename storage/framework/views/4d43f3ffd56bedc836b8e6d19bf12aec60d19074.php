<?php $__env->startSection("title","Bookings"); ?>

<?php $__env->startSection("content"); ?>

<div class="container">
	<h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">Bookings</h3>
	<table class="table"> 
      <thead class="thead-light">
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Message</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      	<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr >
            <td><?php echo e(date("d-m-Y", strtotime($result->visit_date))); ?></td>
            <td><?php echo e($result->user_name); ?></td>
            <td><?php echo e($result->user_email); ?></td>
            <td><?php echo e($result->phone); ?></td>
            <td><?php echo e($result->message); ?></td>
            <td>
              <a href="<?php echo e(route('booking_remove' , [$result->id] )); ?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm" style="margin-top: 2px;">Delete</a>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </tbody>
    </table>   
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.adminpanellayout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>