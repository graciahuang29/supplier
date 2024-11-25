

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
   
   <form action="<?php echo e(route('pinjambarang.store')); ?>" method="POST">
     <?php echo csrf_field(); ?>
     <div class="border-b border-gray-900/10 pb-12">
       <h2 class="text-base/7 font-semibold text-gray-900">Add Borrowed Item Data</h2>
       <p class="mt-1 text-sm/6 text-gray-600">This information will be used to track borrowed items.</p>

       <div class="mt-10 col-span-full gap-y-8">
         <label for="id_pinjam" class="block text-sm/6 font-medium text-gray-900">ID Pinjam</label>
         <div class="mt-2">
           <input id="id_pinjam" name="id_pinjam" type="text" autocomplete="id_pinjam" value="<?php echo e(old('id_pinjam')); ?>" required class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>

       <div class="mt-5 col-span-full gap-y-8">
         <label for="peminjam" class="block text-sm/6 font-medium text-gray-900">Peminjam</label>
         <div class="mt-2">
           <input id="peminjam" name="peminjam" type="text" autocomplete="peminjam" value="<?php echo e(old('peminjam')); ?>" required class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>

       <div class="mt-5 col-span-full gap-y-8">
         <label for="id_barang" class="block text-sm/6 font-medium text-gray-900">ID Barang</label>
         <div class="mt-2">
           <input id="id_barang" name="id_barang" type="text" autocomplete="id_barang" value="<?php echo e(old('id_barang')); ?>" required class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>

       <div class="mt-5 col-span-full gap-y-8">
         <label for="nama_barang" class="block text-sm/6 font-medium text-gray-900">Nama Barang</label>
         <div class="mt-2">
           <input id="nama_barang" name="nama_barang" type="text" autocomplete="nama_barang" value="<?php echo e(old('nama_barang')); ?>" required class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>

       <div class="mt-5 col-span-full gap-y-8">
         <label for="jml_barang" class="block text-sm/6 font-medium text-gray-900">Jumlah Pinjam</label>
         <div class="mt-2">
           <input id="jml_barang" name="jml_barang" type="number" autocomplete="jml_barang" value="<?php echo e(old('jml_barang')); ?>" required class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>

       <div class="mt-5 col-span-full gap-y-8">
         <label for="tgl_pinjam" class="block text-sm/6 font-medium text-gray-900">Tanggal Pinjam</label>
         <div class="mt-2">
           <input id="tgl_pinjam" name="tgl_pinjam" type="date" autocomplete="tgl_pinjam" value="<?php echo e(old('tgl_pinjam')); ?>" required class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>

       <div class="mt-5 col-span-full gap-y-8">
    <label for="tgl_kembali" class="block text-sm font-medium text-gray-900">Tanggal Kembali</label>
    <div class="mt-2">
        <input id="tgl_kembali" name="tgl_kembali" type="date" value="<?php echo e(old('tgl_kembali')); ?>" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
    </div>
</div>
<div class="mt-5 col-span-full gap-y-8">
    <label for="kondisi" class="block text-sm font-medium text-gray-900">Kondisi Barang</label>
    <div class="mt-2">
        <input id="kondisi" name="kondisi" type="text" value="<?php echo e(old('kondisi')); ?>" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
    </div>
</div>



       

     </div>

     <div class="mt-6 flex items-center justify-end gap-x-6">
       <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
       <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
     </div>
   </div>
 </form>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\supplier\resources\views/pinjambarang/create.blade.php ENDPATH**/ ?>