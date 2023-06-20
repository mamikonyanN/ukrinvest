<?php

namespace App\Http\Controllers;

use App\Models\MissionDescription;
use App\Http\Requests\UpdateMissionDescriptionRequest;
use Illuminate\Support\Facades\Log;

class MissionDescriptionController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMissionDescriptionRequest $request, MissionDescription $mission)
    {
        $mission->update(['text' => $request->input('text')]);
        return redirect()->back();
    }
}
