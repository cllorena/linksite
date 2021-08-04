/* Copyright (C) YOOtheme GmbH, http://www.gnu.org/licenses/gpl.html GNU/GPL */

!function(n){function o(){}n.extend(o.prototype,{name:"autosuggest",options:{prefill:"",allowDuplicates:!0,inputName:"term[]",resultsHighlight:!0,addButtonText:"Add"},initialize:function(e,t){this.options=n.extend({},this.options,t);var i=this;this.input=e,n.extend(n.expr[":"],{focus:function(t){return t==document.activeElement}}),e.addClass("as-input").wrap('<ul class="as-selections">').wrap('<li class="as-original">').autocomplete(n.extend({select:function(t,e){i.addItem(e.item),e.item.value=e.item.label=""}},this.options)).bind("blur",function(t){i.selections_holder.addClass("blur").find("li.as-selection-item").removeClass("selected")}).bind("focus",function(){i.selections_holder.removeClass("blur")}).bind("keydown",function(t){switch(t.which){case 8:""==e.val()&&(t.preventDefault(),li=n("li.as-selection-item:last"),li.is(".selected")?i.removeItem(li):i.selectItem(li));break;case 9:t.preventDefault(),i.addItem(e.val())}}).bind("keypress",function(t){44==t.charCode&&(t.preventDefault(),i.addItem(e.val()))}),this.selections_holder=e.closest("ul.as-selections").bind("click",function(){e.not(":focus")&&e.focus()}),this.original=this.selections_holder.find("li.as-original"),n('<li class="add-tag-button" >').insertAfter(this.original).text(this.options.addButtonText).bind("click",function(){n.each(e.val().split(","),function(t,e){i.addItem(e)})}),"string"==typeof this.options.prefill?n.each(this.options.prefill.split(","),function(t,e){i.addItem(e)}):i.addItem(this.options.prefill),e.is(":focus")?e.focus():e.blur(),this.selections_holder.delegate("a.as-close","click",function(){i.removeItem(n(this).parent())}).delegate("li.as-selection-item","click",function(){i.selectItem(this)})},addItem:function(t){var e;"string"==typeof t&&(t={label:t.trim(),value:t.trim()}),""==t.value||!this.options.allowDuplicates&&this.itemExists(t)||(e=n('<li class="as-selection-item">').text(t.label).data("item",t).insertBefore(this.original),n('<a class="as-close">&times;</a>').appendTo(e),n('<input type="hidden" class="as-value">').attr("name",this.options.inputName).val(t.value).appendTo(e)),this.input.val(""),this.input.trigger("addItem",e)},removeItem:function(t){t.remove()},itemExists:function(t){var e=!1;return this.selections_holder.find("li.as-selection-item").each(function(){n(this).data("item")&&n(this).data("item").value.toLowerCase()==t.value.toLowerCase()&&(e=!0)}),e},selectItem:function(t){n("li.as-selection-item",this.selections_holder).not(t).removeClass("selected"),n(t).addClass("selected"),this.input.not(":focus")&&this.input.focus()}}),n.fn[o.prototype.name]=function(){var i=arguments,s=i[0]?i[0]:null;return this.each(function(){var t,e=n(this);o.prototype[s]&&e.data(o.prototype.name)&&"initialize"!=s?e.data(o.prototype.name)[s].apply(e.data(o.prototype.name),Array.prototype.slice.call(i,1)):!s||n.isPlainObject(s)?(t=new o,o.prototype.initialize&&t.initialize.apply(t,n.merge([e],i)),e.data(o.prototype.name,t)):n.error("Method "+s+" does not exist on jQuery."+o.name)})}}(jQuery);