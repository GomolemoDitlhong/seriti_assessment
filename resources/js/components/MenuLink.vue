<template>
  <div clas="group relative my-auto ">
    <li class="realtive nav-item">
      <a
        href="#"
        class="text-white transition duration-200 hover:bg-black border-l-4 border-transparent hover:border-green-600 hover:border-1 hover:border-1 hover:text-white block p-3 text-base font-medium"
        ><div class="grid grid-flow-row grid-cols-3 my-auto">
          <div class="col-span-2">
            <i
              class="fa mr-2 my-auto"
              aria-hidden="true"
              v-bind:class="icon"
            ></i>
            {{ menuLabel }}
          </div>
          <div v-bind:class="showSubMenu" class="my-auto ml-auto">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4"
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
          </div></div
      ></a>

    </li>
       <!--<ul v-bind:class="showSubMenu" class="hidden group-hover:my-auto text-black bg-white m-auto z-20 p-5 nav flex-column">
            <li class="block text-sm h-10 p-5" v-for="(submenu,index) in subMenus" :key="`submenu-${index}`">{{submenu.link}}</li>
        </ul> -->
  </div>
</template>
<script>
export default {
  name: "MenuLink",
  props: {
    menuLabel: {
      type: String,
      required: true,
    },
    hasSubMenu: {
      type: Boolean,
      default: false,
    },
    menuIcon: {
      type: String,
      required: true,
    },
    // subMenus: {
    //   type: Object,
    //   required: false,
    // },
  },
  computed: {
    showSubMenu: function () {
      if (this.hasSubMenu) {
        return { hidden: false };
      } else {
        return { hidden: true };
      }
    },
  },
  data() {
    return {
      icon: this.menuIcon,
    };
  },
  mounted() {},
};
</script>
