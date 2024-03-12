<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend_css/assets/images/logo.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="mm-active">
            <a href="{{ ('/admin/home') }}">
                <div class="parent-icon"><i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('slider.index') }}">
                <div class="parent-icon"><i class='bx bx-repeat'></i>
                </div>
                <div class="menu-title">Slider</div>
            </a>
        </li>
        {{-- <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                </div>
                <div class="menu-title">Product</div>
            </a>
            <ul>
                <li> <a href="{{route('category.index')}}"><i class="bx bx-right-arrow-alt"></i>Category</a>
                </li>
                <li> <a href="{{ route('product.index') }}"><i class="bx bx-right-arrow-alt"></i>Product</a>
                </li>
            </ul>
        </li> --}}
        <li>
          <a href="{{route('gallery.index')}}">
              <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                </div>
                <div class="menu-title">Gallery</div>
           </a>
        </li>
        <li>
            <a href="{{route('award.index')}}">
                <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                  </div>
                  <div class="menu-title">Award & Certificate</div>
             </a>
        </li>
        <li>
            <a href="{{route('support.index')}}">
                <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                  </div>
                  <div class="menu-title">Brand Support No.</div>
             </a>
        </li>
        <li>
        <a href="{{route('project.index')}}">
            <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                </div>
                <div class="menu-title">Project</div>
            </a>
        </li>
        <li>
            <a href="{{route('enquiry.index')}}">
                <div class="parent-icon"><i class="bx bx-message-square-detail"></i>
                </div>
                <div class="menu-title">Contact Us</div>
            </a>
        </li>
        {{--<li>
            <a href="{{route('inquiry.index')}}">
                <div class="parent-icon"><i class="bx bx-message-square-detail"></i>
                </div>
                <div class="menu-title">Product Enquiry</div>
            </a>
        </li> --}}
        <li>
          <a href="{{route('logo.index')}}">
              <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                </div>
                <div class="menu-title">Client Logo</div>
           </a>
        </li>
        {{-- <li>
            <a href="{{route('profile.index')}}">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">User Profile</div>
            </a>
        </li> --}}

    </ul>
    <!--end navigation-->
</div>
