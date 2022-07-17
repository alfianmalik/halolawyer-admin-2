<template>
    <div>
        <div class="input-group">
            <input
                id="btn-input"
                type="text"
                name="message"
                class="form-control input-sm"
                placeholder="Type your message here..."
                v-model="newMessage"
            >
            &nbsp;&nbsp;
            <span class="input-group-btn">
                <button class="btn btn-primary rounded-circle" id="btn-chat" @click="sendMessage"><i class="fa fa-paper-plane"></i></button>
            </span>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["user", "conversation"],

        data() {
            return {
                newMessage: "",
                message : []
            };
        },

        created() {

        },
        methods: {
            isParticipant() {
                return true
            },
            sendMessage() {
                axios.post(`/chat/conversations/${this.conversation}/messages`, {
                    message: {
                        body: this.newMessage,
                    },
                    participant_id: participants[0].messageable_id,
                    participant_type: participants[0].messageable_type,
                })
                .then((e) => {
                    this.messageToChat(e)
                    this.newMessage = "";
                    // location.reload(); // comment this out if you are broadcasting
                });

                // First Send To Customer
                axios.post(`/api/chat/start/${this.conversation}`)
                    .then((e) => {
                        // console.log(e)
                    });
            },
            messageToChat(message) {
                this.$emit("inputData", message);
            },
        }
    };
</script>
