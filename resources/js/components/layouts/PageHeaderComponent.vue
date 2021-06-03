<template>
  <div>
    <div class="bg-white grid grid-cols-2 p-5">
      <div>
        <div class="text-2xl text-black">
          <h1>
            <i class="fa fa-tachometer mr-2" aria-hidden="true"></i> {{ title }}
          </h1>
        </div>
        <p class="text-base italic">{{ subTitle }}</p>
      </div>

      <div class="flex items-end my-auto flex-col">
        <div class="text-base">
          <i class="fa fa-home mr-1" aria-hidden="true"></i> /
          <a class="text-green-500 hover:text-green-800 ml-1" href="dashboard"
            >Dashboard</a
          >
        </div>
      </div>
    </div>
  </div>
</template>,
<script>
export default {
  props: ["title", "subTitle"],
};
</script>
