@extends('maindesign')

@section('why_us_view')
  <!-- Why Us Hero Banner -->
  <section class="py-5" style="background: linear-gradient(135deg, #1f1c2c 0%, #928dab 100%); color: #fff;">
    <div class="container py-4 text-center">
      <h1 class="display-4 font-weight-bold mb-3" style="color: #fff;">Why Choose Giftos?</h1>
      <p class="lead max-w-xl mx-auto" style="color: rgba(255,255,255,0.85); font-size: 17px;">
        We believe gifting is not just a gesture, it is an emotion. Discover what makes us India's preferred choice for premium gifts, luxury accessories, and heartfelt surprises.
      </p>
    </div>
  </section>

  <!-- Core Pillars -->
  <section class="py-5 bg-white">
    <div class="container py-4">
      <div class="heading_container heading_center mb-5">
        <h2>Our Core Commitments</h2>
        <p class="text-muted">Built on trust, verified quality, and exceptional customer satisfaction.</p>
      </div>

      <div class="row g-4 text-center">
        <div class="col-md-4 mb-4">
          <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="background: #fafafa;">
            <div class="mb-3 mx-auto" style="width: 70px; height: 70px; border-radius: 50%; background: #ffebee; display: flex; align-items: center; justify-content: center; color: #f7444e; font-size: 30px;">
              <i class="fa fa-gem"></i>
            </div>
            <h4 class="font-weight-bold mb-2">100% Genuine Quality</h4>
            <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
              Every accessory, watch, and handcrafted piece undergoes rigorous multi-tier quality inspections before dispatch so you get perfection in every box.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="background: #fafafa;">
            <div class="mb-3 mx-auto" style="width: 70px; height: 70px; border-radius: 50%; background: #e8f5e9; display: flex; align-items: center; justify-content: center; color: #2e7d32; font-size: 30px;">
              <i class="fa fa-truck"></i>
            </div>
            <h4 class="font-weight-bold mb-2">Express & Safe Delivery</h4>
            <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
              Partnered with top logistics providers to ensure fast, tamper-proof, and temperature-controlled doorstep deliveries across 19,000+ pin codes.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="background: #fafafa;">
            <div class="mb-3 mx-auto" style="width: 70px; height: 70px; border-radius: 50%; background: #e3f2fd; display: flex; align-items: center; justify-content: center; color: #1565c0; font-size: 30px;">
              <i class="fa fa-lock"></i>
            </div>
            <h4 class="font-weight-bold mb-2">Safe & Seamless Payments</h4>
            <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
              Bank-grade 256-bit encrypted transactions backed by Stripe checkout, digital UPI, NetBanking, and Cash on Delivery options.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="background: #fafafa;">
            <div class="mb-3 mx-auto" style="width: 70px; height: 70px; border-radius: 50%; background: #fff8e1; display: flex; align-items: center; justify-content: center; color: #f57f17; font-size: 30px;">
              <i class="fa fa-gift"></i>
            </div>
            <h4 class="font-weight-bold mb-2">Festive Gift Wrapping</h4>
            <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
              Personalized greeting cards and handcrafted luxury gift boxes available with every order to give your loved ones unforgettable unboxing experiences.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="background: #fafafa;">
            <div class="mb-3 mx-auto" style="width: 70px; height: 70px; border-radius: 50%; background: #f3e5f5; display: flex; align-items: center; justify-content: center; color: #7b1fa2; font-size: 30px;">
              <i class="fa fa-undo"></i>
            </div>
            <h4 class="font-weight-bold mb-2">Hassle-Free Returns</h4>
            <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
              Didn't match your expectations? No worries. We provide a frictionless 7-day replacement and refund guarantee without tedious questions.
            </p>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="background: #fafafa;">
            <div class="mb-3 mx-auto" style="width: 70px; height: 70px; border-radius: 50%; background: #e0f2f1; display: flex; align-items: center; justify-content: center; color: #00796b; font-size: 30px;">
              <i class="fa fa-headset"></i>
            </div>
            <h4 class="font-weight-bold mb-2">24/7 Dedicated Support</h4>
            <p class="text-muted" style="font-size: 14px; line-height: 1.8;">
              Our dedicated customer concierge team is always a call or message away to help you with order updates, gifting advice, and queries.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Numbers / Impact Stats -->
  <section class="py-5" style="background: #f7444e; color: #fff;">
    <div class="container py-3">
      <div class="row text-center gy-4">
        <div class="col-6 col-md-3">
          <h2 class="display-4 font-weight-bold mb-1" style="color: #fff;">50K+</h2>
          <p class="mb-0 text-white-50">Happy Shoppers</p>
        </div>
        <div class="col-6 col-md-3">
          <h2 class="display-4 font-weight-bold mb-1" style="color: #fff;">1,200+</h2>
          <p class="mb-0 text-white-50">Curated Gifts</p>
        </div>
        <div class="col-6 col-md-3">
          <h2 class="display-4 font-weight-bold mb-1" style="color: #fff;">99.8%</h2>
          <p class="mb-0 text-white-50">On-Time Deliveries</p>
        </div>
        <div class="col-6 col-md-3">
          <h2 class="display-4 font-weight-bold mb-1" style="color: #fff;">4.9/5</h2>
          <p class="mb-0 text-white-50">Average Rating</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Box -->
  <section class="py-5 bg-light text-center">
    <div class="container py-3">
      <h3 class="font-weight-bold mb-3">Ready to find the perfect gift?</h3>
      <p class="text-muted mb-4">Browse our freshest collections and take advantage of ongoing festive offers.</p>
      <a href="{{ route('index') }}" class="btn btn-danger btn-lg rounded-pill px-5 font-weight-bold shadow-sm" style="background: #f7444e; border-color: #f7444e;">
        Start Shopping Now &rarr;
      </a>
    </div>
  </section>
@endsection
