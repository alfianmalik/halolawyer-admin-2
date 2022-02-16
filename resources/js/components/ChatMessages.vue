<template>
  <div class="position-relative">
    <div class="chat-messages p-1" ref="container">
      <div class="pb-4" 
        :class="[ message.sender.messageable_id == currentUser.messageable_id && message.sender.messageable_type == currentUser.messageable_type ? 'chat-message-right' : 'chat-message-left']"
        v-for="(message, index) in messages.data"
        :key="index">
          <div>
              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
              <div class="text-muted small text-nowrap mt-2"> {{ message.created_at  | formatDate }}</div>
          </div>
          <div class="flex-shrink-1 bg-light rounded py-2 px-3 " :class="[message.sender.messageable_id == currentUser.messageable_id && message.sender.messageable_type == currentUser.messageable_type ? 'mr-3' : 'ml-3']">
              <div class="font-weight-bold mb-1">{{ message.sender.first_name }} {{ message.sender.last_name }}</div>
              {{ message.body }}
          </div>
      </div>
    </div>
  </div>
</template>

<script>
import moment from 'moment'

export default {
  props: ["conversation"],

  data: () => ({
    messages: []
  }),
  computed: {
    currentUser() {
      return participants[0];
    }
  },
  methods: {
    scrollToEnd () {
      var content = this.$refs.container;
      content.scrollTop = content.scrollHeight;
      content.scrollIntoView({behavior: 'smooth'});
    },
    fetchMessages() {
      axios
        .get(
          // `/chat/conversations/${this.conversation}/messages?participant_id=${window.participants.id}&participant_type=${window.participants.type}`
          `/chat/conversations/${this.conversation}/messages?participant_id=${participants[0].messageable_id}&participant_type=${participants[0].messageable_type}&participant_id=${participants[1].messageable_id}&participant_type=${participants[1].messageable_type}`
        )
        .then(response => {
          this.messages = response.data;
        });
    },

    deleteMessages() {
      axios
        .delete(
          // `/chat/conversations/${this.conversation}/messages?participant_id=${window.participants.id}&participant_type=${window.participants.type}`
          `/chat/conversations/${this.conversation}/messages?participant_id=${participants[1].id}&participant_type=${participants[1].participation[0].messageable_type}`
        )
        .then(response => {
            this.messages = response.data;
        });
    },

    enablePusher() {
      let token = document.head.querySelector('meta[name="csrf-token"]');

      let pusher = new Pusher(process.env.MIX_PUSHER_APP_KEY, {
        cluster: process.env.MIX_PUSHER_APP_CLUSTER,
        auth: { headers: { "X-CSRF-Token": token.content } },
        authEndpoint: "/broadcasting/auth",
      });

      let channel = pusher.subscribe(
        `private-mc-chat-conversation.${this.conversation}`
      );

      channel.bind("Musonza\\Chat\\Eventing\\MessageWasSent", data => {
        this.messages.data.push(data.message);
      });
    }

  },

  created() {
    this.fetchMessages();
    this.enablePusher();
  },

  mounted () {
  	// This will be called on load
  	
  },

  updated(){
    this.scrollToEnd();	
  },

  filters: {
      formatDate: function (value) {
          if (value) {
              return moment(String(value)).format('hh:mm A')
          }
      }
  }
};
</script>