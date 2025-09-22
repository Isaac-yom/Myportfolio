@extends('admin.layout')

@section('content')

    <style>
        body {
            background-color: #0a2a5e; 
        }
    </style>

    <div class="d-flex justify-content-between align-items-center">
        <h2 class="title_list">La liste des contacts.<h2>

        <form action="{{ route('logout') }}" method="post">
            @csrf
            @method("delete")
            <button class="btn btn-dark text-white mb-3">Se déconnecter</button>
        </form>
    </div>    

    @if(session('success'))
        <div class="alert alert-success alert-dismissible">
            {{ (session('success')) }}
            <button class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif

    <div id="delete-alert" class="alert alert-warning d-none mt-2" role="alert">
        Êtes-vous sur de vouloir supprimer cette requête ? 
        <div class="mt-2">
            <button id="confirm-delete" class="btn btn-danger btn-sm">Oui, supprimer</button>
            <button id="cancel-delete" class="btn btn-secondary btn-sm">Annuler</button>
        </div>
    </div>

    <table class="table table-responsvie table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>Message</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->firstname }}</td>
                    <td>{{ $contact->tel }}</td>
                    <td>{{ Str::limit($contact->message, 60) }}</td>
                    <td>
                        <form action="{{ route('admin.contact.destroy', $contact) }}" method="post">
                            @csrf
                            @method("delete")
                            <button type="button" class="btn btn-danger btn-delete">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        const buttons = document.querySelectorAll('.btn-delete');
        const alertBox = document.getElementById('delete-alert');
        const confirmButton = document.getElementById('confirm-delete');
        const deleteButton = document.getElementById('cancel-delete');   

        let currentForm = null;

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                currentForm = button.closest('form');
                alertBox.classList.remove('d-none');
            });
        });

        confirmButton.addEventListener('click', () => {
            if(currentForm) {
                currentForm.submit();
            }
        });

        deleteButton.addEventListener('click', () => {
            alertBox.classList.add('d-none');
        });

    </script>

    {{ $contacts->links('pagination::bootstrap-4') }}

@endsection