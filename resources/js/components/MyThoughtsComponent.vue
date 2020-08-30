<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form-component @new="addThought"></form-component>

            <thought-component 
                v-for="(thought, index) in thoughts"
                :key="thought.id"
                :thought="thought"
                @delete="deleteThought(index)"
                @update="updateThought(index)"
                > <!--En :thought="thought" se recibe el objeto thought desde el componente hijo, puede ir igual {id:1,description:'jjaaj',created_at:'01/01/1999'} -->
                
            </thought-component>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                //se iniciara con un arreglo vacio
                thoughts:[]
            }
        },
        methods:{
            addThought(thought){
                this.thoughts.push(thought)
            },
            deleteThought(index){
                this.thoughts.splice(index, 1)
            },
            updateThought(index, thought){
                this.thoughts[index] = thought
            }
        },
        

        mounted() {
            // console.log('Component mounted.')
            axios.get('/thoughts').then((response) => {
                this.thoughts = response.data;
            })
        }

    }
</script>
