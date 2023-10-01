<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Ilya, Ermakov, resume">
    <meta name="description" content="Resume of Ilya Ermakov">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/color.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title><?php echo $__env->yieldContent('page.title', config('app.name')); ?></title>
    <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body>
    <div>
        <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <script src="./js/time.js"></script>
    <script src="./js/jquery-3.7.0.js"></script>
    <script src="./js/slide.js"></script>
    <script>
        document.querySelector('.change').addEventListener('click', () => {
            const pricelist = document.querySelector('.toChange');
            pricelist.classList.toggle('active');
        });
    </script>
</body>

</html>
<?php /**PATH /Users/ermakov/Sites/laravel/resume/resources/views/layouts/base.blade.php ENDPATH**/ ?>