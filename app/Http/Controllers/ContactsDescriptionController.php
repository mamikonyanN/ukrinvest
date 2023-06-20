<?php

namespace App\Http\Controllers;

use App\Models\ContactsDescription;
use App\Http\Requests\UpdateContactsDescriptionRequest;

class ContactsDescriptionController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactsDescriptionRequest $request, ContactsDescription $contact)
    {
        $contact->update([
            'phone_number' =>     $request->input('phone_number'),
            'email' =>            $request->input('email'),
            'building_number' =>  $request->input('building_number'),
            'street_name' =>      $request->input('street_name'),
            'postcode' =>         $request->input('postcode'),
            'city' =>             $request->input('city'),
            'country' =>          $request->input('country'),
        ]);
        return redirect()->back();
    }
}
