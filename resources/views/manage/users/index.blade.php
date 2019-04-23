@extends('layouts.manage')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-three-quarters">
                <div class="title">Manage Users</div>
            </div>
            <div class="column is-one-quarter">
                <a href="{{ route('users.create') }}" class="button is-warning"><span class="icon m-r-5"><i class="fa fa-user-plus"></i></span> Create New Users</a>
            </div>
        </div>
        <hr>
        <div class="columns">
            <div class="column is-11">
                <table class="table is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)

                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>{{ $user->created_at->toFormattedDateString() }}</th>
                                <th>
                                    <a href="{{ route('users.edit', $user->id) }}" class="button is-warning">
                                        <span class="icon"><i class="fa fa-edit"></i></span>
                                    </a>
                                    <a href="{{ route('users.destroy', $user->id) }}" class="button is-danger">
                                        <span class="icon"><i class="fa fa-trash"></i></span>
                                    </a>
                                </th>
                            </tr>

                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="columns">
            <div class="column is-11">
                {{ $users->links('vendor.pagination.bulma') }}
            </div>
        </div>
    </div>
@endsection
