@extends('layouts.app')
@section('content')

<div class="content">
    
    
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> create commande</h4>
              </div>
              <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">create commande</h5>
              </div>
              <div class="card-body">
                <form action="{{route('commande.store')}}" method="post">
                  @csrf
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>client</label>
                        <input type="text" class="form-control" name="client_id" value="{{ old('client_id') }}" placeholder="Home Address" >
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
                        <input type="text" class="form-control" name="statut" value="{{ old('statut') }}"  placeholder="statut" >
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
                        <input type="montant_total" class="form-control" name="montant_total" value="{{ old('montant_total') }}" placeholder="montant_total" >
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