<template>
  <select>
    <slot />
  </select>
</template>

<script>
export default {
  props: ["value"],
  data() {
    return {
      projects: [],
    };
  },
  mounted: function () {
    const emit = (value) => this.$emit("input", value);
    $(this.$el).selectmenu({
      change: function (event, data) {
        emit(data.item.value);
      },
    });
  },
  updated: function () {
    $("select").selectmenu("refresh");
  },
  watch: {},
};
</script>