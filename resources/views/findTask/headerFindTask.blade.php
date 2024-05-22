  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between" style="margin-left: 15%; margin-right:15%;">

    <div class="d-flex align-items-center justify-content-start  ">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="{{ asset('assets/images/logo.png') }}" alt="TaskSwap" width="50">
        </a>
        <a href="Find Task" class="secret" style="margin-left: 10px;  width:70px;" > Find Task</a>
          <a href="Post Task" class="secret"  style="margin-left: 20px; width:80px;"> Post Task</a>
          <a href="dashboard" class="secret" style="margin-left: 10px; margin-right: 10px;"> Dashboard</a>
        <div class="box" style="padding-left:-10%; margin-left:10px">
<input type="text" placeholder="Search...">
<a href="#">
<i class="fas fa-search"></i>
</a>
</div>
</div>

  


      <div class="position-end">
      
      <div class="dropdown">
      <a class="nav-link" onclick="dropdown1()">
        <img src="assets/images/avatar4.png" style="width: 40px; height: 40px; border-radius: 50%;">
         
          <span class="badge badge-danger navbar-badge">5</span>
        </a>
        <div id="myDropdown1" class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        <i class="fa fa-user" aria-hidden="true" style="padding-right: 4px;"></i>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}

        <div class="dropdown-divider"></div>
          <a href="dashboard" class="dropdown-item" >
          <i class="fas fa-envelope"></i> Inbox
          </a>

      
        <div class="dropdown-divider"></div>
          <a href="dashboard" class="dropdown-item" >
          <i class="fas fa-tasks"></i> Task Status
          </a>

          <div class="dropdown-divider"></div>
          <a href="dashboard" class="dropdown-item" >
          <i class="fas fa-history"></i> Transaction History
          </a>

          <div class="dropdown-divider hide" ></div>
          <a href = "Edit Profile"  class="dropdown-item hide">
          <i class="fas fa-cog mr-2"></i> Settings
            
          </a>
          <div class="dropdown-divider"></div>
                     <!-- Authentication -->
                     <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                            
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                 <i class="fas fa-sign-out-alt mr-2" ></i>
                                                {{ __() }}Log Out
                            </x-dropdown-link>
                            
                        </form>



        </div>
</div>


  </header><!-- End Header -->