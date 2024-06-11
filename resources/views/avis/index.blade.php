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
                        Contenu
                      </th>
                      <th>
                        Note
                      </th>
                      <th>
                        produit
                      </th>
                      <th>
                        produit
                      </th>
                      <th class="text-right">
                        Actions
                      </th>
                    </tr></thead>
                    <tbody>
                       
                      <tr>
                        <td>
                        
                        </td>
                        <td>
                       
                        </td>
                        <td>
                       
                        </td>
                        <td>
                       
                       </td>
                       <td>
                       
                       </td>
                        <td class="text-right text-center">
                        
                          <a target="_blank" href="#" class="btn btn-round btn-primary">modifier</a>
                          <a target="_blank" href="#" class="btn btn-round btn-danger">suprimer</a>
                       
                        </td>
                      </tr>
                       
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection