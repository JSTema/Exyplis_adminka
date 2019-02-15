@extends('layouts.app')

@section('content')

    <hr>
    <h4 class="text-left ml-5">Редактирование Новости</h4>
    <br>

    <form action="{{ route('admin.update', $article) }}" method="post" class="form-horizontal">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        @include('admin.form.index')
    </form>

@endsection()
