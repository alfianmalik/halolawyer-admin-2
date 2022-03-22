<template>
    <div>
        <div class="accordion" id="accordionExample">
            <div class="card mt-2" v-for="(item, index) in items" :key="index">
                <div class="card-header" id="headingOne">
                    <div class="row">
                        <div class="col-md-10">
                            <h5 class="w-75">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="/images/accordion.png" alt="">
                                </button>
                            </h5>
                        </div>
                        <div class="col-md-2 float-right text-right">
                            <i class="fa fa-trash mt-3 mr-4" @click="deleteItem(index)"></i>    
                        </div>
                    </div>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Kategori Kasus</label>
                            <div class="col-sm-9">
                                <select class="form-control" :name="'specialization['+ index +'][case]'" id="" @change="getSpesialization()">
                                    <option v-for="(item, index) in cases" :key="index" :value="item.id">{{ item.name }}</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Spesialisasi</label>
                            <div class="col-sm-9">
                                <select class="form-control" :name="'specialization['+ index +'][specialization]'" id="">
                                    <option v-for="(item, index) in specialization" :key="index" :value="item.id">{{ item.name }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <button type="button" name="" id="" class="btn btn-outline-primary btn-block mt-5" @click="addNew">+ Add New</button>        
    </div>
</template>

<script>

import { ListSelect } from 'vue-search-select'
import 'vue-search-select/dist/VueSearchSelect.css'

export default {
    props: ["specialization","cases"],
    name: "Spesialisasi",
    data: function () {
        return {
            items : [1],
            itemss: [],
            count : 0,
            specializations: [],
            options: [
                { value: '1', text: 'aa' + ' - ' + '1' },
                { value: '2', text: 'ab' + ' - ' + '2' },
                { value: '3', text: 'bc' + ' - ' + '3' },
                { value: '4', text: 'cd' + ' - ' + '4' },
                { value: '5', text: 'de' + ' - ' + '5' }
            ],
            searchText: '', // If value is falsy, reset searchText & searchItem
            lastSelectItem: {}
        }
    },
    components : {
        ListSelect
    },
    mounted() {
        
    },
    methods : {
        addNew() {
            this.items.push([this.count++])
        },
        deleteItem(index){
            this.items.splice(index, 1);
        },
        async getSpesialization(category) {
            axios.get("/api/get/specialization/"+category)
                .then(res => {
                    this.specializations = res.data
                    console.log(res)
                })
                .catch(err => {
                    console.error(err); 
                })
        },
        onSelect (items, lastSelectItem) {
            this.items = items
            this.lastSelectItem = lastSelectItem
        },
        // deselect option
        reset () {
            this.items = [] // reset
        },
        // select option from parent component
        selectFromParentComponent () {
            this.items = _.unionWith(this.items, [this.options[0]], _.isEqual)
        }
    }
}
</script>