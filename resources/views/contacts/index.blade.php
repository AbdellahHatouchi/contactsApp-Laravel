@extends('layouts.contactApp')

@section('content')
    <div class="col-12 cardContacts card shadow">
        <div class="cardTitle card-header p-3 text-light d-flex justify-content-between align-items-center">
            <span class="fs-3">Contacts</span>
            <a class="btn btn-success" href="{{ route('contacts.create') }}">New Contact</a>
        </div>
        <div class="tableContent card-body">
            @if (!$isEmptyContacts)
                <div class="row gap-2">
                    <div class="col-md-4 col-sm">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>All Companys</option>
                            <option value="Company One">Company One</option>
                            <option value="Company Two">Comapny Two</option>
                            <option value="Company Three">Company Three</option>
                        </select>
                    </div>
                    <div class="col d-flex gap-2">
                        <input type="search" class="form-control" placeholder="Search ..." >
                        <button class="btn btn-outline-primary">Search</button>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Company</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($contacts as $contact)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $contact->fullName }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->company }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-3 align-items-center">
                                        <a href="{{ route('contacts.show', $contact->id) }}"
                                            class="border rounded rounded-full p-2 d-flex justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="#0d6efd" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path
                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('contacts.edit', $contact->id) }}"
                                            class="border rounded rounded-full p-2 d-flex justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="#198754" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('contacts.delete', $contact->id) }}"
                                            class="border rounded rounded-full p-2 d-flex justify-content-center align-items-center">
                                            @method('POST')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="#dc3545" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="d-flex justify-content-center align-items-center flex-column gap-3 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#6f42c1"
                        class="bi bi-dropbox" viewBox="0 0 16 16">
                        <path
                            d="M8.01 4.555 4.005 7.11 8.01 9.665 4.005 12.22 0 9.651l4.005-2.555L0 4.555 4.005 2 8.01 4.555Zm-4.026 8.487 4.006-2.555 4.005 2.555-4.005 2.555-4.006-2.555Zm4.026-3.39 4.005-2.556L8.01 4.555 11.995 2 16 4.555 11.995 7.11 16 9.665l-4.005 2.555L8.01 9.651Z" />
                    </svg>
                    <span class="text-dark fs-3 fw-semibold text-capitalize">Contacts data is Empty</span>
                    <a class="btn btn-outline-success" href="{{ route('contacts.create') }}">New Contact</a>
                </div>
            @endif
        </div>
        <div class="cardPaginate card-footer text-muted py-2 px-3">
            {{ $contacts->links() }}
        </div>
    </div>
@endsection
