!function(e){var t={};function o(n){if(t[n])return t[n].exports;var r=t[n]={i:n,l:!1,exports:{}};return e[n].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=e,o.c=t,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)o.d(n,r,function(t){return e[t]}.bind(null,r));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=5)}({5:function(e,t){function o(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,o=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:null,r=Object.assign({},{action:e},t);jQuery.post(ajaxurl,r,(function(e){o&&o(e)})).fail((function(e){n&&n(e)}))}window.fb_reset_product=function(e){if(confirm("Resetting Facebook metadata will not remove this product from your shop. If you have duplicated another product and are trying to publish a new Facebook product, click OK to proceed. Otherwise, Facebook metadata will be restored when this product is updated again.")){var t=document.querySelector("#fb_metadata");return t&&(t.innerHTML="<b>This product is not yet synced to Facebook.</b>"),o("ajax_reset_single_fb_product",{wp_id:e,_ajax_nonce:wc_facebook_metabox_jsx.nonce})}},window.fb_delete_product=function(e){if(confirm('Are you sure you want to delete this product on Facebook? If you only want to "hide" the product, change the "Facebook sync" setting to "Sync and hide" and hit "Update". If you delete a product on Facebook and hit "Update" after, this product will be recreated. To permanently remove this product from Facebook, hit "OK" and close the window.This will not delete the product from WooCommerce.')){var t=document.querySelector("#fb_metadata");return t&&(t.innerHTML="<b>This product is not yet synced to Facebook.</b>"),o("ajax_delete_fb_product",{wp_id:e,_ajax_nonce:wc_facebook_metabox_jsx.nonce})}}}});