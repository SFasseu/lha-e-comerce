



@extends('layouts.guest',['title'=>'login'])

@section('content')


<div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
              <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">Login</h4>
                  <div class="social-line">
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body ">
                  <p class="card-description text-center">Or Be Classical</p>
                  
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input  type="text" name="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}"  placeholder="Email">
						
                           @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  name="pass" placeholder="Password">
						 
             @error('password')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                

<div class="text-center p-t-136">
</div>
                  <button type='submit' class="btn btn-rose btn-link btn-lg">Lets Go</button>
                </div>
                <div class="text-center p-t-12 d-flex flex-column">
						
            @if (Route::has('password.request'))
<a class="txt2" href="{{ route('password.request') }}">
  forgot Password?
</a>
<a class="txt2 mt-2" href="/register">
  creer un compte
</a>
            @endif
</div>
              </div>
            </form>
          </div>
        </div>
      </div>

 @endsection
 
 
			
	
