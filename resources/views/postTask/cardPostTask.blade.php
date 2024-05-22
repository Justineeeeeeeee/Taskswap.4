<div class="col-md-3 " >

<!-- Profile Image -->
<div class="card" style="border-style: solid; border-color: #62AC83"  id = "dashboard_side">
  <div class="card-body box-profile" style="border-style: solid; border-color: #62AC83; border-radius: 10px">
    <div style="display: flex; align-items: center; justify-content: center;">
    <img src="{{ asset('assets/images/avatar4.png') }}" style="border-radius: 10%;" alt="TaskSwap" height="80">
    </div>

    <h3 class="profile-username text-center">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>

<div style=" display: flex; align-items: center; justify-content: center;">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star.png') }}" height="20">
    <img src="{{ asset('assets/images/star1.png') }}" height="20">
</div><br>

<p class="text-center">{{ Auth::user()->bio }} </p>

    <hr style="color: #62AC83">

    <strong><i class="fas fa-book mr-1"></i> Education</strong>

    <p>
    {{ Auth::user()->education }}
    </p>

    <hr style="color: #62AC83">

    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

    <p>    {{ Auth::user()->location }} </p>

    <hr style="color: #62AC83">

    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
    <p>
    {{ Auth::user()->skills }}
    </p>

    <hr style="color: #62AC83">

    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

    <p>{{ Auth::user()->notes }} </p>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</div>
</section>
