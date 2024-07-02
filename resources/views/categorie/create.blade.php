@extends('layouts.app')
@section('content')

<div class="content">
    
    
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> create categorie</h4>
              </div>
              <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">create categorie</h5>
              </div>
              <div class="card-body">
                <form action="{{route('categorie.store')}}" method="post">
                  @csrf
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>nom</label>
                        <input type="text" class="form-control" name="nom" value="{{ old('nom') }}" placeholder="Home Address" >
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
                        <input type="text" class="form-control" name="description" value="{{ old('description') }}"  placeholder="description" >
                        @error('description')
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