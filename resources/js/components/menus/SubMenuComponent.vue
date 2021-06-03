<template>
  <div>
    <li class="text-gray-500 hover:text-green-400">
      {{ title }}
    </li>
  </div>
</template>,
<script>
export default {
  props: ["title", "link"],
};
</script>
