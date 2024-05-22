  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between" style="margin-left: 15%; margin-right:15%;">

    <div class="d-flex align-items-center justify-content-start  ">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="{{ asset('assets/images/logo.png') }}" alt="TaskSwap" width="50">
        </a>
          <a href="{{route('Find_Task')}}" class="secret" style="margin-left: 10px;  width:70px; color:#000;font-family:Fira Sans, sans-serif;  font-size:14px" > Find Task</a>  
          <a href="{{route('dashboard')}}" class="secret" style="margin-left: 10px; margin-right: 10px;; color:#000; font-family:Fira Sans, sans-serif;  font-size:14px" > Dashboard</a>

        <div class="box" style="margin-left:1%">
        <input type="text" placeholder="Search..." id="searchInput" >

        <a href="#">
        <i class="fas fa-search" id="searchInputButton"></i>
        </a>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
         $(document).ready(function(){
        $('#searchInput').keyup(function(e){
            if (e.keyCode === 13) { // Check if Enter key is pressed
                var query = $(this).val().trim();
                if (query !== '') {
                    window.location.href = "{{ route('dashboard.SearchResults') }}?query=" + query;
                }
            }
        });
        $('#searchInputButton').click(function(){
          var query = $('#searchInput').val().trim();
            if (query !== '') {
                window.location.href = "{{ route('dashboard.SearchResults') }}?query=" + query;
            }
        });
    });
        </script>
</div>

  


      <div class="position-end">
      
      <div class="dropdown">
      <a class="nav-link" onclick="dropdown1()">
        <img src="storage/users-avatar/{{ Auth::user()->avatar}}" style="width: 40px; height: 40px; border-radius: 50%;">
         
          <span class="badge badge-danger navbar-badge">{{auth()->user()->getMessageCount()}}</span>
        </a>
        <div id="myDropdown1" class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="font-family: PT Serif, sans-serif">

        <div class="dropdown-divider"></div>
        <a href="Edit Profile" class="dropdown-item">
        <i class="fa fa-user" aria-hidden="true" style="padding-right: 4px;"></i>{{ Auth::user()->username }}

        <div class="dropdown-divider"></div>
          <a href="{{route('chatify')}}" class="dropdown-item">
          <i class="fas fa-envelope"></i> Messages
          </a>

          <div class="dropdown-divider"></div>
          <a href="{{route('Notifications')}}" class="dropdown-item">
          <i class="fa-solid fa-bell"></i> Notification  
          </a>

      
        <div class="dropdown-divider"></div>
          <a href="{{route ('taskstatus.index')}}" class="dropdown-item">
          <i class="fas fa-tasks"></i> Task Status
          </a>

          <div class="dropdown-divider"></div>
          <a href="Transaction History" class="dropdown-item" >
          <i class="fas fa-history"></i> Transaction History
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

  <script>
    function dropdown1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}
function dropdown2() {
  document.getElementById("myDropdown2").classList.toggle("show");
}
  </script>