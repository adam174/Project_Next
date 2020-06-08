/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



// window.Vue = require('vue');

// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */

// // const files = require.context('./', true, /\.vue$/i)
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */

// const app = new Vue({
//     el: '#app',
// });

require('./bootstrap');

require('./stripe');

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';

$( document ).ready(function() {
    $( function() {
      var dateToday = new Date();
      var dates = $("#start-date, #end-date").datepicker({
          format: "MM/DD/YYYY",
          defaultDate: "+2d",
          changeMonth: true,
          numberOfMonths: 1,
          minDate: dateToday,
          onSelect: function(selectedDate) {
              var option = this.id == "start-date" ? "minDate" : "maxDate",
                  instance = $(this).data("datepicker"),
                  date = $.datepicker.parseDate(
                      instance.settings.dateFormat ||
                          $.datepicker._defaults.dateFormat,
                      selectedDate,
                      instance.settings
                  );
              dates.not(this).datepicker("option", option, date);
          }
      });
    });
    });

window.Vue = require('vue');

Vue.component('example-component', require('./components/views/Home.vue').default);
const app = new Vue({
    el: '#app',
 });