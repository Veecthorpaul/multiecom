$(document).ready(function(){
    //Check if Admin Password is correct or not
$('#currentpassword').keyup(function(){
    var currentpassword = $("#currentpassword").val();
    // alert(currentpassword);
    $.ajax({
        type:'post',
        url:'/admin/checkcurrentpassword',
        data:{currentpassword:currentpassword},
        success:function(resp){
            // alert(resp);
            if(resp=="false"){
                $("#checkcurrentpassword").html("<font color=red>Current Password is incorrect</font>");
            } else if(resp=="true"){
                $("#checkcurrentpassword").html("<font color=green> Current Password is correct </font>");
            }
        }, error:(function(){
            alert("Error");
        })

    });
});

//Update Sections Status
$('.updatesectionstatus').click(function(){
    var status = $(this).text();
    var section_id = $(this).attr("section_id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type:'post',
        url:'/admin/updatesectionstatus',
        data:{status:status,section_id:section_id},
        success:function(resp){
            // alert(resp['status']);
            // alert(resp['section_id']);
            if(resp['status']==0){
                $("#section"+section_id).html("<a class='updatesectionstatus' href='javascript:void(0)'>Inactive</a>")
            } else if(resp['status']==1){
                $("#section"+section_id).html("<a class='updatesectionstatus' href='javascript:void(0)'>Active</a>")
            }
        },error:function(){
            alert("Error");
        }
    });
});


//Update Categories Status
$('.updatecategorystatus').click(function(){
    var status = $(this).text();
    var cat_id = $(this).attr("cat_id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type:'post',
        url:'/admin/updatecategorystatus',
        data:{status:status,cat_id:cat_id},
        success:function(resp){
            // alert(resp['status']);
            // alert(resp['section_id']);
            if(resp['status']==0){
                $("#cat"+cat_id).html("<a class='updatecategorystatus' href='javascript:void(0)'>Inactive</a>")
            } else if(resp['status']==1){
                $("#cat"+cat_id).html("<a class='updatecategorystatus' href='javascript:void(0)'>Active</a>")
            }
        },error:function(){
            alert("Error");
        }
    });
});

//Update Products Status
$('.updateproductstatus').click(function(){
    var status = $(this).text();
    var product_id = $(this).attr("product_id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type:'post',
        url:'/admin/updateproductstatus',
        data:{status:status,product_id:product_id},
        success:function(resp){
            if(resp['status']==0){
                $("#product-"+product_id).html("<a class='updateproductstatus' href='javascript:void(0)'>Inactive</a>")
            } else if(resp['status']==1){
                $("#product-"+product_id).html("<a class='updateproductstatus' href='javascript:void(0)'>Active</a>")
            }
        },error:function(){
            alert("Error");
        }
    });
});

//Update Attribute Status
$('.updateattributestatus').click(function(){
    var status = $(this).text();
    var attribute_id = $(this).attr("attribute_id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type:'post',
        url:'/admin/updateattributestatus',
        data:{status:status,attribute_id:attribute_id},
        success:function(resp){
            if(resp['status']==0){
                $("#attribute-"+attribute_id).html("Inactive");
            } else if(resp['status']==1){
                $("#attribute-"+attribute_id).html("Active");
            }
        },error:function(){
            alert("Error");
        }
    });
});

//Update Aternate Image Status
$('.updateimagestatus').click(function(){
    var status = $(this).text();
    var image_id = $(this).attr("image_id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type:'post',
        url:'/admin/updateimagestatus',
        data:{status:status,image_id:image_id},
        success:function(resp){
            if(resp['status']==0){
                $("#image-"+image_id).html("Inactive");
            } else if(resp['status']==1){
                $("#image-"+image_id).html("Active");
            }
        },error:function(){
            alert("Error");
        }
    });
});

//Update Brand Status
$('.updatebrandstatus').click(function(){
    var status = $(this).children("i").attr("status");
    var brand_id = $(this).attr("brand_id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type:'post',
        url:'/admin/updatebrandstatus',
        data:{status:status,brand_id:brand_id},
        success:function(resp){
            if(resp['status']==0){
                $("#brand-"+brand_id).html("<i class='fa fa-toggle-off' aria-hidden='true' status='Inactive'></i>");
            } else if(resp['status']==1){
                $("#brand-"+brand_id).html("<i class='fa fa-toggle-on' aria-hidden='true' status='Active'></i>");
            }
        },error:function(){
            alert("Error");
        }
    });
});

//Append Categories Level
$('#section_id').change(function(){
    var section_id = $(this).val();
    // alert(section_id);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type: 'POST',
        url: '/admin/append-categories-level',
        data:{section_id:section_id},   
        success:function(resp){
$("#appendCategoriesLevel").html(resp);
        },error:function(){
            alert("Error");
        }
    });
});


//Confirm Delete with Jquery
// $(".confirmDelete").click(function(){
//     var name = $(this).attr("name");
//     if(confirm("Are you sure you want to delete this "+name+"?")){
//         return true;
//     } return false;
// });


//Confirm Delete with Sweetalert
// $(".confirmDelete").click(function(){
    $(document).on("click",".confirmDelete", function(){
    var record = $(this).attr("record");
    var recordid = $(this).attr("recordid");
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
        //   Swal.fire(
        //     'Deleted!',
        //     'Your file has been deleted.',
        //     'success'
        //   )
          window.location.href="/admin/delete-"+record+"/"+recordid;
        }
      });
});

//Products attributes add and remove 
var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><div style="height: 10px; margin-top: 2%"></div><input type="number" name="price[]" style="width: 40%" placeholder="Price" /> &nbsp;<input type="number" name="stock[]" style="width: 40%" placeholder="Stock" /><a href="javascript:void(0);" class="remove_button">Remove</div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});