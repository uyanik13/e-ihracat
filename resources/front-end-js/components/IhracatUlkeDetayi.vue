<template>
            <div class="exportDetailsTable">
                <h1>{{country_details.countryName}}</h1>

                <div class="exportCountryRate">
                    <span class="bold">{{country_details.year}}</span> yılı toplam ithalatı
                    <span class="bold"> {{country_details.totalImportValue  }} $</span>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>GTİP</th>
                            <th class="">İTHALAT</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr v-for="(data,index) in country_details.items" :key="index">
                            <td>
                                <a href="#"  @click="goToNextPage">
                                    <span class="gtipNumber">{{data.id}}</span>
                                    <span class="gtipDescription">
                                       {{data.hsCode.gtip2desc}}
                                    </span>
                                </a>
                            </td>
                            <td>
                                <a href="#"  @click="goToNextPage">
                                    <span class="exportValue">{{data.trade}}</span>
                                    <span class="exportCurrency">Milyar $</span>
                                </a>
                            </td>
                        </tr>








                    </tbody>
                </table>
            </div>
</template>

<script>

  import axios from 'axios'

    export default {
        components: {

        },

        data: () => ({
            country_details : [],
        }),
        computed: {

        },
        methods : {
        fetchCountryDetail() {
          return new Promise((resolve, reject) => {
            axios.get(`https://api.ihracatradari.com/comtrade/getcountryimports?hs=&c=${this.$route.query.country}`)
              .then((response) => {
                  console.log(response.data)
                this.country_details = response.data
                resolve(response)
              })
              .catch((error) => { reject(error) })
             })
         },

          goToNextPage() {
             this.$router.push({path: '/ihracat-istatistik', query : { country: this.$route.query.country}});
         }

        },
        created() {
            this.fetchCountryDetail()
        }
    }
</script>


