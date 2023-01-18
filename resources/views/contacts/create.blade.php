@extends('layouts.contactApp')


@section('content')
    <div class="col-12 cardContacts card shadow">
        <div class="cardTitle card-header p-3 text-light d-flex justify-content-between align-items-center">
            <span class="fs-3">New Contact</span>
        </div>
        <form action="@section('routeName') {{ route('contacts.store') }} @show" method="POST">
            @section('formMethod')
                @method('POST')
            @show
            @csrf
            <div class="tableContent card-body">
                <div class="mb-3 row">
                    <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fullname" @disabled($isDisabled)
                            name="fullName" value="{{ $contact->fullName }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="phone" @disabled($isDisabled)
                            name="phone" value="{{ $contact->phone }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="company" class="col-sm-2 col-form-label">Company</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="company" name="company" @disabled($isDisabled)
                            aria-label="Default select example">
                            <option @selected($contact->company === '')>Open this select menu</option>
                            <option @selected($contact->company === 'Company One') value="Company One">Company One</option>
                            <option @selected($contact->company === 'Company Two') value="Company Two">Company Two</option>
                            <option @selected($contact->company === 'Company Three') value="Company Three">Company Three</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" @disabled($isDisabled)
                            value="{{ $contact->email }}" name="email">
                    </div>
                </div>

            </div>
            <div class="card-footer d-flex justify-content-end gap-3 text-muted p-3">
                @section('formFooter')
                    <button class="btn btn-success">Add Contact</button>
                    <a class="btn btn-outline-danger" href="{{ route('contacts.index') }}">Cancel</a>
                @show
            </div>
        </form>
    </div>
@endsection
