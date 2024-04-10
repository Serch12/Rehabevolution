<template>
   <div>
    <div class="container">
        <div class="card">
            <div class="card-content">
                <div class="card-header" v-if="this.formulario == true">
                    <center>
                        <img src="assets/images/Logo_rehab_color.svg" alt="logo" width="120px">
                    </center>
                    <h4 class="card-title center">Encuesta de Satisfacción</h4>
                </div>
        
                <ul class="stepper linear" id="linearStepper" v-if="this.formulario == true">
                    <li :class="{'step': true, 'active':step === 1}">
                        <div class="step-title waves-effect">¿Cómo califica la atención brindada por el área de recepción?. (Atención, informes, trato)</div>
                        <div class="step-content">
                            <div class="row">
                                <div class="input-field col m12 s12 l12">
                                    <p>
                                        <label>
                                            <input type="radio" name="p1" class="with-gap" value="Pesima" v-model="encuesta.pregunta1" />
                                            <span>Pésima</span>
                                        </label>&nbsp;
                                        <label>
                                            <input type="radio" name="p1" class="with-gap" value="Mala"  v-model="encuesta.pregunta1" />
                                            <span>Mala</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="p1" class="with-gap" value="Regular"  v-model="encuesta.pregunta1" />
                                            <span>Regular</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="p1" class="with-gap" value="Excelente"  v-model="encuesta.pregunta1" />
                                            <span>Excelente</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="step-actions">
                                <div class="row">
                                    
                                    <div class="col m12 ">
                                    <button class="waves-effect waves dark btn btn-primary" type="submit" @click="nextStep()">
                                        
                                        <i class="material-icons ">arrow_forward</i>
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li :class="{'step': true, 'active':step === 2}">
                        <div class="step-title waves-effect">La atención brindada por el área médica fue:</div>
                        <div class="step-content">
                            <div class="row">
                                <div class="input-field col m12 s12 l12">
                                    <p>
                                        <label>
                                            <input type="radio" name="p2" class="with-gap" value="Pesima" v-model="encuesta.pregunta2" />
                                            <span>Pésima</span>
                                        </label>&nbsp;
                                        <label>
                                            <input type="radio" name="p2" class="with-gap" value="Mala"  v-model="encuesta.pregunta2" />
                                            <span>Mala</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="p2" class="with-gap" value="Regular"  v-model="encuesta.pregunta2" />
                                            <span>Regular</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="p2" class="with-gap" value="Excelente"  v-model="encuesta.pregunta2" />
                                            <span>Excelente</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="step-actions">
                                <div class="row">
                                    
                                    <div class="col m2 l6">
                                    <button class="red btn btn-reset" @click="prevStep()">
                                        <i class="material-icons ">arrow_back</i>
                                        
                                    </button>
                                    </div>
                                    <div class="col m2 l6">
                                    <button class="waves-effect waves dark btn btn-primary next-step" type="submit" @click="nextStep()">
                                        
                                        <i class="material-icons ">arrow_forward</i>
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li :class="{'step': true, 'active':step === 3}">
                        <div class="step-title waves-effect">Con base en el trato, explicaciones, indicaciones, seguimiento a su lesión, considera que el servicio brindado por el Área de Rehabilitación y Terapia Física fue:</div>
                        <div class="step-content">
                            <div class="row">
                                <div class="input-field col m12 s12 l12">
                                    <p>
                                        <label>
                                            <input type="radio" name="p3" class="with-gap" value="Pesima" v-model="encuesta.pregunta3" />
                                            <span>Pésima</span>
                                        </label>&nbsp;
                                        <label>
                                            <input type="radio" name="p3" class="with-gap" value="Mala"  v-model="encuesta.pregunta3" />
                                            <span>Mala</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="p3" class="with-gap" value="Regular"  v-model="encuesta.pregunta3" />
                                            <span>Regular</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="p3" class="with-gap" value="Excelente"  v-model="encuesta.pregunta3" />
                                            <span>Excelente</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="step-actions">
                                <div class="row">
                                    
                                    <div class="col m2 l6">
                                    <button class="red btn btn-reset" @click="prevStep()">
                                        <i class="material-icons ">arrow_back</i>
                                        
                                    </button>
                                    </div>
                                    <div class="col m2 l6">
                                    <button class="waves-effect waves dark btn btn-primary next-step" type="submit" @click="nextStep()">
                                        
                                        <i class="material-icons ">arrow_forward</i>
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li :class="{'step': true, 'active':step === 4}">
                        <div class="step-title waves-effect">Respecto a la limpieza del Centro, su opinión es:</div>
                        <div class="step-content">
                            <div class="row">
                                <div class="input-field col m12 s12 l12">
                                    <p>
                                        <label>
                                            <input type="radio" name="p4" class="with-gap" value="Pesima" v-model="encuesta.pregunta4" />
                                            <span>Pésima</span>
                                        </label>&nbsp;
                                        <label>
                                            <input type="radio" name="p4" class="with-gap" value="Mala"  v-model="encuesta.pregunta4" />
                                            <span>Mala</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="p4" class="with-gap" value="Regular"  v-model="encuesta.pregunta4" />
                                            <span>Regular</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="p4" class="with-gap" value="Excelente"  v-model="encuesta.pregunta4" />
                                            <span>Excelente</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="step-actions">
                                <div class="row">
                                    
                                    <div class="col m2 l6">
                                    <button class="red btn btn-reset" @click="prevStep()">
                                        <i class="material-icons ">arrow_back</i>
                                        
                                    </button>
                                    </div>
                                    <div class="col m2 l6">
                                    <button class="waves-effect waves dark btn btn-primary next-step" type="submit" @click="nextStep()">
                                        
                                        <i class="material-icons ">arrow_forward</i>
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li :class="{'step': true, 'active':step === 5}">
                        <div class="step-title waves-effect">Considera que el servicio en general fue:</div>
                        <div class="step-content">
                            <div class="row">
                                <div class="input-field col m12 s12 l12">
                                    <p>
                                        <label>
                                            <input type="radio" name="p5" class="with-gap" value="Pesima" v-model="encuesta.pregunta5" />
                                            <span>Pésima</span>
                                        </label>&nbsp;
                                        <label>
                                            <input type="radio" name="p5" class="with-gap" value="Mala"  v-model="encuesta.pregunta5" />
                                            <span>Mala</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="p5" class="with-gap" value="Regular"  v-model="encuesta.pregunta5" />
                                            <span>Regular</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="p5" class="with-gap" value="Excelente"  v-model="encuesta.pregunta5" />
                                            <span>Excelente</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="step-actions">
                                <div class="row">
                                    
                                    <div class="col m2 l6">
                                    <button class="red btn btn-reset" @click="prevStep()">
                                        <i class="material-icons ">arrow_back</i>
                                        
                                    </button>
                                    </div>
                                    <div class="col m2 l6">
                                    <button class="waves-effect waves dark btn btn-primary next-step" type="submit" @click="nextStep()">
                                        
                                        <i class="material-icons ">arrow_forward</i>
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li :class="{'step': true, 'active':step === 6}">
                        <div class="step-title waves-effect">Comentarios</div>
                        <div class="step-content">
                            
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea" v-model="encuesta.comentarios"></textarea>
                                    <label for="textarea1">Textarea</label>
                                </div>
                            </div>
                            <div class="step-actions">
                                <div class="row">
                                    <div class="col m6  mb-1">
                                        <button class="red btn btn-reset" @click="prevStep()">
                                            <i class="material-icons">arrow_back</i>
                                        </button>
                                    </div>
                                    <div class="col m6  mb-1">
                                        <button class="waves-effect waves dark btn btn-primary" type="button" @click="enviarEncuesta()">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div v-if="this.formulario == false">
                    <center>
                        <img src="assets/images/imageEncuesta.png" alt="logo" width="300px">
                    </center>
                </div>
            </div>
        </div>
     </div>
   </div>
</template>
<script>
import axios from 'axios';

export default {
    name: '',
    components: {
        
    },
    mixins: [],
    props: {
        
    },
    data() {
        return {
            step:1,
            totalsteps:6,
            formulario:true,
            encuesta:{
                pregunta1:'',
                pregunta2:'',
                pregunta3:'',
                pregunta4:'',
                pregunta5:'',
                comentarios:''

            }

        }
    },
    computed: {
        
    },
    watch: {
        
    },
    mounted() {

    },
    methods: {
         prevStep() {
            this.step--                 
        },
        nextStep() {
            if(this.step == 1){
                if(this.encuesta.pregunta1 == ''){
                    M.toast({
                        html: '¡Selecciona una opción por favor!',
                        classes: 'rounded'
                    });
                    return false
                }
            }
            if(this.step == 2){
                if(this.encuesta.pregunta2 == ''){
                    M.toast({
                        html: '¡Selecciona una opción por favor!',
                        classes: 'rounded'
                    });
                    return false
                }
            }
            if(this.step == 3){
                if(this.encuesta.pregunta3 == ''){
                    M.toast({
                        html: '¡Selecciona una opción por favor!',
                        classes: 'rounded'
                    });
                    return false
                }
            }
            if(this.step == 4){
                if(this.encuesta.pregunta4 == ''){
                    M.toast({
                        html: '¡Selecciona una opción por favor!',
                        classes: 'rounded'
                    });
                    return false
                }
            }
            if(this.step == 5){
                if(this.encuesta.pregunta5 == ''){
                    M.toast({
                        html: '¡Selecciona una opción por favor!',
                        classes: 'rounded'
                    });
                    return false
                }
            }
            this.step++
        },
        stepChanged(step) {
            this.currentstep = step;
        },
        enviarEncuesta(){
            let formData = new FormData();
                formData.append('pregunta1',this.encuesta.pregunta1);
                formData.append('pregunta2',this.encuesta.pregunta2);
                formData.append('pregunta3',this.encuesta.pregunta3);
                formData.append('pregunta4',this.encuesta.pregunta4);
                formData.append('pregunta5',this.encuesta.pregunta5);
                formData.append('comentarios',this.encuesta.comentarios);

            axios.post('encuesta/create',formData).then(res =>{
                // Swal.fire({
                //     title:'Perfecto',
                //     icon: 'success',
                //     text: `La Encuesta se envio con Exito!.`,
                //     showConfirmButton: false,
                //     timer: 2500,
                // })
                this.formulario = false;
            })
        }
    }
};
</script>
<style lang='' scoped>
</style>