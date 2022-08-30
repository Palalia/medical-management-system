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
                            <a class="btn btn-warning" @click="$emit('update:menu',4)">NUEVO </a>
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
                                        <tr v-for="user in users" :key="user.id">
                                            <td style="display: none;">{{user.id}}</td>
                                            <td>{{user.name}}</td>
                                            <td>{{user.email}}</td>
                                            <td>
                                                <!--<div v-if="!usuario.getRoleNames()">
                                                    <h5 v-for="rolName in usuario.getRoleNames()" :key="rolName.id"><span class="badge badge-dark">{{rolName}}</span></h5>
                                                </div>-->
                                            </td>

                                            <!--{{-- boton para editar --}}-->
                                            <td>
                                                <!--@can('editar-usuario')-->
                                                <a class="btn btn-info" >EDITAR</a>
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
    props:['menu'],
   data(){
        return{
            users: [],
        }
   },
    created() {
        axios({
            method: 'get',
            url: '/api/getUsers',
        })
        .then(res=>{
            if(res.status==200) {
                res.data.forEach(item=>{
                    this.users.push(item);
                });            
            }
        });
    },
    methods:{
        cambiarVista(){
            console.log("dentro de cambiar visita");
            console.log( $parent.menu);
           // this.menu=4;
        }
    }
}
</script>

<style>

</style>