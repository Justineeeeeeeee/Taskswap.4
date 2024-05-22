    {{-- SIGN UP MODAL END --}}
<div class="modal fade" id="Sigm_up-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true" style="max-height: 100vh; overflow-y: hidden; overflow-x: hidden;">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        {{-- close button --}}
                        <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                      aria-label="Close"></button>
                        </div>
          <div class="card-body p-2 p-sm-5" style="font-family: sans-serif;">
          <img  src="/back/vendors/images/ts_logo.png" alt="Logo" width="150"
                                    height="150" style="margin-top: -10%; margin-left:30%;">
            <h1 class="card-title text-center mb-5  " style="margin-bottom: -100px; font-weight:700; font-family:Fira Sans, sans-serif; font-size:50px; color:#186F65">Sign Up</h1>
            <form style="margin-top: -5%;padding-left:2%; padding-right:2%;" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
              @csrf         
              <div class="form-floating mb-3" >

                <input type="email" class="form-control" id="email" type="email" name="email" placeholder="name@example.com" required autofocus x-input-label for="email" :value="__('Email')" >
                <label for="email">Email address
                </label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div class="row g-2" style="gap: 3%;">
              <div class="form-floating mb-2 mobile_form" style="width: 180px;" >
                <input type="text" class="form-control" id="first_name" name="first_name" :value="old('first_name')" required autofocus placeholder="name@example.com">
                <label for="first_name">First name
                </label>
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
              </div>
              <div class="form-floating mb-2 mobile_form"  style="width: 180px;" >
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="name@example.com" :value="old('first_name')" required autofocus >
                <label for="last_name">Last name
                </label>
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
              </div>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control" type="password"
                id ="Sign_password"
                            name="password"
                            required  placeholder="Password">
                <label for="Sign_password">Password
                </label>
                <x-input-error :messages="$errors->get('password')" />
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password_confirmation" placeholder="Password" name="password_confirmation" required >
                <label for="password_confirmation"> Confirm Password
                </label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" onclick="signUpPassword(),signUpConfirmPassword()" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Show Password
                </label>
              </div>
              
              <script>
                function signUpConfirmPassword() {
                var x = document.getElementById("password_confirmation");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                   x.type = "password";
                  }
                }
              </script>

              <script>
                function signUpPassword() {
                var x = document.getElementById("Sign_password");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                   x.type = "password";
                  }
                }
              </script>

              <div style="margin-right:3% ;margin-bottom:2%">
              <div class="d-grid">
                <button class="button_login text-uppercase fw-bold" type="submit" id = "SignUpButton" data-bs-toggle="modal" data-bs-target="#terms-modal">Sign Up</button>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>

    {{-- SIGN UP MODAL END --}}


    {{-- LOGIN MODAL END --}}

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true" style="max-height: 100vh; overflow-y: hidden; overflow-x: hidden;">
                

                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        {{-- close button --}}
                        <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                      aria-label="Close"></button>
                        </div>
          <div class="card-body p-2 p-sm-5" style="font-family: sans-serif;">
          <img  src="/back/vendors/images/ts_logo.png" alt="Logo" width="150"
                                    height="150" style="margin-top: -10%; margin-left:30%;">
            <h1 class="card-title text-center mb-5  " style="margin-bottom: -100px; font-weight:700; font-family: PT Serif, sans-serif; font-size:50px; color:#186F65">Login</h1>
            <form style="margin-top: -5%;padding-left:2%; padding-right:2%;" method="POST" action="{{ route('login') }}">
            @csrf
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus placeholder="name@example.com">
                <label for="email">Email address
                </label>
                <x-input-error :messages="$errors->get('email')"/>
                
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password"
                            required  placeholder="Password">
                <label for="password">Password</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
           

              <div class="form-check mb-6" >
                <input class="form-check-input" type="checkbox" onclick="myFunction()" id="rememberPasswordCheck">
                <div style="display: flex; justify-content:space-between" >
                <label class="form-check-label" for="rememberPasswordCheck" style="font-size: 14px;">
                  Show Password
                </label>
                <a href="Forgot Password" style="color:blue; font-size: 14px;">Forgot Password?</a>
                </div>
              </div>

              <script>
                function myFunction() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                   x.type = "password";
                  }
                }
              </script>

              <div style="margin-right:3% ;margin-bottom:2%">
              <div class="d-grid">
              <x-primary-button class="button_login text-uppercase fw-bold">
                {{ __('Log in') }}
              </x-primary-button>
              
             
            </div>
              </div>
            </form>
          </div>
        </div>
      </div>
                    </div>
        {{-- LOGIN  MODAL END --}}


            {{-- START DEVELOPER MODAL--}}

        
    <div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center mb-0">
                    <h4 class="modal-title mb-0 pb-0">Chat with Developers</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="chat-container">
                    <div class="admin">
                        <img src="{{ asset('assets/images/admin.png') }}" alt="Admin" class="admin-img rounded-circle">
                    </div>
                    <div class="chat-bubble">
                        <p>Hey there! How can we assist you today?</p>
                    </div>
                </div>
                <form id="messageForm">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" id="messageInput" placeholder="Type your message...">
                        <div class="send-icon">
                            <img src="{{ asset('assets/images/send.png') }}" alt="chat" class="send" width="30" height="30">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

{{-- START DEVELOPER MODAL--}}