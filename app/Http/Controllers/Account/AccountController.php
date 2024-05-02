<?php

/** @noinspection PhpClassNamingConventionInspection */

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;

/**
 * Handles user account
 */
class AccountController extends Controller
{
    /**
     * Get the index on account page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        return view('account.index');
    }
}
