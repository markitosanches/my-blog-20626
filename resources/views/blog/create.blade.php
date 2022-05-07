@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Retourner</a>
                <div class="mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Créer un nouveau message </h1>
                    <p>Remplissez et soumettez ce formulaire pour créer un article </p>

                    <hr>

                    <form method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Titre du message</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Entrer le titre du message" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Corps du message</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Entrer le corps du message"
                                          rows="" required></textarea>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="categorie">Categorie</label>
                                <select id="categorie" class="form-control" name="categorieId" required>
                                    @foreach($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->categorie}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Créer un message 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection