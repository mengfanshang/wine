<div id="sidebar" class="sidebar sidebar-transparent">
    <div data-scrollbar="true" data-height="100%">
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="{{ asset('asset_admin/assets/img/user-13.jpg') }}" alt="" /></a>
                </div>
                <div class="info">
                    {{ auth('admin')->user()->name }}
                    <small>{{ auth('admin')->user()->email }}</small>
                </div>
            </li>
        </ul>
        <ul class="nav">
            @foreach($data as $adminMenu)
            @if(isset($adminMenu['parent_id'])&&$adminMenu['parent_id']==0)
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    @if(!empty($adminMenu['icon']))
                        <i class="{{ $adminMenu['icon'] }}"></i>
                    @endif
                        <span>{{ $adminMenu['name'] }}</span>
                </a>
                @if(isset($adminMenu['children']))
                        <ul class="sub-menu">
                            @foreach($adminMenu['children'] as $value)
                            <li class=" @if($value['url'] == Request::path()) active @endif">
                                <a href="{{ url($value['url']) }}">
                                    {{ $value['name'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                @endif
            </li>
            @endif
            @endforeach
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        </ul>
    </div>
</div>
<script>
    var activeNode = $('.active');
    activeNode.parents('li').addClass('active');
</script>