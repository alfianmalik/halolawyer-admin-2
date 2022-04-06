<template>
    <div>
       <div class="form-group">
            <h6 for="title" class="text-dark font-weight-bolder">Kategori Kasus</h6>
            <multiselect v-model="value" tag-placeholder="Add this as new tag" placeholder="Search or add a tag" label="name" track-by="id" :options="options" :multiple="true" :taggable="true" @tag="addTag(index)"></multiselect>
            <input type="text" name="categories" v-model="tagging">
        </div>
    </div>
</template>

<script>

import Multiselect from 'vue-multiselect'

export default {
    props: ["specialization","cases"],
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
        this.getCategories();
    },
    methods : {
        addNew() {
            this.items.push([this.count++])
        },
        deleteItem(index){
            this.items.splice(index, 1);
        },
        async getCategories() {
            axios.get("/api/get/categories")
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
            this.tagging = JSON.stringify(val)
        }
    }
}
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>