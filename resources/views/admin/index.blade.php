@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin.create')}}" class="btn btn-outline-success " role="button" aria-pressed="true">Добавить новость <i class="fa fa-plus"></i></a>
                <br><br>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Текст статьи</th>
                        <th class="text-right">Редактировать/Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($articles as $article)
                    <tr>
                            <th scope="row">{{ $loop->index+1 }}</th>
                            <td>{{ $article->name }}</td>
                            <td>{{ $article->description }}</td>
                            <td>{{ $article->text }}</td>
                        <td class="text-right">

                            <form onsubmit="if(confirm('Хотите Удалить ?')){return true} else {return false}" action="{{ route('admin.destroy', $article) }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <a href="{{ route('admin.edit', $article) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <i>|</i>
                                <button class="btn btn-danger" type="submit"><i class="fa fa-close"></i></button>
                            </form>

                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center"><h3>Статьи отсутствуют</h3></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <br>
                <i class="fa fa-next">{{ $articles->links() }}</i>
            </div>
        </div>
    </div>
    @endsection()





