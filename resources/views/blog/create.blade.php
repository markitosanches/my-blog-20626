@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">  
                <a href="{{ route('blog') }}" class="btn btn-outline-primary btn-sm">Retourner</a>             
                <div class="border rounded mt-5 pl-4 pr-4 pb-4">
                    <h1 class="display-4">Créer un nouvel article</h1>
                    <p>Remplissez et soumettez ce formulaire</p>
                        <hr>
                    <form method="post">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Titre d'article</label>
                                <input type="text" id="title" class="form-control" name="title"
                                placeholder="Entrer le titre d'article" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12 mt-2">
                                <label for="body">Contenu d'article</label>
                                <textarea name="body" id="body" placeholder="Entrer le contenu d'article" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group text-center">
                                <button class="btn btn-primary">
                                    Saisir un article
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection