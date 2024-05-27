<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <h1>CRUD DANS LARAVEL 11</h1>
            <hr>
            <a href="/ajouter" class="btn btn-primary">Ajouter des articles</a>
            <hr>
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Date de création</th>
                    <th>A la une</th>
                    <th>Image</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                    <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->nom }}</td>
                    <td>{{ $article->description }}</td>
                    <td>{{ $article->image }}</td>
                    <td>{{ $article->date_de_creation }}</td>
                        @if($article->is_a_la_une)
                    <td>oui</td>
                    @else
                    <td>non</td>
                    @endif
                        <td>
                        <a href="/update-article/{{ $article->id }}" class="btn btn-info">Modifier</a>
                        <a href="/delete-article/{{ $article->id }}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>