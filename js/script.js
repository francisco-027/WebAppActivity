
$(document).ready(function() {
    // LOGIN MODAL FUNCTIONALITY
      $("#openModalBtn").click(function(event) {
        event.preventDefault();
        $("#myModal").css("display", "block");
      });

      $(".close-button").click(function() {
        $("#myModal").css("display", "none");
      });
    
    // CART PAGE SELECT ALL BUTTON FUNCTIONALITY
      $("#selectAllCart").click(function(){
        if (this.checked) {
          $(".form-check-input").attr("checked", "checked");
        } else {
          $(".form-check-input").removeAttr("checked");
        }
      });

    // CART PAGE QUANTITY BUTTON FUNCTIONALITY
      $(function() {
        $('.plus').click(function() {
          var $input = $(this).prev('.input-box');
          var val = parseInt($input.val());
          if (val < parseInt($input.attr('max'))) {
            $input.val(val + 1);
          }
        });
        
        $('.minus').click(function() {
          var $input = $(this).next('.input-box');
          var val = parseInt($input.val());
          if (val > parseInt($input.attr('min'))) {
            $input.val(val - 1);
          }
        });
      });

    // CONTACT FORM VALIDATION
    $("#contactForm").validate();

  });