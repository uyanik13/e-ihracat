<template>


      <vs-tabs position="left" color="danger">
        <vs-tab :label="$t('homepageSliderArea')" class="mb-5 ml-5 mt-5 sm:w-11/12">

                <vx-card v-for="(option,index)  in HomeUnderMenuSlider" :key="index" class="mb-5 ml-2 mr-5 mt-5" >
                    <div class="vx-row">
                        <div class="vx-col sm:w-1/2 lg:w-1/1 mb-2">
                             <vs-input :label="'H1 Aciklama'"  v-model="option.h1" class="mt-5 w-full"  />
                        </div>
                        <div class="vx-col sm:w-1/2 lg:w-1/1 mb-2">
                           <vs-input :label="'H2 Aciklama'"  v-model="option.h2" class="mt-5 w-full"  />
                        </div>
                        <div class="vx-col sm:w-1/2 lg:w-1/1 mb-2">
                            <vs-input :label="'Video Url'"  v-model="option.video" class="mt-5 w-full"  />
                        </div>
                        <div class="vx-col sm:w-1/2 lg:w-1/1 mb-2">
                             <vs-input :label="'Button Url'"  v-model="option.url" class="mt-5 w-full"  />
                        </div>
                        <div class="flex flex-wrap items-center mb-base ml-3 mt-2">
                          <img v-if="!option.image" src="@assets/images/place-holders/slider-to-here.png"   height="480px"  width="720px" class="card-img-top" />
                          <img v-else :src="option.image"   height="480px"  width="720px" class="card-img-top" />
                        <div>
                            <input type="file"  class="hidden" :ref="'sliderImage'+index" @change="sliderUpload($event,index,'HomeUnderMenuSlider')" accept="image/*">
                            <vs-button class="ml-3 sm:mb-0 mb-2" @click="openFileInput('sliderImage'+index)">{{$t('addSlider')}}</vs-button>
                        </div>
                        </div>
                    </div>
                    <vs-button class="bg-danger mt-3" @click="removeThis(index,'HomeUnderMenuSlider')" >{{$t('removeThisSLider')}}</vs-button>
                </vx-card>

                <vs-button class="mr-6" @click="addOptions('HomeUnderMenuSlider')" >{{$t('AddNew')}}</vs-button>
                <div class="flex flex-wrap items-center justify-end">
                    <vs-button class="ml-auto mt-2" @click="SaveData('HomeUnderMenuSlider')">{{$t('save')}}</vs-button>
                </div>





        </vs-tab>


        <vs-tab :label="$t('homepageaboutArea')" class="mb-5 ml-5 mt-5 sm:w-11/12" >
          <vx-card  >
               <div class="flex flex-wrap items-center mb-5 mt-5 ml-5 h-full">
                      <span>{{$t('Content')}}</span>
                      <quill-editor v-model="about.homePageDesc" :label="$t('Content')" height="600" />
                      <span class="text-danger text-sm" v-show="errors.has('Content')">{{ errors.first('Content') ? $t('Content') : ''}}</span>
                    </div>
          </vx-card>
            <vs-input :label="'Hizmet Kataloğu Linki (ex = https://google.com)'"  v-model="about.url" class="mt-5 w-full"  />
           <vs-button class="ml-auto mt-2" @click="SaveData('about')">{{$t('save')}}</vs-button>
        </vs-tab>


        <!-- <vs-tab label="Hizli Randevu Hizmet Listesi" class="mb-5 ml-5 mt-5 sm:w-11/12">
          <vx-card no-shadow v-for="(option,index)  in QuickServiceList" :key="index" class="mb-5 mt-5 ">
            <div  class="vx-col  w-full md:w-12/12 mb-base">
              <vs-input :label="'Hizmet Adi'"  v-model="option.key" class="mt-5 w-full"   v-validate="'required| min:3'"/>
              <vs-button class="bg-danger mt-5" @click="removeThis(index,'QuickServiceList')" >{{$t('RemoveThis')}}</vs-button>
            </div>
            <vs-divider></vs-divider>
          </vx-card>
          <vs-button class="mr-6 mt-5" @click="addOptions('QuickServiceList')" >{{$t('AddNew')}}</vs-button>
          <div class="flex flex-wrap items-center justify-end">
            <vs-button class="ml-auto mt-2" @click="SaveData('QuickServiceList')">{{$t('save')}}</vs-button>
          </div>
        </vs-tab> -->


        <vs-tab :label="$t('statisticAreaNumbers')" class="mb-5 ml-5 mt-5 sm:w-11/12">
          <vx-card >
              <vs-input :label="'Toplam Uyeler'"  v-model="fourBox.allusers" class="mt-5 w-full"  />
                 <vs-divider></vs-divider>
              <vs-input :label="'Toplam Imalatcı'"  v-model="fourBox.providers" class="mt-5 w-full"  />
                 <vs-divider></vs-divider>
              <vs-input :label="'Istihdam'"  v-model="fourBox.employments" class="mt-5 w-full"  />
              <vs-input :label="'E-ticaret Hacmi'"  v-model="fourBox.exportvolume" class="mt-5 w-full"  />
               <div class="flex flex-wrap items-center justify-end">
                <vs-button class="ml-auto mt-2" @click="SaveData('fourBox')">{{$t('save')}}</vs-button>
          </div>
          </vx-card>
        </vs-tab>

      </vs-tabs>


</template>

<script>
import flatPickr from 'vue-flatpickr-component'
import 'flatpickr/dist/flatpickr.css'
import vSelect from 'vue-select'

import 'quill/dist/quill.core.css'
import 'quill/dist/quill.snow.css'
import 'quill/dist/quill.bubble.css'
import { quillEditor } from 'vue-quill-editor'

export default {
  components: {
    flatPickr,
    quillEditor,
    vSelect
  },

  data () {
    return {
      HomeUnderMenuSlider:
      [
        {
          h1: 'Slider Basligi',
          h2: 'Slider Aciklamasi',
          video: 'Youtube Video Url',
          image: 'https://via.placeholder.com/500.png',
          url: 'Button URL'
        }
      ],
      QuickServiceList:
      [
        {
          key: '',
        }
      ],
      fourBox :
        {
          allusers: '',
          providers: '',
          employments: '',
          exportvolume: ''
        },


        about:{ homePageDesc : '', url:''}
    }
  },
  methods:{
    addOptions (type) {
      this[type].push({})
    },
    removeThis (index, type) {
      this[type].splice(index, 1)
    },
    SaveData (dataType) {
      const obj = {
        [dataType]: this[dataType],
        type: dataType
      }
      console.log(obj)
      this.$store.dispatch('custom/addItem', obj).then((response) => {
        this.$vs.notify({
          title: 'Başarılı',
          text:' İçerik Başarıyla Eklendi',
          iconPack: 'feather',
          icon: 'icon-success',
          color: 'success'
        })

      }).catch(error => {
        this.$vs.notify({
          title: 'Hata',
          text: 'İçerik Eklenemedi.',
          iconPack: 'feather',
          icon: 'icon-alert-circle',
          color: 'danger'
        })
      })
    },

    sliderUpload (input,index,type) {
        //console.log(input.target.files[0])
      if (input.target.files && input.target.files[0]) {
        const reader = new FileReader()
        reader.onload = e => {
         return this[type][index].image = e.target.result
        }
        reader.readAsDataURL(input.target.files[0])
      }
    },
    openFileInput (type) {
      return this.$refs[type][0].click()
    }

  },
  computed: {
    activeUserInfo () {
      return this.$store.state.AppActiveUser
    }
  },
  created () {
    this.$store.dispatch('custom/fetchItems')
      .then((response) => {
        response.data.forEach(element => {
          if (element.type === 'HomeUnderMenuSlider') {
            this[element.type].push(JSON.parse(element.JsonData)[element.type])
            this[element.type].splice(0, 1)
            this[element.type] = this[element.type][0]
          } else {
            this[element.type] = JSON.parse(element.JsonData)[element.type]
          }

        })

      })
      .catch((error) => { console.log(error) })

  }
}
</script>
