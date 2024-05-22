
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <div class="d-flex align-items-center justify-content-start  ">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="{{ asset('assets/images/logo.png') }}" alt="TaskSwap" width="50">
        <h1 style="color:#04364A;font-family:Fira Sans, sans-serif;margin-top:4%">TaskSwap</h1>
        </a>
</div>
      <div class="position-end">
      <a class="mx-2" id = "LoginButton" style="font-family:Fira Sans, sans-serif; font-weight: bold; color: #04364A; transition: color 0.3s; cursor: pointer;" onmouseover="this.style.color='#04364A'" onmouseout="this.style.color='#04364A'" data-bs-toggle="modal" data-bs-target="#login-modal">Login</a>
      <button class="btn btn-outline secret" type="button" id = "signupButton" data-bs-toggle="modal" data-bs-target="#Sigm_up-modal" style="font-family:Fira Sans, sans-serif; font-weight:bold;">Get Started</button>  
      </div>
    </div>
  </header><!-- End Header -->
