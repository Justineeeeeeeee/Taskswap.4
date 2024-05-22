<div class="col-md-9" >
<div  style="border-style: solid; width:100%; border-color: #62AC83; border-radius:20px; margin-left: 22%; margin-top:-5%;" id="dashboard_section"  >

  <div>

  </div>
    <!-- Main content -->
    <section class="content" style="margin-left: 4%; margin-right:4%">
      <div class="container-fluid" >
      <p class="acc" style="font-family:Fira Sans, sans-serif; ">SEARCH RESULTS:</p>

      @if($search->isEmpty())
            <h4 class="acc" style="text-align: center; font-family:Fira Sans, sans-serif;" >Username Not Found!</h4>
  @else
      @foreach($search as $item)
          <a href="{{ route('dashboard.Feed', ['id' => $item->id]) }}">
              <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px; height:80px;">
                  <img src="storage/users-avatar/{{ $item->avatar}}" alt="TaskSwap" style="height: 50px; width:50px; border-radius:75%">
                  <div class="info-box-content">   
                      <span class="award3" style="font-family:Fira Sans, sans-serif; ">{{ $item->username }}</span>
                      <span class="desc3 secret" style="font-family:Fira Sans, sans-serif; ">{{ $item->first_name }} {{ $item->last_name }}</span>
                  </div>
              </div>
          </a>
      @endforeach
  @endif
        
    </div>

  