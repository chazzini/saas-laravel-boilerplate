<?php /** @noinspection PhpClassNamingConventionInspection */

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Handles user account
 */
class ProfileController extends Controller
{
    public function index()
    {
        return view("account.profile.index");
    }
}
