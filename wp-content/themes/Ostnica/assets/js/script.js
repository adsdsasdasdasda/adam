
jQuery(document).ready(function(){
    jQuery('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        nav:true,
        dots:false,
        slideSpeed : 3000,
        // paginationSpeed : 400,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

});

jQuery(document).ready(()=>{
    jQuery(".humberger-menu-item").hide();
    jQuery(".humberger-menu").click(function(){
        jQuery(".humberger-menu-item").toggle();
    })
   // get_time_slot();
});
jQuery(document).ready(function(){
// jQuery(window).load(function(){
        // console.log('flag0');
    jQuery('.mobile-menu.cd-responsive .humberger-menu-item').click(function(){
        // console.log('flag1');
        jQuery('.mobile-menu.cd-responsive .humberger-menu-item').toggle();
        // console.log('flag2');
    });

    
});
// jQuery(".cd-close-icon-01").click(function(){
//   jQuery(".humberger-menu-item").hide();
// });


/*jQuery(document).ready(function(){
  jQuery('.cd_calendar').datepicker({
     dateFormat: 'dd/mm/yy',
     minDate: 0
  });
    var off_date = jQuery("#cd_event_offdate").val();
    // By Gourav Sahu 18-12-21
    if(off_date){
        off_date = off_date.split(',');
    }

    var week_days = jQuery("#cd_event_weekdays").val();
    if(week_days){
        week_days_arr = week_days.split(',');
    }

    // var event_dates = jQuery("#cd_event_dates").val();
    // console.log(event_dates);

    // console.log(week_days);
    // console.log(week_days)
    // console.log(off_date);
    // var off_date = ["20/04/2021", "30/03/2021", "28/03/2021"];
 
    // var off_dates =  explode(",", off_date);
    function DisableDates(date) {
        var event_dates = jQuery("#cd_event_dates").val();
        // console.log(event_dates);
        var string = jQuery.datepicker.formatDate('dd-mm-yy', date);
        // console.log(date.getDay());
        // var check = date.getDay() == 3 || date.getDay() == 5;
        var check = "";
        var check_mon = false;
        var check_tue = false;
        var check_wed = false;
        var check_thu = false;
        var check_fri = false;
        var check_sat = false;
        var check_sun = false;
        if(week_days){
            jQuery.each(week_days_arr, function( key, value ) {
                switch(value){
                    case 'sun': 
                        if(date.getDay() == 0){
                            check_sun = true;
                        }
                        break;
                    case 'mon': 
                        if(date.getDay() == 1){
                            check_mon = true;
                        }
                        break;
                    case 'tue': 
                        if(date.getDay() == 2){
                            check_tue = true;
                        }
                        break;
                    case 'wed': 
                        if(date.getDay() == 3){
                            check_wed = true;
                        }
                        break;
                    case 'thu': 
                        if(date.getDay() == 4){
                            check_thu = true;
                        }
                        break;
                    case 'fri': 
                        if(date.getDay() == 5){
                            check_fri = true;
                        }
                        break;
                    case 'sat': 
                        if(date.getDay() == 6){
                            check_sat = true;
                        }
                        break;
                }
                
            
                // console.log(value);
            });
            // console.log(check);
            // return [check,""];
            // return [date.getDay() == 3 || date.getDay() == 5,""]
            // return [off_date.indexOf(string) == -1];
            if(check_sun || check_mon || check_tue || check_wed || check_thu || check_fri || check_sat){
                return [true && off_date.indexOf(string) == -1, ''];
            }
            else{
                return [false ,''];
            }
        }

        if(event_dates){
            var event_dates = event_dates.split(",");
            
            return [event_dates.indexOf(string) != -1, ''];
        }
        else{
            return [];
        }
    }

    jQuery(".cd_atc_start_date").datepicker({
        dateFormat: 'dd-mm-yy',
        minDate:0,
        beforeShowDay: DisableDates,
        onSelect: function () {
            get_time_slot();
            
            var slot = jQuery("#cd_stc_start_time").val();
            if(slot){
                get_available_slot_qty(slot);
            }
        }
    });

    jQuery(".cd-qty").prop('readonly', true);
    jQuery(".cd-qty").attr('type', 'text');
});*/



jQuery(document).ready(function(){
    var y="0";
    jQuery(".add_travellers2").click(function(){
        
            y = parseInt(y + 1) ;

        jQuery(".cd_traveller2").html(y);
        jQuery("#cd_traveller2").val(y);

    });
    jQuery(".remove_travellers2").click(function(){
        if (y> 0){
            y = parseInt(y - 1);
        }
        jQuery(".cd_traveller2").html( y);
        jQuery("#cd_traveller2").val( y);

    });
    var z="0";
    jQuery(".add_travellers3").click(function(){
        
            z = parseInt(z + 1) ;

        jQuery(".cd_traveller3").html(z);
        jQuery("#cd_traveller3").val(z);

    });
    jQuery(".remove_travellers3").click(function(){
        if (z> 0){
            z = parseInt(z - 1);
        }
        jQuery(".cd_traveller3").html(z);
        jQuery("#cd_traveller3").val(z);

    });
    jQuery("#food_experiences").hide();
    jQuery("#cultural_activity").hide();

   
});
 jQuery(".walking_tour").click(function(){
    jQuery("#walking_tour").show();
    jQuery("#food_experiences").hide();
    jQuery("#cultural_activity").hide();
});
jQuery(".food_experiences").click(function(){
    jQuery("#food_experiences").show();
    jQuery("#walking_tour").hide();
    jQuery("#cultural_activity").hide();
});
jQuery(".cultural_activity").click(function(){
    jQuery("#cultural_activity").show();
    jQuery("#walking_tour").hide();
    jQuery("#food_experiences").hide();
});
// jQuery(".cd_loc").change(function(){
//     var home_loc =  jQuery(".cd_loc").val();
//     var home_loc_url = "http://ec2-13-235-38-213.ap-south-1.compute.amazonaws.com/client/nikhil/roobaroo/"+home_loc+"/";
//     jQuery(".search_loc").attr("action", home_loc_url);
// });

jQuery(".cd_start_date_home").change(function(){
    var start_date = jQuery(".cd_start_date_home").val();
    // console.log(start_date);
    jQuery("#cd_start_date_home").val(start_date);
});
jQuery(".cd_end_date_home").change(function(){
    var end_date = jQuery(".cd_end_date_home").val();
    jQuery("#cd_end_date_home").val(end_date);
});

jQuery(".cd_calendar-start").change(function(){
    var start_date = jQuery(".cd_calendar-start").val();
    // console.log(start_date);
    jQuery("#cd_calendar-start").val(start_date);
});
jQuery(".cd_calendar-end").change(function(){
    var end_date = jQuery(".cd_calendar-end").val();
    jQuery("#cd_calendar-end").val(end_date);
});

jQuery(".booking_submit").click(function(){
    var cd_location =jQuery('.cd_location').val();
    var cd_walks_type =jQuery('.cd_walks_type').val();
    var cd_start_date =jQuery('.cd_start_date').val();
    var cd_end_date =jQuery('.cd_end_date').val();
    var cd_tour_type =jQuery('.cd_tour_type').val();


    jQuery.ajax({
        type: 'POST', // Adding Post method
        // url: my_ajax_object.ajax_url, // Including ajax file
        url: cd_ajax_path,
        data: {'action':'cd_booking_search_result', 'cd_home_location':cd_location, 'cd_home_walks':cd_walks_type, 'cd_home_tour':cd_tour_type, 'cd_start_date_home':cd_start_date, 'cd_end_date_home':cd_end_date}, 
        success: function(response){ // Show returned data using the function.
            /*console.log(response);
            jQuery(".cd_hide").hide();*/

            jQuery(".booking_search_result").html(response);
            // window.location.replace("https://the93club.com/homefans_ver3/return/?status="+status);
            // if(status == 'complete'){
            //     window.location.replace("https://v3.the93club.com/booking-success/?order_token_code="+response+"&status=1");
            // }
            // else{
            //     window.location.replace("https://v3.the93club.com/return/?status="+status);
            // }
        },
        error: function (response) {
             
        },
    });
});


//Deepak
jQuery(document).ready(()=>{
    var cd_single_product_tour_type = jQuery("#cd_single_product_tour_type").val();
    // if(cd_single_product_tour_type == 'Group Tour'){
    if(cd_single_product_tour_type == '49'){
        jQuery(".group_tour").show();
        // jQuery(".individual_tour").hide();
        jQuery(".private_tour").hide();
        jQuery(".tour_type_49").show();
        jQuery(".tour_type_50").hide();
    }
});

/*jQuery("#cd_single_product_tour_type").change(function(){
    var cd_single_product_tour_type = jQuery(this).val();
    var slot = jQuery("#cd_stc_start_time").val();
    get_available_slot_qty(slot);

    // if(cd_single_product_tour_type == 'Group Tour'){
    if(cd_single_product_tour_type == '49'){
        // jQuery(".group_tour").show();
        // jQuery(".private_tour").hide();
        jQuery(".tour_type_49").show();
        jQuery(".tour_type_50").hide();
    }
    // if(cd_single_product_tour_type == 'Individual Tour'){
    // if(cd_single_product_tour_type == 'Private Tour'){
    if(cd_single_product_tour_type == '50'){
        // jQuery(".private_tour").show();
        // jQuery(".group_tour").hide();
        jQuery(".tour_type_50").show();
        jQuery(".tour_type_49").hide();
    }
});*/

jQuery(".minus").on("click",function(){
    var tour_type = jQuery(this).attr("data-tour-type");
    var person_type = jQuery(this).attr("data-person-type");
    var price = jQuery(this).attr("data-price");

    var current_qty = parseInt(jQuery("#" + tour_type + "_" + person_type).html());
    var qty = 0;
    if(current_qty != 0){
        qty = current_qty - 1;
    }
    
    jQuery("#" + tour_type + "_" + person_type).html(qty);
    calculate_total();
    jQuery('#slot_error').hide();
    var available_qty = parseInt(jQuery("#available_qty").val())+1;
    jQuery("#available_qty").val(available_qty);
})
jQuery(".plus").on("click",function(){
    var tour_type = jQuery(this).attr("data-tour-type");
    var person_type = jQuery(this).attr("data-person-type");
    var price = jQuery(this).attr("data-price");

    var current_qty = parseInt(jQuery("#" + tour_type + "_" + person_type).html());
    var qty = 0;
    
    qty = parseInt(current_qty) + parseInt(1);

    var available_qty = jQuery("#available_qty").val();

    if(available_qty != 0){
        jQuery("#" + tour_type + "_" + person_type).html(qty);
        calculate_total();
        available_qty = parseInt(available_qty)-1;
        jQuery("#available_qty").val(available_qty);
    }
    else{
        jQuery('#slot_error').show();
    }
    
})

function calculate_total(){
    var total_price = 0;
    jQuery(".qty:visible").each(function(){
        var qty = jQuery(this).html();
        var price = jQuery(this).attr("data-price");

        if(qty){
            total_price = parseInt(total_price) + parseInt(qty)*parseInt(price);
        }
    })

    jQuery("#total").html(total_price);
}

jQuery(document).ready(function(){
    jQuery('.vitrual_tour_pass').change(function(){
        // console.log(jQuery(this).attr('data-price'));
        jQuery('.cd-price-row .cd-price-text').html(jQuery(this).attr('data-price'));
    });    
});


/*function cd_add_to_cart_product_variants(){
    // console.log('flag-10');
    var key = 0;
    var title = jQuery("#title").val();
    var start_date = jQuery("#cd_atc_start_date").val();
    var start_time = jQuery("#cd_stc_start_time").val();
    var product_id = jQuery("#product_id").val();

    var check_virtual_tour = jQuery("#check_virtual_tour").val();
    
    var data = "";
    if(check_virtual_tour == 'Yes'){
            if(jQuery("#add_family_pass").prop('checked') == true){
            var family_pass_price = jQuery("#add_family_pass").data('family_pass_price');
           
            // data = {"action":"wqcmv_woocommerce_ajax_add_to_cart", 'start_date':start_date, 'start_time':start_time, 'parent_product_id':product_id, "family_pass_price" : family_pass_price};
            
            data = {"action":"wqcmv_woocommerce_ajax_add_to_cart", 'start_date':start_date, 'start_time':start_time, 'parent_product_id':product_id};
        }
        var qty = 1;
        var pid = jQuery('input[type=radio]:checked.vitrual_tour_pass').attr("data-pid");
        var virtual_tour_type = jQuery('input[type=radio]:checked.vitrual_tour_pass').attr("data-virtual-tour-type");
        //jQuery('input[type=radio]:checked.vitrual_tour_pass').attr("data-price");
        data = {"action":"wqcmv_woocommerce_ajax_add_to_cart", 'start_date':start_date, 'start_time':start_time, 'parent_product_id':product_id};
        sub_data = {
                        "variations[0][vid]" : pid,
                        "variations[0][qty]" : qty,
                        "variations[0][variant_name]" :  title.replace(" ", "+") + "(#" + pid + ")Virtual+Tour+Type:+"+virtual_tour_type.replace(" ", "+"),
                        "variations[0][stock_quantity]" : "",
                        "variations[0][is_valid]" : "Yes"
                    };
        // console.log(sub_data);
        jQuery.extend( data, sub_data );
    }
    else{

        data = {"action":"wqcmv_woocommerce_ajax_add_to_cart", 'start_date':start_date, 'start_time':start_time, 'parent_product_id':product_id};
    }

    var count = 0;
    jQuery(".qty:visible").each(function(){
        var qty = jQuery(this).html();
        var pid = jQuery(this).attr("data-pid");
        var tour_type = jQuery(this).attr("data-tour-type");
        var person_type = jQuery(this).attr("data-person-type");


        if(qty && qty != 0){
            count = parseInt(count)+1;
            var sub_data = "";
            switch(key){
                case 0:
                    sub_data = {
                        "variations[0][vid]" : pid,
                        "variations[0][qty]" : qty,
                        "variations[0][variant_name]" :  title.replace(" ", "+") + "(#" + pid + ")Person+Type:+"+person_type.replace(" ", "+")+"+Tour+Type:+"+tour_type.replace(" ", "+"),
                        "variations[0][stock_quantity]" : "",
                        "variations[0][is_valid]" : "Yes"
                    };
                    break;
                case 1:
                    sub_data = {
                        "variations[1][vid]" : pid,
                        "variations[1][qty]" : qty,
                        "variations[1][variant_name]" :  title.replace(" ", "+") + "(#" + pid + ")Person+Type:+"+person_type.replace(" ", "+")+"+Tour+Type:+"+tour_type.replace(" ", "+"),
                        "variations[1][stock_quantity]" : "",
                        "variations[1][is_valid]" : "Yes"
                    };
                    break;
                case 2:
                    sub_data = {
                        "variations[2][vid]" : pid,
                        "variations[2][qty]" : qty,
                        "variations[2][variant_name]" :  title.replace(" ", "+") + "(#" + pid + ")Person+Type:+"+person_type.replace(" ", "+")+"+Tour+Type:+"+tour_type.replace(" ", "+"),
                        "variations[2][stock_quantity]" : "",
                        "variations[2][is_valid]" : "Yes"
                    };
                    break;
            }
            
            jQuery.extend( data, sub_data );
        }
        key = parseInt(key)+1;
    })

    // console.log(data);
    

    if((count > 0 && start_date && start_time) || check_virtual_tour == 'Yes'){
        jQuery(".error_add_to_cart").hide();
        jQuery.ajax({
            type: 'POST', // Adding Post method
            // url: my_ajax_object.ajax_url, // Including ajax file
            url: cd_ajax_path,
            data: data, 
            success: function(response){ // Show returned data using the function.
                // console.log(response);
                if(response.success){
                    window.location.href = response.data.cart_url;
                    // jQuery("#add_cart_success").show();
                }
            },
            error: function (response) {
                 
            },
        });
    }
    else{
        var message = "";
        if(!start_date){
            var message = "Please select 'Start Date'";
        }
        else if(!start_time){
            var message = "Please select 'Start Time'";
        }
        else{
            var message = "Please select 'No of Travellers'";
        }

        jQuery("#error_add_to_cart").html(message);
        jQuery(".error_add_to_cart").show();
    }
}*/

/*function get_available_slot_qty(slot){
    var start_date = jQuery(".cd_atc_start_date").val();
    var tour_type = jQuery("#cd_single_product_tour_type").val();
    var product_id = jQuery("#product_id").val();

    jQuery('#slot_error').hide();

    jQuery.ajax({
        type: 'POST', // Adding Post method
        // url: my_ajax_object.ajax_url, // Including ajax file
        url: cd_ajax_path,
        data: {'action':'get_available_slot','tour_type':tour_type,'start_date':start_date,'slot':slot, 'product_id':product_id}, 
        success: function(response){ // Show returned data using the function.
            // console.log(response);
            var data = JSON.parse(response);
            console.log(data);
            if(data){
                jQuery("#available_qty").val(data.available_qty);
                jQuery("#available_slot").html( data.available_qty + " Slot Available");
                // console.log(data.available_qty);
            }
            else{
                jQuery("#available_qty").val(0);
                if(slot){
                    // console.log(slot);
                    jQuery("#available_slot").html("Not Available");
                }
            }
        },
        error: function (response) {
             
        },
    });
}
*/
/*function get_time_slot(){
    var start_date = jQuery(".cd_atc_start_date").val();
    var tour_type = jQuery("#cd_single_product_tour_type").val();
    var product_id = jQuery("#product_id").val();

    jQuery("#cd_stc_start_time").html('');
    jQuery("#available_qty").val(0);
    jQuery("#available_slot").html("");

    jQuery.ajax({
        type: 'POST', // Adding Post method
        // url: my_ajax_object.ajax_url, // Including ajax file
        url: cd_ajax_path,
        data: {'action':'time_slots','tour_type':tour_type,'start_date':start_date, 'post_id':product_id}, 
        success: function(response){ // Show returned data using the function.
            // console.log(response);
            jQuery("#cd_stc_start_time").html(response);
            get_available_slot_qty(jQuery("#cd_stc_start_time").val());
        },
        error: function (response) {
        },
    });
}*/

/*function cd_event_page_result(){
    var cd_event_location = jQuery(".cd_event_location").val();
    jQuery(".cd_event_page").hide();
    jQuery.ajax({
        type: 'POST', // Adding Post method
        // url: my_ajax_object.ajax_url, // Including ajax file
        url: cd_ajax_path,
        data: {'action':'cd_event_page_result','cd_location':cd_event_location}, 
        success: function(response){ // Show returned data using the function.
            // console.log(response);
            jQuery(".cd_event_response").html(response);
        },
        error: function (response) {
        },
    });
}*/

jQuery("#see_all").click(function(){
    var name = jQuery(this).attr("data-name");
    var taxonomy = jQuery(this).attr("data-type");
    var term_id = jQuery(this).attr("data-id");

    // console.log(name);
    // console.log(taxonomy);
    // console.log(term_id);

    jQuery.ajax({
        type: 'POST', // Adding Post method
        // url: my_ajax_object.ajax_url, // Including ajax file
        url: cd_ajax_path,
        data: {'action':'cd_category_full_page','name':name, 'taxonomy':taxonomy, 'term_id':term_id}, 
        success: function(response){ // Show returned data using the function.
            // console.log(response);
            jQuery(".all_products_result").html(response);

            
        },
        error: function (response) {
        },
    })

});

jQuery('<button type="button" class="button alt" id="cd_place_order" value="Place order" data-value="Place order" style="float: right;">Place order</button>').insertAfter("#place_order");
jQuery("#place_order").hide();
jQuery("#cd_place_order").click(function(){
    jQuery.ajax({
        type: 'get', // Adding Post method
        // url: my_ajax_object.ajax_url, // Including ajax file
        url: cd_ajax_path,
        data: {'action':'update_calendar_event_before_booking'}, 
        success: function(response){ // Show returned data using the function.
            // console.log(response);
            if(response == 1){
                // jQuery("form.checkout").submit();
                // return true;
                jQuery("#place_order").click();
            }
            else if(response == 2){
                alert('Slot Not Available');
                jQuery("<span style='color:red;'>Slot Not Available</span>").insertAfter("#place_order");
                jQuery("#cd_place_order").prop('disabled', true);
                return false;
            }
        },
        error: function (response) {
        },
    })
    return false;
})

jQuery(document).ready(function(){
    jQuery("#add_family_pass").click(function(){
        if(jQuery(this).prop('checked') == true){
            var family_pass_price = jQuery(this).data('family_pass_price');
            var individual_pass_price = jQuery(this).data('individual_pass_price');

            var total_price = parseInt(family_pass_price)+parseInt(individual_pass_price);
            jQuery("#total").html(total_price);
        }
        else if(jQuery(this).prop('checked') == false){
            var individual_pass_price = jQuery(this).data('individual_pass_price');
            jQuery("#total").html(individual_pass_price);
        }
    })
})

// jQuery(document).ready(function($) {
//     jQuery("#place_order").attr('type','button');
// });





function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.querySelectorAll(".mySlides");
  // var dots = document.getElementsByClassName("demo");
  // var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  // for (i = 0; i < dots.length; i++) {
  //     dots[i].className = dots[i].className.replace(" active", "");
  // }
  // Added By Gourav Sahu 18-12-21
  if(slides[slideIndex-1]){
    slides[slideIndex-1].style.display = "block";
  }
  // dots[slideIndex-1].className += " active";
  // captionText.innerHTML = dots[slideIndex-1].alt;
}
