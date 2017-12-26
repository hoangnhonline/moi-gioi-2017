 
  
<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<h1 class="title-home"><?php echo e($detailPage->title); ?></h1>
<div class="clear"></div>
<div class="khung_sanpham">
    <div class="noidung" style="text-align:justify;padding:10px;"><?php echo $detailPage->content; ?></div>
    <div class="clear"></div>
</div>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>