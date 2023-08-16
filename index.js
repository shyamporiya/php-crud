// $().ready(function() {
//             // validate the comment form when it is submitted
//            // $("#signup").validate();

//             // validate signup form on keyup and submit
// $("#student_form1").validate({
//           rules: {
//                     f_name:{
//                         required: true,
//                         minlength: 2,
//                         maxlength:5
//                     },
//                     lastname: "required",
//                     address1: "required",
//                     city: "required",
//                     county: "required",
//                     postcode: "required",

//                     password_s: {
//                         required: true,
//                         minlength: 5
//                     },
//                     password_s_con: {
//                         required: true,
//                         minlength: 5,
//                         equalTo: "#password_s"
//                     },
//                     email: {
//                         required: true,
//                         email: true
//                     },

//                     agree: "required"
//            },
//            messages: {
//                     f_name:{
//                       required: "Please bla bla",
//                         minlength: "Your password must be at least 5 characters long",
//                         maxlength: "Your password must be at least 10 characters long"
//                     } ,
//                     lastname: "Please enter your last name",
//                     address1: "Please enter your addres",
//                     city: "Please enter your city/town",
//                     county: "Please enter your county",
//                     postcode: "Please enter your postcode",

//                     password: {
//                         required: "Please provide a password",
//                         minlength: "Your password must be at least 5 characters long"
//                     },
//                     confirm_password: {
//                         required: "Please provide a password",
//                         minlength: "Your password must be at least 5 characters long",
//                         equalTo: "Please enter the same password as above"
//                     },
//                     email: "Please enter a valid email address",
//                     agree: "Please accept our policy"
//                     }, 
//         submitHandler: function(form) {
//         $.ajax({
//             url: 'save.php',
//             type: 'post',
//             data: $('#student_form').serialize(),
//             success: function(response) {
//                // $('#answers').html(response);
//                alert('done');
//             }            
//         });
//     }
//             });

//         });