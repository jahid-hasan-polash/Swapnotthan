 <!-- Aside Start-->
<aside class="left-panel">
            <!-- brand -->
            <div class="logo">
                <a href="{!! route('dashboard') !!}" class="logo-expanded">
                    <i class="ion-social-buffer"></i>
                    <span href="{!! route('dashboard') !!}" class="nav-label">Swapnotthan<!-- {!! Config::get('customConfig.names.siteName')!!} --></span>

                </a>
            </div>
            <!-- / brand -->


            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">

                     <li class="{!! Menu::areActiveURLs(['dashboard', 'change-password']) !!}"><a href="#"><i class="ion-flask"></i> <span class="nav-label">Welcome</span></a>
                        <ul class="list-unstyled">

                            <li class="{!! Menu::isActiveURL('dashboard') !!}">
                                <a href="{!!  URL::to( 'dashboard') !!}">Dashboard</a>
                            </li>
                            <li class="{!! Menu::isActiveURL('admin/members') !!}">
                                <a href="{!!  route('members') !!}">Members</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="{!! route('editMission','1') !!}"><i class="ion-compose"></i> <span class="nav-label">Edit Mission</span></a>
                    </li>

                    <li class="has-submenu"><a href="#"><i class="ion-compose"></i> <span class="nav-label">News Panel</span></a>
                        <ul class="list-unstyled">
                            
                            <li><a href="{!! route('news') !!}">Create</a></li>
                            <li><a href="{!! route('news') !!}">Update</a></li>

                        </ul>
                    </li>


                    <li class="has-submenu"><a href="#"><i class="ion-stats-bars"></i> <span class="nav-label">Update Images</span></a>
                        <ul class="list-unstyled">
                            <li><a href="{!! route('changeSlider') !!}">Slider Images</a></li>
                            <li><a href="{!! route('updateGallery') !!}">Gallery Images</a></li>

                        </ul>
                    </li>

                    <!-- not done yet -->
                    <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">Notice Panel</span></a>
                        <ul class="list-unstyled">

                            <li><a href="#">Create</a></li>
                            <li><a href="#">Update</a></li>

                        </ul>
                    </li>

                </ul>
            </nav>



</aside>
        <!-- Aside Ends-->



