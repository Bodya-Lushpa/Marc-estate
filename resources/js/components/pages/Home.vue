<template>
  <div>
    <mainSlider></mainSlider>

    <searchProjectsFilterHome></searchProjectsFilterHome>

    <topProjectsHome></topProjectsHome>

    <findHomeSection></findHomeSection>

    <popularPlacesSection></popularPlacesSection>

    <callToAction></callToAction>

    <clientSection></clientSection>

    <newsHome></newsHome>
  </div>
</template>




<script>
const mainSlider = () => import("../MainSlider.vue");
const searchProjectsFilterHome = () =>
  import("../widgets/SearchProjectsFilterHome.vue");
const topProjectsHome = () => import("../TopProjectsHome.vue");
const findHomeSection = () => import("../home/FindHomeSection.vue");
const popularPlacesSection = () => import("../home/PopularPlacesSection.vue");
const callToAction = () => import("../home/CallToAction.vue");
const clientSection = () => import("../ClientsSection.vue");
const newsHome = () => import("../NewsHome.vue");

export default {
  components: {
    mainSlider,
    searchProjectsFilterHome,
    topProjectsHome,
    findHomeSection,
    popularPlacesSection,
    callToAction,
    clientSection,
    newsHome,
  },
  data() {
    return {};
  },
};
</script>