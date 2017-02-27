function sendUserInfo(){

  //Get form elements
  var formElements = {};

  $(".formElement").map(function (){
    formElements[$(this).attr("id")] = $(this).val();
  });

  //Call the function to modify
  jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/user_info_page/user_info_modify.php',
    datatype: "json",
    data: {
      form_elements : formElements
    },
    complete: function (response) {
      console.log(JSON.stringify(response));
      location.reload();
    },
    error: function (response) {
      console.log(response);
    }
  });
}
