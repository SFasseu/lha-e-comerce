@extends('layouts.app')
@section('content')

<div class="content">
    
    
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> update user</h4>
              </div>
              <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form action="{{route('lignecommande.update',$lignecommande->id)}}" method="post">
                  @csrf
                  @method('put')
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>commande</label>
                        <input type="text" class="form-control" name="commande_id" value="{{ $paiement->commmande_id }}" placeholder="Home Address" >
                        @error('commande')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>
                  </div>
                    
                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>produit</label>
                        <input type="text" class="form-control" name="produit-id" value="{{ $paiement->produit_id }}"  placeholder="produit" >
                        @error('produit')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>
                  </div>
                  
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>quantite</label>
                        <input type="number" class="form-control" name="quantite" value="{{ $paiement->quantite}}" placeholder="quantite" >
                        @error('quantite')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>prix</label>
                        <input type="number" class="form-control"  name="prix" value="{{ $paiement->prix }}" placeholder="confirm" >
                        @error('prix')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>
                  </div>
               </form>
              </div>
            </div>
          </div>
            </div>
          </div>
    </div>
</div>
@endsection