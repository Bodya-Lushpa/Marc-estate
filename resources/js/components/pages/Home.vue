<template>
  <div>
    <div class="FilterProjectsHome">
      <FilterProjects class="d-none d-md-block"></FilterProjects>
    </div>

    <mainSlider></mainSlider>

    <topProjectsHome></topProjectsHome>

    <findHomeSection></findHomeSection>

    <popularPlacesSection></popularPlacesSection>

    <callToAction></callToAction>

    <clientSection></clientSection>

    <newsHome></newsHome>

    <FilterProjectsModal
      @sort="changeSort"
      class="d-md-none notSort"
    ></FilterProjectsModal>
  </div>
</template>




<script>
const mainSlider = () => import("../MainSlider.vue");
const topProjectsHome = () => import("../TopProjectsHome.vue");
const findHomeSection = () => import("../home/FindHomeSection.vue");
const popularPlacesSection = () => import("../home/PopularPlacesSection.vue");
const callToAction = () => import("../home/CallToAction.vue");
const clientSection = () => import("../ClientsSection.vue");
const newsHome = () => import("../NewsHome.vue");
const FilterProjects = () => import("../widgets/FilterProjects.vue");
const FilterProjectsModal = () => import("../modal/FilterProjects.vue");

export default {
  components: {
    mainSlider,
    topProjectsHome,
    findHomeSection,
    popularPlacesSection,
    callToAction,
    clientSection,
    newsHome,
    FilterProjects,
    FilterProjectsModal,
  },
  data() {
    return {};
  },
};
</script>