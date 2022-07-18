@extends('layouts.web')

@section('main')

<section class="signup my-5">

    @if ($message = Session::get('success'))
            <div class="alert alert-success text-center">
                <p>{{ $message }}</p>
            </div>
    @endif
    <div class="container">
        
        <div class="signup-content">
            <div class="signup-image">
                <figure><a href="{{asset('images/ambInnov_vf.png')}}" target="_blank"><img src="{{asset('images/ambInnov_vf.png')}}" alt="sing up image"></a></figure>
                
            </div>
            <div class="signup-form">
                <h2 class="form-title">Inscription </h2>
                <form action="{{route('inscription_request')}}" method="POST" class="register-form" id="myform" enctype="multipart/form-data">
                    @csrf

                     <div class="form-group">
                        <label for="last_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="last_name" class="@error('last_name')is-invalid @endError" value="{{old('last_name')}}" id="last_name" placeholder="Nom"/>
                                 @if ($errors->has('last_name'))
                                     <div class="error" style="color: red">
                                         {{ $errors->first('last_name') }}</div>
                                 @endif
                    </div>
                                        
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name-outline"></i></label>
                                 <input type="text" name="first_name" class="@error('first_name')is-invalid @endError" value="{{old('first_name')}}" id="first_name" placeholder="Prenom"/>
                                     @if ($errors->has('first_name'))
                                        <div class="error" style="color: red">
                                            {{ $errors->first('first_name') }}</div>
                                        @endif
                        </div>
                                                  
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" class="@error('email')is-invalid @endError" value="{{old('email')}}" id="email" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"/>
                                   @if ($errors->has('email'))
                                       <div class="error" style="color: red">
                                        {{ $errors->first('email') }}</div>
                                    @endif
                        </div>
                                                
                         <div class="form-group">
                            <label for="tel"><i class="zmdi zmdi-phone"></i></label>
                            <input type="phone" name="phone" id="tel" class="@error('phone')is-invalid @endError" value="{{old('phone')}}" placeholder="tel" required />
                                @if ($errors->has('phone'))
                                <div class="error" style="color: red">
                                   {{ $errors->first('phone') }}</div>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="country"><i class="zmdi zmdi-map"></i></label>
                            <input type="text" name="country" id="country" class="@error('country')is-invalid @endError" value="{{old('adress')}}" placeholder="Pays" required />
                                @if ($errors->has('country'))
                                <div class="error" style="color: red">
                                   {{ $errors->first('country') }}</div>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="adress"><i class="zmdi zmdi-pin"></i></label>
                            <input type="text" name="adress" id="adress" class="@error('adress')is-invalid @endError" value="{{old('adress')}}" placeholder="Adresse/Ville" required />
                                @if ($errors->has('adress'))
                                <div class="error" style="color: red">
                                   {{ $errors->first('adress') }}</div>
                                @endif
                        </div>
                                              

                   
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="S'inscrire"/>
                    </div>
                   
                </form>
            </div>
           
        </div>
    </div>
</section>

@endsection