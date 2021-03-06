(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[10],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/items/Edit.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/items/Edit.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
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
  props: {
    csrfToken: String,
    store: Object,
    item: Object,
    errors: Object
  },
  data: function data() {
    return {
      file: null
    };
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/items/Edit.vue?vue&type=template&id=3aec167c&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/items/Edit.vue?vue&type=template&id=3aec167c&scoped=true& ***!
  \********************************************************************************************************************************************************************************************************************/
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
  return _c("div", { staticClass: "container" }, [
    _c("div", { staticClass: "columns" }, [
      _c("div", { staticClass: "column is-one-third is-offset-one-third" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-content" }, [
            _c("h1", { staticClass: "title" }, [
              _vm._v(" Edit item information ")
            ]),
            _vm._v(" "),
            _c("nav", { staticClass: "level" }, [
              _c("div", { staticClass: "level-item has-text-centered" }, [
                _c("figure", { staticClass: "image is-128x128" }, [
                  _c("img", {
                    staticClass: "is-rounded",
                    attrs: { src: _vm.item.image.url }
                  })
                ])
              ])
            ]),
            _vm._v(" "),
            _c(
              "form",
              {
                attrs: {
                  action: _vm.route("stores.items.update", [
                    _vm.store.id,
                    _vm.item.id
                  ]),
                  method: "post",
                  role: "form",
                  enctype: "multipart/form-data"
                }
              },
              [
                _c("input", {
                  attrs: { type: "hidden", name: "_token" },
                  domProps: { value: _vm.csrfToken }
                }),
                _vm._v(" "),
                _c("input", {
                  attrs: { type: "hidden", name: "_method", value: "PUT" }
                }),
                _vm._v(" "),
                _c(
                  "b-field",
                  {
                    attrs: {
                      label: "Name",
                      type: _vm.errors.name ? "is-danger" : "",
                      message: _vm.errors.name ? _vm.errors.name[0] : ""
                    }
                  },
                  [
                    _c("b-input", {
                      attrs: { name: "name", "icon-pack": "fas", icon: "item" },
                      model: {
                        value: _vm.item.name,
                        callback: function($$v) {
                          _vm.$set(_vm.item, "name", $$v)
                        },
                        expression: "item.name"
                      }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "b-field",
                  {
                    attrs: {
                      label: "Description",
                      type: _vm.errors.address ? "is-danger" : "",
                      message: _vm.errors.address ? _vm.errors.address[0] : ""
                    }
                  },
                  [
                    _c("b-input", {
                      attrs: {
                        name: "description",
                        "icon-pack": "fas",
                        icon: "location-arrow"
                      },
                      model: {
                        value: _vm.item.description,
                        callback: function($$v) {
                          _vm.$set(_vm.item, "description", $$v)
                        },
                        expression: "item.description"
                      }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "b-field",
                  {
                    attrs: {
                      label: "Price",
                      type: _vm.errors.description ? "is-danger" : "",
                      message: _vm.errors.description
                        ? _vm.errors.description[0]
                        : ""
                    }
                  },
                  [
                    _c("b-input", {
                      attrs: {
                        type: "number",
                        step: "any",
                        name: "price",
                        "icon-pack": "fas",
                        icon: "info-circle"
                      },
                      model: {
                        value: _vm.item.price,
                        callback: function($$v) {
                          _vm.$set(_vm.item, "price", $$v)
                        },
                        expression: "item.price"
                      }
                    })
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "b-field",
                  {
                    staticClass: "file",
                    attrs: {
                      type: _vm.errors.image ? "is-danger" : "",
                      message: _vm.errors.image ? _vm.errors.image[0] : ""
                    }
                  },
                  [
                    _c(
                      "b-upload",
                      {
                        attrs: { name: "image" },
                        model: {
                          value: _vm.file,
                          callback: function($$v) {
                            _vm.file = $$v
                          },
                          expression: "file"
                        }
                      },
                      [
                        _c(
                          "a",
                          { staticClass: "button is-info" },
                          [
                            _c("b-icon", { attrs: { icon: "upload" } }),
                            _vm._v(" "),
                            _c("span", [_vm._v("Store image upload")])
                          ],
                          1
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _vm.file
                      ? _c("span", { staticClass: "file-name" }, [
                          _vm._v(
                            "\n                       " +
                              _vm._s(_vm.file.name) +
                              "\n                     "
                          )
                        ])
                      : _vm._e()
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "b-field",
                  { attrs: { grouped: "", position: "is-centered" } },
                  [
                    _c("p", { staticClass: "control" }, [
                      _c(
                        "button",
                        {
                          staticClass: "button is-primary",
                          attrs: { type: "submit", name: "button" }
                        },
                        [_vm._v(" Save ")]
                      )
                    ])
                  ]
                )
              ],
              1
            )
          ])
        ])
      ])
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/pages/items/Edit.vue":
/*!*******************************************!*\
  !*** ./resources/js/pages/items/Edit.vue ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Edit_vue_vue_type_template_id_3aec167c_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Edit.vue?vue&type=template&id=3aec167c&scoped=true& */ "./resources/js/pages/items/Edit.vue?vue&type=template&id=3aec167c&scoped=true&");
/* harmony import */ var _Edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Edit.vue?vue&type=script&lang=js& */ "./resources/js/pages/items/Edit.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Edit_vue_vue_type_template_id_3aec167c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Edit_vue_vue_type_template_id_3aec167c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "3aec167c",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/items/Edit.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/pages/items/Edit.vue?vue&type=script&lang=js&":
/*!********************************************************************!*\
  !*** ./resources/js/pages/items/Edit.vue?vue&type=script&lang=js& ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Edit.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/items/Edit.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/pages/items/Edit.vue?vue&type=template&id=3aec167c&scoped=true&":
/*!**************************************************************************************!*\
  !*** ./resources/js/pages/items/Edit.vue?vue&type=template&id=3aec167c&scoped=true& ***!
  \**************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Edit_vue_vue_type_template_id_3aec167c_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Edit.vue?vue&type=template&id=3aec167c&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/items/Edit.vue?vue&type=template&id=3aec167c&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Edit_vue_vue_type_template_id_3aec167c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Edit_vue_vue_type_template_id_3aec167c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);