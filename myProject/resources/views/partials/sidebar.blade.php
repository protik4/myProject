<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            
            <li  @if(currentRoute()== 'products.index') class="active" @endif>
            <a href="{{route('products.index')}}"><i class='fa fa-spinner'></i> <span>Product</span></a></li>
            
            <li  @if(currentRoute()== 'customer.index') class="active" @endif>
            <a href="{{route('customer.index')}}"><i class='fa fa-diamond'></i> <span>Customer</span></a></li>
           
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
