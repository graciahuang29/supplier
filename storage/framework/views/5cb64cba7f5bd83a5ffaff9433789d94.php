


<?php $__env->startSection('content'); ?>
<!-- component -->


<?php if($errors->any()): ?>
   <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
       <ul>
           <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li><?php echo e($error); ?></li>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </ul>
   </div>
<?php endif; ?>


<div class="max-w-[720px] mx-auto py-32 sm:py-8 lg:py-16">
 <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border px-6 py-6">
   
   <form action="<?php echo e(route('suplier.update', $suplier->id)); ?>" method="POST">
     <?php echo csrf_field(); ?>
     <?php echo method_field('put'); ?>
     <div class="border-b border-gray-900/10 pb-12">
       <h2 class="text-base/7 font-semibold text-gray-900">Edit Supplier Data</h2>
       <p class="mt-1 text-sm/6 text-gray-600">Update the necessary information carefully.</p>


       <div class="mt-10 col-span-full gap-y-8">
         <label for="id_suplier" class="block text-sm/6 font-medium text-gray-900">ID Supplier</label>
         <div class="mt-2">
           <input id="id_suplier" name="id_suplier" type="text" value="<?php echo e(old('id_supplier', $suplier->id_supplier)); ?>" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" readonly>
         </div>
       </div>


       <div class="mt-5 col-span-full gap-y-8">
         <label for="nama_supplier" class="block text-sm/6 font-medium text-gray-900">Name</label>
         <div class="mt-2">
           <input id="nama_supplier" name="nama_supplier" type="text" value="<?php echo e(old('nama_supplier', $suplier->nama_supplier)); ?>" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>


       <div class="mt-5 col-span-full gap-y-8">
         <label for="alamat_suplier" class="block text-sm/6 font-medium text-gray-900">Address</label>
         <div class="mt-2">
           <textarea id="alamat_suplier" name="alamat_supplier" rows="3" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"><?php echo e(old('alamat_supplier', $suplier->alamat_supplier)); ?></textarea>
         </div>
       </div>


       <div class="mt-5 col-span-full gap-y-8">
         <label for="telp_supplier" class="block text-sm/6 font-medium text-gray-900">Phone Number</label>
         <div class="mt-2">
           <input id="telp_supplier" name="telp_supplier" type="text" value="<?php echo e(old('telp_supplier', $suplier->telp_supplier)); ?>" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>
     </div>


     <div class="mt-6 flex items-center justify-end gap-x-6">
       <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
       <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
     </div>
   </form>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\supplier\resources\views/suplier/edit.blade.php ENDPATH**/ ?>