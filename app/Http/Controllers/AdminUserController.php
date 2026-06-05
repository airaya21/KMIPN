<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::whereIn('role', ['parent', 'caregiver']);

        if ($request->has('role') && $request->role != '') {
            $query->where('role', $request->role);
        }

        if ($request->has('search') && $request->search != '') {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        $users = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => ['required', Rule::in(['parent', 'caregiver'])],
            'daycare_code' => 'nullable|string|max:50',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('admin.users.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // Hanya izinkan edit parent & caregiver
        if (!in_array($user->role, ['parent', 'caregiver'])) {
            abort(403, 'Anda tidak diizinkan mengubah pengguna ini.');
        }

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if (!in_array($user->role, ['parent', 'caregiver'])) {
            abort(403, 'Anda tidak diizinkan mengubah pengguna ini.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|string|min:8',
            'role' => ['required', Rule::in(['parent', 'caregiver'])],
            'daycare_code' => 'nullable|string|max:50',
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('admin.users.index')->with('success', 'Data pengguna berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if (!in_array($user->role, ['parent', 'caregiver'])) {
            abort(403, 'Anda tidak diizinkan menghapus pengguna ini.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'Pengguna berhasil dihapus.');
    }

    /**
     * Reset password secara otomatis.
     */
    public function resetPassword(User $user)
    {
        if (!in_array($user->role, ['parent', 'caregiver'])) {
            abort(403, 'Anda tidak diizinkan mereset password pengguna ini.');
        }

        // Generate password acak: 3 huruf besar + 3 angka + 2 huruf kecil + 1 simbol
        $newPassword = substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ'), 0, 3)
                     . rand(100, 999)
                     . substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 2)
                     . substr(str_shuffle('!@#$%'), 0, 1);

        $user->update(['password' => Hash::make($newPassword)]);

        return redirect()->route('admin.users.edit', $user)
            ->with('reset_password', $newPassword)
            ->with('reset_name', $user->name);
    }
}
