<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<footer class="footer">
    <h2><?php echo e(__('Карта сайта:')); ?></h2>
    <div class="footer-left">
        <a href="<?php echo e(route('home')); ?>" aria-current="page">
            <?php echo e(__('Главная')); ?>

        </a>
        <br>
        <a href="<?php echo e(route('about_myself')); ?>" aria-current="page">
            <?php echo e(__('О себе')); ?>

        </a>
        <br>
        <a href="<?php echo e(route('job')); ?>" aria-current="page">
            <?php echo e(__('Работа')); ?>

        </a>
        <br>
        <a href="<?php echo e(route('qualification')); ?>" aria-current="page">
            <?php echo e(__('Квалификация')); ?>

        </a>
        <br>
        <a href="<?php echo e(route('skills')); ?>" aria-current="page">
            <?php echo e(__('Навыки')); ?>

        </a>
    </div>
    <h2><?php echo e(__('Мои контакты:')); ?></h2>
    <div class="footer-right">
        <a href="https://mail.google.com/" target="_blank">ilyayermakov85@gmail.com</a>
        <br>
        <a href="https://t.me/ilyayermakov" target="_blank"><img class="social"
                src="./img/social/icons8-telegram-48.png">Telegram</a>
        <br>
        <a href="https://wa.me/qr/HP33NCV6GS7NP1" target="_blank"><img class="social"
                src="./img/social/icons8-whatsapp-48.png">WhatsApp</a>
    </div>
</footer>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /Users/ermakov/Sites/laravel/resume/resources/views/includes/footer.blade.php ENDPATH**/ ?>