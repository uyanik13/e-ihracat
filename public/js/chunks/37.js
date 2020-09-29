(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[37],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/front-end-js/components/BenimTemsilcimDetayi.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/front-end-js/components/BenimTemsilcimDetayi.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_core_js_promise__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/core-js/promise */ "./node_modules/@babel/runtime/core-js/promise.js");
/* harmony import */ var _babel_runtime_core_js_promise__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_core_js_promise__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_1__);

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  components: {},
  data: function data() {
    return {
      representers: [],
      country_detail: []
    };
  },
  computed: {},
  methods: {
    fetchCodeDetails: function fetchCodeDetails() {
      var _this = this;

      return new _babel_runtime_core_js_promise__WEBPACK_IMPORTED_MODULE_0___default.a(function (resolve, reject) {
        axios__WEBPACK_IMPORTED_MODULE_1___default.a.get("https://api.ihracatradari.com/comtrade/getcontacts?c=".concat(_this.$route.query.country)).then(function (response) {
          console.log(response.data);
          _this.representers = response.data;
          resolve(response);
        }).catch(function (error) {
          reject(error);
        });
      });
    },
    fetchCountryDetail: function fetchCountryDetail() {
      var _this2 = this;

      return new _babel_runtime_core_js_promise__WEBPACK_IMPORTED_MODULE_0___default.a(function (resolve, reject) {
        axios__WEBPACK_IMPORTED_MODULE_1___default.a.get("https://api.ihracatradari.com/comtrade/getcountry?countryName=".concat(_this2.$route.query.country)).then(function (response) {
          console.log(response.data);
          _this2.country_detail = response.data;
          resolve(response);
        }).catch(function (error) {
          reject(error);
        });
      });
    }
  },
  created: function created() {
    this.fetchCodeDetails();
    this.fetchCountryDetail();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/front-end-js/components/BenimTemsilcimDetayi.vue?vue&type=template&id=9ef36986&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/front-end-js/components/BenimTemsilcimDetayi.vue?vue&type=template&id=9ef36986& ***!
  \*********************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "exportRepresentiveInfos" },
    [
      _c("div", { staticClass: "blockHeader" }, [
        _c("h1", [
          _vm._v("\n            " + _vm._s(_vm.country_detail.nameTr) + " "),
          _c("br"),
          _vm._v(" "),
          _c("small", [_vm._v("Ülke Temsilcileri")])
        ])
      ]),
      _vm._v(" "),
      _vm._l(_vm.representers, function(representer, index) {
        return _c("div", { key: index, staticClass: "representiveArea" }, [
          _c("div", { staticClass: "representiveCard" }, [
            _c("div", { staticClass: "representiveHeader" }, [
              _c("h4", [_vm._v(_vm._s(representer.name))]),
              _vm._v(" "),
              _c("div", { staticClass: "representiveTitle" }, [
                _vm._v(
                  "\n                    " +
                    _vm._s(representer.jobTitle) +
                    "\n                "
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "representiveCompany" }, [
                _vm._v(
                  "\n                    " +
                    _vm._s(representer.address.company) +
                    "\n                "
                )
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "representiveContact" }, [
              _c("ul", [
                _c("li", [
                  _c("span", [_vm._v("Adres:")]),
                  _vm._v(
                    "\n                        " +
                      _vm._s(representer.address.street) +
                      "\n                        "
                  ),
                  _vm._m(0, true)
                ]),
                _vm._v(" "),
                _c(
                  "li",
                  [
                    _c("span", [_vm._v("Telefon:")]),
                    _vm._v(" "),
                    _vm._l(representer.phones, function(phone, index) {
                      return _c("p", { key: index }, [
                        _vm._v(
                          "\n                            " +
                            _vm._s(phone) +
                            ",\n                        "
                        )
                      ])
                    }),
                    _vm._v(" "),
                    _vm._m(1, true)
                  ],
                  2
                ),
                _vm._v(" "),
                _c(
                  "li",
                  [
                    _c("span", [_vm._v("Faks:")]),
                    _vm._v(" "),
                    _vm._l(representer.faxes, function(fax, index) {
                      return _c("p", { key: index }, [
                        _vm._v(
                          "\n                            " +
                            _vm._s(fax) +
                            ",\n                        "
                        )
                      ])
                    })
                  ],
                  2
                ),
                _vm._v(" "),
                _c(
                  "li",
                  [
                    _c("span", [_vm._v("E-Posta:")]),
                    _vm._v(" "),
                    _vm._l(representer.emails, function(email, index) {
                      return _c("p", { key: index }, [
                        _vm._v(
                          "\n                            " +
                            _vm._s(email) +
                            ",\n                        "
                        )
                      ])
                    }),
                    _vm._v(" "),
                    _vm._m(2, true)
                  ],
                  2
                ),
                _vm._v(" "),
                _c("li", [
                  _c("span", [_vm._v("Web Site:")]),
                  _vm._v(
                    "\n                        " +
                      _vm._s(representer.address.webSite) +
                      "\n                        "
                  ),
                  _vm._m(3, true)
                ])
              ])
            ])
          ])
        ])
      })
    ],
    2
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("a", { staticClass: "rightIcon", attrs: { href: "#" } }, [
      _c("i", { staticClass: "fa fa-map-marker" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("a", { staticClass: "rightIcon", attrs: { href: "#" } }, [
      _c("i", { staticClass: "fa fa-phone" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("a", { staticClass: "rightIcon", attrs: { href: "#" } }, [
      _c("i", { staticClass: "fa fa-envelope" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("a", { staticClass: "rightIcon", attrs: { href: "#" } }, [
      _c("i", { staticClass: "fa fa-link" })
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/front-end-js/components/BenimTemsilcimDetayi.vue":
/*!********************************************************************!*\
  !*** ./resources/front-end-js/components/BenimTemsilcimDetayi.vue ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _BenimTemsilcimDetayi_vue_vue_type_template_id_9ef36986___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./BenimTemsilcimDetayi.vue?vue&type=template&id=9ef36986& */ "./resources/front-end-js/components/BenimTemsilcimDetayi.vue?vue&type=template&id=9ef36986&");
/* harmony import */ var _BenimTemsilcimDetayi_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BenimTemsilcimDetayi.vue?vue&type=script&lang=js& */ "./resources/front-end-js/components/BenimTemsilcimDetayi.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _BenimTemsilcimDetayi_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _BenimTemsilcimDetayi_vue_vue_type_template_id_9ef36986___WEBPACK_IMPORTED_MODULE_0__["render"],
  _BenimTemsilcimDetayi_vue_vue_type_template_id_9ef36986___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/front-end-js/components/BenimTemsilcimDetayi.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/front-end-js/components/BenimTemsilcimDetayi.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************!*\
  !*** ./resources/front-end-js/components/BenimTemsilcimDetayi.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BenimTemsilcimDetayi_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./BenimTemsilcimDetayi.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/front-end-js/components/BenimTemsilcimDetayi.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BenimTemsilcimDetayi_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/front-end-js/components/BenimTemsilcimDetayi.vue?vue&type=template&id=9ef36986&":
/*!***************************************************************************************************!*\
  !*** ./resources/front-end-js/components/BenimTemsilcimDetayi.vue?vue&type=template&id=9ef36986& ***!
  \***************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BenimTemsilcimDetayi_vue_vue_type_template_id_9ef36986___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./BenimTemsilcimDetayi.vue?vue&type=template&id=9ef36986& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/front-end-js/components/BenimTemsilcimDetayi.vue?vue&type=template&id=9ef36986&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BenimTemsilcimDetayi_vue_vue_type_template_id_9ef36986___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BenimTemsilcimDetayi_vue_vue_type_template_id_9ef36986___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);