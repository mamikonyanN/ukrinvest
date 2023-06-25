<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Http\Requests\StoreAppealRequest;
use Illuminate\Support\Facades\Redirect;

class AppealController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppealRequest $request)
    {
        Appeal::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);
        return redirect()->back();
    }
}
