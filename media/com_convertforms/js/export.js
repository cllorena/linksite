exportModal=function(o){detectViewFilters=function(e){var t;"conversions"==o&&(t=getTableCheckedIDs(),e.dataset.filter_id=0<t.length?t:"",e.dataset.filter_form_id=document.getElementById("filter_form_id").value,e.dataset.filter_period=0<t.length?"":document.getElementById("filter_period").value,e.dataset.filter_created_from=document.getElementById("filter_created_from").value,e.dataset.filter_created_to=document.getElementById("filter_created_to").value),"forms"==o&&(t=getTableCheckedIDs(),e.dataset.filter_form_id=0<t.length?t[0]:"")},init=function(){document.querySelectorAll("button.toolbarexportmodal").forEach(function(e){e.removeAttribute("onclick"),e.setAttribute("data-exportmodal",!0)}),document.addEventListener("click",function(e){void 0!==e.target.dataset.exportmodal&&(e.preventDefault(),e.target.classList.contains("toolbarexportmodal")&&detectViewFilters(e.target),e=Object.assign({},e.target.dataset),show(e))})},show=function(t){var e=document.querySelector("#cfExportSubmissions.modal"),o="index.php?option=com_convertforms&view=export&tmpl=component&"+(t?Object.keys(t).map(function(e){return e+"="+t[e]}).join("&"):"");e.querySelector(".modal-body").innerHTML='<iframe src="'+o+'">',jQuery(e).modal("show")},getTableCheckedIDs=function(){var e=document.querySelectorAll('table tbody input[type="checkbox"]:checked'),t=[];return e.length&&e.forEach(function(e){t.push(e.value)}),t},init()};

