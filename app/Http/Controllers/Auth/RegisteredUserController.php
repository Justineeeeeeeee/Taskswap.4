<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Validator;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('index');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['string', 'max:255'],
            'bio' => ['string', 'max:255'],
            'age' => ['integer', 'max:80'],
            'gender' => ['string', 'max:255'],
            'location' => ['string', 'max:255'],
            'education' => ['string', 'max:255'],
            'skills' => ['string', 'max:255'],
            'rating' => ['string', 'max:255'],
            'reviews' => ['string', 'max:255'], 
            'terms' => ['string', 'max:255'],
            'notes' => ['string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

            
        ]);
  

        $user = User::create([

            
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'username' => $request->username,
            'bio' => $request->bio,
            'age' => $request->age,
            'gender' => $request->gender,
            'location' => $request->location,
            'skills' => $request->skills,
            'rating' => $request->rating,
            'reviews' => $request->reviews,
            'terms' => $request->terms,
            'notes' => $request->notes,
            'education' => $request->education,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
