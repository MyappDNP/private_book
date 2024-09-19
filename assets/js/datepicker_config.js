var thaiYear = function (ct) {
    var leap = 3;
    var dayWeek = ["พฤ.", "ศ.", "ส.", "อา.", "จ.", "อ.", "พ."];
    if (ct) {
        var yearL = new Date(ct).getFullYear() - 543;
        leap = (((yearL % 4 == 0) && (yearL % 100 != 0)) || (yearL % 400 == 0)) ? 2 : 3;
        if (leap == 2) {
            dayWeek = ["ศ.", "ส.", "อา.", "จ.", "อ.", "พ.", "พฤ."];
        }
    }

    this.setOptions({
        i18n: { th: { dayOfWeek: dayWeek } }, dayOfWeekStart: leap,
    });
};

function set_text_date(txt_id) {
    var minYear = Number($("#" + txt_id).attr("min")) || new Date().getFullYear()-100;
    var maxYear = Number($("#" + txt_id).attr("max")) || new Date().getFullYear();

    var minDate = (minYear + 543) + '/01/01';
    var maxDate = (maxYear + 543) + '/12/31';
  
    $("#"+txt_id).datetimepicker({
        timepicker: false,
        format: 'd/m/Y',
        lang: 'th',
        onChangeMonth: thaiYear,
        onShow: thaiYear,
        yearOffset: 543,
        closeOnDateSelect: true,
        yearStart: minYear,
        yearEnd: maxYear,
        minDate: minDate,
        maxDate: maxDate,
        todayButton: false,
        defaultSelect: false,
        //defaultDate: minDate,
    });
}
