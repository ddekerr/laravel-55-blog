@extends('admin.layouts.admin_app')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование пользователя @endslot
            @slot('parent') Главная @endslot
            @slot('active') Пользователи @endslot
        @endcomponent

        <hr>

        <form class="form-horizontal" action="{{route('admin.user_management.user.update', $user)}}" method="post">
            {{ method_field('PUT') }}
            {{csrf_field()}}

            {{-- Form included --}}
            @include('admin.users.partials.form')
        </form>
    </div>

@endsection