<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="col-md-9" >
  <div style="height: 635px; overflow-y: auto; border-style: solid; border-color: #62AC83; border-radius: 20px;" id="dashboard_section">
    
        <!-- Main content -->
        <section class="content" style="margin-left: 4%; margin-right: 4%">
          <div class="container-fluid">
              <p class="acc">ACCOMPLISHMENTS</p>
              
              <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
                <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1" style="width: 70px; height: 70px; margin-top:3%">          
              @if(isset($highestRatedUser))
              <div class="info-box-content">
                <span class="award3">{{ $highestRatedUser->search_username }} </span>
                <h6>Top-rated </h6>
                <span class="desc3 secret">Lorem ipsum dolor sit amet. Ut facilis corrupti sed culpa consequatur et autem consequatur ut quae placeat qui inventore sapiente qui distinctio omnis aut neque vitae. Ab illo officia sed aliquam harum ea sint dolor in deserunt voluptatem. </span>
              </div>
            @endif
              <!-- /.info-box-content -->
        </div>
        @if(isset($outstandingUser))
        <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1" style="width: 70px; height: 70px; margin-top:3%">
              <div class="info-box-content">
                <span class="award3">{{ $outstandingUser->search_username }} </span>
                <h6>Outstanding Academic </h6>
                <span class="desc3 secret">Lorem ipsum dolor sit amet. Ut facilis corrupti sed culpa consequatur et autem consequatur ut quae placeat qui inventore sapiente qui distinctio omnis aut neque vitae. Ab illo officia sed aliquam harum ea sint dolor in deserunt voluptatem. </span>
              </div>
              <!-- /.info-box-content -->
        </div>
      @endif
      @if(isset($excellentUser))
        <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1" style="width: 70px; height: 70px; margin-top:3%">
              <div class="info-box-content">
                <span class="award3">{{ $excellentUser->search_username }} </span>
                <h6>Excellent in TaskSwap</h6>
                <span class="desc3 secret">Lorem ipsum dolor sit amet. Ut facilis corrupti sed culpa consequatur et autem consequatur ut quae placeat qui inventore sapiente qui distinctio omnis aut neque vitae. Ab illo officia sed aliquam harum ea sint dolor in deserunt voluptatem. </span>
              </div>
              <!-- /.info-box-content -->
        </div>
        @endif
    </div>
</section>
      