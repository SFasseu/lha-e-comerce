@extends('layouts.app')
@section('content')

<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> all commands</h4>
               
                <a  href="{{route('commande.create')}}" class="btn btn-round btn-success mx-5">ajouter</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr><th>
                        id
                      </th>
                      <th>
                        client
                      </th>
                      <th>
                        Date Commande
                      </th>
                      <th>
                        Montant Total
                      </th>
                      <th>
                        Statut
                      </th>
                      <th class="text-right">
                        Actions
                      </th>
                    </tr></thead>
                    <tbody>
                    @foreach($commandes as $commande)
                       <tr>
                         <td>
                         {{$commande->id}}
                         </td>
                         <td>
                         {{$commande->client_id}}
                         </td>
                         <td>
                         {{$commande->created_at}}
                         </td>
                         <td>
                         {{$commande->statut}}
                         </td>
                         <td>
                         {{$commande->montant_total}}
                         </td>
                       
                         
                         <td class="text-right d-flex">
                        <a  href="{{route('commande.show',$commande->id)}}" class="btn btn-round btn-secondary">show</a>
                        <a  href="{{route('commande.edit',$commande->id)}}" class="btn btn-round btn-primary ">edit</a>
                        <form action="{{route('commande.destroy',$commande->id)}}" method="post">
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