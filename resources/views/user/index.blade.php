@extends('layouts.app')
@section('content')


<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> all users</h4>
                <a href="{{route('user.create')}}" class="btn btn-round btn-success mx-5">ajouter</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr><th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Create at
                      </th>
                      <th class="text-right">
                        Actions
                      </th>
                    </tr></thead>
                    <tbody>
                        @foreach($users as $user)
                      <tr>
                        <td>
                          {{$user->name}}
                        </td>
                        <td>
                        {{$user->email}}
                        </td>
                        <td>
                        {{$user->created_at}}
                        </td>
                        <td class="text-right d-flex">
                        <a  href="{{route('user.show',$user->id)}}" class="btn btn-round btn-secondary">show</a>
                        <a  href="{{route('user.edit',$user->id)}}" class="btn btn-round btn-primary ">edit</a>
                        <form action="{{route('user.destroy',$user->id)}}" method="post">
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