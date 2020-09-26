<template>
  <div class="vx-col w-full md:w-12/12 mb-base">
      <vs-tabs position="left" color="danger">
        <vs-tab label="Anasayfa Menu Alti Slider" >
            <vs-input :label="'Yönetim Kurulu Üyelerimiz Title'"  v-model="title" class="mt-5 w-full"  />
          <vx-card no-shadow v-for="(option,index)  in AboutUSMembers" :key="index">
            <div  class="vx-col  w-full md:w-12/12 mb-base">

              <vs-input :label="'Name'"  v-model="option.name" class="mt-5 w-full"  />
              <vs-input :label="'Position'"  v-model="option.position" class="mt-5 w-full"  />
              <vs-input :label="'Image Url'"  v-model="option.image" class="mt-5 w-full"  />
              <vs-input :label="'Linkedin Link'"  v-model="option.url" class="mt-5 w-full"  />
              <vs-button class="bg-danger" @click="removeThis(index,'AboutUSMembers')" >{{$t('RemoveThis')}}</vs-button>
            </div>
            <vs-divider></vs-divider>
          </vx-card>
          <vs-button class="mr-6" @click="addOptions('AboutUSMembers')" >{{$t('AddNew')}}</vs-button>
          <div class="flex flex-wrap items-center justify-end">
            <vs-button class="ml-auto mt-2" @click="SaveData('AboutUSMembers')">{{$t('save')}}</vs-button>
          </div>
        </vs-tab>

      </vs-tabs>
  </div>

</template>

<script>
import flatPickr from 'vue-flatpickr-component'
import 'flatpickr/dist/flatpickr.css'
import vSelect from 'vue-select'


export default {
  components: {
    flatPickr,
    vSelect
  },

  data () {
    return {
        title: '',
        AboutUSMembers:
      [
        {
            name: '',
          position: '',
          image: '',
          url: ''
        }
      ],



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
          if (element.type === 'AboutUSMembers') {
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
