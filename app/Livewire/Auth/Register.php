<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
#[Layout('components.layouts.auth')]
class Register extends Component
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(Request $request)
    {
        // dd($request->all());
        $validated = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ])->validate();

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));
        $user->syncRoles('user');
        Auth::login($user);

        return redirect()->route('home')->with('success', 'Registration successful. Welcome to Tinatangi Cafe!');
    }
}
