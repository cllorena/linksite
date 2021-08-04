/* Copyright (C) YOOtheme GmbH, http://www.gnu.org/licenses/gpl.html GNU/GPL */

!function(s){var o={bounds:!0,country:null,map:!1,details:!1,detailsAttribute:"name",location:!1,mapOptions:{zoom:14,scrollwheel:!1,mapTypeId:"roadmap"},markerOptions:{draggable:!1},maxZoom:16,types:["geocode"]},t="street_address route intersection political country administrative_area_level_1 administrative_area_level_2 administrative_area_level_3 colloquial_area locality sublocality neighborhood premise subpremise postal_code natural_feature airport park point_of_interest post_box street_number floor room lat lng viewport location formatted_address location_type bounds".split(" "),a="id url website vicinity reference name rating international_phone_number icon formatted_phone_number".split(" ");function n(t,i){this.options=s.extend(!0,{},o,i),this.input=t,this.$input=s(t),this._defaults=o,this._name="geocomplete",this.init()}s.extend(n.prototype,{init:function(){this.initMap(),this.initMarker(),this.initGeocoder(),this.initDetails(),this.initLocation()},initMap:function(){this.options.map&&("function"!=typeof this.options.map.setCenter?this.map=new google.maps.Map(s(this.options.map)[0],this.options.mapOptions):this.map=this.options.map)},initMarker:function(){var t;this.map&&((t=s.extend(this.options.markerOptions,{map:this.map})).disabled||(this.marker=new google.maps.Marker(t),google.maps.event.addListener(this.marker,"dragend",s.proxy(this.markerDragged,this))))},initGeocoder:function(){var t={types:this.options.types,bounds:!0===this.options.bounds?null:this.options.bounds,componentRestrictions:this.options.componentRestrictions};this.options.country&&(t.componentRestrictions={country:this.options.country}),this.autocomplete=new google.maps.places.Autocomplete(this.input,t),this.geocoder=new google.maps.Geocoder,this.map&&!0===this.options.bounds&&this.autocomplete.bindTo("bounds",this.map),google.maps.event.addListener(this.autocomplete,"place_changed",s.proxy(this.placeChanged,this)),this.$input.keypress(function(t){if(13===t.keyCode)return!1}),this.$input.bind("geocode",s.proxy(function(){this.find()},this))},initDetails:function(){var i,o,e;function n(t){e[t]=i.find("["+o+"="+t+"]")}this.options.details&&(i=s(this.options.details),o=this.options.detailsAttribute,e={},s.each(t,function(t,i){n(i),n(i+"_short")}),s.each(a,function(t,i){n(i)}),this.$details=i,this.details=e)},initLocation:function(){var t,i=this.options.location;i&&("string"!=typeof i?(i instanceof Array&&(t=new google.maps.LatLng(i[0],i[1])),i instanceof google.maps.LatLng&&(t=i),t&&this.map&&this.map.setCenter(t)):this.find(i))},find:function(t){this.geocode({address:t||this.$input.val()})},geocode:function(t){this.options.bounds&&!t.bounds&&(!0===this.options.bounds?t.bounds=this.map&&this.map.getBounds():t.bounds=this.options.bounds),this.options.country&&(t.region=this.options.country),this.geocoder.geocode(t,s.proxy(this.handleGeocode,this))},handleGeocode:function(t,i){var o;i===google.maps.GeocoderStatus.OK?(o=t[0],this.$input.val(o.formatted_address),this.update(o),1<t.length&&this.trigger("geocode:multiple",t)):this.trigger("geocode:error",i)},trigger:function(t,i){this.$input.trigger(t,[i])},center:function(t){t.viewport?(this.map.fitBounds(t.viewport),this.map.getZoom()>this.options.maxZoom&&this.map.setZoom(this.options.maxZoom)):(this.map.setZoom(this.options.maxZoom),this.map.setCenter(t.location)),this.marker&&(this.marker.setPosition(t.location),this.marker.setAnimation(this.options.markerOptions.animation))},update:function(t){this.map&&this.center(t.geometry),this.$details&&this.fillDetails(t),this.trigger("geocode:result",t)},fillDetails:function(o){var e={},t=o.geometry,i=t.viewport,n=t.bounds;s.each(o.address_components,function(t,i){var o=i.types[0];e[o]=i.long_name,e[o+"_short"]=i.short_name}),s.each(a,function(t,i){e[i]=o[i]}),s.extend(e,{formatted_address:o.formatted_address,location_type:t.location_type||"PLACES",viewport:i,bounds:n,location:t.location,lat:t.location.lat(),lng:t.location.lng()}),s.each(this.details,s.proxy(function(t,i){var o=e[t];this.setDetail(i,o)},this)),this.data=e},setDetail:function(t,i){void 0===i?i="":"function"==typeof i.toUrlValue&&(i=i.toUrlValue()),t.is(":input")?t.val(i):t.text(i)},markerDragged:function(t){this.trigger("geocode:dragged",t.latLng)},resetMarker:function(){this.marker.setPosition(this.data.location),this.setDetail(this.details.lat,this.data.location.lat()),this.setDetail(this.details.lng,this.data.location.lng())},placeChanged:function(){var t=this.autocomplete.getPlace();t.geometry?this.update(t):this.find(t.name)}}),s.fn.geocomplete=function(i){var o="plugin_geocomplete";if("string"!=typeof i)return this.each(function(){var t=s.data(this,o);t||(t=new n(this,i),s.data(this,o,t))});var t=s(this).data(o)||s(this).geocomplete().data(o),e=t[i];return"function"==typeof e?(e.apply(t,Array.prototype.slice.call(arguments,1)),s(this)):(2==arguments.length&&(e=arguments[1]),e)}}(jQuery,(window,document));