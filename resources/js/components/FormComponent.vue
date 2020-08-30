<template>
    <div class="card mb-3 ">
        <div class="card-header">¿En que estás pensando ahora?</div>
        <div class="card-body">

            <form action="" 
                v-on:submit.prevent="newThought()">
                <div class="form-group">
                    <label for="thought">Ahora estoy pensando en:</label>
                    <input type="text" name="thought" id="" class="form-control" v-model="description">
                </div>
                    <button type="submit" class="btn btn-success">Guardar pensamiento</button>
            </form>
        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return{
                description : ''
            }
        },
        methods: {
            newThought(){

                //parametros con datos para enviar al servidor
                const params = {
                    description : this.description
                };

                this.description = ''


                axios.post('/thoughts', params).then((response) => {
                    let thought = response.data;
                    this.$emit('new',thought);
                });
                
                // let thought = {
                //     id : 2,
                //     description : this.description,
                //     created_at : '01011999'
                // }
                // alert(this.description)
                //para generar un evento
                // this.$emit('new',thought)
                //limpiamos la descripcion
                // this.description = ''
            }
        },

        mounted() {
            // console.log('Component mounted.')
        }

    }
</script>
