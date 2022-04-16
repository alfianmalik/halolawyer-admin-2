<template>
    <div>
        <div class="form-group row">
            <label for="province" class="col-sm-4 col-form-label">Provinsi</label>
            <div class="col-sm-8">
                <select class="form-control" id="province" name="province" v-model="province" autocomplete="province" autofocus @change="getCities">
                    <option style="color: black" :value=data.id v-for="(data, index) in provinces">{{ data.name }}</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="city" class="col-sm-4 col-form-label">Kabupaten / Kota</label>
            <div class="col-sm-8">
                 <select class="form-control" id="city" name="city" v-model="city" autocomplete="city" autofocus @change="getDistricts">
                    <option style="color: black" :value=data.id v-for="(data, index) in cities">{{ data.name }}</option>
                </select>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        userprovince : Number,
        usercity: Number,
        userdistrict: Number,
        validationErrors : Array,
    },
    name: "LocationProfession",
    data: function () {
        return {
            isLoading: false,
            provinces : {},
            province: [],
            cities : {},
            city : [],
            districts : {},
            district : []
        }
    },
    mounted() {
        this.province = this.userprovince
        if (this.usercity) {
            this.city = this.usercity
            this.getCities()
        }
        if (this.userdistrict) {
            this.district = this.userdistrict
            this.getDistricts()
        }
        this.getProvinces();
    },
    methods : {
        async getProvinces() {
            await axios.get("/api/get/provinces")
                .then((x) => {
                    this.provinces = x.data
                })
                .catch((x) => {
                    console.log(x)
                });
        },
        async getCities() {
            const params = {
                province: { toJSON: () => this.province }
            };
            await axios.get("/api/get/cities", { params })
                .then((x) => {
                    this.cities = x.data
                })
                .catch((x) => {
                    console.log(x)
                });
        },
        async getDistricts() {
            const params = {
                city: { toJSON: () => this.city }
            };
            await axios.get("/api/get/districts", { params })
                .then((x) => {
                    this.districts = x.data
                })
                .catch((x) => {
                    console.log(x)
                });
        },

    }
}
</script>