<!-- =========================================================================================
    File Name: Login.vue
    Description: Login Page
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
      Author: Pixinvent
    Author URL: https://www.dijitalreklam.org
========================================================================================== -->


<template>
  <div class="h-screen flex w-full bg-img vx-row no-gutter items-center justify-center" id="page-login">
      <vs-tabs style="position: absolute;top:0px;left: 0px;margin-top: 20px;">
          <div class="flex flex-wrap justify-between mb-3">
              <vs-button   href="/">{{$t('&#8592;  Go Home Page')}}</vs-button>
          </div>
      </vs-tabs>
    <div class="vx-col sm:w-1/2 md:w-1/2 lg:w-3/4 xl:w-3/5 sm:m-0 m-4">
      <vx-card>

        <div slot="no-body" class="full-page-bg-color">

          <div class="vx-row no-gutter justify-center items-center">

            <div class="vx-col hidden lg:block lg:w-1/2">

              <img src="@assets/images/pages/giris.png" alt="login" class="mx-auto">
            </div>

            <div class="vx-col sm:w-full md:w-full lg:w-1/2 d-theme-dark-bg">
              <div class="px-8 pt-8 login-tabs-container">

                <div class="vx-card__title mb-4">
                  <h4 class="mb-4">{{$t('Login')}}</h4>
                  <p>{{$t('ForLogin')}}</p>
                </div>

                <vs-tabs>
                  <vs-tab :label="$t('Login')">
                    <login-jwt></login-jwt>
                  </vs-tab>
                </vs-tabs>




              </div>
            </div>
          </div>
        </div>
      </vx-card>
    </div>
  </div>
</template>


<script>
import LoginJwt from "./LoginJWT.vue"


export default {
  components: {
    LoginJwt,
  },

}
</script>

<style lang="scss">
.login-tabs-container {
  min-height: 505px;

  .con-tab {
    padding-bottom: 14px;
  }

  .con-slot-tabs {
    margin-top: 1rem;
  }
}
</style>
