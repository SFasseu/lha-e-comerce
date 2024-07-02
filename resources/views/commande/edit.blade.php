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
                <form action="{{route('commande.update',$commande->id)}}" method="post">
                  @csrf
                  @method('put')
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>client</label>
                        <input type="text" class="form-control" name="client_id" value="{{ $commande->client_id }}" placeholder="Home Address" >
                        @error('client_id')
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
                        <label>statut</label>
                        <input type="text" class="form-control" name="statut" value="{{$commande->statut }}"  placeholder="statut" >
                        @error('statut')
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
                        <label>montant_total</label>
                        <input type="number" class="form-control" name="montant_total" value="{{ $commande->montant_total }}" placeholder="montant_total" >
                        @error('montant_total')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>
                  </div>
                  
                  
                  
                 
                  
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">modifier</button>
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