<template>
  <div class="card card-default">
    <div class="card-body">
      <div class="d-none">
          <h6 class="font-weight-bold">Mitra Hukum</h6>
      </div>
      <div class="media d-none">
          <img class="mr-3 rounded-circle" src="https://via.placeholder.com/50" alt="Generic placeholder image">
          <div class="media-body mt-2">
            <h6 class="mt-0 font-weight-bold mt-1">Rifai Ghufron, S.H</h6>
          </div>
      </div>
      <div class="d-none">
          <div class="mt-2 mb-2">Bidang Keahlian dan Spesialisasi</div>
          <div>
              Hutang Piutang, Keluarga,
              Ketenagakerjaan, Pidana dan Laporan
              Polisi, Pertanahan dan Properti, Bisnis,
              dan Teknologi Informasi
          </div>
      </div>
      <div class="mt-1">
          <h6 class="font-weight-bold">Customer</h6>
      </div>
      <div v-for="(participant, index) in participants" :key="index">
        <div class="media" v-if="participant.participation[0].messageable_type == 'App\\Models\\User'">
            <img class="mr-3 rounded-circle" src="https://via.placeholder.com/50" alt="">
            <div class="media-body">
              <h6 class="mb-0 font-weight-bold"></h6>
              <div>{{ participant.first_name }} {{ participant.last_name }}</div>
              <div>{{ participant.phone }}</div>
            </div>
        </div>
      </div>
      <ul class="chat d-none">
        <li class="left clearfix border-bottom py-1" v-for="(participant, index) in participants" :key="index">
          <div class="chat-body clearfix">
            <div class="d-flex align-items-center header">
              <div class="primary-font participant-name">{{ participant.first_name }}</div>
              <span class="participant-type pl-1"> ({{ participant.participation[0].messageable_type}})</span>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: ["conversation"],

  data: () => ({
    participants: []
  }),

  methods: {
    getParticipants(conversationId) {
      axios
        .get(`/chat/conversations/${conversationId}/participants`)
        .then(response => {
          this.participants = response.data;
        });
    }
  },

  created() {
    this.getParticipants(this.conversation);
  }
};
</script>
<style lang="scss" scoped>
ul.chat {
    padding: 0;
    list-style: none;
}
.participant-name {
    font-size: 1rem;
}

.participant-type {
    font-size: .8rem;
    color: #565151;
}
</style>