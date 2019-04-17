@extends('layouts.app')

@section('content')

    <div class="container m-t-100">
        <div class="columns is-mobile">
            <div class="column is-half is-offset-one-quarter">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">{{ __('Reset Password') }}</h1>
                        <div class="field">
                            @if(session('status'))
                                <div class="message is-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form action="{{ route('password.email') }}" method="POST">
                                @csrf

                                <div class="field">
                                    <p class="control has-icons-left">
                                        <input id="email" type="email"
                                               class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email"
                                               value="{{ old('email') }}"
                                               placeholder="{{ __('Enter your email here') }}">

                                        <span class="icon is-small is-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>

                                        @if($errors->has('email'))
                                            <span class="message is-danger" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </p>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <button
                                            class="button is-primary is-fullwidth">{{ __('Send Password Reset Link') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="field m-t-20">
                    <a class="button is-info is-fullwidth" href="{{ route('login') }}">
                        <span class="icon is-small is-left m-r-5">
                        <i class="fa fa-chevron-left"></i>
                    </span>{{ __('Back to Login') }}
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection
