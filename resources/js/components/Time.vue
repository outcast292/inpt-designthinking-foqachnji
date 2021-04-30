<template>
  <h2>{{ time }}</h2>
</template>


<script>
export default {
  data() {
    return {
      interval: null,
      time: "",
    };
  },
  mounted() {
    var moment = require("moment");
    this.interval = setInterval(() => {
      this.time = moment().format("hh:mm:ss");
    }, 1000);
    this.time = moment().format("hh:mm:ss");
  },
};
</script>