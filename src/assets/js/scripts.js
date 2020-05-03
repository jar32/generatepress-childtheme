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