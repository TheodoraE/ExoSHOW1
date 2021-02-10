<section class="container">
    <form action="/ingredient-store" method="POST">
      @csrf
        <div class="form-group">
          <label for="">Nom :</label>
          <input name="nom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="">Quantité :</label>
          <input name="quantite" type="number" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
          <label for="">Photo :</label>
          <input type="text" name="photo" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>