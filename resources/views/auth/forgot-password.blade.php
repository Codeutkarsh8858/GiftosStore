@extends('maindesign')

@section('latest_product')
  <section class="py-5" style="background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%); min-height: 80vh; display: flex; align-items: center;">
    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-md-9 col-lg-7 col-xl-6">
          <div class="card border-0 shadow-lg rounded-4 overflow-hidden bg-white p-4 p-md-5">
            <div class="text-center mb-4">
              <div style="width: 70px; height: 70px; margin: 0 auto 15px auto; border-radius: 50%; background: #ffebee; color: #f7444e; display: flex; align-items: center; justify-content: center; font-size: 28px;">
                <i class="fa fa-key"></i>
              </div>
              <h3 class="font-weight-bold" style="color: #222;">Forgot Password?</h3>
              <p class="text-muted small px-md-3">
                No problem! Just enter your registered email address below and we'll send you a password reset link to create a new one.
              </p>
            </div>

            <!-- Session Status / Errors -->
            @if (session('status'))
              <div class="alert alert-success small p-3 rounded-3 mb-3">
                <i class="fa fa-check-circle mr-1"></i> {{ session('status') }}
              </div>
            @endif

            @if ($errors->any())
              <div class="alert alert-danger small p-3 rounded-3 mb-3">
                <ul class="mb-0 pl-3">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
              @csrf

              <div class="mb-4">
                <label for="email" class="form-label font-weight-bold small text-muted">Registered Email Address</label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-right-0 rounded-start-pill" style="border-color: #ddd;">
                    <i class="fa fa-envelope text-muted"></i>
                  </span>
                  <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control rounded-end-pill px-3 py-2" placeholder="name@example.com" style="border-color: #ddd; font-size: 14px;">
                </div>
              </div>

              <button type="submit" class="btn btn-danger btn-block w-100 rounded-pill py-2 font-weight-bold shadow-sm" style="background: #f7444e; border-color: #f7444e; font-size: 15px;">
                Send Reset Link &rarr;
              </button>

              <div class="text-center mt-4 pt-3 border-top">
                <a href="{{ route('login') }}" class="small font-weight-bold text-muted text-decoration-none">
                  &larr; Back to Login
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
