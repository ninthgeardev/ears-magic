var postMetaBoxes=function(e){var a={};function t(l){if(a[l]){return a[l].exports}var s=a[l]={i:l,l:false,exports:{}};e[l].call(s.exports,s,s.exports,t);s.l=true;return s.exports}t.m=e;t.c=a;t.d=function(e,a,l){if(!t.o(e,a)){Object.defineProperty(e,a,{configurable:false,enumerable:true,get:l})}};t.n=function(e){var a=e&&e.__esModule?function a(){return e["default"]}:function a(){return e};t.d(a,"a",a);return a};t.o=function(e,a){return Object.prototype.hasOwnProperty.call(e,a)};t.p="";return t(t.s=0)}([function(e,a,t){"use strict";var l=t(1);var s=o(l);function o(e){return e&&e.__esModule?e:{default:e}}(0,s.default)(function(){var e=(0,s.default)("#x-meta-box-quote");var a=(0,s.default)("#post-format-quote");var t=(0,s.default)("#x-meta-box-link");var l=(0,s.default)("#post-format-link");var o=(0,s.default)("#x-meta-box-audio");var i=(0,s.default)("#post-format-audio");var n=(0,s.default)("#x-meta-box-video");var d=(0,s.default)("#post-format-video");var c=(0,s.default)("#post-formats-select input");p();c.change(function(){p();if((0,s.default)(this).val()==="quote"){e.css("display","block")}else if((0,s.default)(this).val()==="link"){t.css("display","block")}else if((0,s.default)(this).val()==="audio"){o.css("display","block")}else if((0,s.default)(this).val()==="video"){n.css("display","block")}});if(a.is(":checked")){e.css("display","block")}if(l.is(":checked")){t.css("display","block")}if(i.is(":checked")){o.css("display","block")}if(d.is(":checked")){n.css("display","block")}function p(){n.css("display","none");e.css("display","none");t.css("display","none");o.css("display","none")}var r=(0,s.default)("#page_template");var f=(0,s.default)("#x-meta-box-page-icon");var u=(0,s.default)('#page_template option[value*="template-blank"]');if(u.is(":checked")){f.css("display","block")}else{f.css("display","none")}r.change(function(){if(u.is(":checked")){f.css("display","block")}else{f.css("display","none")}});var v=(0,s.default)("#x-meta-box-portfolio");var b=(0,s.default)('#page_template option[value="template-layout-portfolio.php"]');if(b.is(":checked")){v.css("display","block")}else{v.css("display","none")}r.change(function(){if(b.is(":checked")){v.css("display","block")}else{v.css("display","none")}});var x=["template-blank-7.php","template-blank-3.php","template-blank-8.php","template-blank-6.php"];var m=(0,s.default)("#page_template");m.on("change",_);_();function _(){if(x.includes(m.val())){(0,s.default)("#x-meta-box-slider-above, #x-meta-box-slider-below").hide()}else{(0,s.default)("#x-meta-box-slider-above, #x-meta-box-slider-below").show()}}var y=(0,s.default)("#_x_slider_above");var k=y.parents("tr").siblings();if((0,s.default)("#_x_slider_above option:selected").text()==="Deactivated"){k.css("display","none")}y.change(function(){if((0,s.default)("#_x_slider_above option:selected").text()==="Deactivated"){k.css("display","none")}else{k.css("display","table-row")}});var h=(0,s.default)("#_x_slider_below");var g=h.parents("tr").siblings();if((0,s.default)("#_x_slider_below option:selected").text()==="Deactivated"){g.css("display","none")}h.change(function(){if((0,s.default)("#_x_slider_below option:selected").text()==="Deactivated"){g.css("display","none")}else{g.css("display","table-row")}});var w=(0,s.default)("#x-meta-box-portfolio-item-video");if(!(0,s.default)('input[name*="_x_portfolio_media"][value="Video"]').is(":checked")){w.css("display","none")}(0,s.default)('input[name*="_x_portfolio_media"]').change(function(){if(!(0,s.default)('input[name*="_x_portfolio_media"][value="Video"]').is(":checked")){w.css("display","none")}else{w.css("display","block")}});(0,s.default)(".wp-color-picker").wpColorPicker()})},function(e,a){e.exports=window.jQuery}]);
//# sourceMappingURL=x-meta.js.map