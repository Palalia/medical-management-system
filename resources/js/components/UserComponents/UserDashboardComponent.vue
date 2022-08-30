<template>
  <section class="section">
        <div class="section-header">
            <h3 class="page__heading">USUARIOS</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                             <!--{{-- <h3 class="text-center">Dashboard Content</h3> --}}-->
                             <!--@can('crear-usuario')-->
                            <A class="btn btn-warning" href="">NUEVO </a>
                            <!--@endcan-->
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #005388; ">
                                    <th style="display: none;">ID</th>
                                    <th style="color: #fff;">NOMBRE</th>
                                    <th style="color: #fff;">E-MAIL</th>
                                    <th style="color: #fff;">ROL</th>
                                    <th style="color: #fff;">ACCIONES</th>
                                </thead>

                                <tbody>
                                        <tr v-for="usuario in usuarios" :key="usuario.id">
                                            <td style="display: none;">{{usuario.id}}</td>
                                            <td>{{usuario.name}}</td>
                                            <td>{{usuario.email}}</td>
                                            <td>
                                                <div v-if="!usuario.getRoleNames()">
                                                    <h5 v-for="rolName in usuario.getRoleNames()" :key="rolName.id"><span class="badge badge-dark">{{rolName}}</span></h5>
                                                </div>
                                            </td>

                                            <!--{{-- boton para editar --}}-->
                                            <td>
                                                <!--@can('editar-usuario')-->
                                                <a class="btn btn-info" href="">EDITAR</a>
                                                <!--@endcan-->
                                            <!--{{-- boton eliminar --}}-->
                                                <!--@can('editar-usuario')-->
                                                <!--{!! Form::open(['method'=> 'DELETE', 'route'=> ['usuarios.destroy', $usuario->id], 'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Borrar', ['class'=> 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                                @endcan-->
                                            </td>
                                        </tr>
                                </tbody>

                            </table>

                            <!--{{-- Paginacion --}}
                            <div class="pagination justify-content-end">
                                {!! $usuarios->links() !!}-->
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