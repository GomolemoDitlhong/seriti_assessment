<template>
  <div class="relative pt-7">
        <div class="group flex flex-row bg-white rounded-md shadow-sm">
            <div class="text-xl bg-blue-500 group-hover:bg-blue-700 p-5 w-20 rounded-l-md">
                <i class="fa fa-thumbs-o-up fa-2x text-white  m-auto" aria-hidden="true"></i>
            </div>
            <div class="p-3 text-lg uppercase">
              <div class="flex flex-col items-center">
                <h2 class="uppercase">likes</h2>
                <p>{{ likes }}</p>
              </div>
            </div>
        </div>
  </div>
</template>
<script>
export default {
    data() {
        return {
            likes : 0,
        }
    },
  mounted() {
    let uri = "https://seriti.test/dummy-data-likes";
    axios
      .get(uri)
      .then((response) => {
                this.likes = response.data.likes;
      })
      .catch((error) => {
        console.log(error);
        this.errored = true;
      });
  },
};
</script>
