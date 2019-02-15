@extends('layouts.app')

@section('content')

    <hr>
    <h4 class="text-left ml-5">Создание Новой Новости</h4>
    <br>

    <form action="{{ route('admin.store') }}" method="post" class="form-horizontal">
        {{ csrf_field() }}

        @include('admin.form.index')
    </form>

@endsection()
