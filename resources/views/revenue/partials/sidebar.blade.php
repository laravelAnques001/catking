<div class="sidebar sidebar-main">
    <div class="sidebar-content">
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li class="{{ Route::currentRouteName() == 'ceo-revenue.*' ? 'active' : '' }}">
                        <a href="{{ route('ceo-revenue.revenue') }}"><span>Ceo Revenue</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'student-profile.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Student Profile</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'exam-toppers.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Exam Toppers</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'mentors.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Mentors/ Interview</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'faculty.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Faculty & Session</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'finance.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Finance</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'marketing.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Marketing</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'forum.*' ? 'active' : '' }}">
                        <a href="index.html"><span>Forum</span></a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'catking-one.*' ? 'active' : '' }}">
                        <a href="index.html"><span>CATKing One</span></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
