<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Akun
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="/limitless/images/image.png" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">Victoria Baker</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Menu</div> <i class="icon-menu" title="Menu"></i></li>
                @foreach ($menu as $key => $data)
                    @if(isset($data['submenu']))
                    <li class="nav-item nav-item-submenu {{$active == $key ? " nav-item-open" : ""}}">
                        <a href="{{ url($data['link']) }}" class="nav-link">
                            {!! $data['icon'] !!}
                            <span>{!! $data['label'] !!}</span>                        
                        </a>
                        <ul class="nav nav-group-sub bg-danger-700" data-submenu-title="{{$data['label']}}"  @if($active == $key) style="display: block;" @else style="display: none;" @endif>
                            @foreach($data['submenu'] as $i => $dt)
                            <li class="nav-item">
                                <a href="{{ url($dt['link']) }}" class="nav-link @if($active == $key){{$activesub == $i ? "active" : ""}} @endif">
                                    {!! $dt['icon'] !!}
                                    <span>{!! $dt['label'] !!}</span>                        
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ url($data['link']) }}" class="nav-link {{$active == $key ? " active" : ""}}">
                            {!! $data['icon'] !!}
                            <span>{!! $data['label'] !!}</span>                        
                        </a>
                    </li>
                    @endif
                @endforeach
                <!-- /main -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>