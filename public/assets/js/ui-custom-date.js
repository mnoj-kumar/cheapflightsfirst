$(document).ready(function() {

    var oneTrip = $("input[name='trip']:checked").val();
    var datepicker_begin = $("#depart_form");
    var datepicker_end = $("#return_form1");
    var chckTrip = true;

    if (oneTrip == 'one_way') {
        $('#returndate').hide();
        $('#departdate').addClass('col-sm-12 col-xs-12').removeClass('col-sm-6 col-xs-6');
        $('.custom-radio-btn li').removeClass('activelabel');
        $('.custom-radio-btn li:first-child').addClass('activelabel');
        //$(this).parents('li').addClass('activelabel');
        chckTrip = false;
    }


    $("input[name='trip']").click(function() {
        //alert('heloo');
        var valueTrip = $(this).val();
        if (valueTrip == 'one_way') {
            $('#returndate').hide();
            $('#departdate').addClass('col-sm-12 col-xs-12').removeClass('col-sm-6 col-xs-6');
            chckTrip = false;
        } else {
            chckTrip = true;
            $('#returndate').show();
            $('#departdate').removeClass('col-sm-12 col-xs-12').addClass('col-sm-6 col-xs-6');
        }
    });

    $('.homeradio').click(function() {
        $('.homeradio').parent('li').removeClass('activelabel');
        $(this).parent('li').addClass('activelabel');
    });
if($(window).width() > 768){
      
    datepicker_begin.datepicker({
        minDate: 0,
        //dateFormat:'d M yy',
        dateFormat: 'yy-mm-dd',
        prevText: "<i class='fa fa-angle-left'></i>",
        nextText: "<i class='fa fa-angle-right'></i>",
        rangeSelect: true,
        showAnim: "slideDown",
        //maxDate: drs_settings.max_date,
        // showButtonPanel: true,
        changeMonth: false,
        numberOfMonths: 2,
        beforeShow: function(input) {
            customRange($(this).attr("id"));
            setTimeout(function() {
              if(chckTrip == true){
                //alert("jj");
                var selectedDate = $("#depart_form").datepicker("getDate");
                var sneDat = selectedDate.getDate();
                var sgmnth = selectedDate.getMonth();
                var enDate = $("#return_form1").datepicker("getDate");
                var neDat = enDate.getDate();
                var gmnth = enDate.getMonth();
                // $("#ui-datepicker-div td[data-month=" + gmnth + "]:contains(" + neDat + ")").children('a').addClass("ui-state-active");
                // $("#ui-datepicker-div td[data-month=" + sgmnth + "]:contains(" + sneDat + ")").children('a').addClass("ui-state-active");
                // $("#ui-datepicker-div td[data-month=" + sgmnth + "]:contains(" + sneDat + ")").nextAll().addClass("highlight highlighted");
                // $("#ui-datepicker-div td[data-month=" + gmnth + "]:contains(" + neDat + ")").nextAll().removeClass("highlighted");
                // $("#ui-datepicker-div td[data-month=" + gmnth + "]:contains(" + neDat + ")").prevAll().addClass("highlighted");
                // $("#ui-datepicker-div td[data-month=" + gmnth + "]:contains(" + neDat + ")").parents('tr').addClass("finalRow");
                // $("#ui-datepicker-div td[data-month=" + gmnth + "]:contains(" + neDat + ")").parents('tr').nextAll().removeClass("finalRow");
                // $("#ui-datepicker-div td[data-month=" + gmnth + "]:contains(" + neDat + ")").parents('tr').nextAll().children('td').find('a').removeClass("ui-state-active");
                // $("#ui-datepicker-div td[data-month=" + gmnth + "]:contains(" + neDat + ")").parents('tr').nextAll().children('td').removeClass("highlighted");
                // $(".finalRow").prevAll().find("td").addClass("highlight highlighted");
                //  $("#ui-datepicker-div td[data-month=" + sgmnth + "]:contains(" + sneDat + ")").prevAll().removeClass("highlight highlighted");
                //  $("#ui-datepicker-div td[data-month=" + sgmnth + "]:contains(" + sneDat + ")").parent().prevAll().find('td').removeClass("highlight highlighted");
                // $("td.ui-datepicker-current-day").parent().nextAll().find('td').addClass("highlight highlighted");
                // $("td.ui-datepicker-current-day").prevAll().removeClass("highlight highlighted");
                // $(".finalRow").prevAll().find("td.ui-datepicker-current-day").parents('tr').prevAll().find('td').removeClass("highlight highlighted");
                // $("#ui-datepicker-div td[data-month=" + gmnth + "]:contains(" + neDat + ")").parents('tr').nextAll().find('td').removeClass("highlight highlighted");
}
            }, 50);
          setTimeout(function() {
            var startDate = new Date($('#depart_form').val());
            var endDate = new Date($('#return_form1').val());
            if (startDate >= endDate){
              $(".finalRow").prevAll().find("td").removeClass("highlight highlighted");
              $(".finalRow").find("td").removeClass("highlight highlighted");
            }
          },60);
        },
        onClose: function(selectedDate) {
          
            if (chckTrip == true) {
              //if (!event.target.nodeName === 'A') {
                datepicker_end.datepicker("option", "minDate", selectedDate).datepicker('refresh');
                datepicker_end.datepicker("show");
              //}

            } 
        },
      
        onSelect: function(selectDate){
           
        },

    });
    setTimeout(function() {
        var selectedDate = $("#depart_form").datepicker("getDate");
        //alert(selectedDate);

        datepicker_end.datepicker({
            minDate: selectedDate,
              showAnim: "slideDown",
            rangeSelect: true,
            changeMonth: false,
            numberOfMonths: 2,
              prevText: "<i class='fa fa-angle-left'></i>",
        nextText: "<i class='fa fa-angle-right'></i>",
            // showButtonPanel: true,
            //dateFormat:'d M yy',
            dateFormat: 'yy-mm-dd',
            beforeShow: function(input) {
                customRange($(this).attr("id"));
             setTimeout(function(){
                var seldDate = $("#depart_form").datepicker("getDate");
                var strtdd = seldDate.getDate();
                var strtmm = seldDate.getMonth();
                $("#ui-datepicker-div td[data-month=" + strtmm + "]:contains(" + strtdd + ")").prevAll().removeClass("highlight highlighted");
                $("#ui-datepicker-div td[data-month=" + strtmm + "]:contains(" + strtdd + ")").parent().prevAll().find('td').removeClass("highlight highlighted");
          },55);
            },
            onSelect: function() {
                customRange($(this).attr("id"));
            },

        });
    }, 50);
}else{

    datepicker_begin.datepicker({
        minDate: 0,
        //dateFormat:'d M yy',
        dateFormat: 'yy-mm-dd',
        rangeSelect: true,
        showAnim: "slideDown",
        //maxDate: drs_settings.max_date,
        // showButtonPanel: true,
        changeMonth: false,
          prevText: "",
        nextText: "",
        numberOfMonths: 1,
        beforeShow: function(input) {
            customRange($(this).attr("id"));
            setTimeout(function() {
              if(chckTrip == true){
                //alert("jj");
                var selectedDate = $("#depart_form").datepicker("getDate");
                var sneDat = selectedDate.getDate();
                var sgmnth = selectedDate.getMonth();
                var enDate = $("#return_form1").datepicker("getDate");
                var neDat = enDate.getDate();
                var gmnth = enDate.getMonth();
                $("#ui-datepicker-div td[data-month=" + gmnth + "]:contains(" + neDat + ")").children('a').addClass("ui-state-active");
                $("#ui-datepicker-div td[data-month=" + sgmnth + "]:contains(" + sneDat + ")").children('a').addClass("ui-state-active");
                $("#ui-datepicker-div td[data-month=" + sgmnth + "]:contains(" + sneDat + ")").nextAll().addClass("highlighted");
                $("#ui-datepicker-div td[data-month=" + gmnth + "]:contains(" + neDat + ")").nextAll().removeClass("highlighted");
                $("#ui-datepicker-div td[data-month=" + gmnth + "]:contains(" + neDat + ")").prevAll().addClass("highlighted");
                $("#ui-datepicker-div td[data-month=" + gmnth + "]:contains(" + neDat + ")").parents('tr').addClass("finalRow");
                $(".finalRow").prevAll().find("td").addClass("highlight highlighted");
                 $("#ui-datepicker-div td[data-month=" + sgmnth + "]:contains(" + sneDat + ")").prevAll().removeClass("highlight highlighted");
                 $("#ui-datepicker-div td[data-month=" + sgmnth + "]:contains(" + sneDat + ")").parent().prevAll().find('td').removeClass("highlight highlighted");
                $("td.ui-datepicker-current-day").prevAll().removeClass("highlight highlighted");
                $(".finalRow").prevAll().find("td.ui-datepicker-current-day").parents('tr').prevAll().find('td').removeClass("highlight highlighted");
}
            }, 50);
          setTimeout(function() {
            var startDate = new Date($('#depart_form').val());
            var endDate = new Date($('#return_form1').val());
            if (startDate >= endDate){
              $(".finalRow").prevAll().find("td").removeClass("highlight highlighted");
              $(".finalRow").find("td").removeClass("highlight highlighted");
            }
          },60);
        },
        onClose: function(selectedDate) {
          
            if (chckTrip == true) {
              //if (!event.target.nodeName === 'A') {
                datepicker_end.datepicker("option", "minDate", selectedDate).datepicker('refresh');
                datepicker_end.datepicker("show");
              //}

            } 
        },
      
        onSelect: function(selectDate){
           
        },

    });
    setTimeout(function() {
        var selectedDate = $("#depart_form").datepicker("getDate");
        //alert(selectedDate);

        datepicker_end.datepicker({
            minDate: selectedDate,
              showAnim: "slideDown",
            rangeSelect: true,
            changeMonth: false,
            numberOfMonths: 1,
              prevText: "<i class='fa fa-angle-left'></i>",
        nextText: "<i class='fa fa-angle-right'></i>",
            // showButtonPanel: true,
            //dateFormat:'d M yy',
            dateFormat: 'yy-mm-dd',
            beforeShow: function(input) {
                customRange($(this).attr("id"));
             setTimeout(function(){
                var seldDate = $("#depart_form").datepicker("getDate");
                var strtdd = seldDate.getDate();
                var strtmm = seldDate.getMonth();
                $("#ui-datepicker-div td[data-month=" + strtmm + "]:contains(" + strtdd + ")").prevAll().removeClass("highlight highlighted");
                $("#ui-datepicker-div td[data-month=" + strtmm + "]:contains(" + strtdd + ")").parent().prevAll().find('td').removeClass("highlight highlighted");
          },55);
            },
            onSelect: function() {
                customRange($(this).attr("id"));
            },

        });
    }, 50);
}
});

function customRange(input) {
    // console.log(textbox);
    if (input == "end-date") {


        setTimeout(function() {

            var $datepicker = $('#ui-datepicker-div');
            var $datepickerrr = $('#depart_form').offset();


            $datepicker.css({
                // top: 10,
                left: $datepickerrr.left
            });
            var calendarTD = $("#ui-datepicker-div").find("td");

            calendarTD.on("mouseenter", function() {
                $(this).parent().addClass("finalRow");
                $(".finalRow").parents('.ui-datepicker-group-last').parent().find('.ui-datepicker-group-first').find('tr').last().addClass("finalRowRangeOtherTable");
                $(".finalRowRangeOtherTable").find("td:not(.ui-datepicker-unselectable)").addClass("highlight");
                $(".finalRowRangeOtherTable").prevAll().find("td:not(.ui-datepicker-unselectable)").addClass("highlight");

                $(".finalRow").prevAll().find("td:not(.ui-datepicker-unselectable)").addClass("highlight");
                $(this).prevAll("td:not(.ui-datepicker-unselectable)").addClass("highlight");

            });
            calendarTD.on("mouseleave", function() {
                $(this).parent().removeClass("finalRow");
                $("#ui-datepicker-div td").removeClass("highlight");

                $(".finalRowRange").removeClass("finalRowRange").find('.highlight').removeClass("highlight");
                $(".finalRowRangeOtherTable").removeClass("finalRowRangeOtherTable").find('.highlight').removeClass("highlight");

            });

            $('.ui-datepicker-calendar .ui-state-active').parents('tr').addClass("finalRow");
            $(".finalRow").parents('.ui-datepicker-group-last').parent().find('.ui-datepicker-group-first').find('tr').last().addClass("finalRowRangeOtherTable");
            $(".finalRowRangeOtherTable").find("td:not(.ui-datepicker-unselectable)").addClass("highlight highlighted");
            $(".finalRowRangeOtherTable").prevAll().find("td:not(.ui-datepicker-unselectable)").addClass("highlight highlighted");
            $(".finalRow").prevAll().find("td:not(.ui-datepicker-unselectable)").addClass("highlight highlighted");
            $('.ui-datepicker-calendar .ui-state-active').parent().prevAll("td:not(.ui-datepicker-unselectable)").addClass("highlight highlighted");


        }, 50);
    }
}