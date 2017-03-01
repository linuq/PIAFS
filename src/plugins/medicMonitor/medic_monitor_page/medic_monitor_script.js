function saveNewInfo(){

  //Get form elements
  var formElements = {};
  $(".newInfo").map(function (){
    formElements[$(this).attr("id")] = $(this).val();
  });

  //Call the function to modify
  jQuery.ajax({
    type: "POST",
    url: 'plugins/medicMonitor/medic_monitor_page.php',
    datatype: "json",
    data: {
      form_elements : formElements
    },
    success: function (response) {
      console.log(JSON.stringify(response));
      location.reload();
    },
    error: function (response) {
      $("#errorForm").show();
    }
  });
}
