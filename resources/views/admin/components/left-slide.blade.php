<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>@auth {{Auth::user()->name}} @endauth</p>
                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="header">公共功能</li>
            <li class="">
                <a href="{{route('admin.home')}}">
                    <i class="fa fa-dashboard"></i> <span>主页</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.banner')}}">
                    <i class="fa fa-dashboard"></i> <span>轮播图</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.users')}}">
                    <i class="fa fa-user"></i> <span>用户</span>
                </a>
            </li>

            <li>
                <a href="{{route('admin.media.index')}}">
                    <i class="fa fa-file-text-o"></i> <span>文件管理</span>
                </a>
            </li>
        </ul>
    </section>
</aside>