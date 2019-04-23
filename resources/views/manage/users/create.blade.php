@extends('layouts.manage')

@section('content')
    <div class="container m-l-10">
        <div class="columns">
            <div class="column">
                <h1 class="title m-l-10">
                    <span class="icon m-r-10">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    Create new users
                </h1>
            </div>
        </div>
        <hr>
        <div class="columns">
            <div class="column is-11">
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="columns">
                        <div class="column is-6-desktop">
                            <div class="field">
                                <label for="name" class="label">Name</label>
                                <p class="control">
                                    <input type="text" class="input" name="name" id="name" placeholder="John Doe">
                                </p>
                            </div>
                        </div>
                        <div class="column is-6-desktop">
                            <div class="field">
                                <label for="email" class="label">Email</label>
                                <p class="control">
                                    <input type="email" class="input" name="email" id="email" placeholder="example@app.com">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="password" class="label">Password</label>
                                <p class="control">
                                    <input type="password" class="input" name="password" id="password" placeholder="enter password">
{{--                                    <b-checkbox name="auto-generate" :checked="true">Auto Generate Password</b-checkbox>--}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <label for="" class="label"></label>
                            <div class="field">
                                <p class="control">
                                    <button type="submit" class="button is-info is-fullwidth">Create</button>
                                </p>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
