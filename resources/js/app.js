require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('chat-conversations', require('./components/ChatConversations.vue').default);
Vue.component('chat-form', require('./components/ChatForm.vue').default);
Vue.component('chat-messages', require('./components/ChatMessages.vue').default);
Vue.component('conversation-participants', require('./components/ConversationParticipants.vue').default);

const app = new Vue({
    el: '#wrapper',
    data: {
        checked: false,
        message: []
    },
    created() {

    },
    methods : {
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
        }
    }
});
