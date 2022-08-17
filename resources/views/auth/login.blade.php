@extends('layouts.app')

@section('content')
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://cdn.create.vista.com/api/media/small/272248224/stock-vector-beauty-pregnant-women-vector-icon"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Nosotros somos el equipo de loto</h4>
                </div>

                <form>
                  <p>Por favor, ingrese a su cuenta</p>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Phone number or email address" />
                    <label class="form-label" for="form2Example11">Usuaro</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                      in</button>
                    <!--<a class="text-muted" href="#!">Forgot password?</a>-->
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">No tienes una cuenta?</p>
                    <button type="button" class="btn btn-outline-danger">Crear nueva</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Somos más que una clinica</h4>
                <p class="small mb-0">
                  <ul>
                    <ui><i class="fa-solid fa-person-breastfeeding">Ginecologia</i></ui></br>
                    <ui>Obstetricia</ui></br>
                    <ui>Agenda</ui></br>
                    <ui>Recetas Medicas</ui></br>
                  </ul>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
