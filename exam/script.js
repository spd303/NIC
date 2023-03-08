jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });

$(document).ready(function(){
    jQuery.validator.addMethod("nrule", function(value, element){
        if (/^[a-zA-Z ]+$/.test(value)) {
            return true ;  // FAIL validation when REGEX matches
        } else {
            return false;   // PASS validation otherwise
        };
    },
); 
    $("#form").validate(
        {
            rules:{
                name:{
                    required:true,
                    minlength:4,
                    nrule:true
                },
                phn:{
                    required:true,
                    max:10,
                    min:10
                },
                mail:{
                    required: true,
                    email: true
                },
                age:{
                    required:true
                },
                gender:{
                    required:true
                },
                door:{
                    required:true
                },
                flat:{
                    required:true
                },
                street:
                {
                    required:true
                },
                state:{
                    required:true
                },
                district:{
                    required:true
                },
                city:{
                    required:true
                },
                pincode:{
                    required:true
                },
                door1:{
                    required:true
                },
                flat1:{
                    required:true
                },
                street1:
                {
                    required:true
                },
                state1:{
                    required:true
                },
                district1:{
                    required:true
                },
                city1:{
                    required:true
                },
                pincode1:{
                    required:true
                }
            },
            messages:{
                name:{
                    required:"Name is required",
                    minlength:"Enter atleast 4 letters",
                    nrule:"Invalid name"
                },
                phn:{
                    required:"Please enter phone number",
                    max:"Cannot enter more than 10",
                    min:"Less than 10 not accepted"

                },
                mail:{
                    required:"Please enter your mail"
                },
                age:{
                    required:"Please enter your age"
                },
                gender:{
                    required:"Please choose your gender"
                },
                door:{
                    required:"Please fill your door number"
                },
                flat:{
                    required:"Please enter flat"
                },
                street:
                {
                    required:"Please enter street"
                },
                state:{
                    required:"Please select state"
                },
                district:{
                    required:"Please select district"
                },
                city:{
                    required:"Please select city"
                },
                pincode:{
                    required:"Please enter pincode"
                },
                door1:{
                    required:"Please fill your door number"
                },
                flat1:{
                    required:"Please enter flat"
                },
                street1:
                {
                    required:"Please enter street"
                },
                state1:{
                    required:"Please select state"
                },
                district1:{
                    required:"Please select district"
                },
                city1:{
                    required:"Please select city"
                },
                pincode1:{
                    required:"Please enter pincode"
                }
            }
        }
    );
});