<template>
  <div class="relative md:rounded-md bg-white p-5">
    <h1 class="text-2xl font-bold">{{ title }}</h1>
    <div class="relative pt-7">
      <canvas id="myPieChart" ref="chart"></canvas>
    </div>
  </div>
</template>
<script>
export default {
  props: ["title", "link"],
  mounted() {
    let uri = "https://seriti.test/" + this.link;
    axios
      .get(uri)
      .then((response) => {
        var chart = this.$refs.chart;
        var ctx = chart.getContext("2d");
        var myChart = new Chart(ctx, {
          type: "pie",
          data: {
            labels: response.data.labels,
            datasets: [
              {
                data: response.data.data,
                borderWidth: 1,
                backgroundColor: ["#019587", "#c5393c"],
              },
            ],
          },
          options: {
            legend: {
              display: false,
            },
            responsive: true,
            plugins: {
              legend: {
                position: "top",
              },
              title: {
                display: true,
                text: "Chart.js Pie Chart",
              },
            },
          },
        });
      })
      .catch((error) => {
        console.log(error);
        this.errored = true;
      });
  },
};
</script>
