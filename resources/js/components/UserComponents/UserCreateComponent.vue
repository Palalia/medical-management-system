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
                            <div id="alerts"></div>    
                           <form method="POST"  @submit.prevent="submit" enctype="multipart/form-data">                             
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">NOMBRE</label>
                                            <input type="text" name="username" class='form-control' v-model="fields.name">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">E-MAIL</label>
                                            <input type="email" name="email" class="form-control"  v-model="fields.email">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">PASSWORD</label>
                                            <input type="password" name="password1" class="form-control" v-model="fields.password1">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">CONFIRMAR PASSWORD</label>
                                            <input type="password" name="confirm-password" class="form-control" v-model="fields.password2">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">ROLES</label>
                                            <select v-model="fields.rol" class="form-control">
                                                <option v-for="rol in roles" :key="rol.name">{{rol.name}}
                                                </option>
                                            </select>
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
 props: ['route'],
 data() {
    return {
      fields: {},
      errors: [],
      roles:[],
      success: false,
      loaded: true,
    }
  },
  mounted(){
    axios({
        method:'get',
        url:'/api/getRoles'
    })
    .then(res=>{
        if(res.status==200) {
            res.data.forEach(item=>{
                this.roles.push(item);
            });            
        }
    })
  },
 methods: {
    submit(){
      if (this.loaded) {
        this.loaded = false;
        this.success = false;
        this.errors = [];
        axios.post('/register', this.fields).then(response => {
          this.fields = {}; //Clear input fields.
          this.loaded = true;
          this.success = true;
        }).catch(error => {
          this.loaded = true;
          if (error.response.status === 422) {
            for(var key in error.response.data.errors){
                this.errors.push(error.response.data.errors[key][0]);
            }
          }
          this.mensajes();
        });
      }
      
    },
    mensajes(){
        if(this.errors.length>0){
            document.getElementById('alerts').innerHTML=
            "<div class='alert alert-dark alert-dismissible fade show' role='alert'>"+
                "<strong>!REVISE LOS CAMPOS!</strong>"+
                   "<div id='mensaje'></div>"+
                "<button type='button' class='close' data-dismiss='alert' aria-label='close'>"+
                    "<span aria-hidden='true'>&times;</span>"+
                "</button>"+
            "</div>";
            for(var key in this.errors){
                document.getElementById('mensaje').innerHTML+= "<span class='badge badge-danger'>"+this.errors[key]+"</span>";
            }
        }
        if(this.success==true){
            "<div class='alert alert-success alert-dismissible fade show' role='alert'>"+
                "<strong class='alert-heading'>!Agregado correctamente!</strong>"+
                "<button type='button' class='close' data-dismiss='alert' aria-label='close'>"+
                    "<span aria-hidden='true'>&times;</span>"+
                "</button>"+
            "</div>";
        }
    }
  },
}
</script>

<style>

</style>