<section class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($ingredients as $ingredient)
                <tr>
                    <th scope="row">{{$ingredient->id}}</th>
                    <td>{{$ingredient->nom}}</td>
                </tr>                
            @endforeach
        </tbody>
    </table>
</section>