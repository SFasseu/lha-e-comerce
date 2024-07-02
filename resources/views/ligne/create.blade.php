@extends('layouts.app')
@section('content')

<div class="content">
    
    
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> create lignecommande</h4>
              </div>
              <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">create lignecommande</h5>
              </div>
              <div class="card-body">
                <form action="{{route('lignecommande.store')}}" method="post">
                  @csrf
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>commande</label>
                        <input type="text" class="form-control" name="commande_id" value="{{ old('commande_id') }}" placeholder="Home Address" >
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
                        <input type="text" class="form-control" name="produit_id" value="{{ old('produit_id') }}"  placeholder="produit" >
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
                        <input type="number" class="form-control" name="quantite" value="{{ old('quantite') }}" placeholder="quantite" >
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
                        <input type="number" class="form-control"  name="prix" value="{{ old('prix') }}" placeholder="confirm" >
                        @error('prix')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">creer</button>
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