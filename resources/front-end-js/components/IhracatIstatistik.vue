<template>

		<div class="container">
					<div class="row">

						<div class="cell-6">
							<div class="chartArea">
								<div class="chartHeader">

									<h3>ÜLKENİN DÜNYADAN İTHALATI</h3>
									<div>(Milyar $)</div>
								</div>
								<div class="chartCanvas">
									<e-charts autoresize :options="options" ref="options" theme="ovilia-green" auto-resize />
								</div>
							</div>

						</div>

						<div class="cell-6">
							<div class="chartArea">
								<div class="chartHeader">
									<h3>ÜLKENİN DÜNYADAN İTHALATI</h3>
									<div>(Milyar $)</div>
								</div>
								<div class="chartCanvas">
									<canvas id="myChart2" width="360" height="205"></canvas>
								</div>
							</div>

						</div>
					</div>

					<div class="row">
						<div class="cell-6">
							<div class="chartArea">
								<div class="chartHeader">
									<h3>ÜLKENİN DÜNYADAN İTHALATI</h3>
									<div>(Milyar $)</div>
								</div>
								<div class="chartCanvas">
									<canvas id="myChart3" width="360" height="205"></canvas>
								</div>
							</div>

						</div>

						<div class="cell-6">
							<div class="chartArea">
								<table>
									<thead>
										<tr>
											<th>ÜLKE</th>
											<th>İTHALAT</th>
											<th>BİRİM FİYAT</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Çin</td>
											<td>2,37Milyar $ </td>
											<td>6,42 $/kg</td>
										</tr>
										<tr>
											<td>Meksika</td>
											<td>1,03Milyar $ </td>
											<td>6,38 $/kg</td>
										</tr>
										<tr>
											<td>Çin</td>
											<td>2,37Milyar $ </td>
											<td>6,42 $/kg</td>
										</tr>
										<tr>
											<td>Meksika</td>
											<td>1,03Milyar $ </td>
											<td>6,38 $/kg</td>
										</tr>
										<tr>
											<td>Çin</td>
											<td>2,37Milyar $ </td>
											<td>6,42 $/kg</td>
										</tr>
										<tr>
											<td>Meksika</td>
											<td>1,03Milyar $ </td>
											<td>6,38 $/kg</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
					</div>
				</div>

</template>

<script>
  import axios from 'axios'
import ECharts from 'vue-echarts/components/ECharts'
import 'echarts/lib/component/tooltip'
import 'echarts/lib/component/legend'
import 'echarts/lib/chart/bar'
import theme from './theme.json'

ECharts.registerTheme('blue', theme)

    export default {
        components: {
            ECharts
        },
        data: () => ({
             options: {
            legend: {},
            tooltip: {},
            dataset: {
            // Provide data.
            source: [
                ['Matcha Latte', this.data0turnToChart],
            ]
            },
            // Declare X axis, which is a category axis, mapping
            // to the first column by default.
            xAxis: { type: 'category' },
            // Declare Y axis, which is a value axis.
            yAxis: {},
            // Declare several  series, each of them mapped to a
            // column of the dataset by default.
            series: [{ type: 'bar' }]
             },
            importDetails : [],
            data0 : [],
            data1 : [],
            topImporters : [],

            //new datas

        }),
        computed: {

        },
        methods : {
        getImportDetails() {
          return new Promise((resolve, reject) => {
            axios.get(`https://api.ihracatradari.com/comtrade/getimportdetails?hs=841490&c=${this.$route.query.country}`)
              .then((response) => {
                  //console.log(response.data)
                this.importDetails = response.data
                resolve(response)
              })
              .catch((error) => { reject(error) })
             })
         },
        getData0() {
          return new Promise((resolve, reject) => {
            axios.get(`https://api.ihracatradari.com/comtrade/getchartdata?hs=841490&c=${this.$route.query.country}&t=0`)
              .then((response) => {
                  //console.log(response.data)
                this.data0 = response.data
                this.data0turnToChart =  response.data.map((key ) => parseInt(key['key']))
                resolve(response)
              })
              .catch((error) => { reject(error) })
             })
         },
        getData1() {
          return new Promise((resolve, reject) => {
            axios.get(`https://api.ihracatradari.com/comtrade/getchartdata?hs=841490&c=${this.$route.query.country}&t=1`)
              .then((response) => {
                  //console.log(response.data)
                this.data1 = response.data
                resolve(response)
              })
              .catch((error) => { reject(error) })
             })
         },
        getTopImporters() {
          return new Promise((resolve, reject) => {
            axios.get(`https://api.ihracatradari.com/comtrade/gettopimporters?hs=841490&c=${this.$route.query.country}&t=1`)
              .then((response) => {
                  //console.log(response.data)
                this.topImporters = response.data
                resolve(response)
              })
              .catch((error) => { reject(error) })
             })
         },

        },
        created() {
            this.getImportDetails()
            this.getData0()
            this.getData1()
            this.getTopImporters()

        }
    }
</script>

<style>
#myCountry {
    width: 60%;
}


</style>
