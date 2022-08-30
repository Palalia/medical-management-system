<template>
  <section class="section">
        <div class="section-header">
            <h3 class="page__heading">ALTA DE USUARIOS</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <!--@if ($errors->any())-->
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡REVISE LOS CAMPOS!</strong>
                                    <!--@foreach ($errors->all() as $error )
                                        <span class="badge badge-danger">{{$error}}</span>
                                    @endforeach-->
                                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <!---@endif--->
                            <form action="" method="post">        
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">NOMBRE</label>
                                            <input type="text" class='form-control'>
                                            <!--{!! Form::text('name', null, array('class'=>'form-control')) !!}-->
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">E-MAIL</label>
                                            <input type="email" class="form-control">
                                            <!--{!! Form::text('email', null, array('class'=>'form-control')) !!}-->
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">PASSWORD</label>
                                            <input type="password" class="form-control">
                                            <!--{!! Form::password('password', array('class'=>'form-control')) !!}-->
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">CONFIRMAR PASSWORD</label>
                                            <input type="password" name="confirm-password" class="form-control">
                                            <!--{!! Form::password('confirm-password', array('class'=>'form-control')) !!}-->
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">ROLES</label>
                                            <!--{!! Form::select('roles[]', $roles,[], array('class'=>'form-control')) !!}-->
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {

}
</script>

<style>

</style>