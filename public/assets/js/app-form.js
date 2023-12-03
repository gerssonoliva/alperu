/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admin/forms/app-form.js":
/*!**********************************************!*\
  !*** ./resources/js/admin/forms/app-form.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./serialize-form-json */ "./resources/js/admin/forms/serialize-form-json.js");

__webpack_require__(/*! ./form-modal-delete */ "./resources/js/admin/forms/form-modal-delete.js");

__webpack_require__(/*! ./form-modal-publish */ "./resources/js/admin/forms/form-modal-publish.js");

/***/ }),

/***/ "./resources/js/admin/forms/form-modal-delete.js":
/*!*******************************************************!*\
  !*** ./resources/js/admin/forms/form-modal-delete.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Process Form Delete
(function ($) {
  function processFormModalDelete(event) {
    event.preventDefault();
    var form = $(this);
    $("#alertModal").html('');
    var inputs = $(form).serializeFormJSON();
    inputs.id = $("#idRowModal").val(); // let params = JSON.stringify(inputs);

    var params = inputs;
    var url_api = $(form).attr('action');
    axios({
      method: 'post',
      url: url_api,
      data: params
    }).then(function (response) {
      var data = response.data;

      if (data.status && data.data) {
        $("#modalDelete").modal("hide");
        $(form)[0].reset();
        location.reload();
      } else if (!data.status && data.errors) {
        html = data.message;

        if (data.errors.length) {
          html += '<ul>';

          for (var index = 0; index < data.errors.length; index++) {
            var element = data.errors[index];
            html += "<li> ".concat(element, " </li>");
          }

          html += '</ul>';
        } // console.log(html);


        $("#alertModal").html("Error: " + html);
        console.log(data.errors);
      } else if (!data.status) {
        $("#alertModal").html("Error: " + data.message);
        console.log(data);
      }
    })["catch"](function (error) {
      console.log(error);
    });
  }

  $("#formModalDelete").submit(processFormModalDelete);
})(jQuery); // modal DELETE


$("a.item-delete").on('click', function (event) {
  event.preventDefault();
  var id = $(this).data("id");
  var title = $(this).data("title");
  var descripcion = $(this).data("descripcion");
  var estado = $(this).data("estado");
  $("#idRowModal").val(id);
  $("#modalHistorial").addClass("d-none");
  $("#modalTitle span").text("Eliminar");
  var message = "\xBFEsta seguro de <strong> ".concat(title, " </strong> actividad: <strong> ").concat(descripcion, " </strong> ?");
  $("#dataTextModal").html(message);
  $("#btn-send").text(title);
  $("#estado").val(estado);
  $("#btn-send").addClass("btn-outline-danger");

  if (estado === 0) {
    $("#modalHistorial").addClass("d-none");
    $("#modalHistorial").removeClass("d-block");
  } else if (estado === 1) {
    $("#modalHistorial").addClass("d-block");
  }

  $("#modalDelete").modal("show");
});

/***/ }),

/***/ "./resources/js/admin/forms/form-modal-publish.js":
/*!********************************************************!*\
  !*** ./resources/js/admin/forms/form-modal-publish.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Process Form Publicar
(function ($) {
  /* Publicar */
  function processFormModalPublicar(event) {
    event.preventDefault();
    var form = $(this);
    $("#alertModalPublicar").html("");
    var inputs = $(form).serializeFormJSON();
    inputs.id = $("#idPublicar").val(); // let params = JSON.stringify(inputs);

    var params = inputs;
    var url_api_pub = $(form).attr('action');
    axios({
      method: "post",
      url: url_api_pub,
      data: params
    }).then(function (response) {
      var data = response.data;
      console.log(data);

      if (data.status && data.data) {
        $("#myModalPublicar").modal("hide");
        $(form)[0].reset();
        location.reload();
      } else if (!data.status && data.errors) {
        $("#alertModalPublicar").html("Error: " + data.message);
        console.log(data.errors);
      } else if (!data.status) {
        $("#alertModalPublicar").html("Error: " + data.message);
        console.log(data);
      }
    })["catch"](function (error) {
      console.log(error);
    });
  }

  $("#formModalPublicar").submit(processFormModalPublicar);
})(jQuery); // modal PUBLICAR


$("a.item-publish").on('click', function (event) {
  event.preventDefault();
  var id = $(this).data("id");
  var title = $(this).data("title");
  var descripcion = $(this).data("descripcion");
  var publicar = $(this).data("publish");
  $("#idPublicar").val(id);
  $("#publicar").val(publicar);
  var message = "\xBFEsta seguro de <strong> ".concat(title, " </strong> actividad: <strong> ").concat(descripcion, " </strong> ?");
  $("#dataTextModalPublicar").html(message);
  $("#btn-send-publicar").text(title);
  $("#btn-send-publicar").removeClass("btn-outline-success");
  $("#btn-send-publicar").removeClass("btn-outline-danger");

  if (publicar.toLowerCase() === "n") {
    $("#btn-send-publicar").addClass("btn-outline-success");
    $("#modalTitlePublicar span").text("Publicar");
  } else {
    $("#btn-send-publicar").addClass("btn-outline-danger");
    $("#modalTitlePublicar span").text("Desactivar al Público");
  }

  $("#myModalPublicar").modal("show");
});

/***/ }),

/***/ "./resources/js/admin/forms/serialize-form-json.js":
/*!*********************************************************!*\
  !*** ./resources/js/admin/forms/serialize-form-json.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  $.fn.serializeFormJSON = function () {
    var form_controls = {};
    var array_form = this.serializeArray();
    $.each(array_form, function () {
      if (form_controls[this.name]) {
        if (!form_controls[this.name].push) {
          form_controls[this.name] = [form_controls[this.name]];
        }

        form_controls[this.name].push(this.value || '');
      } else {
        form_controls[this.name] = this.value || '';
      }
    });
    return form_controls;
  };
})(jQuery);

/***/ }),

/***/ 1:
/*!****************************************************!*\
  !*** multi ./resources/js/admin/forms/app-form.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\planeatec\kiwitraveltours\resources\js\admin\forms\app-form.js */"./resources/js/admin/forms/app-form.js");


/***/ })

/******/ });
//# sourceMappingURL=app-form.js.map