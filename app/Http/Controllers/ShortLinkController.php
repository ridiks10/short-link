<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\ShortLink\Entity\ShortLink;
use Illuminate\View\View;

class ShortLinkController extends Controller
{
    public function index(): View
    {
        return view('short-link.index');
    }

    public function redirect(ShortLink $short): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        return redirect($short->original_link);
    }

}
