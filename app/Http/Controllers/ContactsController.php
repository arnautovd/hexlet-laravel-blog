<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ContactsController extends Controller
{
    public function index(): View
    {
        return view('contacts');
    }

    public function email(): string
    {
        return 'hello@example.com';
    }
}
