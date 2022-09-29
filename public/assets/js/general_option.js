$(document).ready(function(){
  $(document).off('submit', '.general_option').on('submit', '.general_option', function(e){
      e.preventDefault();
      var obj = $(this),
      url = obj.attr('action');
      form_data = new FormData(obj[0]);
      $.ajax({
        url : url,
        dataType: 'json',
        contentType: false,
        processData: false,
        data : form_data,
        type : "POST",
        beforeSend: function () {
         obj.find('.search-btn').html('<i class="fa fa-spinner fa-spin"></i> Loading...');
        },
        success: function(resp) {
        // $('.details').html(resp.view);
         obj.find('.search-btn').html('<i class="fa fa-search"></i> खोज्नुहोस');

        }, 
        error: function (err) {
          //console.log(err.responseJSON);
          //console.log('Internal Server Error!');
          if (err.status == 422) { // when status code is 422, it's a validation issue
            $('#success_message').fadeIn().html(err.responseJSON.message);
            
            // display errors on each form field
            $.each(err.responseJSON.errors, function (i, error) {
            
              var el = $(document).find('[name="'+i+'"]');
              // var el = $(document).closest('.' + i).find("input");
              // console.log(el);
              //el.after($('  '+ '<div class="text-danger"><i class="fa fa-info"></i>' + error[0] + '</div>'));
              $("#" + i ).text(error[0]);
            });
        }
        }
      });
  });
});