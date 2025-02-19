<template>
    <div>
        <div id="main" v-show="this.vista == 0">
            <div class="row">
                <div class="card">
                    <h5 class="card-header">Usuarios</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Codigo QR</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr v-for="(u,index) in this.Users" :key="index">
                                    <td>{{ index+1 }}</td>
                                    <td>{{u.name}}</td>
                                    <td>{{u.email}}</td>
                                    <td v-if="u.codigo != null">
                                        <qr-code 
                                            :text="'https://www.rehabevolution.com/perfil/' + u.codigo"
                                            size="150"
                                            color="black"
                                            bg-color="white" 
                                            error-level="L">
                                        </qr-code>
                                    

                                    </td>
                                    <td v-else>
                                        <span class="badge rounded-pill bg-label-danger me-1" >Sin Código QR</span>
                                    </td>
                                
                                    <td>
                                        <span class="badge rounded-pill bg-label-primary me-1" v-if="u.codigo != null">Realizado</span>
                                        <button type="button" class="btn btn-success waves-effect waves-light" v-else @click="generaCodigo(u.email,u.id)">Generar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import VueQRCodeComponent from 'vue-qrcode-component'
export default {
    name: '',
    components: {
        'qr-code':VueQRCodeComponent
    },
    mixins: [],
    props: {
        
    },
    data() {
        return {
            vista:0,
            Users:[]
        }
    },
    computed: {
        
    },
    watch: {
        
    },
    mounted() {
        this.getAcceso();
    },
    methods: {
        getAcceso(){
            axios.get('acceso/Muestra').then(response=>{
                this.Users = response.data
            })
        },
        generaCodigo(email,id){
            const usuario = {
                id:id,
                email:email
            }
            axios.post(`acceso/Genera`,usuario).then(response=>{
               this.getAcceso();
            })
        }
    }
};
</script>
<style lang='' scoped>
</style>