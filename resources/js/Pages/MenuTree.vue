<script setup>
import 'bootstrap/dist/css/bootstrap.min.css';
import bootstrap from 'bootstrap';
import { defineProps, ref } from 'vue';
import { Link, usePage } from "@inertiajs/vue3";

const mainMenus = ref([]);

const { props } = usePage();

defineProps({
    props: {

        mainMenus: {
            type: Object, 
            required: true
        },
        

    },
  
})


</script>

<template>
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-12 col-lg-12">
                <h1>Menu Tree</h1>
            </div>
            
            <div class="col-xs-4 col-lg-4">
                <ul id="Menu-list">
                    <li>
                        <a href="#" class="tree-parent-anchor"> Main Menus</a>
                        <ul v-for="main in mainMenus.data" :key="main.id">
                            <li>{{ main.name }}</li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="tree-parent-anchor"> Sub Menus </a>
                        <ul>
                            <li> Menu 2.1 </li>
                            <li> Menu 2.2 </li>
                            <li> Menu 2.3 </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="tree-parent-anchor"> Third Menus </a>
                        <ul>
                            <li> Menu 3.1 </li>
                            <li> Menu 3.2 </li>
                            <li> Menu 3.3 </li>
                            <li> Menu 3.4 </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-xs-7 col-lg-7">
                <table class="table table-light border-2 colspan-2">
                    <tr class="border-2">
                        <th class="border-2">Id</th>
                        <th class="border-2">Name</th>
                        <th class="border-2">Functionalities</th>
                    </tr>

                    <tr class="border-2" v-for="menu in mainMenus.data" :key="menu.id">
                        <td class="border-2">{{ menu.id }}</td>
                        <td class="border-2">{{ menu.name }}</td>
                        <td class="border-2"> 
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    Click Me
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/menutree/createmainmenu">Add</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr> 
                </table>

                <table class="table table-light border-2 colspan-2">
                    <tr class="border-2">
                        <th class="border-2">Id</th>
                        <th class="border-2">Name</th>
                        <th class="border-2">Main Menu Id</th>
                        <th class="border-2">Functionalities</th>
                    </tr>

                    <tr>
                        <td class="border-2"></td>
                        <td class="border-2"></td>
                        <td class="border-2"></td>
                        <td class="border-2">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    Click Me
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Add</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>

                        </td>
                    </tr>
                </table>


                <table class="table table-light border-2 colspan-2">
                    <tr class="border-2">
                        <th class="border-2">Id</th>
                        <th class="border-2">Name</th>
                        <th class="border-2">Sub Menu Id</th>
                        <th class="border-2">Main Menu Id</th>
                        <th class="border-2">Functionalities</th>
                    </tr>

                    <tr class="border-2">
                        <td class="border-2"></td>
                        <td class="border-2"></td>
                        <td class="border-2"></td>
                        <td class="border-2"></td>
                        <td class="border-2">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    Click Me
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Add</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

            </div>

            <div class="col-xs-1 col-lg-1"></div>

            
        </div>
    </div>
    
</template>

<script>
import $ from 'jquery';

export default {
    name: 'MenuTree',
    name: 'DropdownMenu',

    mounted() {
        this.initTreeList();
    },

    methods: {
        initTreeList() {
            const treeList = {
                init: () => {
                    $('.tree-parent-anchor', '#Menu-list').each(function() {
                        const $a = $(this);
                        const $li = $a.parent();
                        if ($a.next().is('ul')) {
                            const $ul = $a.next();
                            $a.on('click', function(e) {
                                e.preventDefault();
                                treeList.collapse($ul);
                                $a.toggleClass('active');
                            });
                        }
                    });
                },
                collapse: function(element) {
                    element.slideToggle(600);
                },
            }
    
        treeList.init();
        },
       
    }
}


</script>
  
<style scoped>
  .container-fluid{
    margin-bottom: 150px;
  }

  h1{
    font-size: 50px;
    font-weight: bolder;
    text-align: center !important;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin-top: 30px;
    margin-bottom: 50px;
  }

  #Menu-list {
        margin: 2em 0 0 2em;
        width: 20em;
        list-style-type: none;
    }

    #Menu-list > li {
        padding-bottom: 3px;
        /* margin-bottom: 0.5em; */
    }

    #Menu-list  li > a {
        color: #000;
        text-decoration: none;
    }

    #Menu-list  li > a:after {
        content: '+';
        padding-right: 4px;
        font-weight: bold;
    }

    #Menu-list  li > a.active:after {
        content: '-';
        padding-right: 4px;
        font-weight: bold;
    }

    #Menu-list li ul {
        margin: 0.5em 0 0.5em 2em;
        display: none;
        list-style-type: none;
    }

    .tree-parent-anchor{
        font-weight: bolder;
        font-size: 22px;
    }

    li{
        font-size: 15px;
        color: black;
    }

    .col-xs-4,.col-lg-4{
        border: #000 1px solid;
        margin-left: 5px;
        margin-right: 5px;
        height: 700px;
    }

    .col-xs-7, .col-lg-7{
        border: #000 1px solid;
        height: 700px;
    }

    table{
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 5px;
        margin-right: 5px !important;
        border: 2;
    }

    .btn-light{
        background-color: white !important;
        border: 0 !important;
    }

    .btn-light:focus{
        box-shadow: none !important;
        border: 0 !important;
        background-color: white !important;
    }


</style>

