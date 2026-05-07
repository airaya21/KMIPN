<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /** Tampilkan halaman login */
    public function showLogin()
    {
        if (Auth::check()) {
            return $this->redirectByRole(Auth::user()->role);
        }
        return view('auth.login');
    }

    /** Tampilkan halaman daftar */
    public function showRegister()
    {
        if (Auth::check()) {
            return $this->redirectByRole(Auth::user()->role);
        }
        return view('auth.daftar');
    }

    /** Proses registrasi dan langsung login ke dashboard */
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|min:3|max:100',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|regex:/^(?=.*[a-zA-Z])(?=.*[0-9]).+$/',
            'role'     => 'required|in:admin,parent,caregiver',
        ], [
            'name.required'      => 'Nama lengkap wajib diisi.',
            'name.min'           => 'Nama minimal 3 karakter.',
            'email.required'     => 'Email wajib diisi.',
            'email.email'        => 'Format email tidak valid.',
            'email.unique'       => 'Email sudah terdaftar. Silakan masuk atau gunakan email lain.',
            'password.required'  => 'Kata sandi wajib diisi.',
            'password.min'       => 'Kata sandi minimal 8 karakter.',
            'password.regex'     => 'Kata sandi harus kombinasi huruf dan angka.',
            'role.required'      => 'Silakan pilih peran Anda.',
            'role.in'            => 'Peran yang dipilih tidak valid.',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->role,
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return $this->redirectByRole($user->role);
    }

    /** Proses login dengan validasi role */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
            'role'     => 'required|in:admin,parent,caregiver',
        ], [
            'email.required'    => 'Email wajib diisi.',
            'email.email'       => 'Format email tidak valid.',
            'password.required' => 'Kata sandi wajib diisi.',
            'role.required'     => 'Silakan pilih peran Anda.',
            'role.in'           => 'Peran yang dipilih tidak valid.',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Pastikan role akun sesuai dengan role yang dipilih
            if ($user->role !== $request->role) {
                Auth::logout();
                return back()
                    ->withErrors(['email' => 'Peran yang dipilih tidak sesuai dengan akun Anda.'])
                    ->withInput($request->except('password'));
            }

            return $this->redirectByRole($user->role);
        }

        return back()
            ->withErrors(['email' => 'Email atau kata sandi salah. Silakan coba lagi.'])
            ->withInput($request->except('password'));
    }

    /** Logout */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda berhasil keluar. Sampai jumpa!');
    }

    /** Redirect berdasarkan role */
    private function redirectByRole(string $role)
    {
        return match ($role) {
            'admin'     => redirect()->route('admin.dashboard'),
            'parent'    => redirect()->route('parent.dashboard'),
            'caregiver' => redirect()->route('caregiver.dashboard'),
            default     => redirect()->route('login'),
        };
    }
}
