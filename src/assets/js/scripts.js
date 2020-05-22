/**
 * Main scripts file
 */

/***************************************
 * View more button events
 **************************************/
jQuery(".view-more").click(function () {
    var aux = jQuery(this).attr('id').split("-");
    var id = aux[2];
    jQuery("#view-more-block-"+id).slideToggle();
})


/***************************************
 * Doofinder Integration
 **************************************/
jQuery( document ).ready(function() {
    console.log("dufainder");
var doofinder_script ='//cdn.doofinder.com/media/js/doofinder-classic.7.latest.min.js';
(function(d,t){var f=d.createElement(t),s=d.getElementsByTagName(t)[0];f.async=1;
f.src=('https:'==location.protocol?'https:':'http:')+doofinder_script;
f.setAttribute('charset','utf-8');
s.parentNode.insertBefore(f,s)}(document,'script'));

var dfClassicLayers = [{
  "hashid": "b84241003e0def6e43a4416858780ecb",
  "zone": "eu1",
  "display": {
    "lang": "es"
  },
  "queryInput": "input[name='s']",
  "toggleInput": "input[name='s']"
}];
});