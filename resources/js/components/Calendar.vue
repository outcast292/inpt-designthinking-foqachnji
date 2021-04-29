<template>
  <div class="col-12">
    <table class="table table-bordered dark">
      <thead>
        <th></th>
        <th>8-9</th>
        <th>9-10</th>
        <th>10-11</th>
        <th>11-12</th>
        <th class="bg-dark"></th>
        <th>2-3</th>
        <th>3-4</th>
        <th>4-5</th>
        <th>5-6</th>
      </thead>
      <tbody>
        <tr v-for="date in dates" v-bind:key="date.day">
          <th>{{ date.day }}</th>
          <td
            v-for="(rdv, index) in date.rdvs"
            v-bind:key="index"
            :class="{ 'bg-danger': rdv, 'bg-dark': rdv === '' }"
          ></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>


<script>
export default {
  data() {
    var moment = require("moment"); // require
    moment.locale("fr");
    return {
      today: moment().startOf("isoWeek"),
      end_of_week: moment().endOf("isoWeek").add(-1, "day"),
      dates: [],
    };
  },
  beforeMount() {
    var moment = require("moment"); // require

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
    });
  },
};
</script>