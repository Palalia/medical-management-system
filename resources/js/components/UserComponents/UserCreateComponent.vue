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
                           <form method="POST" action="this.route" enctype="multipart/form-data">                             
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">NOMBRE</label>
                                            <input type="text" name="username" class='form-control'>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">E-MAIL</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">PASSWORD</label>
                                            <input type="password" name="password1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">CONFIRMAR PASSWORD</label>
                                            <input type="password" name="confirm-password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">ROLES</label>
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
 props: ['route']
}
</script>

<style>

</style>