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
                        <label for="name" class="col-sm-3 col-form-label">Nama Universitas</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" aria-describedby="basic-addon3" :name="'pendidikanformal['+ index +'][university]'" placeholder="Nama Universitas" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" aria-describedby="basic-addon3" :name="'pendidikanformal['+ index +'][jurusan]'" placeholder="Jurusan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Tingkat Pendidikan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" aria-describedby="basic-addon3" :name="'pendidikanformal['+ index +'][level_education]'" placeholder="Tingkat Pendidikan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <!-- Rounded switch -->
                            <label class="switch mt-2">
                                <input type="checkbox" :name="'pendidikanformal['+ index +'][status]'" checked>
                                <span class="slider round"></span>
                            </label>
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
export default {
    name: "PendidikanFormal",
    data: function () {
        return {
            items : [],
            count : 0
        }
    },
    mounted() {
    },
    methods : {
        addNew() {
            this.items.push([this.count++])
        },
        deleteItem(index){
            this.items.splice(index, 1);
        }
    }
}
</script>