!function(e){"use strict";function c(e){var c,t;e.classList.contains("cf-input")&&"checkbox"===e.type&&((c=e.closest(".cf-control-group")).querySelectorAll(".cf-checkbox-group-required").length<2||(e=c.querySelectorAll("input[type=checkbox]"),(t=0==c.querySelectorAll("input[type=checkbox]:checked").length)&&"false"==c.dataset.requiredOverride||e.forEach(function(e){e.required=t})))}ConvertForms.Helper.onReady(function(){e.querySelectorAll(".cf-list > .cf-checkbox-group-required:first-child input[type=checkbox]").forEach(function(e){c(e)}),e.addEventListener("change",function(e){c(e.target)})})}(document);
