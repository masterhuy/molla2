window.webservice=function(e){function t(o){if(n[o])return n[o].exports;var r=n[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,t),r.l=!0,r.exports}var n={};return t.m=e,t.c=n,t.i=function(e){return e},t.d=function(e,n,o){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:o})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=539)}({0:function(e,t,n){"use strict";t.__esModule=!0,t.default=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}},1:function(e,t,n){"use strict";t.__esModule=!0;var o=n(19),r=function(e){return e&&e.__esModule?e:{default:e}}(o);t.default=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),(0,r.default)(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}()},10:function(e,t,n){var o=n(6),r=n(12);e.exports=n(2)?function(e,t,n){return o.f(e,t,r(1,n))}:function(e,t,n){return e[t]=n,e}},11:function(e,t,n){var o=n(4);e.exports=function(e){if(!o(e))throw TypeError(e+" is not an object!");return e}},12:function(e,t){e.exports=function(e,t){return{enumerable:!(1&e),configurable:!(2&e),writable:!(4&e),value:t}}},13:function(e,t,n){var o=n(4);e.exports=function(e,t){if(!o(e))return e;var n,r;if(t&&"function"==typeof(n=e.toString)&&!o(r=n.call(e)))return r;if("function"==typeof(n=e.valueOf)&&!o(r=n.call(e)))return r;if(!t&&"function"==typeof(n=e.toString)&&!o(r=n.call(e)))return r;throw TypeError("Can't convert object to primitive value")}},15:function(e,t,n){var o=n(18);e.exports=function(e,t,n){if(o(e),void 0===t)return e;switch(n){case 1:return function(n){return e.call(t,n)};case 2:return function(n,o){return e.call(t,n,o)};case 3:return function(n,o,r){return e.call(t,n,o,r)}}return function(){return e.apply(t,arguments)}}},16:function(e,t,n){var o=n(4),r=n(5).document,i=o(r)&&o(r.createElement);e.exports=function(e){return i?r.createElement(e):{}}},17:function(e,t,n){e.exports=!n(2)&&!n(7)(function(){return 7!=Object.defineProperty(n(16)("div"),"a",{get:function(){return 7}}).a})},18:function(e,t){e.exports=function(e){if("function"!=typeof e)throw TypeError(e+" is not a function!");return e}},19:function(e,t,n){e.exports={default:n(20),__esModule:!0}},190:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=window.$,l=function(){function e(){var t=this;(0,i.default)(this,e),c(document).on("click",".js-multiple-choice-table-select-column",function(e){return t.handleSelectColumn(e)})}return(0,u.default)(e,[{key:"handleSelectColumn",value:function(e){e.preventDefault();var t=c(e.target),n=t.data("column-checked");t.data("column-checked",!n),t.closest("table").find("tbody tr td:nth-child("+t.data("column-num")+") input[type=checkbox]").prop("checked",!n)}}]),e}();t.default=l},2:function(e,t,n){e.exports=!n(7)(function(){return 7!=Object.defineProperty({},"a",{get:function(){return 7}}).a})},20:function(e,t,n){n(21);var o=n(3).Object;e.exports=function(e,t,n){return o.defineProperty(e,t,n)}},21:function(e,t,n){var o=n(8);o(o.S+o.F*!n(2),"Object",{defineProperty:n(6).f})},23:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=window.$,l=function(){function e(t){(0,i.default)(this,e),this.id=t,this.$container=c("#"+this.id+"_grid")}return(0,u.default)(e,[{key:"getId",value:function(){return this.id}},{key:"getContainer",value:function(){return this.$container}},{key:"getHeaderContainer",value:function(){return this.$container.closest(".js-grid-panel").find(".js-grid-header")}},{key:"addExtension",value:function(e){e.extend(this)}}]),e}();t.default=l},24:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=n(42),l=o(c),d=window.$,s=function(){function e(){(0,i.default)(this,e)}return(0,u.default)(e,[{key:"extend",value:function(e){e.getContainer().on("click",".js-reset-search",function(e){(0,l.default)(d(e.currentTarget).data("url"),d(e.currentTarget).data("redirect"))})}}]),e}();t.default=s},25:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=n(40),l=o(c),d=function(){function e(){(0,i.default)(this,e)}return(0,u.default)(e,[{key:"extend",value:function(e){var t=e.getContainer().find("table.table");new l.default(t).attach()}}]),e}();/**
      * Copyright since 2007 PrestaShop SA and Contributors
      * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
      *
      * NOTICE OF LICENSE
      *
      * This source file is subject to the Open Software License (OSL 3.0)
      * that is bundled with this package in the file LICENSE.md.
      * It is also available through the world-wide-web at this URL:
      * https://opensource.org/licenses/OSL-3.0
      * If you did not receive a copy of the license and are unable to
      * obtain it through the world-wide-web, please send an email
      * to license@prestashop.com so we can send you a copy immediately.
      *
      * DISCLAIMER
      *
      * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
      * versions in the future. If you wish to customize PrestaShop for your
      * needs please refer to https://devdocs.prestashop.com/ for more information.
      *
      * @author    PrestaShop SA and Contributors <contact@prestashop.com>
      * @copyright Since 2007 PrestaShop SA and Contributors
      * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
      */
t.default=d},26:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=function(){function e(){(0,i.default)(this,e)}return(0,u.default)(e,[{key:"extend",value:function(e){e.getHeaderContainer().on("click",".js-common_refresh_list-grid-action",function(){location.reload()})}}]),e}();t.default=c},28:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=window.$,l=function(){function e(){(0,i.default)(this,e)}return(0,u.default)(e,[{key:"extend",value:function(e){var t=this;e.getHeaderContainer().on("click",".js-common_show_query-grid-action",function(){return t._onShowSqlQueryClick(e)}),e.getHeaderContainer().on("click",".js-common_export_sql_manager-grid-action",function(){return t._onExportSqlManagerClick(e)})}},{key:"_onShowSqlQueryClick",value:function(e){var t=c("#"+e.getId()+"_common_show_query_modal_form");this._fillExportForm(t,e);var n=c("#"+e.getId()+"_grid_common_show_query_modal");n.modal("show"),n.on("click",".btn-sql-submit",function(){return t.submit()})}},{key:"_onExportSqlManagerClick",value:function(e){var t=c("#"+e.getId()+"_common_show_query_modal_form");this._fillExportForm(t,e),t.submit()}},{key:"_fillExportForm",value:function(e,t){var n=t.getContainer().find(".js-grid-table").data("query");e.find('textarea[name="sql"]').val(n),e.find('input[name="name"]').val(this._getNameFromBreadcrumb())}},{key:"_getNameFromBreadcrumb",value:function(){var e=c(".header-toolbar").find(".breadcrumb-item"),t="";return e.each(function(e,n){var o=c(n),r=0<o.find("a").length?o.find("a").text():o.text();0<t.length&&(t=t.concat(" > ")),t=t.concat(r)}),t}}]),e}();t.default=l},3:function(e,t){var n=e.exports={version:"2.4.0"};"number"==typeof __e&&(__e=n)},31:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=window.$,l=function(){function e(){(0,i.default)(this,e)}return(0,u.default)(e,[{key:"extend",value:function(e){this._handleBulkActionCheckboxSelect(e),this._handleBulkActionSelectAllCheckbox(e)}},{key:"_handleBulkActionSelectAllCheckbox",value:function(e){var t=this;e.getContainer().on("change",".js-bulk-action-select-all",function(n){var o=c(n.currentTarget),r=o.is(":checked");r?t._enableBulkActionsBtn(e):t._disableBulkActionsBtn(e),e.getContainer().find(".js-bulk-action-checkbox").prop("checked",r)})}},{key:"_handleBulkActionCheckboxSelect",value:function(e){var t=this;e.getContainer().on("change",".js-bulk-action-checkbox",function(){e.getContainer().find(".js-bulk-action-checkbox:checked").length>0?t._enableBulkActionsBtn(e):t._disableBulkActionsBtn(e)})}},{key:"_enableBulkActionsBtn",value:function(e){e.getContainer().find(".js-bulk-actions-btn").prop("disabled",!1)}},{key:"_disableBulkActionsBtn",value:function(e){e.getContainer().find(".js-bulk-actions-btn").prop("disabled",!0)}}]),e}();t.default=l},32:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=n(45),l=o(c),d=window.$,s=function(){function e(){var t=this;return(0,i.default)(this,e),{extend:function(e){return t.extend(e)}}}return(0,u.default)(e,[{key:"extend",value:function(e){var t=this;e.getContainer().on("click",".js-bulk-action-submit-btn",function(n){t.submit(n,e)})}},{key:"submit",value:function(e,t){var n=d(e.currentTarget),o=n.data("confirm-message"),r=n.data("confirmTitle");void 0!==o&&0<o.length?void 0!==r?this.showConfirmModal(n,t,o,r):confirm(o)&&this.postForm(n,t):this.postForm(n,t)}},{key:"showConfirmModal",value:function(e,t,n,o){var r=this,i=e.data("confirmButtonLabel"),a=e.data("closeButtonLabel"),u=e.data("confirmButtonClass");new l.default({id:t.getId()+"_grid_confirm_modal",confirmTitle:o,confirmMessage:n,confirmButtonLabel:i,closeButtonLabel:a,confirmButtonClass:u},function(){return r.postForm(e,t)}).show()}},{key:"postForm",value:function(e,t){var n=d("#"+t.getId()+"_filter_form");n.attr("action",e.data("form-url")),n.attr("method",e.data("form-method")),n.submit()}}]),e}();t.default=s},33:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=window.$,l=function(){function e(){(0,i.default)(this,e)}return(0,u.default)(e,[{key:"extend",value:function(e){this.initRowLinks(e),this.initConfirmableActions(e)}},{key:"initConfirmableActions",value:function(e){e.getContainer().on("click",".js-link-row-action",function(e){var t=c(e.currentTarget).data("confirm-message");t.length&&!confirm(t)&&e.preventDefault()})}},{key:"initRowLinks",value:function(e){c("tr",e.getContainer()).each(function(){var e=c(this);c(".js-link-row-action[data-clickable-row=1]:first",e).each(function(){var t=c(this),n=t.closest("td");c("td.clickable",e).not(n).addClass("cursor-pointer").click(function(){var e=t.data("confirm-message");e.length&&!confirm(e)||(document.location=t.attr("href"))})})})}}]),e}();t.default=l},35:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=window.$,l=function(){function e(){(0,i.default)(this,e)}return(0,u.default)(e,[{key:"extend",value:function(e){e.getContainer().on("click",".js-submit-row-action",function(e){e.preventDefault();var t=c(e.currentTarget),n=t.data("confirm-message");if(!n.length||confirm(n)){var o=t.data("method"),r=["GET","POST"].includes(o),i=c("<form>",{action:t.data("url"),method:r?o:"POST"}).appendTo("body");r||i.append(c("<input>",{type:"_hidden",name:"_method",value:o})),i.submit()}})}}]),e}();t.default=l},379:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=function(){function e(){var t=this;return(0,i.default)(this,e),{attachOn:function(e){return t._attachOn(e)}}}return(0,u.default)(e,[{key:"_attachOn",value:function(e){var t=this,n=document.querySelector(e);if(null===n)return null;n.addEventListener("click",function(e){var n=e.currentTarget.attributes,o=n.getNamedItem("data-target-input-id").value,r=parseInt(n.getNamedItem("data-generated-value-length").value);document.querySelector("#"+o).value=t._generateValue(r)})}},{key:"_generateValue",value:function(e){for(var t="123456789ABCDEFGHIJKLMNPQRSTUVWXYZ",n="",o=1;o<=e;++o)n+=t.charAt(Math.floor(Math.random()*t.length));return n}}]),e}();t.default=c},4:function(e,t){e.exports=function(e){return"object"==typeof e?null!==e:"function"==typeof e}},40:function(e,t,n){"use strict";(function(e){function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=e.$,l=function(){function e(t){(0,i.default)(this,e),this.selector=".ps-sortable-column",this.columns=c(t).find(this.selector)}return(0,u.default)(e,[{key:"attach",value:function(){var e=this;this.columns.on("click",function(t){var n=c(t.delegateTarget);e._sortByColumn(n,e._getToggledSortDirection(n))})}},{key:"sortBy",value:function(e,t){var n=this.columns.is('[data-sort-col-name="'+e+'"]');if(!n)throw new Error('Cannot sort by "'+e+'": invalid column');this._sortByColumn(n,t)}},{key:"_sortByColumn",value:function(e,t){window.location=this._getUrl(e.data("sortColName"),"desc"===t?"desc":"asc",e.data("sortPrefix"))}},{key:"_getToggledSortDirection",value:function(e){return"asc"===e.data("sortDirection")?"desc":"asc"}},{key:"_getUrl",value:function(e,t,n){var o=new URL(window.location.href),r=o.searchParams;return n?(r.set(n+"[orderBy]",e),r.set(n+"[sortOrder]",t)):(r.set("orderBy",e),r.set("sortOrder",t)),o.toString()}}]),e}();t.default=l}).call(t,n(9))},42:function(e,t,n){"use strict";(function(e){Object.defineProperty(t,"__esModule",{value:!0});/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
var n=e.$,o=function(e,t){n.post(e).then(function(){return window.location.assign(t)})};t.default=o}).call(t,n(9))},429:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var o=n(0),r=function(e){return e&&e.__esModule?e:{default:e}}(o),i=window.$,a=function e(){return(0,r.default)(this,e),i('input[id^="webservice_key_permissions_all"]').on("change",function(e){var t=i(e.currentTarget),n=t.is(":checked");t.closest("tr").find('input:not(input[id="'+t.attr("id")+'"])').each(function(e,t){i(t).prop("checked",n)})}),{}};t.default=a},45:function(e,t,n){"use strict";function o(e,t){var n=this,o=e.id,a=e.closable;this.modal=r(e),this.$modal=i(this.modal.container),this.show=function(){n.$modal.modal()},this.modal.confirmButton.addEventListener("click",t),this.$modal.modal({backdrop:!!a||"static",keyboard:void 0===a||a,closable:void 0===a||a,show:!1}),this.$modal.on("hidden.bs.modal",function(){document.querySelector("#"+o).remove()}),document.body.appendChild(this.modal.container)}function r(e){var t=e.id,n=void 0===t?"confirm_modal":t,o=e.confirmTitle,r=e.confirmMessage,i=void 0===r?"":r,a=e.closeButtonLabel,u=void 0===a?"Close":a,c=e.confirmButtonLabel,l=void 0===c?"Accept":c,d=e.confirmButtonClass,s=void 0===d?"btn-primary":d,f={};return f.container=document.createElement("div"),f.container.classList.add("modal","fade"),f.container.id=n,f.dialog=document.createElement("div"),f.dialog.classList.add("modal-dialog"),f.content=document.createElement("div"),f.content.classList.add("modal-content"),f.header=document.createElement("div"),f.header.classList.add("modal-header"),o&&(f.title=document.createElement("h4"),f.title.classList.add("modal-title"),f.title.innerHTML=o),f.closeIcon=document.createElement("button"),f.closeIcon.classList.add("close"),f.closeIcon.setAttribute("type","button"),f.closeIcon.dataset.dismiss="modal",f.closeIcon.innerHTML="×",f.body=document.createElement("div"),f.body.classList.add("modal-body","text-left","font-weight-normal"),f.message=document.createElement("p"),f.message.classList.add("confirm-message"),f.message.innerHTML=i,f.footer=document.createElement("div"),f.footer.classList.add("modal-footer"),f.closeButton=document.createElement("button"),f.closeButton.setAttribute("type","button"),f.closeButton.classList.add("btn","btn-outline-secondary","btn-lg"),f.closeButton.dataset.dismiss="modal",f.closeButton.innerHTML=u,f.confirmButton=document.createElement("button"),f.confirmButton.setAttribute("type","button"),f.confirmButton.classList.add("btn",s,"btn-lg","btn-confirm-submit"),f.confirmButton.dataset.dismiss="modal",f.confirmButton.innerHTML=l,o?f.header.append(f.title,f.closeIcon):f.header.appendChild(f.closeIcon),f.body.appendChild(f.message),f.footer.append(f.closeButton,f.confirmButton),f.content.append(f.header,f.body,f.footer),f.dialog.appendChild(f.content),f.container.appendChild(f.dialog),f}Object.defineProperty(t,"__esModule",{value:!0}),t.default=o;/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
var i=window.$},5:function(e,t){var n=e.exports="undefined"!=typeof window&&window.Math==Math?window:"undefined"!=typeof self&&self.Math==Math?self:Function("return this")();"number"==typeof __g&&(__g=n)},539:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}var r=n(23),i=o(r),a=n(24),u=o(a),c=n(26),l=o(c),d=n(28),s=o(d),f=n(31),m=o(f),h=n(32),p=o(h),v=n(25),_=o(v),b=n(35),g=o(b),y=n(61),k=o(y),w=n(60),x=o(w),C=n(379),M=o(C),j=n(190),B=o(j),T=n(429),E=o(T),A=n(33),O=o(A);(0,window.$)(function(){var e=new i.default("webservice_key");e.addExtension(new l.default),e.addExtension(new s.default),e.addExtension(new u.default),e.addExtension(new k.default),e.addExtension(new _.default),e.addExtension(new p.default),e.addExtension(new g.default),e.addExtension(new m.default),e.addExtension(new O.default),new x.default("#webservice_key_shop_association").enableAutoCheckChildren(),new B.default,(new M.default).attachOn(".js-generator-btn"),new E.default})},6:function(e,t,n){var o=n(11),r=n(17),i=n(13),a=Object.defineProperty;t.f=n(2)?Object.defineProperty:function(e,t,n){if(o(e),t=i(t,!0),o(n),r)try{return a(e,t,n)}catch(e){}if("get"in n||"set"in n)throw TypeError("Accessors not supported!");return"value"in n&&(e[t]=n.value),e}},60:function(e,t,n){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=window.$,l=function(){function e(t){var n=this;return(0,i.default)(this,e),this.$container=c(t),this.$container.on("click",".js-input-wrapper",function(e){var t=c(e.currentTarget);n._toggleChildTree(t)}),this.$container.on("click",".js-toggle-choice-tree-action",function(e){var t=c(e.currentTarget);n._toggleTree(t)}),{enableAutoCheckChildren:function(){return n.enableAutoCheckChildren()},enableAllInputs:function(){return n.enableAllInputs()},disableAllInputs:function(){return n.disableAllInputs()}}}return(0,u.default)(e,[{key:"enableAutoCheckChildren",value:function(){this.$container.on("change",'input[type="checkbox"]',function(e){var t=c(e.currentTarget);t.closest("li").find('ul input[type="checkbox"]').prop("checked",t.is(":checked"))})}},{key:"enableAllInputs",value:function(){this.$container.find("input").removeAttr("disabled")}},{key:"disableAllInputs",value:function(){this.$container.find("input").attr("disabled","disabled")}},{key:"_toggleChildTree",value:function(e){var t=e.closest("li");if(t.hasClass("expanded"))return void t.removeClass("expanded").addClass("collapsed");t.hasClass("collapsed")&&t.removeClass("collapsed").addClass("expanded")}},{key:"_toggleTree",value:function(e){var t=e.closest(".js-choice-tree-container"),n=e.data("action"),o={addClass:{expand:"expanded",collapse:"collapsed"},removeClass:{expand:"collapsed",collapse:"expanded"},nextAction:{expand:"collapse",collapse:"expand"},text:{expand:"collapsed-text",collapse:"expanded-text"},icon:{expand:"collapsed-icon",collapse:"expanded-icon"}};t.find("li").each(function(e,t){var r=c(t);r.hasClass(o.removeClass[n])&&r.removeClass(o.removeClass[n]).addClass(o.addClass[n])}),e.data("action",o.nextAction[n]),e.find(".material-icons").text(e.data(o.icon[n])),e.find(".js-toggle-text").text(e.data(o.text[n]))}}]),e}();t.default=l},61:function(e,t,n){"use strict";(function(e){function o(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var r=n(0),i=o(r),a=n(1),u=o(a),c=e.$,l=function(){function e(){(0,i.default)(this,e)}return(0,u.default)(e,[{key:"extend",value:function(e){var t=this;e.getContainer().find("table.table").find(".ps-togglable-row").on("click",function(e){e.preventDefault(),t._toggleValue(c(e.delegateTarget))})}},{key:"_toggleValue",value:function(e){var t=e.data("toggleUrl");this._submitAsForm(t)}},{key:"_submitAsForm",value:function(e){c("<form>",{action:e,method:"POST"}).appendTo("body").submit()}}]),e}();t.default=l}).call(t,n(9))},7:function(e,t){e.exports=function(e){try{return!!e()}catch(e){return!0}}},8:function(e,t,n){var o=n(5),r=n(3),i=n(15),a=n(10),u=function(e,t,n){var c,l,d,s=e&u.F,f=e&u.G,m=e&u.S,h=e&u.P,p=e&u.B,v=e&u.W,_=f?r:r[t]||(r[t]={}),b=_.prototype,g=f?o:m?o[t]:(o[t]||{}).prototype;f&&(n=t);for(c in n)(l=!s&&g&&void 0!==g[c])&&c in _||(d=l?g[c]:n[c],_[c]=f&&"function"!=typeof g[c]?n[c]:p&&l?i(d,o):v&&g[c]==d?function(e){var t=function(t,n,o){if(this instanceof e){switch(arguments.length){case 0:return new e;case 1:return new e(t);case 2:return new e(t,n)}return new e(t,n,o)}return e.apply(this,arguments)};return t.prototype=e.prototype,t}(d):h&&"function"==typeof d?i(Function.call,d):d,h&&((_.virtual||(_.virtual={}))[c]=d,e&u.R&&b&&!b[c]&&a(b,c,d)))};u.F=1,u.G=2,u.S=4,u.P=8,u.B=16,u.W=32,u.U=64,u.R=128,e.exports=u},9:function(e,t){var n;n=function(){return this}();try{n=n||Function("return this")()||(0,eval)("this")}catch(e){"object"==typeof window&&(n=window)}e.exports=n}});