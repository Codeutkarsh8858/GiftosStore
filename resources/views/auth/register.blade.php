@extends('maindesign')

@section('latest_product')
  <section class="py-5" style="background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%); min-height: 85vh; display: flex; align-items: center;">
    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="row g-0">
              <!-- Left decorative info column -->
              <div class="col-md-5 d-none d-md-flex flex-column justify-content-between p-4 text-white" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
                <div>
                  <h3 class="font-weight-bold text-white mb-2">Join Giftos!</h3>
                  <p class="small text-white-50" style="line-height: 1.6;">
                    Create your free account today and enjoy personalized gifts, express checkout, and order notifications.
                  </p>
                </div>

                <div class="my-4 text-center">
                  <div style="width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; background: rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center; font-size: 36px;">
                    <i class="fa fa-user-plus text-white"></i>
                  </div>
                </div>

                <div class="small text-white-50">
                  <div class="d-flex align-items-center mb-1">
                    <i class="fa fa-gift mr-2 text-white"></i> Welcome Coupon for New Users
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="fa fa-shield mr-2 text-white"></i> 100% Privacy Protected
                  </div>
                </div>
              </div>

              <!-- Right form column -->
              <div class="col-md-7 p-4 p-md-5 bg-white">
                <div class="text-center mb-4">
                  <h3 class="font-weight-bold" style="color: #222;">Create Account</h3>
                  <p class="text-muted small">Fill in the details below to get started with us</p>
                </div>

                <!-- Errors list -->
                @if ($errors->any())
                  <div class="alert alert-danger small p-2 rounded-3 mb-3">
                    <ul class="mb-0 pl-3">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                  @csrf

                  <!-- Name -->
                  <div class="mb-3">
                    <label for="name" class="form-label font-weight-bold small text-muted">Full Name</label>
                    <div class="input-group">
                      <span class="input-group-text bg-light border-right-0 rounded-start-pill" style="border-color: #ddd;">
                        <i class="fa fa-user text-muted"></i>
                      </span>
                      <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="form-control rounded-end-pill px-3 py-2" placeholder="e.g. Rahul Sharma" style="border-color: #ddd; font-size: 14px;">
                    </div>
                  </div>

                  <!-- Email Address -->
                  <div class="mb-3">
                    <label for="email" class="form-label font-weight-bold small text-muted">Email Address</label>
                    <div class="input-group">
                      <span class="input-group-text bg-light border-right-0 rounded-start-pill" style="border-color: #ddd;">
                        <i class="fa fa-envelope text-muted"></i>
                      </span>
                      <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="form-control rounded-end-pill px-3 py-2" placeholder="name@example.com" style="border-color: #ddd; font-size: 14px;">
                    </div>
                  </div>

                  <!-- Password -->
                  <div class="mb-3">
                    <label for="password" class="form-label font-weight-bold small text-muted">Create Password</label>
                    <div class="input-group">
                      <span class="input-group-text bg-light border-right-0 rounded-start-pill" style="border-color: #ddd;">
                        <i class="fa fa-lock text-muted"></i>
                      </span>
                      <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control rounded-end-pill px-3 py-2" placeholder="Min. 8 characters" style="border-color: #ddd; font-size: 14px;">
                    </div>
                  </div>

                  <!-- Confirm Password -->
                  <div class="mb-4">
                    <label for="password_confirmation" class="form-label font-weight-bold small text-muted">Confirm Password</label>
                    <div class="input-group">
                      <span class="input-group-text bg-light border-right-0 rounded-start-pill" style="border-color: #ddd;">
                        <i class="fa fa-check text-muted"></i>
                      </span>
                      <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control rounded-end-pill px-3 py-2" placeholder="Re-type password" style="border-color: #ddd; font-size: 14px;">
                    </div>
                  </div>

                  <button type="submit" class="btn btn-danger btn-block w-100 rounded-pill py-2 font-weight-bold shadow-sm" style="background: #f7444e; border-color: #f7444e; font-size: 15px;">
                    Register Now &rarr;
                  </button>

                  <div class="text-center mt-4 pt-2 border-top">
                    <span class="small text-muted">Already have an account?</span>
                    <a href="{{ route('login') }}" class="small font-weight-bold text-danger text-decoration-none ml-1">
                      Sign In Here
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
