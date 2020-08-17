require('./bootstrap');
require('bootstrap-select');
require('./stripe');

import $ from 'jquery';
window.$ = window.jQuery = $;
import { popper } from 'popper.js';
window.popper = Popper;
import 'jquery-ui/ui/widgets/datepicker.js';

$( document ).ready(function() {
    $( function() {
      var dateToday = new Date();
      var dates = $("#start-date, #end-date").datepicker({
          dateFormat: "yy-mm-dd",
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
// window.Vue = require('vue');

// Vue.component('example-component', require('./components/views/Home.vue').default);
// const app = new Vue({
//     el: '#app',
//  });