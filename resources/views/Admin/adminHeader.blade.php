  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between" style="margin-left: 15%; margin-right:15%;">

    <div class="d-flex align-items-center justify-content-start  ">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="{{ asset('assets/images/logo.png') }}" alt="TaskSwap" width="50">
        </a>
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
        <img src="storage/users-avatar/{{ Auth::user()->avatar}}"style="width: 40px; height: 40px; border-radius: 50%;">
         
          <span class="badge badge-danger navbar-badge">{{auth()->user()->getMessageCount()}}</span>
        </a>
        <div id="myDropdown1" class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        <div class="dropdown-divider"></div>
        <a href="Edit Profile" class="dropdown-item"> 
        <i class="fa fa-user" aria-hidden="true" style="padding-right: 4px;"></i>{{ Auth::user()->username }}

        <div class="dropdown-divider"></div>
          <a href="/Home" class="dropdown-item">
          <i class="fa-solid fa-money-bill"></i> Cash In Request
          </a>

          <div class="dropdown-divider"></div>
          <a href="{{route('Cashout')}}" class="dropdown-item">
          <i class="fa-solid fa-money-bill-transfer"></i> Cash Out Request  
          </a>

      
        <div class="dropdown-divider"></div>
          <a href="{{route ('Complains')}}" class="dropdown-item">
          <i class="fa-solid fa-flag"></i> Message Complains
          </a>

          <div class="dropdown-divider"></div>
          <a href="{{route ('TransactionHistory_Admin')}}" class="dropdown-item" >
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