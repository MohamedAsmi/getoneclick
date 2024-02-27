<div class="left-side-bar">
    <div class="brand-logo mt-4">
        <div class="text-center" tyle="align-items: center;padding: 10px;align-content: center;">
            <img src="{{asset('assets/images/log.jpg')}}" alt="" class="light-logo" style="height: 60px">
        </div>
            

        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">        
                <li>
                    <a href="{{route('admin.index')}}" class="dropdown-toggle no-arrow {{ Request::is('home') ? 'active' : '' }}">
                        <span class="micon dw dw-right-arrow1"></span><span class="mtext">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('video.index')}}" class="dropdown-toggle no-arrow {{ Request::is('video') ? 'active' : '' }}">
                        <span class="micon dw dw-right-arrow1"></span><span class="mtext">Video / Slider</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('categories.index')}}" class="dropdown-toggle no-arrow {{ Request::is('categories') ? 'active' : '' }}">
                        <span class="micon dw dw-right-arrow1"></span><span class="mtext">Categories</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('project.index')}}" class="dropdown-toggle no-arrow {{ Request::is('project') ? 'active' : '' }}">
                        <span class="micon dw dw-right-arrow1"></span><span class="mtext">Project</span>
                    </a>
                </li>
          
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>