<!DOCTYPE html>
<?php
require_once "db.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"> </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="script.js"></script>


    <title>Registration</title>
    <style>
        .error{
            color:red
        }
        </style>
</head>

<body>

    <h1 class="text-center text-danger">One Time Registration </h1>

<div class="container p-3 my-3 border">
    <form action="" method="post" id="form">
        <div class="row mb-2">
            <div class="col-2">
                <label class="form-label">Name</label></div>
            <div class="col-4">
                <input type="text" class="form-control" name="name" id="name"></div>

            <div class="col-2">
                <label class="form-label">Age</label>
            </div>
            <div class="col-4">
                <input type="number" min="18" max="30" class="form-control" name="age" id="age">
            </div>
        </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label">Phone no.</label>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="phn" id="phn">
        </div>

        <div class="col-2">
            <label class="form-label">Email</label>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="mail" id="mail">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label">Gender</label>
        </div>
        <div class="col-2">
            <input type="radio" name="gender" id="1" value="male"> Male
        </div>
        <div class="col-2">
            <input type="radio" name="gender" id="2" value="female">Female
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label">Present Address</label>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="door" id="door" placeholder="enter doorno.">
        </div>
        <div class="col-2"></div>
        <div class="col-4">
            <input type="text" class="form-control" name="flat" id="flat" placeholder="enter flat">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label"></label>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="street" id="street" placeholder="enter street">
        </div>

        <div class="col-2">
            <label class="form-label">State</label>
        </div>
        <div class="col-4">
            <select name="state" id="state" class="form-select">
                <option value="">Choose State</option>
                <?php
                    $query="SELECT state_id, state_name FROM public.state ORDER BY state_id";
                    $result = pg_query($query);

                    while($row = pg_fetch_assoc($result)) {
                        printf ("<option value='$row[state_id]'>$row[state_name]</option>");
                    }
                ?>
            </select>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label">District</label>
        </div>
        <div class="col-4">
            <select name="district" id="district" class="form-select">
                <option value="">Choose District</option>
            </select>
        </div>

        <div class="col-2">
            <label class="form-label">City</label>
        </div>
        <div class="col-4">
            <select name="city" id="city" class="form-select">
                <option value="">Choose City</option>
            </select>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label">Pincode</label>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="pincode" id="pincode">
        </div>  
    </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label">Permanent Address</label>
        </div>
        <div class="col-2">
            <label class="switch"></label>
            <input type="checkbox" name="check">
            <span class="slider round"></span>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2"></div>
        <div class="col-4">
            <input type="text" class="form-control" name="door1" id="door1" 
            placeholder="enter doorno.">
        </div>
        <div class="col-2"></div>
        <div class="col-4">
            <input type="text" class="form-control" name="flat1" id="flat1" placeholder="enter flat">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label"></label>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="street1" id="street1"
            placeholder="enter street">
        </div>
        <div class="col-2">
            <label class="form-label">State</label></div>
        <div class="col-4">
            <select name="state1" id="state1" class="form-select">
                <option value="">choose state</option>
                <?php
                    $query="SELECT state_id, state_name FROM public.state ORDER BY state_id";
                    $result = pg_query($query);

                    while($row = pg_fetch_assoc($result)) {
                        printf ("<option value='$row[state_id]'>$row[state_name]</option>");
                    }
                ?>
            </select>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label">District</label>
        </div>
        <div class="col-4">
            <select name="district1" id="district1" class="form-select">
                <option value="">Choose District</option>
            </select>
        </div>
        <div class="col-2">
            <label class="form-label">City</label>
        </div>
        <div class="col-4">
            <select name="city1" id="city1" class="form-select">
                <option value="">Choose City</option>
            </select>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label">Pincode</label>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="pincode1" id="pincode1">
        </div>  
    </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form label">Qualification</label>
        </div>
        <div class="col-2">
            <button type="button" id="add" class="btn btn-primary">Add</button>&nbsp;&nbsp;
        </div>
    </div>

    <table id="tab_logic">
        <tbody>
          <tr>
            <td>
              <input type="text" name="edu[]" placeholder='education' class="form-control" />
            </td>
            <td>
              <input type="text" name="year[]" placeholder="year" class="form-control" />
            </td>
            <td>
              <input type="text" name="board[]" placeholder="board" class="form-control" />
            </td>
            <td>
              <input type="text" name="marks[]" placeholder="marks"class="form-control" />
            </td> 
          </tr>
        </tbody>
    </table>&emsp;

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label">Do you have any disability</label>
        </div>
        <div class="col-2">
            <input type="radio" name="disability" id="1" value="yes">Yes
        </div>
        <div class="col-2">
            <input type="radio" name="disability" id="2" value="no">No
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label">Type of disablity</label>
        </div>
        <div class="col-2">
            <select name="dis" id="dis" class="form-select">
                <option value="">choose option</option>
                <option value="Blindness">Blindness</option>
                <option value="Low vision">Low vision</option>
                <option value="Hearing impairement">Hearing impairement</option>
                <option value="Locomotor Disability">Locomotor Disability</option>
                <option value="Cerebral Palsy">Cerebral Palsy</option>
            </select>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label">Do you need a scribe?</label>
        </div>
        <div class="col-2">
            <input type="radio" name="scribe" id="s1" value="Yes">Yes
        </div>
        <div class="col-2">
            <input type="radio" name="scribe" id="s2" value="No">No
        </div>     
    </div>


</body>&emsp;
    <div class="row mb-2">
        <div class="col-2">
            <label class="form-label">Exam Center</label>
        </div>
        <div class="col-3">
            <select name="center1" id="center1" class="form-select">
                <option value="">center 1</option>
            </select>
        </div>
        <div class="col-3">
            <select name="center2" id="center2" class="form-select">
                <option value="">center 2</option>
            </select>
        </div>
        <div class="col-3">
            <select name="center3" id="center3" class="form-select">
                <option value="">center 3</option>
            </select>
        </div>

    </div>
    <div class="text-center">
        <button class="btn btn-success">Submit</button>
    </div>
    </form>
    
<script>
        $(document).ready(function() {
            $("#add").click(function(){
                var row="<tr><td><input type='text' name='edu[]' placeholder='10' class='form-control' /></td><td><input type='text' name='year[]' placeholder='year' class='form-control' /></td><td><input type='text' name='board[]' placeholder='board' class='form-control' /></td><td><input type='text' name='marks[]'' placeholder='marks'class='form-control'/></td><td><button type='button' id='remove' class='btn btn-secondary mb-2'>-</button></td> </tr>";
            $('#tab_logic tbody').append(row);
            $('tbody').on("click","#remove",function(){
                $(this).closest("tr").remove();
            });
  });
});

$(document).ready(function(){
    $('#form').validate();
});

    // Ajax code for fetching district values using State id
$(document).ready(function(){  
    $("#state").on("change", function(){
    var state_id = $("#state").val();
        jQuery.ajax({  
            url: 'ajax1.php',  
            type: 'POST', 
            data :{id:state_id},
            success: function(data) {  
                // alert(data);
                $("#district").html(data);                
            }  
        });  
  });  
});
// Ajax code for fetching city values using district id
$(document).ready(function(){  
  $("#district").on("change", function(){
    var district_id = $("#district").val();

        jQuery.ajax({  
            url: 'ajax2.php',  
            type: 'POST', 
            data :{id:district_id},
            success: function(data) {  
            //alert(data);
                $("#city").html(data);                
            }  
        });  
        });  
}); 

$(document).ready(function(){
    $("#state1").on('change',function(){
        var state_id1=$("#state1").val();
        jQuery.ajax({
            url:'ajax1.php',
            type:'POST',
            data:{id:state_id1},
            success:function(data){
                //alert(data);
                $("#district1").html(data);
            }
        });
    });
});

$(document).ready(function(){
    $("#district1").on('change',function(){
        var district_id1=$("#district1").val();
        jQuery.ajax({
            url:'ajax2.php',
            type:'POST',
            data:{id:district_id1},
            success:function(data){
                //alert(data);
                $("#city1").html(data);
            }
        });
    });
});

</script>

</div>  
</body>
</html>