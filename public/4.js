(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[4],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/auth/PasswordUpdate.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/auth/PasswordUpdate.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************/
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
/* harmony default export */ __webpack_exports__["default"] = ({
  props: {
    flashMessage: String,
    csrfToken: String,
    errors: Object
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/auth/PasswordUpdate.vue?vue&type=template&id=27bfa15c&scoped=true&":
/*!*****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/auth/PasswordUpdate.vue?vue&type=template&id=27bfa15c&scoped=true& ***!
  \*****************************************************************************************************************************************************************************************************************************/
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
    _c("div", { staticClass: "columns is-centered" }, [
      _c(
        "div",
        { staticClass: "column is-half" },
        [
          _c("flash-message", { attrs: { message: _vm.flashMessage } }),
          _vm._v(" "),
          _c("div", { staticClass: "card" }, [
            _c("div", { staticClass: "card-content" }, [
              _c("h1", { staticClass: "title" }, [_vm._v(" Change password ")]),
              _vm._v(" "),
              _c(
                "form",
                {
                  attrs: {
                    action: _vm.route("updatepassword"),
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
                  _c(
                    "b-field",
                    {
                      attrs: {
                        label: "Current Password",
                        type: _vm.errors.current_password ? "is-danger" : "",
                        message: _vm.errors.current_password
                          ? _vm.errors.current_password[0]
                          : ""
                      }
                    },
                    [
                      _c("b-input", {
                        attrs: {
                          type: "password",
                          name: "current_password",
                          "password-reveal": ""
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
                        label: "New Password",
                        type: _vm.errors.new_password ? "is-danger" : "",
                        message: _vm.errors.new_password
                          ? _vm.errors.new_password[0]
                          : ""
                      }
                    },
                    [
                      _c("b-input", {
                        attrs: {
                          type: "password",
                          name: "new_password",
                          "password-reveal": ""
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
                        label: "Confirm New Password",
                        type: _vm.errors.new_password_confirmation
                          ? "is-danger"
                          : "",
                        message: _vm.errors.new_password_confirmation
                          ? _vm.errors.new_password_confirmation[0]
                          : ""
                      }
                    },
                    [
                      _c("b-input", {
                        attrs: {
                          type: "password",
                          name: "new_password_confirmation",
                          "password-reveal": ""
                        }
                      })
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
                          [_vm._v(" Change Password ")]
                        )
                      ])
                    ]
                  )
                ],
                1
              )
            ])
          ])
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/pages/auth/PasswordUpdate.vue":
/*!****************************************************!*\
  !*** ./resources/js/pages/auth/PasswordUpdate.vue ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _PasswordUpdate_vue_vue_type_template_id_27bfa15c_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./PasswordUpdate.vue?vue&type=template&id=27bfa15c&scoped=true& */ "./resources/js/pages/auth/PasswordUpdate.vue?vue&type=template&id=27bfa15c&scoped=true&");
/* harmony import */ var _PasswordUpdate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./PasswordUpdate.vue?vue&type=script&lang=js& */ "./resources/js/pages/auth/PasswordUpdate.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _PasswordUpdate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _PasswordUpdate_vue_vue_type_template_id_27bfa15c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _PasswordUpdate_vue_vue_type_template_id_27bfa15c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "27bfa15c",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/auth/PasswordUpdate.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/pages/auth/PasswordUpdate.vue?vue&type=script&lang=js&":
/*!*****************************************************************************!*\
  !*** ./resources/js/pages/auth/PasswordUpdate.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PasswordUpdate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./PasswordUpdate.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/auth/PasswordUpdate.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PasswordUpdate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/pages/auth/PasswordUpdate.vue?vue&type=template&id=27bfa15c&scoped=true&":
/*!***********************************************************************************************!*\
  !*** ./resources/js/pages/auth/PasswordUpdate.vue?vue&type=template&id=27bfa15c&scoped=true& ***!
  \***********************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PasswordUpdate_vue_vue_type_template_id_27bfa15c_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./PasswordUpdate.vue?vue&type=template&id=27bfa15c&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/auth/PasswordUpdate.vue?vue&type=template&id=27bfa15c&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PasswordUpdate_vue_vue_type_template_id_27bfa15c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PasswordUpdate_vue_vue_type_template_id_27bfa15c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);