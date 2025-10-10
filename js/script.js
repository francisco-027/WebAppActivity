
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
       // Add custom rule to not allow only spaces
       $.validator.addMethod("noOnlySpaces", function (value, element) {
          return $.trim(value).length > 0;
          }, "Spaces only are not allowed.");

       // Add custom rule for letters only
       $.validator.addMethod("lettersOnly", function (value, element) {
          return /^[a-zA-Z]+$/.test(value);
          }, "Only letters are allowed.");

       // Initialize validation
       $("#contactForm").validate({
          rules: {
            firstname: {
              required: true,
              lettersOnly: true,
              noOnlySpaces: true
            },
            lastname: {
              required: true,
              lettersOnly: true,
              noOnlySpaces: true
            },
            email: {
              required: true,
              email: true, // jQuery validation already checks for @
              noOnlySpaces: true
            },
            subject: {
              required: true,
              noOnlySpaces: true
            },
            message: {
              required: true,
              noOnlySpaces: true
            }
          },
          messages: {
            firstname: {
              required: "Please enter your first name."
            },
            lastname: {
              required: "Please enter your last name."
            },
            email: {
              required: "Please enter your email.",
              email: "Please enter a valid email with '@'."
            },
            subject: {
              required: "Please enter a subject."
            },
            message: {
              required: "Please enter your message."
           }
          },
          errorElement: "div",
          errorClass: "error",
          highlight: function(element, errorClass) {
            $(element).addClass("is-invalid");
          },
          unhighlight: function(element, errorClass) {
            $(element).removeClass("is-invalid");
          },
          submitHandler: function (form) {
            alert("Form submitted successfully!");
            form.submit(); // Actually submit the form
          }
      });

      // LOGIN FORM VALIDATION
      $("#loginForm").validate({
        rules: {
          loginemail: {
            required: true,
            email: true,
            noOnlySpaces: true
          },
          password: {
            required: true,
            noOnlySpaces: true
          }
        },
        messages: {
          loginemail: {
            required: "Please enter your email.",
            email: "Please enter a valid email address."
          },
          password: {
            required: "Please enter your password."
          }
        },
        errorElement: "div",
        errorClass: "error",
        highlight: function(element, errorClass) {
          $(element).addClass("is-invalid");
        },
        unhighlight: function(element, errorClass) {
          $(element).removeClass("is-invalid");
        },
        submitHandler: function (form) {
          alert("Login form submitted successfully!");
          form.submit(); // Actually submit the form
        }
      });

      //
      $("#showRegisterForm").click(function(event) {
        event.preventDefault();
        $(".login").css("display", "none");
        $(".register").css("display", "block");
      });

      $("#showLoginForm").click(function(event) {
        event.preventDefault();
        $(".register").css("display", "none");
        $(".login").css("display", "block");
      });

      // PASSWORD SHOW/HIDE TOGGLE
      $('#showPass').click(function() {
        // Check if checkbox is checked
        if ($(this).is(':checked')) {
          // Change input type to text
          $('#registerpassword').attr('type', 'text');
        } else {
          // Change it back to password
          $('#registerpassword').attr('type', 'password');
        }
      });

      $('#showPass').click(function() {
        // Check if checkbox is checked
        if ($(this).is(':checked')) {
          // Change input type to text
          $('#password').attr('type', 'text');
        } else {
          // Change it back to password
          $('#password').attr('type', 'password');
        }
      });

  });