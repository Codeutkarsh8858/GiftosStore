@extends('maindesign')

@section('latest_product')
  <section class="py-5" style="background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%); min-height: 85vh; display: flex; align-items: center;">
    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="row g-0">
              <!-- Left decorative info column -->
              <div class="col-md-5 d-none d-md-flex flex-column justify-content-between p-4 text-white" style="background: linear-gradient(135deg, #f7444e 0%, #ff6b6b 100%);">
                <div>
                  <h3 class="font-weight-bold text-white mb-2">Welcome Back!</h3>
                  <p class="small text-white-50" style="line-height: 1.6;">
                    Log in to track your orders, manage your shopping cart, and unlock exclusive member discounts.
                  </p>
                </div>

                <div class="my-4 text-center">
                  <div style="width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; background: rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center; font-size: 36px;">
                    <i class="fa fa-shopping-bag text-white"></i>
                  </div>
                </div>

                <div class="small text-white-50">
                  <div class="d-flex align-items-center mb-1">
                    <i class="fa fa-check-circle mr-2 text-white"></i> 100% Secure Shopping
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="fa fa-truck mr-2 text-white"></i> Fast Express Delivery
                  </div>
                </div>
              </div>

              <!-- Right form column -->
              <div class="col-md-7 p-4 p-md-5 bg-white">
                <div class="text-center mb-4">
                  <h3 class="font-weight-bold" style="color: #222;">Sign In</h3>
                  <p class="text-muted small">Enter your email and password to access your account</p>
                </div>

                <!-- Session Status / Errors -->
                @if (session('status'))
                  <div class="alert alert-success small p-2 rounded-3 mb-3">
                    {{ session('status') }}
                  </div>
                @endif

                @if ($errors->any())
                  <div class="alert alert-danger small p-2 rounded-3 mb-3">
                    <ul class="mb-0 pl-3">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="mb-3">
                    <label for="email" class="form-label font-weight-bold small text-muted">Email Address</label>
                    <div class="input-group">
                      <span class="input-group-text bg-light border-right-0 rounded-start-pill" style="border-color: #ddd;">
                        <i class="fa fa-envelope text-muted"></i>
                      </span>
                      <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="form-control rounded-end-pill px-3 py-2" placeholder="name@example.com" style="border-color: #ddd; font-size: 14px;">
                    </div>
                  </div>

                  <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                      <label for="password" class="form-label font-weight-bold small text-muted">Password</label>
                      @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="small text-danger text-decoration-none">
                          Forgot Password?
                        </a>
                      @endif
                    </div>
                    <div class="input-group">
                      <span class="input-group-text bg-light border-right-0 rounded-start-pill" style="border-color: #ddd;">
                        <i class="fa fa-lock text-muted"></i>
                      </span>
                      <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control rounded-end-pill px-3 py-2" placeholder="••••••••" style="border-color: #ddd; font-size: 14px;">
                    </div>
                  </div>

                  <div class="mb-4 form-check">
                    <input id="remember_me" type="checkbox" name="remember" class="form-check-input">
                    <label for="remember_me" class="form-check-label small text-muted">
                      Remember me on this device
                    </label>
                  </div>

                  <button type="submit" class="btn btn-danger btn-block w-100 rounded-pill py-2 font-weight-bold shadow-sm" style="background: #f7444e; border-color: #f7444e; font-size: 15px;">
                    Sign In to Account &rarr;
                  </button>

                  <div class="text-center mt-4 pt-2 border-top">
                    <span class="small text-muted">Don't have an account yet?</span>
                    <a href="{{ route('register') }}" class="small font-weight-bold text-danger text-decoration-none ml-1">
                      Create an Account
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
