(window.webpackJsonp=window.webpackJsonp||[]).push([[19],{125:function(t,e,i){"use strict";(function(t){var n=i(409),o=i(25),a=i.n(o),c=i(2);e.a={components:{PopupBackground:n.a},data:function(){return{site_url:t.env.MIX_APP_URL}},computed:{isSmallerScreen:function(){return this.$store.state.windowWidth<768},List:function(){return this.$store.state.gallery.galleryList}},methods:{closeCardAnimationDemo:function(t){t.removeRefreshAnimation(3e3)},copySlug:function(){this.$vs.notify({title:"Başarılı",text:"Link Kopyalandı",color:"success",iconPack:"feather",position:"top-center",icon:"icon-check-circle"})},deleteData:function(t){var e=this;a.a.fire({type:"warning",title:c.a.t("areYouSureToDeleteThis"),text:c.a.t("areYouSureToDeleteData"),showCancelButton:!0,reverseButtons:!0,confirmButtonText:c.a.t("ok"),cancelButtonText:c.a.t("cancel")}).then((function(i){i.value&&(console.log(i),e.$store.dispatch("gallery/removeItem",t).then((function(t){e.$vs.notify({title:"Başarılı",text:"içerik silindi",iconPack:"feather",icon:"icon-success",color:"success"})})).catch((function(t){e.$vs.notify({title:"Hata",text:"İçerik Silinemedi.",iconPack:"feather",icon:"icon-alert-circle",color:"danger"})})))})).catch((function(t){console.log("ERROR:",t)}))}},created:function(){this.$store.dispatch("gallery/fetchItems")}}}).call(this,i(90))},126:function(t,e,i){var n=i(463);"string"==typeof n&&(n=[[t.i,n,""]]);var o={hmr:!0,transform:void 0,insertInto:void 0};i(9)(n,o);n.locals&&(t.exports=n.locals)},409:function(t,e,i){"use strict";var n={props:{File:{type:Object,required:!0}},data:function(){return{shopierData:null,normalPrice:!0,price:49.99,plan_name:"İşletme Paketi",colorx:"#ffffff",popupActive:!1}},computed:{validateForm:function(){return!this.errors.any()&&this.price>=49}},methods:{submitData:function(){var t=this;if(this.validateForm){var e={price:this.price,plan_name:this.plan_name};this.$store.dispatch("user/createPayment",e).then((function(e){t.$vs.notify({title:"Başarılı",text:"Şimdi Güvenli Ödeme Yapabilirsiniz.",iconPack:"feather",icon:"icon-info",color:"success"}),console.log("SHOPIER RESPONSE",e),t.shopierData=e.data})).catch((function(e){t.$vs.notify({title:"Error",text:e.message,iconPack:"feather",icon:"icon-alert-circle",color:"danger"})}))}}}},o=i(0),a=Object(o.a)(n,(function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"align-content-center"},[i("vs-button",{attrs:{color:"primary",type:"filled","icon-pack":"feather",icon:"icon-eye"},on:{click:function(e){t.popupActive=!0}}}),t._v(" "),i("vs-popup",{staticClass:"bg-primary-gradient",attrs:{"background-color":"rgba(152,152,152,.7)","background-color-popup":t.colorx,fullscreen:"",title:t.File.file_name,active:t.popupActive},on:{"update:active":function(e){t.popupActive=e}}},[i("img",{staticClass:"fullscreen ",attrs:{src:t.File.slug,alt:"content-img"}})])],1)}),[],!1,null,null,null);e.a=a.exports},462:function(t,e,i){"use strict";var n=i(126);i.n(n).a},463:function(t,e,i){(t.exports=i(8)(!1)).push([t.i,"[dir] #profile-tabs .vs-tabs--content[data-v-0c0468ec]{padding:0}",""])},644:function(t,e,i){"use strict";i.r(e);var n=i(125).a,o=(i(462),i(0)),a=Object(o.a)(n,(function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"vx-row"},t._l(t.List,(function(e,n){return i("div",{key:n,staticClass:"vx-col w-full lg:w-1/4"},[i("vx-card",{staticClass:"overlay-card overflow-hidden mb-5"},[i("template",{slot:"no-body"},[i("img",{staticClass:"responsive h-64",attrs:{src:"png"===e.type||"jpeg"===e.type||"jpg"===e.type?e.slug:"/images/site_settings/file.png"}}),t._v(" "),i("div",{staticClass:"card-overlay text-white flex flex-col justify-between"},[i("div",{staticClass:"flex justify-between flex-wrap"},[i("popup-background",{directives:[{name:"show",rawName:"v-show",value:"png"===e.type||"jpeg"===e.type||"jpg"===e.type,expression:"file.type === 'png' || file.type === 'jpeg' || file.type === 'jpg'"}],attrs:{File:e}}),t._v(" "),i("vs-button",{directives:[{name:"clipboard",rawName:"v-clipboard:copy",value:e.slug,expression:"file.slug",arg:"copy"},{name:"clipboard",rawName:"v-clipboard:success",value:t.copySlug,expression:"copySlug",arg:"success"}],attrs:{color:"warning",type:"filled","icon-pack":"feather",icon:"icon-copy"}}),t._v(" "),i("vs-button",{attrs:{color:"danger",type:"filled","icon-pack":"feather",icon:"icon-trash"},on:{click:function(i){return i.stopPropagation(),t.deleteData(e.id)}}})],1)])])],2)],1)})),0)}),[],!1,null,"0c0468ec",null);e.default=a.exports}}]);