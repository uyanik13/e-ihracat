<template>
  <div class="vx-col w-full md:w-12/12 mb-base">
      <vs-tabs position="left" color="danger">
        <vs-tab label="Anasayfa Menu Alti Slider" >
          <vx-card no-shadow>
              <div class="flex flex-wrap items-center mb-5 mt-5 h-full">
                  <span>{{$t('Content')}}</span>
                  <quill-editor v-model="AboutUsContent" :label="$t('Content')" height="600" />
                  <span class="text-danger text-sm" v-show="errors.has('Content')">{{ errors.first('Content') ? $t('Content') : ''}}</span>
              </div>
          </vx-card>
          <div class="flex flex-wrap items-center justify-end">
            <vs-button class="ml-auto mt-2" @click="SaveData('AboutUsContent')">{{$t('save')}}</vs-button>
          </div>
        </vs-tab>

      </vs-tabs>
  </div>

</template>

<script>
import flatPickr from 'vue-flatpickr-component'
import 'flatpickr/dist/flatpickr.css'
import vSelect from 'vue-select'
import { quillEditor } from 'vue-quill-editor'

import 'quill/dist/quill.core.css'
import 'quill/dist/quill.snow.css'
import 'quill/dist/quill.bubble.css'



export default {
  components: {
    flatPickr,
      quillEditor,
    vSelect
  },

  data () {
    return {
        AboutUsContent:''
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
