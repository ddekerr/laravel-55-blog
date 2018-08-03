@extends('admin.layouts.admin_app')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание пользователя @endslot
            @slot('parent') Главная @endslot
            @slot('active') Пользователи @endslot
        @endcomponent

        <hr>

            <form class="form-horizontal" action="{{route('admin.user_management.user.store')}}" method="post">
                {{csrf_field()}}
                @include('admin.users.partials.form')
            </form>
    </div>

@endsection