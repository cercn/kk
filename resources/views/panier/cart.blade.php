@extends('layouts.template')

@section('content')
    <section class="container-fluid bg-light d-flex flex-column align-items-center justify-content-center py-5">
        <h1 class="x-text-size-sm fs-3 text-uppercase">PANIER</h1>
        <div class="d-flex justify-content-center">
            <div class="bg-warning  x-deco"></div>
        </div>

    </section>

    <div class="container d-desktop py-5">
<table class="table table-striped table-hover table-responsive">
  <thead class="table-success">
    <tr>
      <th scope="col">Produit</th>
      <th scope="col">Quantity</th>
      <th scope="col">Prix</th>
      <th scope="col">Sous-total</th>
    </tr>
  </thead>
  <tbody>

@if(session('cart'))


@foreach (session('cart') as $id => $product)

    <tr>

      <td>{{ $id[$product]['quantity'] }}</td>
      <td>{{ $product['prix'] }}</td>
      <td>{{ $product['name'] }}</td>
    </tr>

@endforeach

@else

<tr>
<td colspan="4" class='text-center'>Votre pannier est vide</td>


</tr>
@endif


</tbody>
</table>


<div class="d-flex justify-content-end">
    <a href="{{ route('accueil') }}" class="text-decoration-none btn btn-warning me-2"> <i class="fas fa-chevron-left"></i>Retour</a>
    <a href="" class="text-decoration-none btn btn-success">Paiement</a>

</div>

    </div>
@endsection
