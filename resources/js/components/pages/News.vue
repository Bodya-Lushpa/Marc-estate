<template>
  <div>
		<FilterProjects class="d-none d-md-block"></FilterProjects>

    <news></news>

    <clientSection></clientSection>

    <FilterProjectsModal
      @sort="changeSort"
      class="d-md-none notSort"
    ></FilterProjectsModal>
  </div>
</template>




<script>
import clientSection from "../ClientsSection.vue";
import news from "../news/News.vue";
const FilterProjects = () => import("../widgets/FilterProjects.vue");
const FilterProjectsModal = () => import("../modal/FilterProjects.vue");

export default {
  components: {
    clientSection,
    news,
    FilterProjects,
    FilterProjectsModal,
  },
  data() {
    return {};
  },
};
</script>