@extends('maindesign')

@section('latest_product')
  <section class="py-5" style="background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%); min-height: 80vh; display: flex; align-items: center;">
    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-md-9 col-lg-7 col-xl-6">
          <div class="card border-0 shadow-lg rounded-4 overflow-hidden bg-white p-4 p-md-5 text-center">
            <div style="width: 75px; height: 75px; margin: 0 auto 15px auto; border-radius: 50%; background: #e3f2fd; color: #1565c0; display: flex; align-items: center; justify-content: center; font-size: 32px;">
              <i class="fa fa-envelope-open-o"></i>
            </div>
            
            <h3 class="font-weight-bold mb-3" style="color: #222;">Verify Your Email</h3>
            
            <p class="text-muted small px-md-3 mb-4" style="line-height: 1.7;">
              Thanks for signing up on <strong>GiftosStore</strong>! Before getting started, please check your inbox and verify your email address by clicking on the link we just emailed to you.
            </p>

            @if (session('status') == 'verification-link-sent')
              <div class="alert alert-success small p-3 rounded-3 mb-4">
                <i class="fa fa-check-circle mr-1"></i> A fresh verification link has been sent to your email address.
              </div>
            @endif

            <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center gap-3">
              <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn btn-danger rounded-pill px-4 py-2 font-weight-bold shadow-sm" style="background: #f7444e; border-color: #f7444e; font-size: 14px;">
                  Resend Verification Email
                </button>
              </form>

              <form method="POST" action="{{ route('logout') }}" class="mt-2 mt-sm-0 ml-sm-3">
                @csrf
                <button type="submit" class="btn btn-outline-secondary rounded-pill px-4 py-2 font-weight-bold" style="font-size: 14px;">
                  Log Out
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
