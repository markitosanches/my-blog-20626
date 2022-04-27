@extends('layouts.app')
@section('content')
    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 pt-4">
                    <div class="card">
                        <h3 class="card-header text-center">Enregister un utilisateur</h3>
                        <div class="card-body">
                            <form action="{{ route('custom.registration')}}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Nom" class="form-control" name="name" value="{{old('name')}}" required>
                                    @if($errors->has('name'))
                                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                        {{ $errors->first('name') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" placeholder="Email" class="form-control" name="email" value="{{old('email')}}"  required>
                                    @if($errors->has('email'))
                                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                        {{ $errors->first('email') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Mot de passe" class="form-control" name="password" required>
                                    @if($errors->has('password'))
                                        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                        {{ $errors->first('password') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button class="btn btn-dark btn-block">Enregistrer</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection