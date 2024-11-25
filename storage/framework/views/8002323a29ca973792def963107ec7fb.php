

<?php $__env->startSection('content'); ?>
<!-- component -->
<div class="max-w-[720px] mx-auto py-32 sm:py-8 lg:py-16">

  <div class="w-full flex justify-between items-center mb-3 mt-1 pl-3">
      <div>
          <h3 class="text-lg font-semibold text-slate-800">Data Barang Masuk</h3>
          <p class="text-slate-500">A list of all the incoming goods.</p>
      </div>
      <div class="ml-3">
          <div class="w-full max-w-sm min-w-[200px] relative">
          <div class="relative">
              <input
              class="bg-white w-full pr-11 h-10 pl-3 py-2 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded transition duration-200 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
              placeholder="Search for incoming goods data..."
              />
              <button
              class="absolute h-8 w-8 right-1 top-1 my-auto px-2 flex items-center bg-white rounded "
              type="button"
              >
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-8 h-8 text-slate-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
              </svg>
              </button>
          </div>
          </div>
      </div>
  </div>
 
  <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
  <table class="w-full text-left table-auto min-w-max">
      <thead>
      <tr>
           <th class="p-4 border-b border-slate-200 bg-slate-50">
           <p class="text-sm font-normal leading-none text-slate-500">
               No
           </p>
           </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
          <p class="text-sm font-normal leading-none text-slate-500">
              Nama Barang
          </p>
          </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
          <p class="text-sm font-normal leading-none text-slate-500">
              Tangga Masuk
          </p>
          </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
          <p class="text-sm font-normal leading-none text-slate-500">
              Jumlah Masuk
          </p>
          </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
          <p class="text-sm font-normal leading-none text-slate-500">
              ID Supplier
          </p>
          </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
          <p class="text-sm font-normal leading-none text-slate-500">
              Edit
          </p>
          </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
          <p class="text-sm font-normal leading-none text-slate-500">
              Delete
          </p>
          </th>
      </tr>
      </thead>
      <tbody>
       <?php $__currentLoopData = $barangMasuk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="hover:bg-slate-50 border-b border-slate-200">
          <td class="p-4 py-5">
           <p class="text-sm text-slate-500"><?php echo e($loop->iteration); ?></p>
          </td>
          <td class="p-4 py-5">
          <p class="text-sm text-slate-500"><?php echo e($barang->nama_barang); ?></p>
          </td>
          <td class="p-4 py-5">
          <p class="text-sm text-slate-500"><?php echo e($barang->tgl_masuk); ?></p>
          </td>
          <td class="p-4 py-5">
          <p class="text-sm text-slate-500"><?php echo e($barang->jml_masuk); ?></p>
          </td>
          <td class="p-4 py-5">
          <p class="text-sm text-slate-500"><?php echo e($barang->id_supplier); ?></p>
          </td>
          <td class="p-4 py-5">
          <p class="text-sm text-slate-500"><a href="<?php echo e(route('barangmasuk.edit', $barang->id)); ?>" class="font-medium text-blue-600 hover:text-blue-800">Edit</a></p>
          </td>
          <td class="p-4 py-5">
           <p class="text-sm text-slate-500">
               <a href="<?php echo e(route('barangmasuk.destroy', $barang->id)); ?>"
                   class="font-medium text-blue-600 hover:text-blue-800"
                   onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')) { document.getElementById('delete-form-<?php echo e($barang->id); ?>').submit(); }">
                    Delete
                </a>
                <form id="delete-form-<?php echo e($barang->id); ?>" action="<?php echo e(route('barangmasuk.destroy', $barang->id)); ?>" method="POST" style="display: none;">
                   <?php echo csrf_field(); ?>
                   <?php echo method_field('DELETE'); ?>
               </form>
           </p>
           </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
   </table>
   <div class="flex justify-between items-center px-4 py-3">
       <div class="text-sm text-slate-500">
           Showing <b>1-5</b> of 45
       </div>
      <div class="flex space-x-1">
      <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-slate-500 bg-white border border-slate-200 rounded hover:bg-slate-50 hover:border-slate-400 transition duration-200 ease">
          Prev
      </button>
      <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-white bg-slate-800 border border-slate-800 rounded hover:bg-slate-600 hover:border-slate-600 transition duration-200 ease">
          1
      </button>
      <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-slate-500 bg-white border border-slate-200 rounded hover:bg-slate-50 hover:border-slate-400 transition duration-200 ease">
          2
      </button>
      <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-slate-500 bg-white border border-slate-200 rounded hover:bg-slate-50 hover:border-slate-400 transition duration-200 ease">
          3
      </button>
      <button class="px-3 py-1 min-w-9 min-h-9 text-sm font-normal text-slate-500 bg-white border border-slate-200 rounded hover:bg-slate-50 hover:border-slate-400 transition duration-200 ease">
          Next
      </button>
      </div>
  </div>
</div>

<div class="relative flex flex-col w-full h-full justify-between items-center mt-5">
   <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded items-center">
   <a href="<?php echo e(route('barangmasuk.create')); ?>">
       Add incoming goods here..
   </a>
   </button>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\supplier\resources\views/barangmasuk/index.blade.php ENDPATH**/ ?>