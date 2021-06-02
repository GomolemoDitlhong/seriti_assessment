<template>
  <div class="relative pt-7">
    <canvas ref="chart"></canvas>
  </div>
</template>
<script>
export default {
  mounted() {
    let uri = "https://seriti.test/dummy-data-piechart";
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
