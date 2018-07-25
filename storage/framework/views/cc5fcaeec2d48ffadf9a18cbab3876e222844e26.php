<div id="sidebar" class="sidebar sidebar-transparent">
    <div data-scrollbar="true" data-height="100%">
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="<?php echo e(asset('asset_admin/assets/img/user-13.jpg')); ?>" alt="" /></a>
                </div>
                <div class="info">
                    <?php echo e(auth('admin')->user()->name); ?>

                    <small><?php echo e(auth('admin')->user()->email); ?></small>
                </div>
            </li>
        </ul>
        <ul class="nav">
            <?php foreach($data as $adminMenu): ?>
            <?php if(isset($adminMenu['parent_id'])&&$adminMenu['parent_id']==0): ?>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <?php if(!empty($adminMenu['icon'])): ?>
                        <i class="<?php echo e($adminMenu['icon']); ?>"></i>
                    <?php endif; ?>
                        <span><?php echo e($adminMenu['name']); ?></span>
                </a>
                <?php if(isset($adminMenu['children'])): ?>
                        <ul class="sub-menu">
                            <?php foreach($adminMenu['children'] as $value): ?>
                            <li class=" <?php if($value['url'] == Request::path()): ?> active <?php endif; ?>">
                                <a href="<?php echo e(url($value['url'])); ?>">
                                    <?php echo e($value['name']); ?>

                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                <?php endif; ?>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        </ul>
    </div>
</div>
<script>
    var activeNode = $('.active');
    activeNode.parents('li').addClass('active');
</script>