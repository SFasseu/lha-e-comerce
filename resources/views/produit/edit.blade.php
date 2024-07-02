@extends('layouts.app')
@section('content')

<div class="content">
    
    
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> update produit</h4>
              </div>
              <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form action="{{route('produit.update',$produit->id)}}" method="post">
                  @csrf
                  @method('put')
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>nom</label>
                        <input type="text" class="form-control" name="nom" value="{{ $produit->nom }}" placeholder="Home Address" >
                        @error('nom')
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
                        <label>description</label>
                        <input type="text" class="form-control" name="description" value="{{ $produit->description }}"  placeholder="description" >
                        @error('description')
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
                        <input type="prix" class="form-control" name="prix" value="{{ $produit->prix }}" placeholder="prix" >
                        @error('prix')
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
                        <label>stock</label>
                        <input type="stock" class="form-control"  name="stock" value="{{ $produit->stock }}" placeholder="confirm" >
                        @error('stock')
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
                        <label>image</label>
                        <input type="file" class="form-control"  name="image" value="{{ $produit->image}}" placeholder="confirm" >
                        @error('image')
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