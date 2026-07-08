<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index', [
            'portfolio' => config('portfolio'),
        ]);
    }

    public function contact(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email', 'max:180'],
            'subject' => ['nullable', 'string', 'max:180'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        // Log the message so it is never lost even if mail is not configured.
        Log::channel('stack')->info('Portfolio contact message', $data);

        // If mail is configured (not the default "log" driver behaviour you want),
        // you can enable real email delivery here later.

        return back()->with('status', 'Thanks for reaching out, ' . $data['name'] . '! Your message has been received. I will get back to you soon.');
    }
}
