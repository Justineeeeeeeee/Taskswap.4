<div class="col-md-9" >
<div  style="border-style: solid; border-color: #62AC83; border-radius:20px"  >

  <div >
    <!-- Content Header (Page header) -->
    <div class="content-header" >
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="rounded-square" style="margin-left: 6%;">
              <p class="square-text" style="font-family:Fira Sans, sans-serif; ; margin-left: -2%;">DAILY REWARDS</p>
              <p class="wallet" style="display: flex; align-items: center; justify-content: center;">{{ Auth::user()->token_balance }}</p>
              
              <div class="token-images" style="display: flex; align-items: center; justify-content: center;">
                <img src="assets/images/token.png" alt="Token 1" class="token">
                <img src="assets/images/token.png" alt="Token 2" class="token">
                <img src="assets/images/token.png" alt="Token 3" class="token">
                <img src="assets/images/token.png" alt="Token 4" class="token">
                <img src="assets/images/token.png" alt="Token 5" class="token">
                <img src="assets/images/token.png" alt="Token 6" class="token">
                <img src="assets/images/token.png" alt="Token 7" class="token">
              </div>
              <button class="btn btn-special check" onClick="location.href='Token Page'" type="button"  style="width:25%;font-weight:bold; font-family: PT Serif, sans-serif; margin-top:1.7%;">Check-in Today</button>
              </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
     <!-- Main content -->
     <section class="content" style="margin-left: 4%; margin-right:4%">
      <div class="container-fluid" >
      <h4 class="acc" style="font-family:Fira Sans, sans-serif;  margin-left: 0%;">ACHIEVEMENTS</h4>
      @if(isset($highestRatedUser))
      <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1" style="width: 70px; height: 70px; margin-top:3%">
              <div class="info-box-content">
                <span class="award3">{{ $highestRatedUser->search_username }} </span>
                <h6 style="font-family:Fira Sans, sans-serif; ">Top-rated Hero on TaskSwap</h6>
                <span class="desc3 secret" style="font-family: PT Serif, sans-serif">Renowned for exceptional talent and unwavering dedication, this top-rated freelancer is admired by clients across various industries. With a remarkable portfolio that showcases a diverse skill set, they consistently deliver high-quality work, whether in web development, graphic design, content writing, or digital marketing.  </span>
              </div>
              <!-- /.info-box-content -->
        </div>
        @endif
        @if(isset($outstandingUser))
        <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1" style="width: 70px; height: 70px; margin-top:3%">
              <div class="info-box-content">
                <span class="award3">{{ $outstandingUser->search_username }} </span>
                <h6 style="font-family:Fira Sans, sans-serif; ">Outstanding Academic Hero on TaskSwap</h6>
                <span class="desc3 secret" style="font-family: PT Serif, sans-serif">Renowned for exceptional talent and unwavering dedication, this outstanding academic is admired by peers and students alike across various disciplines. With a remarkable body of work that showcases a diverse range of research and publications, they consistently contribute groundbreaking insights to their field, whether in scientific research, humanities, or social sciences.  </span>
              </div>
              <!-- /.info-box-content -->
        </div>
      @endif
      @if(isset($excellentUser))
        <div class="info-box" style="border-style: solid; border-color: #62AC83; border-radius:20px">
      <img class="trophy1" src="assets/images/trophy.png" alt="Trophy 1" style="width: 70px; height: 70px; margin-top:3%">
              <div class="info-box-content">
                <span class="award3">{{ $excellentUser->search_username }} </span>
                <h6 style="font-family:Fira Sans, sans-serif; ">Excellent in TaskSwap</h6>
                <span class="desc3 secret" style="font-family: PT Serif, sans-serif">Renowned for exceptional talent and unwavering dedication, this outstanding academic is admired by peers and students alike across various disciplines. With a remarkable body of work that showcases a diverse range of research and publications, they consistently contribute groundbreaking insights to their field, whether in scientific research, humanities, or social sciences. </span>
              </div>
              <!-- /.info-box-content -->
        </div>
        @endif
      </div>
</div>
</div>
