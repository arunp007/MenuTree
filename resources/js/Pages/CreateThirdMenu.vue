<script setup>
import 'bootstrap/dist/css/bootstrap.min.css';
import { ref } from 'vue';
import { useForm, router } from '@inertiajs/vue3';

const form = useForm({
  name: '',
  main_menu_id: '',
  sub_menu_id: '',
});


const submitvalue = () => {
  router.post('/createthirdmenu', form);
};
</script>

<template>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-xs-3 col-lg-3"></div>

            <div class="col-xs-6 col-lg-6">
                <form @submit.prevent="submitvalue" method="post">
                    <h1>Create ThirdMenu</h1>
                    <div class="inline-form">
                        <label for="name">Name</label>
                        <input class="form-control" v-model="form.name" type="text" id="name" placeholder="MainMenu Name" required>
                    </div>

                    <div class="inline-form">
                        <label for="main_menu_id">MainMenu Id</label>
                        <input class="form-control" v-model="form.main_menu_id" type="text" id="main_menu_id" placeholder="MainMenu Id" required>
                    </div>

                    <div class="inline-form">
                        <label for="sub_menu_id">SubMenu Id</label>
                        <input class="form-control" v-model="form.sub_menu_id" type="text" id="sub_menu_id" placeholder="SubMenu Id" required>
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
    height: 600px;
    margin-bottom: 150px;
}
</style>