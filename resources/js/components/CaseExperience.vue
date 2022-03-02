<template>
    <div>
        <div class="accordion" id="accordionExample">
            <div class="card mt-2" v-for="(item, index) in items" :key="index">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <img src="/images/accordion.png" alt="">
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Kategori Kasus</label>
                        <div class="col-sm-9">
                            <select class="form-control" :name="'caseexperience['+ index +'][case]'" id="">
                                <option v-for="(item, index) in cases" :key="index" :value="item.id">{{ item.name }}</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="judul_perkara" class="col-sm-3 col-form-label">Judul Perkara</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="judul_perkara" aria-describedby="basic-addon3" :name="'caseexperience['+ index +'][judul_perkara]'" placeholder="Judul Perkara">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Tahun</label>
                        <div class="col-sm-9">
                            <select class="form-control" :name="'caseexperience['+ index +'][year]'" id="">
                                <option v-for="year in years" :value="year" :key="year">{{ year }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Jenis</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" aria-describedby="basic-addon3" :name="'caseexperience['+ index +'][jenis]'" placeholder="Contoh: Wanprestasi, PMH, dll.">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Alasan Perkaranya Menarik</label>
                        <div class="col-sm-9">
                            <!-- Rounded switch -->
                            <textarea class="form-control" :name="'caseexperience['+ index +'][reason]'" id="" cols="30" rows="10"></textarea>
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
    props: ["cases"],
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
    },
    computed: {
        years () {
            const year = new Date().getFullYear()
            return Array.from({length: year - 1990}, (value, index) => 1991 + index)
        }
    }
}
</script>