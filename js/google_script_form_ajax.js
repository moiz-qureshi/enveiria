var $form = $('form#test-form'),
    url = 'https://script.google.com/macros/s/AKfycbyEC82z-GjiyDGFbNPmmMuOELbL_w-5Sxfr0-FdFf7cXF9zcG4/exec'

$('#submit-form').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serializeObject()
  }).success(
    // do something
  );
})