/*!
 * Remark (http://getbootstrapadmin.com/remark)
 * Copyright 2016 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
$.components.register("sweetalert",{mode:"api",api:function(){if("undefined"!=typeof swal){var defaults=$.components.getDefaults("sweetalert");$(document).on("click.site.sweetalert",'[data-plugin="sweetalert"]',function(){var options=$.extend(!0,{},defaults,$(this).data());swal(options)})}}});