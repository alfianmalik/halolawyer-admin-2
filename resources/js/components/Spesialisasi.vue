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
                                <select class="form-control" :name="'specialization[case]['+ index +']'" id="" @change="getSpesialization(category[index])" v-model="category[index]">
                                    <option v-for="(item, idxi) in cases" :key="idxi" :value="item.id">{{ item.name }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Spesialisasi</label>
                            <div class="col-sm-9">
                                <multiselect v-model="value[index]" tag-placeholder="Add this as new tag" placeholder="Search or add a tag" label="name" track-by="id" :options="options" :multiple="true" :taggable="true" @tag="addTag(index)"></multiselect>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" :name="'specialization[list]'" v-model="tagging">
        </div>

        <button type="button" name="" id="" class="btn btn-outline-primary btn-block mt-5" @click="addNew">+ Add New</button>
    </div>
</template>

<script>

import Multiselect from 'vue-multiselect'

export default {
    props: ["specialization","cases", "lawyerspecialization"],
    name: "Spesialisasi",
    data: function () {
        return {
            items : [],
            count : 0,
            category: [],
            specializations: [],
            tagging: [],
            value: [],
            options: []
        }
    },
    components : {
        Multiselect
    },
    mounted() {
        console.log(this.lawyerspecialization)
        // this.items = this.lawyerspecialization
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
                    this.options = res.data
                    console.log(res.data)
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
        },
        addTag (newTag) {
            const tag = {
                name: newTag
            }
            console.log(newTag)
            this.options.push(tag)
            this.value.push(tag)
        }
    },
    watch:{
        value (val) {
            // my new value in val. Perform your
            // select update methods here
            // let list = Object.keys(val).map((key) => {
            //     return val[key]
            // });
            // console.log(list);
            // console.log(idx);
            // console.log(JSON.stringify(val))
            this.tagging = JSON.stringify(val)
        }
    }
}
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
