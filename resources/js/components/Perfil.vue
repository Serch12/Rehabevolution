<template>
    <div>
        <div id="main" v-show="this.vista == 0">
        <div class="row">
          <div class="col-12">
            <div class="card mb-6">
              <div class="user-profile-header-banner">
                <img src="https://www.amfpro.mx/estilos_perfil/style/assets/img/pages/banner_amfpro.png" alt="Banner image" class="rounded-top" />
              </div>
              <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-5">
                <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                  <img :src="`https://test-intranet.amfpro.mx/ArchivosSistema/Perfil/${this.Informacion.foto_perfil}`"
                    alt="user image"
                    class="d-block h-auto ms-0 ms-sm-5 rounded-4 user-profile-img" />
                </div>
                <div class="flex-grow-1 mt-4 mt-sm-12">
                  <div
                    class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-6">
                    <div class="user-profile-info">
                      <h4 class="mb-2">{{this.Informacion.name}}</h4>
                     
                    </div>
                    <a type="button" class="btn btn-primary text-white" @click="guardaContacto()">
                      <i class="ri-user-follow-line ri-16px me-2"></i>Guardar Contacto
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- User Profile Content -->
        <div class="row">
          <div class="col-xl-12 col-lg-5 col-md-5">
            <!-- About User -->
            <div class="card mb-12">
              <div class="card-body">
                <small class="card-text text-uppercase text-muted small">ACERCA DE</small>
                <ul class="list-unstyled my-3 py-1">
                  <li class="d-flex align-items-center mb-4">
                    <i class="ri-user-3-line ri-24px"></i><span class="fw-medium mx-2">Nombre:</span>
                    <span>{{ this.Informacion.nombre_completo }}</span>
                  </li>
                  <li class="d-flex align-items-center mb-4">
                    <i class="ri-check-line ri-24px"></i><span class="fw-medium mx-2">Estatus:</span>
                    <span style="color: green;">Activo</span>
                  </li>
                  <li class="d-flex align-items-center mb-4">
                    <i class="ri-map-pin-2-fill ri-24px"></i><span class="fw-medium mx-2">Dirección:</span>
                    <span>Av. Industria Automotriz n.33 int. 203 Col. Parque Industrial Lerma, Lerma, Estado de México. CP. 52004</span>
                  </li>
                  <li class="d-flex align-items-center mb-2">
                    <i class="ri-football-fill ri-24px"></i><span class="fw-medium mx-2">Puesto:</span>
                    <span v-if="this.Informacion.name == 'Sergio de Jesus Flores'&& this.Informacion.rol_name == 'TI'">Administrador de Sistemas</span>
                    <span v-if="this.Informacion.name == 'Arturo Marín'&& this.Informacion.rol_name == 'TI'">Programador JR.</span>
                    <span v-if="this.Informacion.name == 'Emmanuel Damian'&& this.Informacion.rol_name == 'TI'">Programador SR.</span>
                    <span v-if="this.Informacion.name == 'Angelica Cabrera'&& this.Informacion.rol_name == 'Contabilidad'">Coordinadora Administrativa</span>
                    <span v-if="this.Informacion.name == 'Daniel Cisneros'&& this.Informacion.rol_name == 'Jurídico'">Coordinador Juridico</span>
                    <span v-if="this.Informacion.name == 'juridico 1'&& this.Informacion.rol_name == 'Jurídico'">Abogado de Litigios</span>
                    <span v-if="this.Informacion.name == 'Ana Karla Vara Martínez '&& this.Informacion.rol_name == 'Diseño'">Diseño Gráfico</span>
                    <span v-if="this.Informacion.name == 'Álvaro Ortiz Arellano'&& this.Informacion.rol_name == 'Presidencia'">Presidente Ejecutivo</span>
                    <span v-if="this.Informacion.name == 'Edson Zwaricz'&& this.Informacion.rol_name == 'Secretaria General'">Secretaria General</span>
                    <span v-if="this.Informacion.name == 'Angelica Torres'&& this.Informacion.rol_name == 'Asistente Ejecutivo'">Asistente Ejecutivo</span>
                    
                  </li>
                </ul>
                <small class="card-text text-uppercase text-muted small">Contacto</small>
                <ul class="list-unstyled my-3 py-1">
                  <li class="d-flex align-items-center mb-4">
                    <i class="ri-phone-line ri-24px"></i><span class="fw-medium mx-2">Contacto:</span>
                    <span>{{this.Informacion.telefono_empresa}}</span>
                  </li>
                  <!-- <li class="d-flex align-items-center mb-4">
                    <i class="ri-wechat-line ri-24px"></i><span class="fw-medium mx-2">Skype:</span>
                    <span>john.doe</span>
                  </li> -->
                  <li class="d-flex align-items-center mb-2">
                    <i class="ri-mail-open-line ri-24px"></i><span class="fw-medium mx-2">Correo:</span>
                    <span>{{this.Informacion.email}}</span>
                  </li>
                </ul>
                <!-- <small class="card-text text-uppercase text-muted small">Teams</small>
                <ul class="list-unstyled mb-0 mt-3 pt-1">
                  <li class="d-flex align-items-center mb-4">
                    <i class="ri-github-line ri-24px text-body me-2"></i>
                    <div class="d-flex flex-wrap">
                      <span class="fw-medium me-2">Backend Developer</span><span>(126 Members)</span>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="ri-reactjs-line ri-24px text-body me-2"></i>
                    <div class="d-flex flex-wrap">
                      <span class="fw-medium me-2">React Developer</span><span>(98 Members)</span>
                    </div>
                  </li>
                </ul> -->
              </div>
            </div>
            <!--/ About User -->
          
          </div>
        </div> 
      </div>
    </div>
</template>
<script>
export default {
    name: '',
    components: {
        
    },
    mixins: [],
    props: [
        'correo',
        'consulta'
    ],
    data() {
        return {
            vista:0,
            Informacion:[]    
        }
    },
    computed: {
        
    },
    watch: {
        
    },
    mounted() {
        this.Informacion = JSON.parse(this.consulta);
        this.Informacion.nombre_completo = this.Informacion.nombre + ' ' + this.Informacion.apPaterno + ' ' + this.Informacion.apMaterno;
    },
    methods: {
        guardaContacto(){
            const nombre = encodeURIComponent(this.Informacion.name);
            const telefono = encodeURIComponent(this.Informacion.telefono_empresa);
            const email = encodeURIComponent(this.Informacion.email);

        window.location.href = `${window.location.origin}/public/dowland/contacto?nombre=${nombre}&telefono=${telefono}&email=${email}`;
      },
    }
};
</script>
<style lang='' scoped>
</style>