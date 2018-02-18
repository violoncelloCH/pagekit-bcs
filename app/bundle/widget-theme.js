/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	var __vue_styles__ = {}
	__vue_script__ = __webpack_require__(3)
	if (Object.keys(__vue_script__).some(function (key) { return key !== "default" && key !== "__esModule" })) {
	  console.warn("[vue-loader] app/components/widget-theme.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(4)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	var __vue_options__ = typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports
	if (__vue_template__) {
	__vue_options__.template = __vue_template__
	}
	if (!__vue_options__.computed) __vue_options__.computed = {}
	Object.keys(__vue_styles__).forEach(function (key) {
	var module = __vue_styles__[key]
	__vue_options__.computed[key] = function () { return module }
	})
	if (false) {(function () {  module.hot.accept()
	  var hotAPI = require("vue-hot-reload-api")
	  hotAPI.install(require("vue"), false)
	  if (!hotAPI.compatible) return
	  var id = "_v-600770a7/widget-theme.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ }),
/* 1 */,
/* 2 */,
/* 3 */
/***/ (function(module, exports) {

	'use strict';

	module.exports = {
	    section: {
	        label: 'Theme',
	        priority: 90
	    },
	    props: ['widget', 'config']
	};
	window.Widgets.components['theme'] = module.exports;

/***/ }),
/* 4 */
/***/ (function(module, exports) {

	module.exports = "\n<div class=\"uk-form-row\">\n  <span class=\"uk-form-label\">Widget Config</span>\n  <div class=\"uk-form-controls uk-form-controls-text\">\n    <p class=\"uk-form-controls-condensed\">\n      <label>\n        <input type=\"checkbox\" v-model=\"widget.theme.title\">\n        Widget Title Hide\n      </label>\n    </p>\n    <p class=\"uk-form-controls-condensed\">\n      <label>\n        <input type=\"checkbox\" value=\"\" v-model=\"widget.theme.padding\">\n        No Card Padding\n      </label>\n    </p>\n    <p class=\"uk-form-controls-condensed\">\n      <label>Widget Style</label>\n      <select class=\"\" v-model=\"widget.theme.panel\">\n        <option value=\"\">None Style</option>\n        <option value=\"uk-card-default\">Default</option>\n        <option value=\"uk-card-primary\">Primary</option>\n        <option value=\"uk-card-secondary\">Secondary</option>\n      </select>\n    </p>\n  </div>\n</div>\n";

/***/ })
/******/ ]);