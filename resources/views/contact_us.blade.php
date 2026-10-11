@extends('maindesign')

@section('contact_us_view')
  <!-- Contact Hero -->
  <section class="py-5" style="background: linear-gradient(135deg, #141e30 0%, #243b55 100%); color: #fff;">
    <div class="container py-4 text-center">
      <h1 class="display-4 font-weight-bold mb-3" style="color: #fff;">Get In Touch</h1>
      <p class="lead max-w-xl mx-auto" style="color: rgba(255,255,255,0.85); font-size: 17px;">
        Have a question about an order, custom gift hampers, or bulk festive bookings? Reach out to us — our friendly team is here to assist you 24/7.
      </p>
    </div>
  </section>

  <!-- Contact Details & Interactive Form -->
  <section class="py-5 bg-white">
    <div class="container py-4">
      @if (session('contact_success'))
        <div class="alert alert-success alert-dismissible fade show rounded-3 p-3 mb-4 shadow-sm" role="alert">
          <i class="fa fa-check-circle mr-2"></i> {{ session('contact_success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif

      <div class="row g-5">
        <!-- Contact Info Cards -->
        <div class="col-lg-5 mb-4">
          <div class="bg-light p-4 p-md-5 rounded-4 shadow-sm h-100">
            <h3 class="font-weight-bold mb-4" style="color: #222;">Contact Information</h3>
            <p class="text-muted mb-4" style="font-size: 14px; line-height: 1.8;">
              Feel free to visit our store, call our direct helpline, or send us an email. We typically respond within 2 business hours.
            </p>

            <div class="d-flex align-items-start mb-4">
              <div style="width: 48px; height: 48px; border-radius: 50%; background: #ffebee; color: #f7444e; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa fa-map-marker"></i>
              </div>
              <div class="ml-3">
                <h6 class="font-weight-bold mb-1">Our Headquarters</h6>
                <p class="text-muted small mb-0">Gausganj Road 123, Hardoi, Uttar Pradesh, 241305, India</p>
              </div>
            </div>

            <div class="d-flex align-items-start mb-4">
              <div style="width: 48px; height: 48px; border-radius: 50%; background: #e8f5e9; color: #2e7d32; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa fa-phone"></i>
              </div>
              <div class="ml-3">
                <h6 class="font-weight-bold mb-1">Customer Helpline</h6>
                <p class="text-muted small mb-0">+91 98765 43210 / +91 88580 12345</p>
              </div>
            </div>

            <div class="d-flex align-items-start mb-4">
              <div style="width: 48px; height: 48px; border-radius: 50%; background: #e3f2fd; color: #1565c0; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa fa-envelope"></i>
              </div>
              <div class="ml-3">
                <h6 class="font-weight-bold mb-1">Email Support</h6>
                <p class="text-muted small mb-0">support@giftosstore.com / care@giftos.in</p>
              </div>
            </div>

            <div class="d-flex align-items-start">
              <div style="width: 48px; height: 48px; border-radius: 50%; background: #fff8e1; color: #f57f17; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa fa-clock-o"></i>
              </div>
              <div class="ml-3">
                <h6 class="font-weight-bold mb-1">Operating Hours</h6>
                <p class="text-muted small mb-0">Monday – Saturday: 9:00 AM – 8:00 PM IST</p>
              </div>
            </div>

            <hr class="my-4">

            <h6 class="font-weight-bold mb-3">Connect With Us</h6>
            <div class="d-flex gap-2">
              <a href="#" class="btn btn-outline-danger btn-sm rounded-circle" style="width: 38px; height: 38px; display: inline-flex; align-items: center; justify-content: center;"><i class="fa fa-facebook"></i></a>
              <a href="#" class="btn btn-outline-danger btn-sm rounded-circle ml-2" style="width: 38px; height: 38px; display: inline-flex; align-items: center; justify-content: center;"><i class="fa fa-instagram"></i></a>
              <a href="#" class="btn btn-outline-danger btn-sm rounded-circle ml-2" style="width: 38px; height: 38px; display: inline-flex; align-items: center; justify-content: center;"><i class="fa fa-twitter"></i></a>
              <a href="#" class="btn btn-outline-danger btn-sm rounded-circle ml-2" style="width: 38px; height: 38px; display: inline-flex; align-items: center; justify-content: center;"><i class="fa fa-whatsapp"></i></a>
            </div>
          </div>
        </div>

        <!-- Form Box -->
        <div class="col-lg-7">
          <div class="p-4 p-md-5 border rounded-4 shadow-sm bg-white">
            <h3 class="font-weight-bold mb-2">Send Us A Message</h3>
            <p class="text-muted mb-4 small">Fill in the form below and our customer representative will connect with you.</p>

            <form action="{{ route('user.contactpost') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label font-weight-bold small text-muted">Your Full Name *</label>
                  <input type="text" name="name" class="form-control rounded-pill px-3 py-2" placeholder="e.g. Rahul Sharma" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label font-weight-bold small text-muted">Your Email Address *</label>
                  <input type="email" name="email" class="form-control rounded-pill px-3 py-2" placeholder="e.g. rahul@example.com" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label font-weight-bold small text-muted">Phone Number (Optional)</label>
                <input type="tel" name="phone" class="form-control rounded-pill px-3 py-2" placeholder="e.g. +91 98765 43210">
              </div>

              <div class="mb-4">
                <label class="form-label font-weight-bold small text-muted">Your Message or Query *</label>
                <textarea name="message" rows="5" class="form-control rounded-3 p-3" placeholder="Tell us how we can help you with your order, bulk order, or gift advice..." required></textarea>
              </div>

              <button type="submit" class="btn btn-danger btn-lg rounded-pill px-5 font-weight-bold shadow-sm" style="background: #f7444e; border-color: #f7444e;">
                Send Message &rarr;
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Map Section -->
  <section class="py-4 bg-light">
    <div class="container">
      <div class="rounded-4 overflow-hidden shadow-sm" style="height: 380px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28420.801140916872!2d80.2781908441289!3d27.0743667123952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399e91b324c3b70d%3A0xd3483e68fa552aca!2sGausganj%2C%20Uttar%20Pradesh%20241305!5e0!3m2!1sen!2sin!4v1784353421282!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>
@endsection
