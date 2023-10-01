<nav class="mynavbar">
    <button class="btn-nav">&#9776;</button>
    <div class="mynav-list">
        <a href="<?php echo e(route('home')); ?>" aria-current="page">
            <?php echo e(__('Главная')); ?>

        </a>
        <a href="<?php echo e(route('about_myself')); ?>" aria-current="page">
            <?php echo e(__('О себе')); ?>

        </a>
        <a href="<?php echo e(route('job')); ?>" aria-current="page">
            <?php echo e(__('Работа')); ?>

        </a>
        <a href="<?php echo e(route('qualification')); ?>" aria-current="page">
            <?php echo e(__('Квалификация')); ?>

        </a>
        <a href="<?php echo e(route('skills')); ?>" aria-current="page">
            <?php echo e(__('Навыки')); ?>

        </a>
        <a class="current-time" id="current_date_time_block"></a>
        <a class="change"><?php echo e(__('ru')); ?></a>
        <div class="toChange">
            <a href="<?php echo e(route('locale', 'en')); ?>">en</a>
            <a href="<?php echo e(route('locale', 'ru')); ?>">ru</a>
            <a href="<?php echo e(route('locale', 'es')); ?>">es</a>
        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnNav = document.querySelector('.btn-nav');
        const mynavList = document.querySelector('.mynav-list');
        btnNav.addEventListener('click', function() {
            document.querySelector('.mynavbar').classList.toggle('active');
        });
    });
</script>
<?php /**PATH /Users/ermakov/Sites/laravel/resume/resources/views/includes/header.blade.php ENDPATH**/ ?>