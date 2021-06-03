<template>
    <div>
        <li  class="text-white transition duration-200 hover:bg-black border-l-4 border-transparent hover:border-green-600 hover:border-1 hover:border-1 hover:text-white block p-3 text-base font-medium list-none ">
            <div class="grid grid-flow-row grid-cols-3 my-auto cursor-pointer text-white" @click="toggleShow">
                             <div class="col-span-2">
                            <i
              class="fa mr-2 my-auto"
              aria-hidden="true"
              v-bind:class="icon"
            ></i>{{ title }}
                  </div>
             <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4 ml-auto my-auto"
              :class="{'rotate-90' : showMenu}"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 5l7 7-7 7"
              />
            </svg>
            </div>
            <ul class="ml-6 overflow-hidden dropdown-menu font-normal" :class="this.class">
            <slot></slot>
            </ul>
        </li>
    </div>
</template>,
<script>
export default {

 props: ["title", "link","icon"],
   data() {
    return {
      showMenu: false
    };
  },

  methods: {
    toggleShow() {
      this.showMenu = !this.showMenu;
    }
  },

  computed: {
    class() {
      return this.showMenu ? "h-auto py-3" : "py-0 h-0";
    }
  }
}
</script>
