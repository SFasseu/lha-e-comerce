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
                <form action="{{route('avis.update',$avis->id)}}" method="post">
                  @csrf
                  @method('put')
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>client</label>
                        <input type="text" class="form-control" name="client_id" value="{{ $avis->client_id}}" placeholder="client" >
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
                        <label>produit</label>
                        <input type="text" class="form-control" name="produit_id" value="{{ $avis->produit_id}}"  placeholder="produit" >
                        @error('produit_id')
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
                        <label>contenu</label>
                        <input type="text" class="form-control" name="contenu" value="{{ $avis->contenu}}" placeholder="contenu" >
                        @error('contenu')
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
                        <label>note</label>
                        <input type="number" class="form-control"  name="password_confirmation" value="{{ $avis->note }}" placeholder="note" >
                        @error('note')
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