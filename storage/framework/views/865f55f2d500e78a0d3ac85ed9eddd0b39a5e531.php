<?php $__env->startSection('user-auth-page-container'); ?>
    <div class="login-content">
        <?php if(count($errors)>0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach($errors->all() as $error): ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(url('user/login')); ?>" method="POST" class="margin-bottom-0">
            <?php echo e(csrf_field()); ?>

            <div class="form-group m-b-20">
                <input type="text" name="email" class="form-control input-lg" placeholder="邮箱地址" value="<?php echo e(old('email')); ?>"/>
            </div>
            <div class="form-group m-b-20">
                <input type="password" name="password" class="form-control input-lg" placeholder="密码" />
            </div>
            <div class="checkbox m-b-20">
                <label>
                    <input name="remember" type="checkbox" /> 记住密码
                </label>
            </div>
            <div class="login-buttons">
                <button type="submit" class="btn btn-success btn-block btn-lg">登 录</button>
            </div>
            <div class="m-t-20">
                没有账号? 马上 <a href="<?php echo e(url('user/register')); ?>">注册</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('users.layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>