//uppercase
$(function() {
    $('#upper').keyup(function() {
        this.value = this.value.toUpperCase();
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
});
