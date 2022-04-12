<template>
    <div class="row">
        <div id="preview">
            <img v-if="url" :src="url" height="150" width="150"/>
        </div>
        <div class="ml-2">
            <button type="button" id="upload" class="btn btn-outline-primary" @click="selectFile">Upload Foto</button>
        </div>
        <input type="file" @change="onFileChange" ref="file" class="d-none" name="profile_picture"/>
    </div>
</template>

<script>
export default {
  props: ['url'],
  name: "UploadProfile",
  data() {
    return {
      url: null,
    }
  },
  computed: {
    
  },
  methods: {
    onFileChange(e) {
      const file = e.target.files[0];
      this.url = URL.createObjectURL(file);
    },
    selectFile(){
        let fileInputElement = this.$refs.file;
        fileInputElement.click();

        // Do something with chosen file 
    }
  }
}
</script>
