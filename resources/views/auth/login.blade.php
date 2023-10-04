@extends('layouts.app')

@section('content')
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                    <!-- Simple login form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                <h5 class="content-group">Login to your account <small class="display-block">Enter your
                                        credentials below</small></h5>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="text" class="form-control" placeholder="Username">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" class="form-control" placeholder="Password">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn bg-pink-400 btn-block">Sign in <i
                                        class="icon-circle-right2 position-right"></i></button>
                            </div>

                            {{--  <div class="text-center">
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            </div>  --}}
                        </div>
                    </form>
                    <!-- /simple login form -->


                    <!-- Footer -->
                    {{--  <div class="footer text-muted text-center">
                    &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                </div>  --}}
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
@endsection
