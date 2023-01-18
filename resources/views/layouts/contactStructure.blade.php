@extends('layouts.contactApp')


@section('content')
    <div class="col-12 cardContacts card shadow">
        <div class="cardTitle card-header p-3 text-light d-flex justify-content-between align-items-center">
            <span class="fs-3">New Contact</span>
        </div>
        <form action="@yield('routeName')" method="POST">
            @csrf
            <div class="tableContent card-body">
                <div class="mb-3 row">
                    <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fullname" name="fullName" value="{{$contact['fullName']}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{$contact['phone']}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="company" class="col-sm-2 col-form-label">Company</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="company" name="company" value="{{$contact['company']}}" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="Company One">Company One</option>
                            <option value="Company Two">Company Two</option>
                            <option value="Company Three">Company Three</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" value="{{$contact['email']}}" name="email">
                    </div>
                </div>

            </div>
            <div class="card-footer d-flex justify-content-end gap-3 text-muted p-3">
                @yield('formFooter')
            </div>
        </form>
    </div>
@endsection
