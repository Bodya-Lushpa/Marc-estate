<template>
  <div>
    <news></news>

    <clientSection></clientSection>
  </div>
</template>




<script>
import clientSection from "../ClientsSection.vue";
import news from "../news/News.vue";

export default {
  components: {
    clientSection,
    news,
  },
  data() {
    return {};
  },
};
</script>