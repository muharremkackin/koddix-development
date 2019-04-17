@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="columns is-mobile">
            <div class="column is-half is-offset-one-quarter">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">{{ __('Reset Your Password') }}</h1>
                        <div class="field">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="field">
                                    <p class="control has-icons-left">
                                        <input id="email" type="email"
                                               class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email"
                                               value="{{ $email ?? old('email') }}" required disabled>

                                        <span class="icon is-small is-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </p>
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
                                            {{ __('Reset Password') }}
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
