<template>
    <div>
        <div id="main" v-show="this.vista == 0">
        <div class="row">
          <div class="col-12">
            <div class="card mb-6">
              <div class="user-profile-header-banner">
                <img src="https://www.rehabevolution.com/estilos_perfil/style/logos/banner_rehab.png" alt="Banner image" class="rounded-top" />
              </div>
              <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-5">
                <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                  <img :src="`https://intranet-clinica.rehabevolution.com/ArchivosSistema/Documentacion/${this.Informacion.foto}`"
                    alt="user image"
                    class="d-block h-auto ms-0 ms-sm-5 rounded-4 user-profile-img" />
                </div>
                <div class="flex-grow-1 mt-4 mt-sm-12">
                  <div
                    class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-6">
                    <div class="user-profile-info">
                      <h4 class="mb-2">{{this.Informacion.name}}</h4>
                     
                    </div>
                    <a type="button" class="btn btn-info text-white" @click="guardaContacto()">
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
                    <span>{{ this.Informacion.nombre }}</span>
                  </li>
                  <li class="d-flex align-items-center mb-4">
                    <i class="ri-check-line ri-24px"></i><span class="fw-medium mx-2">Estatus:</span>
                    <span style="color: blue;">Activo</span>
                  </li>
                  <li class="d-flex align-items-center mb-4">
                    <i class="ri-map-pin-2-fill ri-24px"></i><span class="fw-medium mx-2">Dirección:</span>
                    <span>Oaxaca #6, Col. Héroes de Padierna, Delegación Magadalena Contreras, CDMX </span>
                  </li>
                  <li class="d-flex align-items-center mb-2">
                    <i class="ri-user-2-fill ri-24px"></i><span class="fw-medium mx-2">Puesto:</span>
                    <span v-if="this.Informacion.name == 'Patricia Iglesias'&& this.Informacion.rol_name == 'Administrador'">Coordinadora</span>
                    <span v-if="this.Informacion.name == 'Arturo Marín'&& this.Informacion.rol_name == 'TI'">Programador JR.</span>
                    
                    
                  </li>
                </ul>
                <small class="card-text text-uppercase text-muted small">Contacto</small>
                <ul class="list-unstyled my-3 py-1">
                  <li class="d-flex align-items-center mb-4">
                    <i class="ri-phone-line ri-24px"></i><span class="fw-medium mx-2">Contacto:</span>
                    <span>{{this.Informacion.telefono}}</span>
                  </li>

                  <li class="d-flex align-items-center mb-2">
                    <i class="ri-mail-open-line ri-24px"></i><span class="fw-medium mx-2">Correo:</span>
                    <span>{{this.Informacion.email}}</span>
                  </li>
                </ul>

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
        
    },
    methods: {
      guardaContacto(){
        const nombre = encodeURIComponent(this.Informacion.name);
        const telefono = encodeURIComponent(this.Informacion.telefono);
        const email = encodeURIComponent(this.Informacion.email);

        window.location.href = `${window.location.origin}/public/datos/contacto?nombre=${nombre}&telefono=${telefono}&email=${email}`;
      },
    }
};
</script>
<style lang='' scoped>
</style>