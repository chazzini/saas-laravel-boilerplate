<?php

/** @noinspection PhpClassNamingConventionInspection */

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccountPasswordRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

/**
 * Handles user account
 */
class PasswordController extends Controller
{
    /**
     * @ return view
     */
    public function index()
    {
        return view('account.password.index');
    }

    /**
     * Update user password
     *
     * @return RedirectResponse
     */
    public function store(StoreAccountPasswordRequest $request)
    {
        //update the database with the right password
        auth()->user()->update(['password' => Hash::make($request->password)]);

        return redirect()->route('account.password.index');
    }
}
