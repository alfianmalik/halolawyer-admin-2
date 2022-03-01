<template>
    <div class="row">
        <div id="preview">
            <div v-for="(name, index) in names" :key="index">
                <span style="background: #F4F5F7" class="mt-2">{{ name }}</span>
            </div>
        </div>
        <div class="">
            <button type="button" class="btn btn-outline-primary mt-3" @click="selectFile">Add Upload File</button>
        </div>
        <input type="file" @change="onFileChange" ref="file" class="d-none" multiple/>
    </div>
</template>

<script>
export default {
  name: "UploadProfile",
  data() {
    return {
      url: null,
      names: [],
    }
  },
  computed: {
    
  },
  methods: {
    onFileChange(e) {
        for (let index = 0; index < e.target.files.length; index++) {
            const element = e.target.files[index];
            console.log(element);
            // this.names[index] = ;
            this.names.push(element.name);
        }      
        console.log(this.names)
        // this.url = URL.createObjectURL(file);
    },
    selectFile(){
        let fileInputElement = this.$refs.file;
        fileInputElement.click();

        // Do something with chosen file 
    }
  }
}
</script>