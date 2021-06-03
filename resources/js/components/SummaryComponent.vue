<template>
  <div class="group flex flex-row bg-white rounded-md shadow-sm">
    <div :class="this.colorClass" class="text-xl p-5 w-20 rounded-l-md">
      <i
        :class="icon"
        class="fa fa-thumbs-o-up fa-2x text-white m-auto"
        aria-hidden="true"
      ></i>
    </div>
    <div class="p-3 text-lg uppercase">
      <div class="flex flex-col items-start">
        <h2 class="uppercase">{{ title }}</h2>
        <p class="font-semibold m-0">{{ likes }}</p>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["title", "color", "icon", "link"],
  data() {
    return {
      likes: 0,
    };
  },
  mounted() {
    let uri = this.link;
    axios
      .get(uri)
      .then((response) => {
        this.likes = response.data.summary;
      })
      .catch((error) => {
        console.log(error);
        this.errored = true;
      });
  },
  computed: {
    colorClass() {
      return "bg-" + this.color + "-500 group-hover:bg-" + this.color + "-700";
    },
  },
};
</script>
