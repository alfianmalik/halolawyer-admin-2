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
                        <label for="name" class="col-sm-3 col-form-label">Jenis Pendidikan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jenis_pendidikan" aria-describedby="basic-addon3" :name="'pendidikanonformal['+ index +'][jenis_pendidikan]'" placeholder="Jenis Pendidikan" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Tema Pendidikan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tema_pendidikan" aria-describedby="basic-addon3" :name="'pendidikanonformal['+ index +'][tema_pendidikan]'" placeholder="Tema Pendidikan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Tahun</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tahun" aria-describedby="basic-addon3" :name="'pendidikanonformal['+ index +'][tahun]'" placeholder="Tahun" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Sertifikat Dokumen</label>
                        <div class="form-group files">
                            <label>Upload Your File </label>
                            <input type="file" class="form-control" multiple="" :name="'pendidikanonformal['+ index +'][certificate]'">
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
    props: ["nonformaleducations"],
    name: "PendidikanFormal",
    data: function () {
        return {
            items : [],
            count : 0
        }
    },
    mounted() {
        this.items = this.nonformaleducations
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