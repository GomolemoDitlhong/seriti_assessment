<template>
  <div class="relative md:rounded-md bg-white p-5">
    <h1 class="text-2xl font-bold">{{ title }}</h1>
    <div class="relative pt-7">
      <canvas id="myLineChart" ref="chart"></canvas>
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
          type: "line",
          data: {
            labels: response.data.month,
            datasets: [
              {
                label: "Item 1",

                data: response.data.data2,
                borderColor: "#95b9cc",
                backgroundColor: "rgba(227, 236, 239,0.6)",
                borderWidth: 1.5,
                pointBorderColor: "#95b9cc",
                pointBackgroundColor: "#95b9cc",
              },
              {
                label: "Item 2",
                data: response.data.data1,
                borderColor: "#dbdbdb",
                backgroundColor: "rgba(248, 248, 248, 0.6)",
                borderWidth: 1.5,
                pointBorderColor: "#dbdbdb",
                pointBackgroundColor: "#dbdbdb",
              },
            ],
          },
          options: {
            legend: {
              display: false,
            },
            elements: {
              line: {
                borderWidth: 3,
              },
            },
            responsive: true,
            interaction: {
              mode: "index",
              intersect: false,
            },
            stacked: false,
            scales: {
              y: {
                type: "linear",
                beginAtZero: true,
                display: true,
                position: "left",
              },
              y1: {
                type: "linear",
                display: true,
                position: "right",

                // grid line settings
                grid: {
                  drawOnChartArea: false, // only want the grid lines for one axis to show up
                },
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
