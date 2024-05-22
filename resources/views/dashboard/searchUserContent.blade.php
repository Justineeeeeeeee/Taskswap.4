<div class="col-md-3">
    <!-- Profile Image -->
    <div class="card" style="border-style: solid; border-color: #62AC83"  id="dashboard_side">
        <div class="card-body box-profile" style="border-style: solid; border-color: #62AC83; border-radius: 10px">
            <div style="display: flex; align-items: center; justify-content: center;">
                <img src="storage/users-avatar/{{ $search->avatar }}" alt="TaskSwap" height="80" style="border-radius: 10%;">
            </div>
            <h3 class="profile-username text-center" style="font-family:Fira Sans, sans-serif; ">{{ $search->username }}</h3>
            <div style="display: flex; align-items: center; justify-content: center;">
                <div id="average-star-rating">
                    <a href="{{ route('ratings.view', ['id' => $search->id]) }}">

                            @php
                            $filledStars = $average

                            @endphp
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $filledStars)
                                    <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                                @else
                                    <i class="fa-star star-light mr-1 main_star text-warning far"></i>
                                @endif
                            @endfor

                    </a>
                </div>
            </div><br>

            <p class="text-center" style="font-family:Fira Sans, sans-serif;">{{ $search->bio }} </p>
    
    <hr style="color: #62AC83">

    <strong style="font-family:Fira Sans, sans-serif; "><i class="fas fa-book mr-1"></i> Education</strong>

    <p style="font-family:Fira Sans, sans-serif;">
    {{ $search->education }} 
    </p>

    <hr style="color: #62AC83">

    <strong style="font-family:Fira Sans, sans-serif; "><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

    <p style="font-family:Fira Sans, sans-serif; ">    {{ $search->location }} </p>

    <hr style="color: #62AC83">

    <strong style="font-family:Fira Sans, sans-serif; "><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

    <p style="font-family:Fira Sans, sans-serif; ">
    {{ $search->skills }} 
    </p>

    <hr style="color: #62AC83">

    <strong style="font-family:Fira Sans, sans-serif; "><i class="far fa-file-alt mr-1"></i> Notes</strong>

    <p style="font-family:Fira Sans, sans-serif; ">{{ $search->notes }} </p> 

            <a href="{{ route('Myportfolio.index', ['id' => $search->id]) }}">
                <button class="btn btn-special" type="submit" style="width:100%;font-weight:bold">Portfolio</button>
            </a>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
