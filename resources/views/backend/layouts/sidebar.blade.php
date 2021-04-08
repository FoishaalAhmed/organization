

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset(auth()->user()->photo)}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->name}}</p>
            </div>
        </div>
        <br>
        <!-- search form -->
        {{-- 
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
                </span>
            </div>
        </form>
        --}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            
            <li class="header">{{__('MAIN NAVIGATION')}}</li>

            <li class="@if(request()->is('admin/dashboard')) {{'active'}} @endif">

                <a href="{{URL::to( '/home')}}">
                <i class="fa fa-dashboard"></i> <span>{{__('Dashboard')}}</span>
                </a>

            </li>

            {{-- <li class="@if(request()->is('admin/orders')) {{'active'}} @endif">

                <a href="{{route('orders.index')}}">
                <i class="fa fa-shopping-cart"></i> <span>{{__('Orders')}}</span>
                </a>

            </li>

            <li class="treeview @if(request()->is('admin/products') || request()->is('admin/products/create') || request()->is('admin/products/*') || request()->is('admin/reviews') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-product-hunt"></i>
                <span>{{__('Products')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/products/create')) {{'active'}} @endif">
                        <a href="{{route('products.create')}}"><i class="fa fa-plus"></i> {{__('New Product')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/products')) {{'active'}} @endif">
                        <a href="{{route('products.index')}}"><i class="fa fa-list"></i> {{__('Products')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/reviews')) {{'active'}} @endif">
                        <a href="{{route('reviews.index')}}"><i class="fa fa-star"></i> {{__('Reviews')}}</a>
                    </li>

                </ul>
            </li>

            <li class="@if(request()->is('admin/sliders')) {{'active'}} @endif">

                <a href="{{route('sliders.index')}}">
                <i class="fa fa-picture-o"></i> <span>{{__('Sliders')}}</span>
                </a>

            </li>

            <li class="@if(request()->is('admin/categories')) {{'active'}} @endif">

                <a href="{{route('categories.index')}}">
                <i class="fa fa-list-alt"></i> <span>{{__('Categories')}}</span>
                </a>

            </li>

            <li class="@if(request()->is('admin/queries')) {{'active'}} @endif">

                <a href="{{route('queries.index')}}">
                <i class="fa fa-question-circle"></i> <span>{{__('Queries')}}</span>
                </a>

            </li>

            <li class="treeview @if(request()->is('admin/users') || request()->is('admin/users/create') || request()->is('admin/users/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>{{__('Users')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/users/create')) {{'active'}} @endif">
                        <a href="{{route('users.create')}}"><i class="fa fa-plus"></i> {{__('New User')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/users')) {{'active'}} @endif">
                        <a href="{{route('users.index')}}"><i class="fa fa-list"></i> {{__('Users')}}</a>
                    </li>

                </ul>
            </li>

            <li class="treeview @if(request()->is('admin/teams') || request()->is('admin/teams/create') || request()->is('admin/teams/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-group"></i>
                <span>{{__('Teams')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/teams/create')) {{'active'}} @endif">
                        <a href="{{route('teams.create')}}"><i class="fa fa-plus"></i> {{__('New Team')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/teams')) {{'active'}} @endif">
                        <a href="{{route('teams.index')}}"><i class="fa fa-list"></i> {{__('Teams')}}</a>
                    </li>

                </ul>
            </li>

            <li class="treeview @if(request()->is('admin/pages') || request()->is('admin/pages/create') || request()->is('admin/pages/*') ) {{'active'}} @endif">
                <a href="#">
                <i class="fa fa-file"></i>
                <span>{{__('Pages')}}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">

                    <li class="@if(request()->is('admin/pages/create')) {{'active'}} @endif">
                        <a href="{{route('pages.create')}}"><i class="fa fa-plus"></i> {{__('New Page')}}</a>
                    </li>

                    <li class="@if(request()->is('admin/pages')) {{'active'}} @endif">
                        <a href="{{route('pages.index')}}"><i class="fa fa-list"></i> {{__('Pages')}}</a>
                    </li>

                </ul>
            </li>

            <li class="@if(request()->is('admin/faqs')) {{'active'}} @endif">

                <a href="{{route('faqs.index')}}">
                <i class="fa fa-question-circle"></i> <span>{{__('Faqs')}}</span>
                </a>

            </li>

            <li class="@if(request()->is('admin/contact')) {{'active'}} @endif">

                <a href="{{route('contact')}}">
                <i class="fa fa-envelope"></i> <span>{{__('Contact')}}</span>
                </a>

            </li>

            <li class="@if(request()->is('admin/sizes')) {{'active'}} @endif">

                <a href="{{route('sizes.index')}}">
                <i class="fa fa-asterisk"></i> <span>{{__('Sizes')}}</span>
                </a>

            </li>

            <li class="@if(request()->is('admin/colors')) {{'active'}} @endif">

                <a href="{{route('colors.index')}}">
                <i class="fa fa-pencil"></i> <span>{{__('Colors')}}</span>
                </a>

            </li> --}}

            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

