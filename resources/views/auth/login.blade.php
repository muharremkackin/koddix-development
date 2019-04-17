@extends('layouts.app')

@section('content')
    <div class="container m-t-100">
        <div class="columns is-mobile">
            <div class="column is-half is-offset-one-quarter">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">{{ __('Log in to Koddix') }}</h1>
                        <div class="field">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
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
                                <div class="field">
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
                                <div class="field">
                                    <label for="remember" class="checkbox">
                                        <input type="checkbox" id="remember"
                                               name="remember"{{ old('remember') ? ' checked' : '' }}>
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <button class="button is-primary is-fullwidth">
                                            {{ __('Log in') }}
                                        </button>
                                    </p>
                                </div>
                                <div class="field">
                                    @if (Route::has('password.request'))
                                        <a class="button is-text is-fullwidth" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


