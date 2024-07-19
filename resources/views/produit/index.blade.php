@extends('layouts.app')
@section('content')

<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> all products</h4>
                <a  href="{{route('produit.create')}}" class="btn btn-round btn-success mx-5">ajouter</a>
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
                      <th>
                       Prix
                      </th>
                      <th>
                       Stock
                      </th>
                      <th>
                       Categorie
                      </th>
                      <th>
                       Image
                      </th>
                      
                      <th class="text-right">
                        Actions
                      </th>
                    </tr></thead>
                    <tbody>
                        @foreach($produits as $produit )
                      <tr>
                        <td>
                          {{$produit->id}}
                        </td>
                        <td>
                          {{$produit->nom}}
                        </td>
                        <td>
                        {{$produit->description}}
                        </td>
                        <td>
                        {{$produit->prix}}
                        </td>
                        <td>
                        {{$produit->stock}}
                        </td>
                        <td>
                        {{$produit->categorie_id}}
                        </td>
                        <td>
                        {{$produit->image}}
                        </td>
                        <td class="text-right d-flex">
                        <a  href="{{route('produit.show',$produit->id)}}" class="btn btn-round btn-secondary">show</a>
                        <a  href="{{route('produit.edit',$produit->id)}}" class="btn btn-round btn-primary ">edit</a>
                        <form action="{{route('produit.destroy',$produit->id)}}" method="post">
                            @csrf
                            @method('delete')
                        <button type="submit" class="btn btn-round btn-danger">delete</button>
                        </form>

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