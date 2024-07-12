<script setup>
import 'bootstrap/dist/css/bootstrap.min.css';
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  name: '',
});


const submit = () => {
  form.post('/menutree');
};

</script>


<template>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-xs-3 col-lg-3"></div>

            <div class="col-xs-6 col-lg-6">
                <form @submit.prevent="submit" method="get">
                    <h1>Create MainMenu</h1>
                    <div class="inline-form">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" v-model="form.name" id="name" placeholder="MainMenu Name" required>
                    </div>
                
                    <button class="btn btn-primary" type="submit">Enter</button>
                </form>

            </div>

            <div class="col-xs-3 col-lg-3"></div>

        </div>
    </div>
</template>

<style scoped>
h1{
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: 50px;
    font-size: 25px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.form-control{
    width: 300px;
    margin-bottom: 30px;
    margin-left: 50px;
}

label{
    color: black;
    margin-bottom: 5px;
    margin-left: 50px;
}

.btn-primary{
    width: 100px;
    margin-left: 50px;
}

form{
    background-color: lightblue !important;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-top: 100px;
    border-radius: 10px;
    height: 500px;
}
</style>