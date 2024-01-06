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
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $referenceId = Str::random(5);
        $user = User::create([
            'referenceId'=>$referenceId,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $email = $request->email;

        event(new Registered($user));

        if (!$user->wasRecentlyCreated) {
            toastr()->error('There was an error creating the instructor!');
            return Redirect::back();
        }

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'x-api-key' => env('API_KEY'),
        ])->post(env('API_URL').'/users', [
            'referenceId' => $referenceId,
            'email' => $email,
        ]);

        if ($response->successful()) {
            toastr()->success('Create Account Success.');
            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);
        } else {
            $user->delete();
            toastr()->error('There was an error sending information to blockChain!');
            return Redirect::back();
        }
    }
}
