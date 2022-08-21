@extends('layouts.app')

@section('content')
<section class="h-100 bg-azul">
  <div class="container py-10 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-2">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block" >
              <img src="https://cdn.create.vista.com/api/media/small/272248224/stock-vector-beauty-pregnant-women-vector-icon"
                alt="Sample photo" class="img-fluid"
                style="width:100%"/>
            </div>
            <div class="col-xl-6">
            <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
                @csrf 
              <fieldset>  
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Registo</h3>
                <div class="row">
                  <div class="col-md-6 mb-1">
                    <div class="form-outline">
                      <input type="text" name="username" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">Nombre completo</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-1">
                    <div class="form-outline">
                      <!--<input type="text" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Last name</label>-->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-1">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m1" name="appaterno">Apellido Paterno</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-1">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n1" name="apmaterno">Apellido Materno</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-1">
                  <input type="text" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Email</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-1 py-2">

                  <h6 class="mb-0 me-4">Genero: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="genero" id="femenino"
                      value="option1" />
                    <label class="form-check-label" for="femaleGender">Femenino</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="genero" id="masculino"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Masculino</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="genero" id="otro"
                      value="option3" />
                    <label class="form-check-label" for="otherGender">Otro</label>
                  </div>
                </div>
                  <div class="col-md-6 mb-1">
                    <select class="form-select form-select-sm">
                        <option selected disabled>Cargo</option>
                        <option value="1">Visitante</option>
                    </select>
                  </div>
                <div class="form-outline mb-1">
                  <input type="date" id="form3Example9" class="form-control form-control-lg" />
                   <label class="form-label" for="form3Example9">Fecha de nacimiento</label>
                </div>

               
                <div class="row"><!---Contraseña--->
                  <div class="col-md-6 mb-1">
                    <div class="form-outline">
                      <input type="text" name="password1" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">Password</label>
                    </div>
                  </div>
                <div class="col-md-6 mb-1">
                    <div class="form-outline">
                      <input type="text" name="password2"class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n1" name="apmaterno">Confirmar password</label>
                    </div>
                </div>
               </div>
               <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-primary gradient-custom-2 btn-lg ms-2">Submit form</button>
               </div>
              </div>
             </form>   
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

                    <!--<form method="POST" action="{{ route('register') }}">
                        @csrf
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror-->
                                <!--@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </form>-->
@endsection
