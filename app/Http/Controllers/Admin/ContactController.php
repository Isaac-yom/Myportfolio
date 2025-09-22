<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\Admin\ContactFormRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contact.index', [
            'contacts' => Contact::orderby('created_at', 'desc')->paginate(10)
        ]);
    }

    public function create()
    {
        return view('contact', [
            'contact' => new Contact(),
        ]);
    }

    public function store(ContactFormRequest $request)
    {
        $contact = Contact::create($request->validated());
        return to_route('confirmation')->with('success', 'Message bien envoyé');
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return to_route('admin.contact.index')->with('success', 'Le contact a été bien supprimé');
    }
}
