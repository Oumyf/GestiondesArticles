<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="container">
        <div class="row align-items-start">
          <div class="col">
            <h1>AJOUTER UN ARTICLE</h1>

            @if(session('status'))<form action="ajouter/traitement" method="POST" class="form-group" enctype="multipart/form-data"> 
                @csrf
                <div class="form-group">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="Nom" name="nom">
                </div>
                <div class="form-group">
                    <label for="Description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="Description" name="description">
                </div>
                <div class="form-group">
                    <label for="Date_de_creation" class="form-label">Date de création</label>
                    <input type="date" class="form-control" id="Date_de_creation" name="date_de_creation">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Veuillez mettre l'url de l'image</label>
                    <input class="form-control" type="text" id="image" name="image">
                </div>
                <label for="is_a_la_une">L'article est-il à la une</label>
                <input type="checkbox" id="is_a_la_une" name="is_a_la_une" value="1">
                <br><br>
                <button type="submit" class="btn btn-primary">Ajouter un article</button>
                <br><br>
                <a href="/etudiant" class="btn btn-danger">Retour</a>
            </form>
            
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <ul>
                @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>

            <form action="/ajouter/traitement" method="GET" class="form-group" enctype="multipart/form-data"> 
                @csrf
                <div class="form-group">
                  <label for="Nom" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="Nom" name="nom">
                </div>
                <div class="form-group">
                    <label for="Description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="Description" name="description">
                </div>
                <div class="form-group">
                    <label for="Date_de_creation" class="form-label">Date de création</label>
                    <input type="date" class="form-control" id="Date_de_creation" name="date_de_creation">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Veuillez mettre une image</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>
                <label for="is_a_la_une">L'article est-il à la une</label>
                <input type="checkbox" id="is_a_la_une" name="is_a_la_une" value="1">
                          
                <br><br>
                <button type="submit" class="btn btn-primary">Ajouter un article</button>
                <br><br>
                <a href="/article" class="btn btn-danger">Retour</a>
              </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
