@extends('layouts.app')
@section('content')

<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> all paiements</h4>
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
                        Commande
                      </th>
                      <th>
                        Date Paiement
                      </th>
                      <th>
                        Montant
                      </th>
                      <th>
                        Mode Paiement
                      </th>
                      
                      <th class="text-right">
                        Actions
                      </th>
                    </tr></thead>
                    <tbody>
                    @foreach($paiements as $paiement)
                       <tr>
                         <td>
                         {{$paiement->id}}
                         </td>
                         <td>
                         {{$paiement->commande_id}}
                         </td>
                         <td>
                         {{$paiement->created_at}}
                         </td>
                         <td>
                         {{$paiement->montant}}
                         </td>
                         
                         <td>
                         {{$paiement->mode_paiement}}
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