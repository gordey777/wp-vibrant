$(document).ready( function() {

   var config = {
        over: appreciate, // function = onMouseOver callback (REQUIRED)
        interval: 1000, // number = milliseconds delay before trying to call over
   };

   $(".user_vote").hoverIntent(config);

   $(".user_vote").hover(
      function() {
         $('.user_vote h4').removeClass('un-hovered');
         $("#vote_counter").removeClass('un-hovered');
         $('.user_vote h4').addClass('hovered');
         $("#vote_counter").addClass('hovered');
      },
      function() {
         $('.user_vote h4').removeClass('hovered');
         $("#vote_counter").removeClass('hovered');
         $('.user_vote h4').addClass('un-hovered');
         $("#vote_counter").addClass('un-hovered');
      }
   );

   $hover = 1;
   function appreciate(){
      post_id = $(this).attr("data-post_id");
      nonce = $(this).attr("data-nonce");

      if($hover == 1){
         $.ajax({
            type : "post",
            dataType : "json",
            url : myAjax.ajaxurl,
            data : {action: "my_user_vote", post_id : post_id, nonce: nonce},
            success: function(response) {
               if(response.type == "success") {
                  $("#vote_counter").html(response.vote_count);
                  $('.user_vote h4').html("Appreciated");
                  $('.user_vote h4').addClass('appreciated');
                  $('#vote_counter').addClass('appreciated');
               }
               else {
                  alert("Your vote could not be added");
               }
            }
         });
      }
      $hover ++;
   }

});