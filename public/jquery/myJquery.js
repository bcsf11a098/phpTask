
var C="false",U="false";
var order="ASC";
var data="";
var updateAlbumFormId='';


$(document).ready(function()
{
    $("#s1").val("");
    data="";

    $("#s1").on("keyup",function()
    {
        data="";
        $("#createAlbumForm").hide();
        $("#C1").val("");
        $("#C2").val("");
        $("#CR").val("");
        $('input[name=file]').val("");
            
        $(".updateAlbumForm").hide();
        $("#U1").val("");
        $("#U2").val("");
        $('input[name=file1]').val("");
        data1="search="+$("#s1").val();   
        $.ajax(
        {
            url: "/search",
            type: "GET",
            data: data1,
            success: function(result)
            {
                $("#body").html(result);
            },
            error: function()
            {
                alert('error');  
            }
         });
    });

    $('body').on("click",".delete",function()
    {
        ////////handle toggling ///////////

        $("#createAlbumForm").hide();
        $("#C1").val("");
        $("#C2").val("");
        $("#CR").val("");
        $('input[name=file]').val("");
            
        $(".updateAlbumForm").hide();
        $("#U1").val("");
        $("#U2").val("");
        $('input[name=file1]').val("");

        ///////// END ////////////

        album=$(this).parents(".song").attr("id");	
    	setTimeout(function()
    	{
    	    if (confirm("Do you want to delete?") == true) 
    	    {
    	    	$.ajax(
    			{
    		        url: "delete/"+album,
    		        type: "get",
    		        
    		        success: function( result)
    		        {
    		        	$('#'+album).parent().remove();
                        alert("Deleted successfully");
    		        },
    		        error: function()
    		        {
    		          alert('error');  
    		        }
    	        });
    	    } 
        },150);
    });


    $('body').on("click","#createAlbum",function()
    {
        if($("#s1").val()=="")
        {
        	if(U=="true")
            {
                $(".updateAlbumForm").hide();
                $("#U1").val("");
                $("#U2").val("");
                $('input[name=file1]').val("");
                $("#createAlbumForm").slideToggle();
                U="false";
                C="true";
                updateAlbumFormId ="";
            }
            else
            {
                $("#createAlbumForm").slideToggle();
                $("#C1").val("");
                $("#C2").val("");
                $("#CR").val("");
                $('input[name=file]').val("");

                C="true";
                updateAlbumFormId ="";
            }
        }

    });

    $("body").on("submit","#createform",function(event)
    {
        event.preventDefault();

        if(($("#C1").val()!="") && ($("#C2").val()!="")&& $('input[name=file]').val()!="")
        {
            var fData = new FormData();
            
            fData.append('file', $('input[name=file]')[0].files[0]);
            fData.append('songName', $("#C1").val());
            fData.append('artistName', $("#C2").val());
            fData.append('rating', $("#CR").val());
            $.ajaxSetup(
            {
                headers:{
    		      'X-CSRF-TOKEN': $('meta[name="create"]').attr('content')
                }
    		});

            $.ajax(
            {
                url: "/create",
                type: "POST",
                data: fData,
                contentType: false,
                processData: false,
                success: function(result)
                {
                	$("#body").append(result);
                	alert("Created successfully");
                ///// toggle create form code///////
                	$("#createAlbumForm").slideToggle();
    		        $("#C1").val("");
    		        $("#C2").val("");
    		        $("#CR").val("");
    		        $('input[name=file]').val("");
                /////// END ///////
    			},
            	error: function(result)
            	{
            		alert("error in insertion");  
            	}
    	    });
        }
        else
        {
            alert(" Fill the required fields and select image.");
        }
    });

    $("body").on("submit","#updateform",function(event)
    {
        event.preventDefault();
        if(($("#U1").val()!="") && ($("#U2").val()!=""))
        {
            var fData = new FormData();
            fData.append('file', $('input[name=file1]')[0].files[0]);
            fData.append('songName', $("#U1").val());
            fData.append('artistName', $("#U2").val());
            fData.append('rating', $("#UR").val());
            fData.append('_method', "PATCH");
            $.ajaxSetup(
            {
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="update"]').attr('content')
                }
    		});

            $.ajax(
            {
                url: "/update/"+updateAlbumFormId,
                type: "POST",
                data: fData,
                contentType: false,
                processData: false,
                success: function(result)
                {
                	$("#body").html(result);
                	alert("Updated successfully");
                    //// toggle the update form code////
                        $(".updateAlbumForm").slideToggle();
                        $("#U1").val("");
                        $("#U2").val("");
                        $('input[name=file1]').val("");
                    ////// end ///////
                },
            	error: function()
            	{
            		alert('error ');  
            	}
    	    });
        }
        else
        {
            alert(" Fill the required fields and select image.");
        }
    });

    $('body').on("click",".updatePanel",function()
    {
    	if($(".updateAlbumForm").css("display")=="none")
    	{
    		updateAlbumFormId="";
    	}
    	if( updateAlbumFormId=="" ||  updateAlbumFormId == $(this).parents(".song").attr("id") )
    	{
        	if(C=="true")
        	{
            	$("#createAlbumForm").hide();
                $("#C1").val("");
                $("#C2").val("");
                $("#CR").val("");
                $('input[name=file]').val("");
            
            	$(".updateAlbumForm").slideToggle();
               	updateAlbumFormId=$(this).parents(".song").attr("id");
            	C="false";
            	U="true"
        	}
        	else
        	{
            	$(".updateAlbumForm").slideToggle();
            	U="true";
            	updateAlbumFormId=$(this).parents(".song").attr("id");
        	}
        }
        else
        {
        	updateAlbumFormId = $(this).parents(".song").attr("id");
        }
        $("#U1").val($(this).siblings(".name").text());
        $("#U2").val($(this).siblings(".artist").text());
        $("#UR").val($(this).siblings(".ratingValue").val());
    });

    $("body").on("click",".submitt",function()
    {

     if($(this).attr("value")=="cancleU")
    	{
    		$(".updateAlbumForm").slideToggle();
            $("#U1").val("");
            $("#U2").val("");
            $('input[name=file1]').val("");
        }
    	else if($(this).attr("value")=="cancleC")
    	{
    		$("#createAlbumForm").slideToggle();
            $("#C1").val("");
            $("#C2").val("");
            $("#CR").val("");
            $('input[name=file]').val("");
        }

    });

    $("body").on("click",".sort",function()
    {
        $("#createAlbumForm").hide();
        $("#C1").val("");
        $("#C2").val("");
        $("#CR").val("");
        $('input[name=file]').val("");
            
        $(".updateAlbumForm").hide();
        $("#U1").val("");
        $("#U2").val("");
        $('input[name=file1]').val("");
        
        order="ASC";
        data="search="+$("#s1").val()+"&sort="+$(this).data("value")+"&order="+order; 
        sorting(data);
    });

    $("body").on("click","#sortOrder",function()
    {
        if(data!="")
        {
            $("#createAlbumForm").hide();
            $("#C1").val("");
            $("#C2").val("");
            $("#CR").val("");
            $('input[name=file]').val("");
                
            $(".updateAlbumForm").hide();
            $("#U1").val("");
            $("#U2").val("");
            $('input[name=file1]').val("");
            if(order=="ASC")
            {
                order='DESC';
                data=data.replace("ASC",'DESC');
            }
            else
            {
                order='ASC';
                data=data.replace("DESC",'ASC');
            }
            sorting(data);
        }
    });

    function sorting(data)
    {
        $.ajax(
        {
            url: "/search-sort",
            type: "GET",
            data: data,
            success: function(result)
            {
                $("#body").html(result);
            },
            error: function()
            {
                alert('error');  
            }
        });
    }
});