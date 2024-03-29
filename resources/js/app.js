require('./bootstrap');

window.Vue = require('vue').default;
var vueAwesomeCountdown = require('vue-awesome-countdown').default;
Vue.use(vueAwesomeCountdown);

Vue.component('chat-conversations', require('./components/ChatConversations.vue').default);
Vue.component('chat-form', require('./components/ChatForm.vue').default);
Vue.component('chat-messages', require('./components/ChatMessages.vue').default);
Vue.component('conversation-participants', require('./components/ConversationParticipants.vue').default);
Vue.component('generate-password', require('./components/GeneratePassword.vue').default);
Vue.component('upload-profile', require('./components/UploadProfile.vue').default);
Vue.component('upload-file', require('./components/UploadFile.vue').default);
Vue.component('work-area', require('./components/WorkArea.vue').default);
Vue.component('pendidikan-formal', require('./components/PendidikanFormal.vue').default);
Vue.component('edit-pendidikan-formal', require('./components/EditPendidikanFormal.vue').default);
Vue.component('pendidikan-non-formal', require('./components/PendidikanNonFormal.vue').default);
Vue.component('spesialisasi', require('./components/Spesialisasi.vue').default);
Vue.component('edit-spesialisasi', require('./components/EditSpesialisasi.vue').default);
Vue.component('store-spesialisasi', require('./components/StoreSpesialisasi.vue').default);
Vue.component('case-experience', require('./components/CaseExperience.vue').default);
Vue.component('location-profession', require('./components/LocationProfession.vue').default);

const app = new Vue({
    el: '#wrapper',
    data: {
        checked: false,
        message: [],
        finished: false,
        selectedLawyers: [],
        selected: [],
        allSelected: false,
    },
    created() {
        if (typeof conversation !== 'undefined') {
            this.startChatPusher()
        }
    },
    methods : {
        selectAll: function() {
            this.selectedLawyers = [];

            if (!this.allSelected) {
                for (user in this.users) {
                    this.selectedLawyers.push(this.users[user].id);
                }
            }
        },
        showPassword(id) {
            const password = document.querySelector("#"+id);
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye / eye slash icon
            $('.'+id).toggleClass('fa-eye-slash fa-eye');
        },
        pay(token) {
            snap.pay(token, {
                // Optional
                onSuccess: function(result){
                    console.log("success")
                    console.log(result)
                    // window.location.href = result.finish_redirect_url
                },
                // Optional
                onPending: function(result){
                    console.log("pending")
                    console.log(result)
                    // window.location.href = result.finish_redirect_url
                },
                // Optional
                onError: function(result){
                    console.log("error")
                    console.log(result)
                }
            });
        },
        messageToChat(message) {
            this.message = message
        },
        startChatPusher() {
            let token = document.head.querySelector('meta[name="csrf-token"]');

            let pusher = new Pusher(process.env.MIX_PUSHER_APP_KEY, {
              cluster: process.env.MIX_PUSHER_APP_CLUSTER,
              auth: { headers: { "X-CSRF-Token": token.content } },
              authEndpoint: "/broadcasting/auth",
            });

            let channel = pusher.subscribe(
              `private-mc-start-chat-conversation.${conversation.id}`
            );
            channel.bind("App\\Events\\StartTimeChat", data => {
                // console.log(new Date().getTime() + 10000)
                this.$refs.start.startCountdown(true)
                // this.$refs.start.timeObj.endTime(new Date().getTime() + 1800000)
            });

            var channelend = pusher.subscribe(
                `private-mc-end-chat-conversation.${conversation.id}`
            );

            channelend.bind("App\\Events\\EndTimeChat", data => {
                this.finished = true
            });
        },
        finish() {
             // First Send To Customer
            axios.post(`/api/chat/end/${conversation.id}`)
                .then((e) => {
                    console.log("finish")
                });
            this.finished = true
        }
    }
});
