@extends('admin.layouts.admin_app')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание новости @endslot
            @slot('parent') Главная @endslot
            @slot('active') Новости @endslot
        @endcomponent

        <hr>

        <form class="form-horizontal" action="{{route('admin.article.store')}}" method="post">
            {{csrf_field()}}

            {{-- Form included --}}
            @include('admin.articles.partials.form')

            <input type="hidden" name="created_at" value="{{Auth::id()}}">
        </form>
    </div>

@endsection