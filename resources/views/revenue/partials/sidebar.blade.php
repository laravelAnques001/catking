<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        {{--  <div class="sidebar-user-material">
            <div class="category-content">
                <div class="sidebar-user-material-content">
                    <a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-responsive"
                            alt=""></a>
                    <h6>Victoria Baker</h6>
                    <span class="text-size-small">Santa Ana, CA</span>
                </div>

                <div class="sidebar-user-material-menu">
                    <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
                </div>
            </div>

            <div class="navigation-wrapper collapse" id="user-nav">
                <ul class="navigation">
                    <li><a href="#"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
                    <li><a href="#"><i class="icon-coins"></i> <span>My balance</span></a></li>
                    <li><a href="#"><i class="icon-comment-discussion"></i> <span><span
                                    class="badge bg-teal-400 pull-right">58</span> Messages</span></a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
                    <li><a href="#"><i class="icon-switch2"></i> <span>Logout</span></a></li>
                </ul>
            </div>
        </div>  --}}
        <!-- /user menu -->

        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li class="{{ Route::currentRouteName() == 'ceo-revenue.*' ? 'active' : '' }}">
                        <a href="{{ route('ceo-revenue') }}"><span>Ceo Revenue</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'setting.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Student Profile</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'setting.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Exam Toppers</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'setting.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Mentors/ Interview</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'setting.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Faculty & Session</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'setting.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Finance</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'setting.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Marketing</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'setting.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Forum</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'setting.*' ? 'active' : '' }}">
                        <a href="index.html"><span>CATKing One</span></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
