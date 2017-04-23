<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                	<a href="/dashboard"><img style="max-height: 75px; padding-left: 15px" src="/logo/images.png"></a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           <span class="username username-hide-mobile">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="/profile">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li>
                                <a href="/myEvent">
                                    <i class="icon-calendar"></i> My Events</a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="/logout">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container">
            <!-- BEGIN HEADER SEARCH BOX -->
            <form class="search-form" action="page_general_search.html" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="query">
                    <span class="input-group-btn">
                        <a href="javascript:;" class="btn submit">
                            <i class="icon-magnifier"></i>
                        </a>
                    </span>
                </div>
            </form>
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN MEGA MENU -->
            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
           
            <div class="hor-menu  ">
                <ul class="nav navbar-nav">
                    <li class="menu-dropdown classic-menu-dropdown {{ Request::is('dashboard') ? "active" : "" }}">
                        <a href="/dashboard">
                            <i class="icon-home"></i> Dashboard
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php if(Request::is('About')){ echo "active"; }?>">
                        <a href="/About">
                            <i class="icon-calendar"></i> About
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php if(Request::is('posts')){ echo "active"; }?>">
                        <a href="/posts">
                            <i class="icon-calendar"></i> All Posts
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php if(Request::is('posts')){ echo "active"; }?>">
                        <a href="/TwitterPage">
                            <i class="icon-calendar"></i> Twitter Tweets
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php if(Request::is('posts')){ echo "active"; }?>">
                        <a href="https://api.instagram.com/oauth/authorize/?client_id=4ffe9786b63e40f4854d767be45b9ea0&redirect_uri=http://localhost:8000/instaPage&response_type=code&scope=public_content">
                            <i class="icon-calendar"></i> Instagram Page
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown <?php if(Request::is('posts')){ echo "active"; }?>">
                        <a href="/FlickrPage">
                            <i class="icon-calendar"></i> Flickr Page
                            <span class="arrow"></span>
                        </a>
                    </li>
                    @if(Auth::user()->role === "admin")
                    <li class="menu-dropdown classic-menu-dropdown <?php if(Request::is('posts')){ echo "active"; }?>">
                        <a href="/showAllUsers">
                            <i class="icon-calendar"></i> Configure Users
                            <span class="arrow"></span>
                        </a>
                    </li>
                    @endif
                    
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>