@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-album-2 text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">produit</p>
                      <p class="card-title"></p><p>
                    </p></div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">paiement</p>
                      <p class="card-title">{{$paiements}}</p><p>
                    </p></div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-copy-04 text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">commande</p>
                      <p class="card-title">23</p><p>
                    </p></div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-chat-33 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">avis</p>
                      <p class="card-title">+45K</p><p>
                    </p></div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                
              </div>
            </div>
          </div>
        </div>
</div>
@endsection
