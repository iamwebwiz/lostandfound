/*!
 * Remark (http://getbootstrapadmin.com/remark)
 * Copyright 2016 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
$.components.register("table",{mode:"api",api:function(context){function run(e){"checkbox"===e.target.type||"button"===e.target.type||"a"===e.target.tagName.toLowerCase()||$(e.target).parent("div.checkbox-custom").length||($(this).hasClass("active")?$(this).removeClass("active"):($(this).siblings(".table-section").removeClass("active"),$(this).addClass("active")))}var touch="undefined"!=typeof document.ontouchstart,type="click";touch&&(type="touchstart"),$(document).on(type,".table-section",function(e){run.call(this,e)})}});