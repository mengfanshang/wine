<?php $__env->startSection('admin-auth-page-container'); ?>
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="<?php echo e(asset('asset_admin/assets/img/login-bg/bg-7.jpg')); ?>" data-id="login-cover-image" alt="" />
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <span class="logo"></span> 后台管理中心
                        <small>河北山佳环保科技有限公司</small>
                    </div>
                    <div class="icon">
                        <a href="/"><i class="fa fa-sign-in"></i></a>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
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
                    <form action="<?php echo e(url('admin/login')); ?>" method="POST" class="margin-bottom-0">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group m-b-15">
                            <input type="text" name="email" class="form-control input-lg" placeholder="邮箱地址" value="<?php echo e(old('email')); ?>"/>
                        </div>
                        <div class="form-group m-b-15">
                            <input type="password" name="password" class="form-control input-lg" placeholder="密码" />
                        </div>
                        <div class="checkbox m-b-30">
                            <label>
                                <input name="remember" type="checkbox" /> 记住密码
                            </label>
                        </div>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">登　录</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40">
                            <?php /*Not a member yet? Click <a href="register_v3.html" class="text-success">here</a> to register.*/ ?>
                        </div>
                        <hr />
                        <p class="text-center text-inverse">
                            <?php /*&copy; Color Admin All Right Reserved 2015*/ ?>
                        </p>
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>