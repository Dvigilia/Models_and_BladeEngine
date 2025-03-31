<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body class="bg-gray-100">
    <!-- Header Partial -->
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Book List</h1>

        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr class="border-b">
                    <th class="px-4 py-2">ISBN</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Author</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Published Date</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-b">
                        <td class="px-4 py-2"><?php echo e($book->isbn); ?></td>
                        <td class="px-4 py-2"><?php echo e($book->title); ?></td>
                        <td class="px-4 py-2"><?php echo e($book->author); ?></td>
                        <td class="px-4 py-2"><?php echo e($book->description); ?></td>
                        <td class="px-4 py-2"><?php echo e($book->date_published); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <!-- Footer Partial -->
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\Admin\Desktop\Models_and_BladeEngine\resources\views/books/index.blade.php ENDPATH**/ ?>