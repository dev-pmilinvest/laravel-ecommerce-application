@extends('site.app')
@section('title', 'Register')
@section('content')
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Créer un compte</h2>
        </div>
    </section>
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">Choisissez vos identifiants</h4>
                    </header>
                    <article class="card-body">
                        <form action="{{ route('register') }}" method="POST" role="form">
                            @csrf
                            <div class="form-row">
                                <div class="col form-group">
                                    <label for="first_name">Nom</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <label for="last_name">Prénom</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Addresse E-Mail </label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirmez le mot de passe</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation">
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Addresse</label>
                                <input class="form-control" type="text" name="address" id="address" value="{{ old('address') }}">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="city">Ville</label>
                                    <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="country">Pays</label>
                                    <select id="country" class="form-control" name="country">
                                        <option> Choisir...</option>
                                        <!-- <option value="United Kingdom">United Kingdom</option> -->
                                        <option value="France">France</option>
                                        <!-- <option value="United States" selected="">United States</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block"> S'inscrire </button>
                            </div>
                            <small class="text-muted">En cliquant sur le bouton «S'inscrire», vous confirmez que vous acceptez nos <br> conditions d'utilisation et notre politique de confidentialité.</small>
                        </form>
                    </article>
                    <div class="border-top card-body text-center">Vous avez déjà un compte? <a href="{{ route('login') }}">Se connecter</a></div>
                </div>
            </div>
        </div>
    </section>
@stop
