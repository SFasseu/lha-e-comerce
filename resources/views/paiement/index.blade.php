@extends('layouts.app')
@section('content')

<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> all paiements</h4>
                <a  href="{{route('paiement.create')}}" class="btn btn-round btn-success mx-5">ajouter</a>
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
                         
                         <td class="text-right d-flex">
                        <a  href="{{route('paiement.show',$paiement->id)}}" class="btn btn-round btn-secondary">show</a>
                        <a  href="{{route('paiement.edit',$paiement->id)}}" class="btn btn-round btn-primary ">edit</a>
                        <form action="{{route('paiement.destroy',$paiement->id)}}" method="post">
                            @csrf
                            @method('delete')
                        <button type="submit" class="btn btn-round btn-danger">delete</button>
                        </form>

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