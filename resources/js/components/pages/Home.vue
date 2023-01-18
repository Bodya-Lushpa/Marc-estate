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
import mainSlider from "../MainSlider.vue";
import searchProjectsFilterHome from "../widgets/SearchProjectsFilterHome.vue";
import topProjectsHome from "../TopProjectsHome.vue";
import findHomeSection from "../home/FindHomeSection.vue";
import popularPlacesSection from "../home/PopularPlacesSection.vue";
import callToAction from "../home/CallToAction.vue";
import clientSection from "../ClientsSection.vue";
import newsHome from "../NewsHome.vue";

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