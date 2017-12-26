<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<?php foreach($estateTypeList as $et): ?>
<p class="title-home"><a><?php echo $et->name; ?></a></p>
<div class="clear"></div>
<?php if(!empty($productArr[$et->id])): ?>
<div>
   
   <?php foreach($productArr[$et->id] as $pro): ?>
   <?php //dd($pro); ?>
   <div class="product ">
      <div class="hinhsp">
         <a href="<?php echo e(route('chi-tiet', [$pro->slug_loai, $pro->slug, $pro->id])); ?>"><img
            class="img_trung" src="<?php echo e(Helper::showImageThumb($pro->image_url)); ?>"
            alt="đất nền xã nhuận đức ,củ chi" style="height: 198.587px;"></a>
         <a class="chitiet" href="<?php echo e(route('chi-tiet', [$pro->slug_loai, $pro->slug, $pro->id])); ?>">Chi tiết</a>
         <a class="tham-gia-ban" href="javascript:;" <?php if(!Session::get('login')): ?> data-toggle="modal" data-target="#login-modal" <?php endif; ?>>Tham gia bán</a> 
         <div class="clear"></div>
      </div>
      <a class="tensp" href="<?php echo e(route('chi-tiet', [$pro->slug_loai, $pro->slug, $pro->id])); ?>"><?php echo $pro->title; ?></a>        
      
         <p class="giagoc">Giá: <span
            style="color:#1060EB;"><?php echo number_format($pro->price); ?> <?php echo Helper::getName($pro->price_unit_id, 'price_unit'); ?></span></p>     
      
         <p class="size_chatlieu">Hoa hồng :
            <span style="color:#1060EB;"><?php echo e($pro->hoa_hong); ?>%</span>
         </p>
      
      <div class="clear"></div>
   </div> 
   <?php endforeach; ?>  
   
   <div class="phantrang">
      <a href="#">Xem thêm</a>
   </div>
   <div class="clear"></div>
</div>
<?php endif; ?>
<?php endforeach; ?>
<?php $__env->stopSection(); ?>