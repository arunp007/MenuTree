<script setup>
import 'bootstrap/dist/css/bootstrap.min.css';
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  name: '',
  main_menu_id: '',
});


const submitdata = () => {
  form.post('/menutree');
};
</script>

<template>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-xs-3 col-lg-3"></div>

            <div class="col-xs-6 col-lg-6">
                <form  @submit.prevent="submitdata" method="post"> 
                    <h1>Create SubMenu</h1>
                    <div class="inline-form">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" v-model="form.name" id="name" placeholder="SubMenu Name" required>
                        <label for="main_menu_id">MainMenu Id</label>
                        <input class="form-control" type="text" v-model="form.main_menu_id" id="main_menu_id" placeholder="MainMenu Id" required>
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
    padding-top: 50px;
    padding-bottom: 50px;
    margin-top: 100px;
    border-radius: 10px;
    height: 500px;
}
</style>