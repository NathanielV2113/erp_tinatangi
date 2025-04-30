<?php

namespace App\Livewire\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Login extends Component
{
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    /**
     * Handle an incoming authentication request.
     */
    public function login()
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $user = Auth::user();

        switch($user->getRoleNames()->first()) {
            case 'user':
                return redirect()->intended(route('user', absolute: false))->with('success', 'Welcome'.' '.$user->name.'! ');
            case 'employee':
                return redirect()->intended(route('employee', absolute: false))->with('success', 'Welcome'.' '.$user->name.'! ');
            case 'crm':
                return redirect()->intended(route('crm', absolute: false))->with('success', 'Welcome'.' '.$user->name.'! ');
            case 'mfr':
                return redirect()->intended(route('mfr', absolute: false))->with('success', 'Welcome'.' '.$user->name.'! ');
            case 'scm':
                return redirect()->intended(route('scm', absolute: false))->with('success', 'Welcome'.' '.$user->name.'! ');
            case 'frm':
                return redirect()->intended(route('frm', absolute: false))->with('success', 'Welcome'.' '.$user->name.'! ');
            case 'hrm':
                return redirect()->intended(route('hrm', absolute: false))->with('success', 'Welcome'.' '.$user->name.'! ');
            case 'admin':
                return redirect()->intended(route('dashboard', absolute: false))->with('success', 'Welcome'.' '.$user->name.'! ');
            case 'super-admin':
                return redirect()->intended(route('dashboard', absolute: false))->with('success', 'Welcome'.' '.$user->name.'! ');
            default:
        }
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }
}
