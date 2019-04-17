@extends('layouts.app')

@section('content')

    <div class="container m-t-100">
        <div class="columns is-mobile">
            <div class="column is-half is-offset-one-quarter">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">{{ __('Join to Koddix Online Campus') }}</h1>
                        <div class="field">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf

                                <div class="field">
                                    <p class="control has-icons-left">
                                        <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" type="text"
                                               placeholder="{{ __('Jane Doe') }}" name="name" value="{{ old('name') }}"
                                               required autofocus>
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </p>
                                    @if($errors->has('name'))
                                        <article class="message is-danger">
                                            <div class="message-body">
                                                {{ $errors->first('name') }}
                                            </div>
                                        </article>
                                    @endif
                                </div>
                                <div class="field">
                                    <p class="control has-icons-left">
                                        <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email"
                                               placeholder="{{ __('name@example.com') }}" name="email"
                                               value="{{ old('email') }}" required autofocus>
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                    </p>
                                    @if($errors->has('email'))
                                        <article class="message is-danger">
                                            <div class="message-body">
                                                {{ $errors->first('email') }}
                                            </div>
                                        </article>
                                    @endif
                                </div>
                                <div class="columns">
                                    <div class="field column is-half">
                                        <p class="control has-icons-left">
                                            <input class="input{{ $errors->has('password') ? 'is-danger' : '' }}"
                                                   type="password" placeholder="{{ __('Password') }}"
                                                   value="{{ old('password') }}" name="password" required>
                                            <span class="icon is-small is-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        </p>
                                        @if($errors->has('password'))
                                            <article class="message">
                                                <div class="message-body">
                                                    {{ $errors->first('password') }}
                                                </div>
                                            </article>
                                        @endif
                                    </div>
                                    <div class="field column is-half">
                                        <p class="control has-icons-left">
                                            <input id="password-confirm" placeholder="{{ __('Confirm Password') }}"
                                                   type="password" class="input" name="password_confirmation" required>
                                            <span class="icon is-small is-left">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <button class="button is-primary is-fullwidth">
                                            {{ __('Sign up') }}
                                        </button>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
