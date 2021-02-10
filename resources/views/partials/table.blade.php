<section class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            {{-- <th scope="col">Quantité</th>
            <th scope="col">Photo</th> --}}
            <th scope="col"> </th>
            <th scope="col"> </th>            
          </tr>
        </thead>
        <tbody>
            @foreach ($ingredients as $ingredient)
                <tr>
                    <th scope="row">{{$ingredient->id}}</th>
                    <td>{{$ingredient->nom}}</td>
                    {{-- <td>{{$ingredient->quantite}}</td>
                    <td>{{$ingredient->photo}}</td> --}}
                    <td>
                        <a class="btn btn-primary" href="/show-ingredient/{{$ingredient->id}}">SHOW</a>
                    </td>
                    <td>
                        <form action="/delete-ingredient/{{$ingredient->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>                
            @endforeach
        </tbody>
    </table>
</section>