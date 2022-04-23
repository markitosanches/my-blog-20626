@extends('layouts.app')
@section('content')
    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 pt-4">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="email" placeholder="Email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Mot de passe" class="form-control" name="password" required>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button class="btn btn-dark btn-block">Connecter</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection