<style type="text/css">
    .highlight{
        background-color: yellow;
    }
    .highlight_remover{
        background-color: none;
    }
</style>




<script type="text/javascript">
	
    function t_load_calender_for_given_date(t_date){
	
        
        
        var t_full_current_day = t_date;    //Tue Jan 12 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)
        
        var t_current_day_in_week = t_full_current_day.split(" ")[0];
        var t_current_month_in_text = t_full_current_day.split(" ")[1];
        var t_current_day_in_month = t_full_current_day.split(" ")[2];
        var t_current_year = t_full_current_day.split(" ")[3];
        
        t_set_calender_title_for_month(t_current_month_in_text,t_current_year);
        
        
//        document.getElementById("t_day_p_1").innerHTML = t_year;

        var t_1st_day_id_no_of_month = new Date(t_current_year + "-" + t_convert_month_text_to_month_number(t_current_month_in_text) + "-01").getDay();
        
        
//        t_current_month=2;
               
        
        var t_number_of_days_in_current_month = t_days_in_month(t_convert_month_text_to_month_number(t_current_month_in_text),t_current_year);

        var t_day_for_loop=1;
        for(var i=t_1st_day_id_no_of_month; i<t_number_of_days_in_current_month+t_1st_day_id_no_of_month;i++){
            document.getElementById("t_day_p_"+i).innerHTML = t_day_for_loop;
            t_day_for_loop++;
        }
        
       
        t_highlight_current_day(+t_1st_day_id_no_of_month + +t_current_day_in_month+ -1);
        
	
    }
    
    function t_days_in_month(month,year) {
        if(month==1)    return 31;
        if(month==2){
            if(year%4==0){
                return 29;
            }
            else{
                return 28;
            }
        }
        if(month==3)    return 31;
        if(month==4)    return 30;
        if(month==5)    return 31;
        if(month==6)    return 30;
        if(month==7)    return 31;
        if(month==8)    return 31;
        if(month==9)    return 30;
        if(month==10)    return 31;
        if(month==11)    return 30;
        if(month==12)    return 31;
    }
    
    function t_convert_month_text_to_month_number(month_in_text){
        switch (month_in_text) {
            
            case 'Jan':
                return 1;
                break;
            case 'Feb':
                return 2;
                break;
            case 'Mar':
                return 3;
                break;
            case 'Apr':
                return 4;
                break;
            case 'May':
                return 5;
                break;
            case 'Jun':
                return 6;
                break;
            case 'Jul':
                return 7;
                break;
            case 'Aug':
                return 8;
                break;
            case 'Sep':
                return 9;
                break;
            case 'Oct':
                return 10;
                break;
            case 'Nov':
                return 11;
                break;
            case 'Dec':
                return 12;
                break;
            }
    }
    
    function t_load_calender_in_onload(){
        t_load_calender_for_given_date(Date());
    }
    
    function t_move_month_to_next(){
//        
        t_move_month_to_next_or_brfore("next");
       
        
    }
    
    function t_move_month_to_next_or_brfore(nest_or_before){
        
        var t_current_full_month_year = document.getElementById("t_calender_month_title").innerHTML;
        var t_month_in_full = t_current_full_month_year.split(" ")[1];
        if(nest_or_before=="next"){
            
            if(t_month_in_full=="January"){
                
                t_clear_all_days_in_p();
                t_load_calender_for_given_date("Tue Feb 100 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)");
            }
            if(t_month_in_full=="February"){
                
                t_clear_all_days_in_p();
                t_load_calender_for_given_date("Tue Mar 100 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)");
            }
            if(t_month_in_full=="March"){
               
                t_clear_all_days_in_p();
                t_load_calender_for_given_date("Tue Apr 100 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)");
            }
            if(t_month_in_full=="April"){
                
                t_clear_all_days_in_p();
                t_load_calender_for_given_date("Tue May 100 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)");
            }
            if(t_month_in_full=="May"){
                
                t_clear_all_days_in_p();
                t_load_calender_for_given_date("Tue Jun 100 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)");
            }
            if(t_month_in_full=="June"){
                
                t_clear_all_days_in_p();
                t_load_calender_for_given_date("Tue Jul 100 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)");
            }
            if(t_month_in_full=="July"){
                
                t_clear_all_days_in_p();
                t_load_calender_for_given_date("Tue Aug 100 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)");
            }
            if(t_month_in_full=="August"){
                
                t_clear_all_days_in_p();
                t_load_calender_for_given_date("Tue Sep 100 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)");
            }
            if(t_month_in_full=="September"){
                
                t_clear_all_days_in_p();
                t_load_calender_for_given_date("Tue Oct 100 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)");
            }
            if(t_month_in_full=="October"){
                
                t_clear_all_days_in_p();
                t_load_calender_for_given_date("Tue Nov 100 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)");
            }
            if(t_month_in_full=="November"){
                
                t_clear_all_days_in_p();
                t_load_calender_for_given_date("Tue Dec 100 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)");
            }
            if(t_month_in_full=="December"){
                
                t_clear_all_days_in_p();
                t_load_calender_for_given_date("Tue Feb 100 2016 16:19:58 GMT+0530 (Sri Lanka Standard Time)");
            }
            
        }
    }
    
    function t_set_calender_title_for_month(month,year){
        var t_month_full_name;
        if(month == "Jan")  t_month_full_name = "January";
        if(month == "Feb")  t_month_full_name = "February";
        if(month == "Mar")  t_month_full_name = "March";
        if(month == "Apr")  t_month_full_name = "April";
        if(month == "May")  t_month_full_name = "May";
        if(month == "Jun")  t_month_full_name = "June";
        if(month == "Jul")  t_month_full_name = "July";
        if(month == "Aug")  t_month_full_name = "August";
        if(month == "Sep")  t_month_full_name = "September";
        if(month == "Oct")  t_month_full_name = "October";
        if(month == "Nov")  t_month_full_name = "November";
        if(month == "Dec")  t_month_full_name = "December";
        
        document.getElementById("t_calender_month_title").innerHTML = year+" "+t_month_full_name;
    }
    
    function t_highlight_current_day(current_day_id){
     
        $("#t_day_p_"+current_day_id).addClass("highlight");
        
    }
    
    function t_clear_all_days_in_p(){
        
        for(var j=1;j<=42;j++){
            document.getElementById("t_day_p_"+j).innerHTML =" ";
            
            $("#t_day_p_"+j).removeClass("highlight");
        }
      
        
    }
    
    window.onload = t_load_calender_in_onload;
</script>




<div class="container">

    <div class="t_calender">
        <div class="row t_calender_header">
            <div style="width: 10%;float: left">
                <img src="<?php echo base_url() ?>assets/thinuwan/img/t_left_arrow.png" style="width: 30px;">
            </div>
            <div  style="width: 80%;float: left">
                <p id="t_calender_month_title"></p>
            </div>
            <div style="width: 10%;float: left" onclick="t_move_month_to_next()">
                <img src="<?php echo base_url() ?>assets/thinuwan/img/t_right_arrow.png" style="width: 30px;">
            </div>

        </div>
        <div class="row t_calender_day_name" style="">
            
            <div class="" style="width: 14%;float: left">
                <h1>Mon</h1>
            </div>
            <div class="" style="width: 14%;float: left">
                <h1>Tue</h1>
            </div>
            <div class="" style="width: 14%;float: left">
                <h1>Wed</h1>
            </div>
            <div class="" style="width: 14%;float: left">
                <h1>Thu</h1>
            </div>
            <div class="" style="width: 14%;float: left">
                <h1>Fri</h1>
            </div>
            <div class="" style="width: 14%;float: left">
                <h1>Sat</h1>
            </div>
            <div class="" style="width: 14%;float: left">
                <h1>Sun</h1>
            </div>
        </div>
        <div class="row t_calender_day_row_1">
            <div id="t_day_div_1" class="" style="width: 14%;float: left">
                <p id="t_day_p_1"></p> 
            </div>
            <div id="t_day_div_2" class="" style="width: 14%;float: left">
                <p id="t_day_p_2"></p>
            </div>
            <div id="t_day_div_3" class="" style="width: 14%;float: left">
                <p id="t_day_p_3"></p>
            </div>
            <div id="t_day_div_4" class="" style="width: 14%;float: left">
                <p id="t_day_p_4"></p>
            </div>
            <div id="t_day_div_5" class="" style="width: 14%;float: left">
                <p id="t_day_p_5"></p>
            </div>
            <div id="t_day_div_6" class="" style="width: 14%;float: left">
                <p id="t_day_p_6"></p>
            </div>
            <div id="t_day_div_7" class="" style="width: 14%;float: left">
                <p id="t_day_p_7"></p>
            </div>
        </div>
        <div class="row t_calender_day_row_2">
            <div id="t_day_div_8" class="" style="width: 14%;float: left">
                <p id="t_day_p_8"></p>
            </div>
            <div id="t_day_div_9" class="" style="width: 14%;float: left">
                <p id="t_day_p_9"></p>
            </div>
            <div id="t_day_div_10" class="" style="width: 14%;float: left">
                <p id="t_day_p_10"></p>
            </div>
            <div id="t_day_div_11" class="" style="width: 14%;float: left">
                <p id="t_day_p_11"></p>
            </div>
            <div id="t_day_div_12" class="" style="width: 14%;float: left">
                <p id="t_day_p_12"></p>
            </div>
            <div id="t_day_div_13" class="" style="width: 14%;float: left">
                <p id="t_day_p_13"></p>
            </div>
            <div id="t_day_div_14" class="" style="width: 14%;float: left">
                <p id="t_day_p_14"></p>
            </div>
        </div>
        <div class="row t_calender_day_row_3">
            <div id="t_day_div_15" class="" style="width: 14%;float: left">
                <p id="t_day_p_15"></p>
            </div>
            <div id="t_day_div_16" class="" style="width: 14%;float: left">
                <p id="t_day_p_16"></p>
            </div>
            <div id="t_day_div_17" class="" style="width: 14%;float: left">
                <p id="t_day_p_17"></p>
            </div>
            <div id="t_day_div_18" class="" style="width: 14%;float: left">
                <p id="t_day_p_18"></p>
            </div>
            <div id="t_day_div_19" class="" style="width: 14%;float: left">
                <p id="t_day_p_19"></p>
            </div>
            <div id="t_day_div_20" class="" style="width: 14%;float: left">
                <p id="t_day_p_20"></p>
            </div>
            <div id="t_day_div_21" class="" style="width: 14%;float: left">
                <p id="t_day_p_21"></p>
            </div>
        </div>
        <div class="row t_calender_day_row_4">
            <div id="t_day_div_22" class="" style="width: 14%;float: left">
                <p id="t_day_p_22"></p>
            </div>
            <div id="t_day_div_23" class="" style="width: 14%;float: left">
                <p id="t_day_p_23"></p>
            </div>
            <div id="t_day_div_24" class="" style="width: 14%;float: left">
                <p id="t_day_p_24"></p>
            </div>
            <div id="t_day_div_25" class="" style="width: 14%;float: left">
                <p id="t_day_p_25"></p>
            </div>
            <div id="t_day_div_26" class="" style="width: 14%;float: left">
                <p id="t_day_p_26"></p>
            </div>
            <div id="t_day_div_27" class="" style="width: 14%;float: left">
                <p id="t_day_p_27"></p>
            </div>
            <div id="t_day_div_28" class="" style="width: 14%;float: left">
                <p id="t_day_p_28"></p>
            </div>
        </div>
        <div class="row t_calender_day_row_5">
            <div id="t_day_div_29" class="" style="width: 14%;float: left">
                <p id="t_day_p_29"></p>
            </div>
            <div id="t_day_div_30" class="" style="width: 14%;float: left">
                <p id="t_day_p_30"></p>
            </div>
            <div id="t_day_div_31" class="" style="width: 14%;float: left">
                <p id="t_day_p_31"></p>
            </div>
            <div id="t_day_div_32" class="" style="width: 14%;float: left">
                <p id="t_day_p_32"></p>
            </div>
            <div id="t_day_div_33" class="" style="width: 14%;float: left">
                <p id="t_day_p_33"></p>
            </div>
            <div id="t_day_div_34" class="" style="width: 14%;float: left">
                <p id="t_day_p_34"></p>
            </div>
            <div id="t_day_div_35" class="" style="width: 14%;float: left">
                <p id="t_day_p_35"></p>
            </div>
        </div>
        <div class="row t_calender_day_row_6">
            <div id="t_day_div_36" class="" style="width: 14%;float: left">
                <p id="t_day_p_36"></p>
            </div>
            <div id="t_day_div_37" class="" style="width: 14%;float: left">
                <p id="t_day_p_37"></p>
            </div>
            <div id="t_day_div_38" class="" style="width: 14%;float: left">
                <p id="t_day_p_38"></p>
            </div>
            <div id="t_day_div_39" class="" style="width: 14%;float: left">
                <p id="t_day_p_39"></p>
            </div>
            <div id="t_day_div_40" class="" style="width: 14%;float: left">
                <p id="t_day_p_40"></p>
            </div>
            <div id="t_day_div_41" class="" style="width: 14%;float: left">
                <p id="t_day_p_41"></p>
            </div>
            <div id="t_day_div_42" class="" style="width: 14%;float: left">
                <p id="t_day_p_42"></p>
            </div>
        </div>
    </div>

</div>