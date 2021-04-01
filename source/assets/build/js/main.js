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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./source/_assets/css/main.scss":
/*!**************************************!*\
  !*** ./source/_assets/css/main.scss ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./source/_assets/js/main.js":
/*!***********************************!*\
  !*** ./source/_assets/js/main.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.addEventListener("load", function () {
  var _this = this;

  // document.getElementById("css-loading").style.display = "none";
  var menu = document.getElementById("menu-bt");
  var x = document.getElementById("sidebar-bot"); // x.style.left = "-10rem";

  menu.addEventListener("click", function (e) {
    e.stopPropagation(); //use get computed style to get the initial value

    console.log(window.getComputedStyle(x).left, x.style.left);

    if (x.style.left === "-10rem") {
      x.style.left = "0rem";
    } else {
      x.style.left = "-10rem";
    }
  });
  window.addEventListener("click", function (e) {
    var y = document.getElementById("sidebar-bot");

    if (y.style.left === "0rem") {
      console.log("hiding menu");
      y.style.left = "-10rem";
    }
  }); //for intersections observer works but very buggy selector keeps jumping

  var sections = document.querySelectorAll(".section");
  var menuli = document.querySelectorAll(".menu-item > a");
  var current = " "; // console.log(sections);
  // const option = {
  //   root: null,
  //   threshold: 0,
  //   rootMargin: "0px",
  // };
  // const observer = new IntersectionObserver(function(entries, observer) {
  //   entries.forEach((elm) => {
  //     current = elm.target.getAttribute("id");
  //     console.log(current);
  //     menuli.forEach((elm) => {
  //       console.log(elm.getAttribute("data-content"));
  //       elm.style.backgroundColor = "initial";
  //       let itm = elm.getAttribute("data-content");
  //       //   console.log(itm, current);
  //       if (itm == current) {
  //         elm.style.backgroundColor = "rgb(66, 153, 225)";
  //       }
  //     });
  //   });
  // }, option);
  // sections.forEach((section) => {
  //   observer.observe(section);
  // });
  //with scroll works perfectly

  window.addEventListener("scroll", function () {
    sections.forEach(function (section) {
      var sectionTop = section.offsetTop; //const sectionHeight = section.clientHeight;
      //console.log(pageYOffset);

      if (pageYOffset >= sectionTop) {
        current = section.getAttribute("id");
      }
    });
    menuli.forEach(function (a) {
      a.style.backgroundColor = "initial";
      var itm = a.getAttribute("data-content"); // console.log(itm, current);

      if (itm == current) {
        a.style.backgroundColor = "rgb(66, 153, 225)";
      }
    });
  }); //smooth scroll

  menuli.forEach(function (a) {
    a.addEventListener("click", function (evt) {
      if (_this.hash !== "") {
        // Prevent default anchor click behavior
        evt.preventDefault();
        var hash = _this.hash; // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

        $("html, body").animate({
          scrollTop: $(hash).offset().top
        }, 800, function () {
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if

    });
  });
  $("a").on("click", function (event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault(); // Store hash

      var hash = this.hash; // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

      $("html, body").animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if

  });
}, false);

/***/ }),

/***/ 0:
/*!************************************************************************!*\
  !*** multi ./source/_assets/js/main.js ./source/_assets/css/main.scss ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/edrick/MyWorkspace/laravel/portfolio/source/_assets/js/main.js */"./source/_assets/js/main.js");
module.exports = __webpack_require__(/*! /Users/edrick/MyWorkspace/laravel/portfolio/source/_assets/css/main.scss */"./source/_assets/css/main.scss");


/***/ })

/******/ });