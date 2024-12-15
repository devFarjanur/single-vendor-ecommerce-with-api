<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function adminStore(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            $user = $request->user();
            if ($user->role === 'admin') {
                $request->session()->flash('message', 'Welcome, Admin! You are successfully logged in.');
                $request->session()->flash('alert-type', 'success');
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                $request->session()->flash('message', 'Access Denied. Only admins are allowed to log in.');
                $request->session()->flash('alert-type', 'error');
                return redirect()->route('admin.login');
            }
        }
        $request->session()->flash('message', 'These credentials do not match our records.');
        $request->session()->flash('alert-type', 'error');

        return redirect()->back();
    }
    /**
     * Check if the user is logging into the correct page based on their role.
     */
    private function isLoginPageForRole($user, $request)
    {
        if ($request->routeIs('admin.login') && $user->role !== 'admin') {
            return false;
        }
        if ($request->routeIs('customer.login') && $user->role !== 'customer') {
            return false;
        }

        return true;
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $user = Auth::user();

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $request->session()->flash('message', 'You have been logged out successfully.');
        $request->session()->flash('alert-type', 'success');

        switch ($user->role) {
            case 'admin':
                return redirect()->route('admin.login');
            case 'customer':
                return redirect()->route('customer.login');
            default:
                return redirect()->route('customer.login');
        }
    }
}
