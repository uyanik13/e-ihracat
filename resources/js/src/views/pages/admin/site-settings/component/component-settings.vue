<template>
  <vs-tabs :position="isSmallerScreen ? 'top' : 'top'" class="tabs-shadow-none" id="profile-tabs" :key="isSmallerScreen">

    <!-- GENERAL -->
    <vs-tab icon-pack="feather" icon="icon-user" :label="!isSmallerScreen ? $t('general') : ''">
      <div class="tab-general md:ml-4 md:mt-10 mt-4 ml-0">
        <general />
      </div>
    </vs-tab>

    <vs-tab icon-pack="feather" icon="flag" :label="!isSmallerScreen ? $t('HomePage') : ''">
      <div class="tab-change-pwd md:ml-4 md:mt-10 mt-4 ml-0">
        <home-page />
      </div>
    </vs-tab>

      <vs-tab icon-pack="feather" icon="flag" :label="!isSmallerScreen ? $t('AboutUs') : ''">
          <div class="tab-change-pwd md:ml-4 md:mt-10 mt-4 ml-0">
              <about-us />
          </div>
      </vs-tab>

      <vs-tab icon-pack="feather" icon="flag" :label="!isSmallerScreen ? $t('References') : ''">
          <div class="tab-change-pwd md:ml-4 md:mt-10 mt-4 ml-0">
              <References />
          </div>
      </vs-tab>

      <vs-tab icon-pack="feather" icon="flag" :label="!isSmallerScreen ? $t('Faq') : ''">
          <div class="tab-change-pwd md:ml-4 md:mt-10 mt-4 ml-0">
              <Faq />
          </div>
      </vs-tab>

  </vs-tabs>

</template>

<script>
import General from "./General.vue"
import VideoGallery from "./Video-Gallery"
import HomePage from "./HomePage"
import AboutUs from "./AboutUs"
import Bayiler from "./Bayiler"
import References from "./References"
import Faq from "./Faq"

export default {
  components: {
    VideoGallery,
    General,
    HomePage,
    Bayiler,
      AboutUs,
      References,
      Faq,
  },
  data() {
    return {


    }
  },
  computed: {
    isSmallerScreen() {
      return this.$store.state.windowWidth < 768
    }
  }
}
</script>

<style lang="scss">
#profile-tabs {
  .vs-tabs--content {
    padding: 0;
  }
}
</style>
