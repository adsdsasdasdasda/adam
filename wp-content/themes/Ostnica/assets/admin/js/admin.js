
jQuery(function(){
    jQuery(".imageLogo").hide();
    jQuery("input[id='customRadioInline1']").click(function(){
        jQuery(".textLogo").show();
        jQuery(".imageLogo").hide();
    });
    jQuery("input[id='customRadioInline2']").click(function(){
        jQuery(".textLogo").hide();
        jQuery(".imageLogo").show();
    });
});
jQuery(function(){
    jQuery(".humberger_menu").hide();
    jQuery("input[id='inlineRadio1']").click(function(){
        jQuery(".standard_menu").show();
        jQuery(".humberger_menu").hide();
    });
    jQuery("input[id='inlineRadio2']").click(function(){
        jQuery(".standard_menu").hide();
        jQuery(".humberger_menu").show();
    });

    jQuery('.remove_date').on('click', function(){
        // console.log("hello");
        jQuery(this).parent().remove();
    });
});

jQuery(function(){
    jQuery(".cd_brand_color").on('input',function(){
    var colorCode = jQuery(".cd_brand_color").val();
    jQuery(this).siblings("input[type='hidden']").val(colorCode);
    });

    jQuery(".cd_link_color").on('input',function(){
    var colorCode1 = jQuery(".cd_link_color").val();
    jQuery(this).siblings("input[type='hidden']").val(colorCode1);
    });

    jQuery(".cd_site_bg").on('input',function(){
    var colorCode2 = jQuery(".cd_site_bg").val();
    jQuery(this).siblings("input[type='hidden']").val(colorCode2);
    });

    jQuery(".cd_logocolor").on('input',function(){
    var colorCode3 = jQuery(".cd_logocolor").val();
    jQuery(this).siblings("input[type='hidden']").val(colorCode3);
    });

    jQuery(".cd_paracolor").on('input',function(){
    var colorCode4 = jQuery(".cd_paracolor").val()
    jQuery(this).siblings("input[type='hidden']").val(colorCode4);
    });

    jQuery(".cd_headcolor").on('input',function(){
    var colorCode5 = jQuery(".cd_headcolor").val()
    jQuery(this).siblings("input[type='hidden']").val(colorCode5);
    });

    jQuery(".cd_menucolor").on('input',function(){
    var colorCode6 = jQuery(".cd_menucolor").val()
    jQuery(this).siblings("input[type='hidden']").val(colorCode6);
    });

    jQuery(".cd_humbergercolor").on('input',function(){
    var colorCode7 = jQuery(".cd_humbergercolor").val()
    jQuery(this).siblings("input[type='hidden']").val(colorCode7);
    });

    jQuery(".pageTitle_color").on('input',function(){
    var colorCode8 = jQuery(".pageTitle_color").val()
    jQuery(this).siblings("input[type='hidden']").val(colorCode8);
    });
    
    jQuery(".breadcumb_fontcolor").on('input',function(){
    var colorCode9 = jQuery(".breadcumb_fontcolor").val()
    jQuery(this).siblings("input[type='hidden']").val(colorCode9);
    }); 

    jQuery(".footer_fontColor").on('input',function(){
    var colorCode10 = jQuery(".footer_fontColor").val()
    jQuery(this).siblings("input[type='hidden']").val(colorCode10);
    });
     //code by abhay on 11-03-2022 start
    jQuery(".footer_bg_color").on('input',function(){
    var footer_bg_color = jQuery(".footer_bg_color").val()
    jQuery(this).siblings("input[type='hidden']").val(footer_bg_color);
    });
    //code by abhay on 11-03-2022 end

    jQuery(".header_bg").on('input',function(){
    var colorCode11 = jQuery(".header_bg").val()
    jQuery(this).siblings("input[type='hidden']").val(colorCode11);
    });

    

    
    

    jQuery("#check_virtual_tour").click(function(){
        if(jQuery(this).prop("checked") == false){
            jQuery("#cd_dates").prop("checked",false);
            jQuery("#cd_weeks").prop("checked",false);
            jQuery(".weekdays").hide();
            jQuery(".date-wise").hide();
            jQuery("#availability_tbody").html('');
        }
    })

    
    
    if(jQuery("#cd_dates").is(":checked")){
        jQuery(".weekdays").hide();
        // jQuery(".date-wise").show();

        var check_tour = true;
        if (jQuery("#in-tours-type-31").is(":checked")){
            check_tour = false;
        }
        if (jQuery("#in-tours-type-30").is(":checked")){
            check_tour = false;
        }

        if(check_tour && jQuery("#check_virtual_tour").prop('checked') == false){
            // jQuery("#check_tour_checkbox_msg").show();
            jQuery("#cd_dates").prop("checked",false);
            jQuery(".date-wise").hide();
        }
        else{
            jQuery(".date-wise").show();
        }
    }
    else{
        jQuery(".weekdays").hide();
    }
    if(jQuery("#cd_weeks").is(":checked")){
        jQuery(".weekdays").show();
        jQuery(".date-wise").hide();
    }
    else{
        jQuery(".weekdays").hide();
    }

    jQuery(".week_choice").click(function(){
        // console.log(jQuery(this).val());

        var html = "";
        var value = jQuery(this).val();
        var name = jQuery(this).attr('data-name');
        
        var slot_arr = jQuery("#slot_arr").val();
        slot_arr = JSON.parse(slot_arr);

        if(jQuery(this).prop("checked") == true){
            // html += '<tr id="'+value+'"><td><input type="hidden" name="dates[]" class="dates" data-date="'+value+'" value="'+value+'" readonly="readonly"><input type="text" value="'+name+'" readonly="readonly"></td><td><input type="text" name="9am['+value+']" class="9am"></td><td><input type="text" name="12pm['+value+']" class="12pm"></td><td><input type="text" name="6pm['+value+']" class="6pm"></td></tr>';

            html += '<tr id="'+value+'"><td><input type="hidden" name="dates[]" class="dates" data-date="'+value+'" value="'+value+'" readonly="readonly"><input type="text" value="'+name+'" readonly="readonly"></td>';
            jQuery.each(slot_arr, function(key, slot){
                // html += '<td><input type="text" name="'+slot+'['+value+']" class="slot '+slot+'"><span class="cd_remove_slot" cd_time="'+slot+'" cd_date="'+value+'"><i class="fas fa-minus-circle" style="color: red;"></i></span></td>';
                html += '<td><span class="cd_remove_slot" cd_time="'+slot+'" cd_date="'+value+'"><i class="fas fa-plus-circle" style="color: green;"></i></span></td>';
            })
            html += "</tr>";
        
            jQuery("#availability_tbody").append(html);
        }
        else{
            jQuery("#" + value).remove();
        }
    });
});
 


function ajax_update_google_font_items(){
    var site_fontfamily = "";
    jQuery.ajax({
        type: 'get', // Adding Post method
        // url: my_ajax_object.ajax_url,  // Including ajax file
        url: cd_ajax_path,
         data: {'action': 'cd_update_google_font_items'},

        success: function(data){
            // console.log(data);
            site_fontfamily = data;
            jQuery.ajax({
                type: 'get', // Adding Post method
                url: 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyBqSc7lM1owRnbmdz1HX1mzyBQyvW82rUw', // Including ajax file
                success: function(response){
                    // console.log(response.items);
                    var html = '';
                    jQuery.each(response.items, function( index, value ) {
                      // console.log(site_fontfamily + "---" + value.family);
                       html += '<option value="'+value.family+'" '+((site_fontfamily == value.family) ? "selected" : "" )+'>'+value.family+'</option>';
                    });

                    jQuery("#font_family").html(html);
                },

            });
        },

    });
 
    
}

window.onload = function(){
  ajax_update_google_font_items();
  // console.log("hello");
}

/*Deepak*/



jQuery(document).ready(function(){
    jQuery(document).on("click", "span.remove" , function() {
        jQuery(this).parent().remove();
    });

    jQuery(document).on('click','.cd_remove_slot', function(){
        var pre_html = jQuery(this).prev()[0];
        
        if(pre_html == undefined){
            var cd_time = jQuery(this).attr("cd_time");
            var cd_date = jQuery(this).attr("cd_date");

            jQuery(this).before('<input type="text" name="' + cd_time+'['+cd_date+']'+ '" class="slot '+cd_time+'" value="">');
            jQuery(this).html('<i class="fas fa-minus-circle" style="color: red;"></i>');
        }
        else{
            jQuery(this).prev().remove();
            jQuery(this).html('<i class="fas fa-plus-circle" style="color: green;"></i>');
        }
    })
});