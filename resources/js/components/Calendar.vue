<template>
  <div class="col-12">
    <table class="table table-bordered dark">
      <thead>
        <tr>
          <th></th>
          <th colspan="4" style="text-align: center">Matin</th>
          <th class="bg-dark"></th>
          <th colspan="4" style="text-align: center">apres-midi</th>
        </tr>
        <tr>
          <th class="col"></th>
          <th style="text-align: center" class="col">8-9</th>
          <th style="text-align: center" class="col">9-10</th>
          <th style="text-align: center" class="col">10-11</th>
          <th style="text-align: center" class="col">11-12</th>
          <th style="text-align: center" class="col bg-dark"></th>
          <th style="text-align: center" class="col">2-3</th>
          <th style="text-align: center" class="col">3-4</th>
          <th style="text-align: center" class="col">4-5</th>
          <th style="text-align: center" class="col">5-6</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="date in dates" v-bind:key="date.day">
          <th style="text-align: center">{{ date.day }}</th>
          <td
            v-for="(rdv, index) in date.rdvs"
            :key="index"
            :class="{ 'bg-danger': rdv, 'bg-dark': rdv === '' }"
          >
            <button
              v-if="rdv === false"
              class="btn btn-light btn-block"
              @click="showModal()"
            >
              reserver
            </button>
          </td>
        </tr>
      </tbody>
    </table>
    <div
      class="modal fade"
      id="modalClient"
      tabindex="-1"
      aria-labelledby="modalClientLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalClientLabel">Ajout Rendez-vous</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row p-3">
              <label for="">Nom Complet</label>
              <input
                type="text"
                class="form-control m-2"
                value="Mdarhri Othmane"
              />
              <label for="">Email</label>
              <input
                type="email"
                class="form-control m-2"
                value="outhman.mdarhri@gmail.com"
              />
              <label for="">temp heure</label>
              <input
                type="datetime-local"
                step=""
                class="form-control m-2"
                name=""
                v-model="date_rdv"
              />
              <label for="">telephone</label>
              <input
                type="tel"
                class="form-control m-2"
                name=""
                id=""
                value="0777988095"
              />
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Fermer
            </button>
            <button type="button" class="btn btn-success" @click="showToast">
              Reserver
            </button>
          </div>
        </div>
      </div>
    </div>
    <div
      class="position-fixed bottom-0 right-0 p-3"
      style="z-index: 5; right: 0; bottom: 0"
    >
      <div
        id="toast_rdv"
        class="toast hide"
        role="alert"
        aria-live="assertive"
        aria-atomic="true"
        data-delay="2000"
      >
        <div class="toast-header">
          <strong class="mr-auto">Succés</strong>
          <button
            type="button"
            class="ml-2 mb-1 close"
            data-dismiss="toast"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body bg-success">
          vous allez recevoir votre confirmation par mail
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    var moment = require("moment"); // require
    moment.locale("fr");
    return {
      date_rdv: "2021-05-01T11:00",
      today: moment().startOf("isoWeek"),
      end_of_week: moment().endOf("isoWeek").add(-1, "day"),
      dates: [
        {
          day: "lundi",
          rdvs: [true, false, true, false, "", true, false, false, false],
        },
        {
          day: "mardi",
          rdvs: [false, true, false, false, "", true, true, false, false],
        },
        {
          day: "mercredi",
          rdvs: [true, true, true, false, "", true, false, true, true],
        },
        {
          day: "jeudi",
          rdvs: [false, true, true, true, "", true, true, true, true],
        },
        {
          day: "vendredi",
          rdvs: [false, false, true, true, "", false, true, true, false],
        },
        {
          day: "samedi",
          rdvs: [true, true, false, false, "", false, false, true, true],
        },
      ],
    };
  },
  beforeMount() {
    /*var moment = require("moment"); // require
    moment.weekdays().forEach((day, index) => {
      if (index != 0)
        this.dates.push({
          day: day,
          rdvs: [
            Math.random() < 0.5,
            Math.random() < 0.5,
            Math.random() < 0.5,
            Math.random() < 0.5,
            "",
            Math.random() < 0.5,
            Math.random() < 0.5,
            Math.random() < 0.5,
            Math.random() < 0.5,
          ],
        });
    });*/
  },
  methods: {
    showModal: () => {
      $("#modalClient").modal("show");
    },
    showToast: () => {
      $("#modalClient").modal("hide");
      fetch("/service/notify")
        .then(() => {
          $("#toast_rdv").toast("show");
        })
        .catch((err) => console.log(err));
    },
  },
};
</script>