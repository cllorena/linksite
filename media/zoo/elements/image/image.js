/* Copyright (C) YOOtheme GmbH, http://www.gnu.org/licenses/gpl.html GNU/GPL */

!function(a){function s(){}a.extend(s.prototype,{name:"ImageSubmission",options:{uri:""},initialize:function(e,i){this.options=a.extend({},this.options,i);var t=this;this.element=e,this.advanced=e.find("select.image"),this.select_image=this.advanced.length?this.advanced:e.find("input.image"),e.find("span.image-cancel").bind("click",function(){t.select_image.val(""),t.sanatize()}),this.advanced.length&&this.select_image.bind("change",function(){e.find("img").attr("src",t.options.uri+t.select_image.val()),t.sanatize()}),t.sanatize()},sanatize:function(){this.select_image.val()?(this.element.find("div.image-select").addClass("hidden"),this.element.find("div.image-preview").removeClass("hidden")):(this.element.find("div.image-select").removeClass("hidden"),this.element.find("div.image-preview").addClass("hidden"))}}),a.fn[s.prototype.name]=function(){var t=arguments,n=t[0]?t[0]:null;return this.each(function(){var e,i=a(this);s.prototype[n]&&i.data(s.prototype.name)&&"initialize"!=n?i.data(s.prototype.name)[n].apply(i.data(s.prototype.name),Array.prototype.slice.call(t,1)):!n||a.isPlainObject(n)?(e=new s,s.prototype.initialize&&e.initialize.apply(e,a.merge([i],t)),i.data(s.prototype.name,e)):a.error("Method "+n+" does not exist on jQuery."+s.name)})}}(jQuery);