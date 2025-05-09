$(document).ready(function () {
    // handle Login
    $("#sign-up").click(function () {
        $(".sign-in").hide();
        $(".signup").show();
    });

    $("#sign-in").click(function () {
        $(".signup").hide();
        $(".sign-in").show();
    });


    //home page
    $("#start_date, #end_date").datetimepicker({
        format: "d/m/Y",
        timepicker: false,
        // step: 60,
        // timepicker: false,
        // datepicker: true,
        // weeks: false,
    });

    $("#userDropdown").click(function (e) {
        e.preventDefault();
        $("#dropdownMenu").toggle(); //Toggle  dropdown menu when user clicks
    });

});
