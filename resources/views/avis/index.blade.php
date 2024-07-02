@extends('layouts.app')
@section('content')

<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex ">
                <h4 class="card-title"> all avis</h4>
                <a  href="{{route('avis.create')}}" class="btn btn-round btn-success mx-5">Ajouter</a>
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
                         
                         <td class="text-right d-flex">
                        <a  href="{{route('avis.show',$avis->id)}}" class="btn btn-round btn-secondary">show</a>
                        <a  href="{{route('avis.edit',$avis->id)}}" class="btn btn-round btn-primary ">edit</a>
                        <form action="{{route('avis.destroy',$avis->id)}}" method="post">
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