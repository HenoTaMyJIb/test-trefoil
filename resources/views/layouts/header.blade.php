<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
    <div class="c-navbar">
    <div class="container">
        <!-- BEGIN: BRAND -->
        <div class="c-navbar-wrapper clearfix">
            <div class="c-brand c-pull-left">
                <a href="/home" class="c-logo">
                    <img src="{{\Storage::url(setting('site.logo'))}}" alt="{{setting('site.title')}}" class="c-desktop-logo" style="height: 70px">
                    <img src="{{\Storage::url(setting('site.logo'))}}" alt="{{setting('site.title')}}" class="c-desktop-logo-inverse" style="height: 28px">
                    <img src="{{\Storage::url(setting('site.logo'))}}" alt="{{setting('site.title')}}"  style="height: 35px" class="c-mobile-logo">
                </a>
                <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                <span class="c-line"></span>
                <span class="c-line"></span>
                <span class="c-line"></span>
                </button>
                <button class="c-topbar-toggler" type="button">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
            </div>
            <!-- END: BRAND -->
            <!-- BEGIN: QUICK SEARCH -->
            <!-- END: QUICK SEARCH -->
            <!-- BEGIN: HOR NAV -->
            <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
<!-- BEGIN: MEGA MENU -->
<!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
@include('layouts.navigation')

<!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU -->
            <!-- END: HOR NAV -->
        </div>
        <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
    </div>
</div>
</header>
<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->
