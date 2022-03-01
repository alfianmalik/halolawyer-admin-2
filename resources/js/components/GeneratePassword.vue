<template>
    <div>
        <div v-if="password != ''" class="row">
            <input type="text" class="form-control col-md-9 mr-1" id="password_generate" aria-describedby="basic-addon3" name="password_generate" placeholder="" :value=password>

            <button type="button" class="btn btn-outline-primary col-md-2" @click=emptyPassword>Cancel</button>
        </div>
        
        <button type="button" id="password" class="btn btn-outline-primary" @click="generatePassword" v-if="password == ''">Generate Password</button>
    </div>
</template>

<script>
const string = "abcdefghijklmnopqrstuvwxyz";
const numeric = "0123456789";
const punctuation = "!@#$%^&*()_+~`|}{[]:;?><,./-=";

export default {
  name: "GeneratePassword",
  data() {
    return {
      length: 10,
      password: "",
    };
  },
  computed: {
    formValid() {
      const { length } = this;
      return +length > 0;
    },
  },
  methods: {
    generatePassword() {
      const { length, formValid } = this;
      if (!formValid) {
        return;
      }
      let character = "";
      let password = "";
      while (password.length < length) {
        const entity1 = Math.ceil(
          string.length * Math.random() * Math.random()
        );
        const entity2 = Math.ceil(
          numeric.length * Math.random() * Math.random()
        );
        const entity3 = Math.ceil(
          punctuation.length * Math.random() * Math.random()
        );
        let hold = string.charAt(entity1);
        hold = password.length % 2 === 0 ? hold.toUpperCase() : hold;
        character += hold;
        character += numeric.charAt(entity2);
        character += punctuation.charAt(entity3);
        password = character;
      }
      password = password
        .split("")
        .sort(() => {
          return 0.5 - Math.random();
        })
        .join("");
      this.password = password.substr(0, length);
    },
    emptyPassword() {
        this.password = "";
    }
  },
};
</script>