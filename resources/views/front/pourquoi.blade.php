@extends('layouts.front')
@section('content') 

<div class="content" style="height=100%;display:flex;justify-content:center;align-item:center;margin-top:10px">
    
    <p>
      {{$product->nom}}
    </p>
<form class="row g-3" action="{{route('shop.order.store',$product->id)}}" method="post">
  @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">client</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">montant</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary ">valider la commande</button>
  </div>
</form>
</div>	
  



@endsection