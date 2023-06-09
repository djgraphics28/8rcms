<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin Panel</title>

    @include('admin.includes.styles')

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    @include('admin.includes.scripts')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            @php
                $url = Request::path();
                $conName = explode('/', $url);
                if (!isset($conName[3])) {
                    $conName[3] = '';
                }
                if (!isset($conName[2])) {
                    $conName[2] = '';
                }
            @endphp

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-text mx-3">Admin Panel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Dashboard -->
            <li class="nav-item @if ($conName[1] == 'dashboard') active @endif">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>


            <!-- General Settings -->
            <li class="nav-item @if ($conName[1] == 'setting' && $conName[2] == 'general') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting"
                    aria-expanded="true" aria-controls="collapseSetting">
                    <i class="fas fa-cog"></i>
                    <span>General Settings</span>
                </a>
                <div id="collapseSetting" class="collapse @if ($conName[1] == 'setting' && $conName[2] == 'general') show @endif"
                    aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item @if ($conName[3] == 'logo') active @endif"
                            href="{{ route('admin.general_setting.logo') }}">Logo</a>
                        <a class="collapse-item @if ($conName[3] == 'favicon') active @endif"
                            href="{{ route('admin.general_setting.favicon') }}">Favicon</a>
                        <a class="collapse-item @if ($conName[3] == 'loginbg') active @endif"
                            href="{{ route('admin.general_setting.loginbg') }}">Login Background</a>
                        <a class="collapse-item @if ($conName[3] == 'topbar') active @endif"
                            href="{{ route('admin.general_setting.topbar') }}">Top Bar</a>
                        <a class="collapse-item @if ($conName[3] == 'banner') active @endif"
                            href="{{ route('admin.general_setting.banner') }}">Banner</a>
                        <a class="collapse-item @if ($conName[3] == 'footer') active @endif"
                            href="{{ route('admin.general_setting.footer') }}">Footer</a>
                        <a class="collapse-item @if ($conName[3] == 'sidebar') active @endif"
                            href="{{ route('admin.general_setting.sidebar') }}">Sidebar</a>
                        <a class="collapse-item @if ($conName[3] == 'color') active @endif"
                            href="{{ route('admin.general_setting.color') }}">Color</a>
                        <a class="collapse-item @if ($conName[3] == 'preloader') active @endif"
                            href="{{ route('admin.general_setting.preloader') }}">Preloader</a>
                        <a class="collapse-item @if ($conName[3] == 'stickyheader') active @endif"
                            href="{{ route('admin.general_setting.stickyheader') }}">Sticky Header</a>
                        <a class="collapse-item @if ($conName[3] == 'googleanalytic') active @endif"
                            href="{{ route('admin.general_setting.googleanalytic') }}">Google Analytic</a>
                        <a class="collapse-item @if ($conName[3] == 'googlerecaptcha') active @endif"
                            href="{{ route('admin.general_setting.googlerecaptcha') }}">Google Recaptcha</a>
                        <a class="collapse-item @if ($conName[3] == 'tawklivechat') active @endif"
                            href="{{ route('admin.general_setting.tawklivechat') }}">Tawk Live Chat</a>
                        <a class="collapse-item @if ($conName[3] == 'cookieconsent') active @endif"
                            href="{{ route('admin.general_setting.cookieconsent') }}">Cookie Consent</a>
                    </div>
                </div>
            </li>



            <!-- Page Settings -->
            <li class="nav-item @if ($conName[1] == 'page') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePageSettings"
                    aria-expanded="true" aria-controls="collapsePageSettings">
                    <i class="fas fa-paste"></i>
                    <span>Page Settings</span>
                </a>
                <div id="collapsePageSettings" class="collapse @if ($conName[1] == 'page') show @endif"
                    aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item @if ($conName[2] == 'home') active @endif"
                            href="{{ route('admin.page_home.edit') }}">Home</a>
                        <a class="collapse-item @if ($conName[2] == 'about') active @endif"
                            href="{{ route('admin.page_about.edit') }}">About</a>
                        <a class="collapse-item @if ($conName[2] == 'service') active @endif"
                            href="{{ route('admin.page_service.edit') }}">Service</a>
                        <a class="collapse-item @if ($conName[2] == 'shop') active @endif"
                            href="{{ route('admin.page_shop.edit') }}">Shop</a>
                        <a class="collapse-item @if ($conName[2] == 'blog') active @endif"
                            href="{{ route('admin.page_blog.edit') }}">Blog</a>
                        <a class="collapse-item @if ($conName[2] == 'project') active @endif"
                            href="{{ route('admin.page_project.edit') }}">Project</a>
                        <a class="collapse-item @if ($conName[2] == 'faq') active @endif"
                            href="{{ route('admin.page_faq.edit') }}">FAQ</a>
                        <a class="collapse-item @if ($conName[2] == 'team') active @endif"
                            href="{{ route('admin.page_team.edit') }}">Team Member</a>
                        <a class="collapse-item @if ($conName[2] == 'photo-gallery') active @endif"
                            href="{{ route('admin.page_photo_gallery.edit') }}">Photo Gallery</a>
                        <a class="collapse-item @if ($conName[2] == 'video-gallery') active @endif"
                            href="{{ route('admin.page_video_gallery.edit') }}">Video Gallery</a>
                        <a class="collapse-item @if ($conName[2] == 'contact') active @endif"
                            href="{{ route('admin.page_contact.edit') }}">Contact</a>
                        <a class="collapse-item @if ($conName[2] == 'career') active @endif"
                            href="{{ route('admin.page_career.edit') }}">Career</a>
                        <a class="collapse-item @if ($conName[2] == 'term') active @endif"
                            href="{{ route('admin.page_term.edit') }}">Term</a>
                        <a class="collapse-item @if ($conName[2] == 'privacy') active @endif"
                            href="{{ route('admin.page_privacy.edit') }}">Privacy</a>
                        <a class="collapse-item @if ($conName[2] == 'other') active @endif"
                            href="{{ route('admin.page_other.edit') }}">Other</a>
                    </div>
                </div>
            </li>



            <!-- Footer Columns -->
            <li class="nav-item @if ($conName[1] == 'footer') active @endif">
                <a class="nav-link" href="{{ route('admin.footer.index') }}">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Footer Columns</span>
                </a>
            </li>


            <!-- Blog Section -->
            <li class="nav-item @if ($conName[1] == 'category' || $conName[1] == 'blog' || $conName[1] == 'comment') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
                    aria-expanded="true" aria-controls="collapseBlog">
                    <i class="fas fa-cubes"></i>
                    <span>Blog Section</span>
                </a>
                <div id="collapseBlog" class="collapse @if ($conName[1] == 'category' || $conName[1] == 'blog' || $conName[1] == 'comment') show @endif"
                    aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.category.index') }}">Categories</a>
                        <a class="collapse-item" href="{{ route('admin.blog.index') }}">Blogs</a>
                        <a class="collapse-item" href="{{ route('admin.comment.approved') }}">Approved Comments</a>
                        <a class="collapse-item" href="{{ route('admin.comment.pending') }}">Pending Comments</a>
                    </div>
                </div>
            </li>



            <!-- Dynamic Pages -->
            <li class="nav-item @if ($conName[1] == 'dynamic-page') active @endif">
                <a class="nav-link" href="{{ route('admin.dynamic_page.index') }}">
                    <i class="fas fa-cube"></i>
                    <span>Dynamic Pages</span>
                </a>
            </li>


            <!-- Menu Manage -->
            <li class="nav-item @if ($conName[1] == 'menu') active @endif">
                <a class="nav-link" href="{{ route('admin.menu.index') }}">
                    <i class="fas fa-bars"></i>
                    <span>Menu Manage</span>
                </a>
            </li>


            <!-- Language -->
            <li class="nav-item @if ($conName[1] == 'language') active @endif">
                <a class="nav-link" href="{{ route('admin.language.index') }}">
                    <i class="fas fa-globe"></i>
                    <span>Language</span>
                </a>
            </li>



            <!-- Career Section -->
            <li class="nav-item @if ($conName[1] == 'job' || $conName[1] == 'job-application') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCareer"
                    aria-expanded="true" aria-controls="collapseCareer">
                    <i class="fas fa-user-secret"></i>
                    <span>Career</span>
                </a>
                <div id="collapseCareer" class="collapse @if ($conName[1] == 'job' || $conName[1] == 'job-application') show @endif"
                    aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.job.index') }}">Jobs</a>
                        <a class="collapse-item" href="{{ route('admin.job.view_application') }}">Job
                            Applications</a>
                    </div>
                </div>
            </li>




            <!-- Product Section -->
            <li class="nav-item @if ($conName[1] == 'product' || $conName[1] == 'shipping' || $conName[1] == 'coupon') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
                    aria-expanded="true" aria-controls="collapseProduct">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Product</span>
                </a>
                <div id="collapseProduct" class="collapse @if ($conName[1] == 'product' || $conName[1] == 'shipping' || $conName[1] == 'coupon') show @endif"
                    aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.product.index') }}">Product</a>
                        <a class="collapse-item" href="{{ route('admin.shipping.index') }}">Shipping</a>
                        <a class="collapse-item" href="{{ route('admin.coupon.index') }}">coupon</a>
                    </div>
                </div>
            </li>



            <!-- Website Section -->
            <li class="nav-item @if (
                $conName[1] == 'slider' ||
                    $conName[1] == 'project' ||
                    $conName[1] == 'photo-gallery' ||
                    $conName[1] == 'video-gallery' ||
                    $conName[1] == 'why-choose' ||
                    $conName[1] == 'service' ||
                    $conName[1] == 'testimonial' ||
                    $conName[1] == 'team-member' ||
                    $conName[1] == 'faq' ||
                    $conName[1] == 'social-media') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWebsite"
                    aria-expanded="true" aria-controls="collapseWebsite">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Website Section</span>
                </a>
                <div id="collapseWebsite" class="collapse @if (
                    $conName[1] == 'slider' ||
                        $conName[1] == 'project' ||
                        $conName[1] == 'photo-gallery' ||
                        $conName[1] == 'video-gallery' ||
                        $conName[1] == 'why-choose' ||
                        $conName[1] == 'service' ||
                        $conName[1] == 'testimonial' ||
                        $conName[1] == 'team-member' ||
                        $conName[1] == 'faq' ||
                        $conName[1] == 'social-media') show @endif"
                    aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.slider.index') }}">Sliders</a>
                        <a class="collapse-item" href="{{ route('admin.project.index') }}">Projects</a>
                        <a class="collapse-item" href="{{ route('admin.photo.index') }}">Photo Gallery</a>
                        <a class="collapse-item" href="{{ route('admin.video.index') }}">Video Gallery</a>
                        <a class="collapse-item" href="{{ route('admin.why_choose.index') }}">Why Choose Us</a>
                        <a class="collapse-item" href="{{ route('admin.service.index') }}">Services</a>
                        <a class="collapse-item" href="{{ route('admin.testimonial.index') }}">Testimonials</a>
                        <a class="collapse-item" href="{{ route('admin.team_member.index') }}">Team Members</a>
                        <a class="collapse-item" href="{{ route('admin.faq.index') }}">FAQ</a>
                        <a class="collapse-item" href="{{ route('admin.social_media.index') }}">Social Media</a>
                    </div>
                </div>
            </li>


            <!-- Order -->
            <li class="nav-item @if ($conName[1] == 'order') active @endif">
                <a class="nav-link" href="{{ route('admin.order.index') }}">
                    <i class="fas fa-bookmark"></i>
                    <span>Order</span>
                </a>
            </li>

            <!-- Customer -->
            <li class="nav-item @if ($conName[1] == 'customer') active @endif">
                <a class="nav-link" href="{{ route('admin.customer.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Customer</span>
                </a>
            </li>


            <!-- Email Template -->
            <li class="nav-item @if ($conName[1] == 'email-template') active @endif">
                <a class="nav-link" href="{{ route('admin.email_template.index') }}">
                    <i class="fas fa-envelope"></i>
                    <span>Email Template</span>
                </a>
            </li>

            <!-- Subscriber -->
            <li class="nav-item @if ($conName[1] == 'subscriber') active @endif">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseSubscriber" aria-expanded="true" aria-controls="collapseSubscriber">
                    <i class="fas fa-share-alt-square"></i>
                    <span>Subscriber</span>
                </a>
                <div id="collapseSubscriber" class="collapse @if ($conName[1] == 'subscriber') show @endif"
                    aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.subscriber.index') }}">All Subscribers</a>
                        <a class="collapse-item" href="{{ route('admin.subscriber.send_email') }}">Send Email to
                            Subscribers</a>
                    </div>
                </div>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - Alerts -->
                        {{-- <li class="nav-item dropdown no-arrow mx-1">
                        <a class="btn btn-info btn-sm mt-3" href="{{ url('/') }}" target="_blank">
                            Visit Website
                        </a>
                    </li> --}}

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session('name') }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('public/uploads/' . session('photo')) }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                @if (session('id') == 1)
                                    <a class="dropdown-item" href="{{ route('admin.profile_change') }}">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Change Profile
                                    </a>
                                @endif

                                <a class="dropdown-item" href="{{ route('admin.password_change') }}">
                                    <i class="fas fa-unlock-alt fa-sm fa-fw mr-2 text-gray-400"></i> Change Password
                                </a>
                                <a class="dropdown-item" href="{{ route('admin.photo_change') }}">
                                    <i class="fas fa-image fa-sm fa-fw mr-2 text-gray-400"></i> Change Photo
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('admin_content')

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('admin.includes.scripts-footer')

</body>

</html>
