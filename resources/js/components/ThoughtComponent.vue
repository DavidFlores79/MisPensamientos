<template>
    <div class="card mb-3">
        <div class="card-header">Publicado en {{ thought.created_at }} </div>

        <div class="card-body">
            <input v-if="editMode" type="text" class="form-control" v-model="thought.description">
            <p v-else>{{ thought.description}}</p>
        </div>
        <div class="card-footer">
            
            <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate">Guardar</button>
            <button v-else class="btn btn-primary" v-on:click="onClickEdit">Editar</button>
            <button class="btn btn-danger" v-on:click="onClickDelete">Eliminar</button>
        </div>
    </div>
</template>

<script>
    export default {

        props:['thought'], //trae desde el componente padre el objeto
        
        data(){
            return {
                editMode: false
            }
        },
        methods: {
            onClickDelete(){
                this.$emit('delete')
            },
            onClickEdit(){
                this.editMode = true
            },
            onClickUpdate(){
                this.editMode = false
                this.$emit('update', thought)
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
