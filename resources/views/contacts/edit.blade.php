@extends('contacts.create')

@section('routeName')
    {{ route('contacts.update',$contact->id) }}
@endsection
@section('formMethod')
    @method('put')
@endsection
@section('formFooter')
    <button class="btn btn-primary" type="submit">Edit Contact</button>
    <a class="btn btn-outline-danger" href="{{ route('contacts.index') }}">Cancel</a>
@endsection
