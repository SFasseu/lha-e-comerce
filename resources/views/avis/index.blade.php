@extends('layouts.app')
@section('content')

<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex ">
                <h4 class="card-title"> all avis</h4>
                <a target="_blank" href="#" class="btn btn-round btn-success mx-5">Ajouter</a>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr><th>
                        id
                      </th>
                      
                      <th>
                        produit
                      </th>
                      <th>
                        client
                      </th>
                      <th>
                        Contenu
                      </th>
                      <th>
                        Note
                      </th>
                      <th class="text-right">
                        Actions
                      </th>
                    </tr></thead>
                    <tbody>
                    @foreach($avis as $avis)
                       <tr>
                         <td>
                         {{$avis->id}}
                         </td>
                         <td>
                         {{$avis->produit_id}}
                         </td>
                         <td>
                         {{$avis->client_id}}
                         </td>
                         <td>
                         {{$avis->contenu}}
                         </td>
                         <td>
                         {{$avis->note}} 
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