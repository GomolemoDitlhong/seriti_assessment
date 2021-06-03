<template>
  <div>
    <li
      class="text-white transition duration-200 hover:bg-black border-l-4 border-transparent hover:border-green-600 hover:border-1 hover:border-1 hover:text-white block p-3 text-base font-medium list-none"
    >
      <div
        class="grid grid-flow-row grid-cols-3 my-auto cursor-pointer text-white"
      >
        <div class="col-span-2">
          <i class="fa mr-2 my-auto" aria-hidden="true" v-bind:class="icon"></i>
          {{ title }}
        </div>
      </div>
      <ul
        class="ml-4 overflow-hidden dropdown-menu font-normal"
        :class="this.class"
      >
        <slot></slot>
      </ul>
    </li>
  </div>
</template>,
<script>
export default {
  props: ["title", "height", "icon"],
  data() {
    return {
      showMenu: false,
    };
  },

  methods: {},

  computed: {
    class() {
      return this.showMenu ? this.height : "h-0";
    },
  },
};
</script>
