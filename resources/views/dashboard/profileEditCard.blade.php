<div class="col-md-3 " >

<!-- Profile Image -->
<div class="card" style="border-style: solid; border-color: #62AC83"  id = "dashboard_side">
  <div class="card-body box-profile" style="border-style: solid; border-color: #62AC83; border-radius: 10px">

  <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

    <div style="display: flex; align-items: center; margin-left:38%;">
    <div class="upload">
    <img src="storage/users-avatar/{{ Auth::user()->avatar}}" width= 100 height = 100 alt="">
    <div class="round">
    <input type="file" id="avatar" name="avatar">
    <i class="fa fa-camera" style="color: #fff;"></i>
    </div>
</div>
    </div>

        <strong class="" style="font-family:Fira Sans, sans-serif; ">Username</strong>
    <h3 class="profile-username text-center" ><x-text-input class="text-center"  style="border: none; font-family:Fira Sans, sans-serif; " type="text" name="username" id="username" value="{{ Auth::user()->username }}"/> </h3>

<div style=" display: flex; align-items: center; margin-left:35%;">
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
</div><br>



        <strong style="font-family:Fira Sans, sans-serif; " ><i class="fas fa-book mr-1"></i> Bio</strong>
    <p>
    <x-text-input  type="text" name="bio" style="border:none; width:300px; height:50px; text-align:left; font-family:Fira Sans, sans-serif; " id="bio" :value="old('bio', $user->bio)"/>
    <x-input-error class="mt-2" :messages="$errors->get('Bio')" />
    </p>
    <hr style="color: #62AC83">

    <hr style="color: #62AC83"> 

    <strong style="font-family:Fira Sans, sans-serif;"><i class="fas fa-book mr-1"></i> Education</strong>
    <p>
    <x-text-input  type="education" name="education" style="border:none; width:300px; height:50px; text-align:left; font-family:Fira Sans, sans-serif; " id="education" :value="old('education', $user->education)"/>
    <x-input-error class="mt-2" :messages="$errors->get('Education')" />
    </p>
    <hr style="color: #62AC83">

    <strong style="font-family:Fira Sans, sans-serif; "><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
    <p>
    <x-text-input  type="text" name="location" style="border:none; width:300px; height:50px; text-align:left;font-family:Fira Sans, sans-serif; " id="location" :value="old('location', $user->location)"/>
    <x-input-error class="mt-2" :messages="$errors->get('Location')" />
    </p>
    <hr style="color: #62AC83">

    <strong style="font-family:Fira Sans, sans-serif; "><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
    <p>
    <x-text-input  type="text" name="skills" style="border:none; width:300px; height:50px; text-align:left; font-family:Fira Sans, sans-serif; " id="skills" :value="old('skills', $user->skills)"/>
    <x-input-error class="mt-2" :messages="$errors->get('Skills')" />
    </p>
    <hr style="color: #62AC83">

    <strong style="font-family:Fira Sans, sans-serif; "><i class="far fa-file-alt mr-1"></i> Notes</strong>
    <p>
    <x-text-input  type="text" name="notes" style="border:none; width:300px; height:50px; text-align:left; font-family:Fira Sans, sans-serif; " id="notes" :value="old('notes', $user->notes)"/>
    <x-input-error class="mt-2" :messages="$errors->get('Notes')" />
    </p>
    <div>
          <x-primary-button class="btn btn-special"  style="width:100%;font-weight:bold; font-family:Fira Sans, sans-serif;" >{{ __('Save') }}</x-primary-button>

@if (session('status') === 'profile-updated')
    <p
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-init="setTimeout(() => show = false, 2000)"
        class="text-sm text-gray-600"
        style="font-family:Fira Sans, sans-serif; "
    >{{ __('Saved.') }}</p>
@endif  
          <button class="btn btn-special" onclick="Myportfolio()" type="Button" style="width:100%;font-weight:bold;font-family:Fira Sans, sans-serif; ">My Portfolio</button>  
          </div>
</form>

  </div>
</div>
</div>



