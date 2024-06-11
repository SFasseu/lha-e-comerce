@extends('layouts.app')
@section('content')



<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> all categories</h4>
                <a target="_blank" href="#" class="btn btn-round btn-success mx-5">ajouter</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr><th>
                        id
                      </th>
                      <th>
                        Nom
                      </th>
                      <th>
                        Description
                      </th>
                      <th class="text-right">
                        Actions
                      </th>
                    </tr></thead>
                    <tbody>
                    @foreach($categories as $categorie)
                      <tr>
                        <td>
                          {{$categorie->id}}
                        </td>
                         <td>
                         {{$categorie->nom}}
                         </td>
                         <td>
                         {{$categorie->description}}
                         </td>
                     
                         
                         <td class="text-right text-center">
                         
                           <a target="_blank" href="#" class="btn btn-round btn-primary">modifier</a>
                           <a target="_blank" href="#" class="btn btn-round btn-danger">suprimer</a>
                        
                         </td>
                       </tr>
                       @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection