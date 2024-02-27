<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="images/favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <!-- Bootstrap CSS -->
  <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="{{URL::asset('css/tiny-slider.css')}}" rel="stylesheet">
  <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
  <title>Grand Taxi</title>
</head>

<body>

  <!-- Start Header/Navigation -->
  <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
    <div class="container">
      <a class="navbar-brand" href="">Grand <span>Taxi</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('driver.history') }}">Home</a>
          </li>
          <li>
            <div class="">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"> <i class="zmdi zmdi-power"></i> {{ __('Log Out') }}</a>
              </form>
            </div>
          </li> 
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5 mb-5 w-50">
        <form method="POST" action="">
            @csrf
            <input type="hidden" name="driver_details_id" value="">
            
            <div class="col">
    <div data-mdb-input-init class="form-outline">
        <label class="form-label" for="trip">Select Payment Method</label>
        <select name="payment_method" id="trip" class="form-select form-control">
            <option value="">Select a payment method</option>
            <option value="cash" {{ $selectedPaymentMethod == 'cash' ? 'selected' : '' }}>Cash</option>
            <option value="card" {{ $selectedPaymentMethod == 'card' ? 'selected' : '' }}>Card</option>
            <option value="paypal" {{ $selectedPaymentMethod == 'paypal' ? 'selected' : '' }}>PayPal</option>
        </select>
    </div>
</div>


            <div class="row mt-5">
                <div class="col text-end">
                    <button data-mdb-ripple-init type="submit" class="btn btn-primary">Update Payment Method</button>
                </div>
            </div>
        </form>
    </div>

  <!-- Start Footer Section -->
  <footer class="footer-section">
    <div class="container relative">
      <div>
        <div class="row pt-4">
          <div class="col-lg-6 text-center text-lg-start">
            <p class="mb-2">Copyright &copy;. All Rights Reserved. Created By <a href="">ahmed benseddiq</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- End Footer Section -->  

  <script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('js/tiny-slider.js')}}"></script>
  <script src="{{URL::asset('js/custom.js')}}"></script>
</body>

</html>
