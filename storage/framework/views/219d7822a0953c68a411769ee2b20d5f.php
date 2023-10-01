<link rel="stylesheet" href="./css/skills.css">
<?php $__env->startSection('page.title', __('Навыки')); ?>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.article','data' => ['class' => 'card bg-blue']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('article'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'card bg-blue']); ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text.skills.h1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text.skills.h1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <br>
            <table>
                <thead>
                    <tr>
                        <th><?php echo e(__('Название')); ?></th>
                        <th><?php echo e(__('Пояснение')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>HTML&CSS</td>
                        <td><?php echo e(__('Я конечно не гранд мастер но основы знаю. Как бы я еще сделал этот сайт.')); ?></td>
                    </tr>
                    <tr>
                        <td>JavaScript</td>
                        <td><?php echo e(__('Знаю немного, использую по мере надобности. На этом сайте тоже использовал.')); ?></td>
                    </tr>
                    <tr>
                        <td>JQuery</td>
                        <td><?php echo e(__('Знаю немного, использую по мере надобности. На этом сайте тоже использовал.')); ?></td>
                    </tr>
                    <tr>
                        <td>SQL</td>
                        <td><?php echo e(__('У меня хорошие знания администратора SQL но и создать базу данных я в сотоянии, как с помощью миграций на Laravel, так и с помощью различных программ, например MS Management studio или phpMyAdmin.')); ?></td>
                    </tr>
                    <tr>
                        <td>PHP</td>
                        <td><?php echo e(__('Куда же без него, свой первый сайт писал на чистом PHP.')); ?></td>
                    </tr>
                    <tr>
                        <td>Laravel</td>
                        <td><?php echo e(__('Всех тонкостей работы с этим фреймворком я конечно не знаю но написал этот сайт и еще несколько.')); ?></td>
                    </tr>
                </tbody>
            </table>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ermakov/Sites/laravel/resume/resources/views/skills/index.blade.php ENDPATH**/ ?>