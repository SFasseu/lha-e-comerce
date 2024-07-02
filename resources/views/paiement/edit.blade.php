@extends('layouts.app')
@section('content')

<div class="content">
    
    
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> update paiement</h4>
              </div>
              <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">update paiement</h5>
              </div>
              <div class="card-body">
                <form action="{{route('paiement.update',$paiement->id)}}" method="post">
                  @csrf
                  @method('put')
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>montant</label>
                        <input type="number" class="form-control" name="montant" value="{{ $paiement->montant}}" placeholder="Home Address" >
                        @error('montant')
                              <span class=" text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>
                  </div>
                    
                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>mode_paiement</label>
                        <input type="text" class="form-control" name="mode_paiement" value="{{ $paiement->mode_paiement }}"  placeholder="mode_paiement" >
                        @error('mode_paiement')
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