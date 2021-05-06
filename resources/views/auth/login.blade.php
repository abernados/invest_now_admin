<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                <!-- Social login form-->
                <div class="card my-5">
                    <div class="card-body p-5 text-center">
                        <div class="h3 font-weight-light">Sign In</div>
                    </div>
                    <hr class="my-0" />
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body p-5">
                        <!-- Login form-->
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Form Group (email address)-->
                            <div class="form-group">
                                <label class="text-gray-600 small" for="emailExample">Email address</label>
                                <input class="form-control form-control-solid" type="text" placeholder aria-label="Email Address" aria-describedby="emailExample" name="email" :value="old('email')" required autofocus />
                            </div>
                            <!-- Form Group (password)-->
                            <div class="form-group">
                                <label class="text-gray-600 small" for="passwordExample">Password</label>
                                <input class="form-control form-control-solid" type="password" placeholder aria-label="Password" aria-describedby="passwordExample" name="password" required autocomplete="current-password" />
                            </div>
                            <!-- Form Group (forgot password link)-->
                            <div class="form-group"><a class="small" href="auth-password-social.html">Forgot your password?</a></div>
                            <!-- Form Group (login box)-->
                            <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                <div class="custom-control custom-control-solid custom-checkbox">
                                    <input class="custom-control-input small" id="customCheck1" type="checkbox" />
                                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body px-5 py-4">
                        <div class="small text-center">
                            New user?
                            <a href="auth-register-social.html">Create an account!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
