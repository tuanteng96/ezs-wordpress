$(document).ready(function () {
    $('#price-list .form-select').change(function () {
        $(this).parent().siblings('.value-first').html($('option:selected', this).attr('value-real-first').replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."))
        $(this).parent().siblings('.value-second').html($('option:selected', this).attr('value-real-second').replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."))
        $(this).parent().siblings('.value-first').attr('value', $('option:selected', this).attr('value-real-first'))
        $(this).parent().siblings('.value-second').attr('value', $('option:selected', this).attr('value-real-second'))
        $(this).siblings('span').html($('option:selected', this).html())
        totalMoney('#tab-02')
        totalMoney('#tab-01')
    })
    $('#price-list .basis input').keyup(function () {
        var time = parseInt($(this).val())
        var value = time * 3000000;
        var value_number = value.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
        console.log(time)
        if (time > 0 && time != NaN) {
            $(this).parent().siblings('.value-first').html(value_number).attr('value', value)
            $(this).parent().siblings('.value-second').html(value_number).attr('value', value)
            $(this).siblings('span').html(`[ ` + time + ` cơ sở ]`)
            totalMoney('#tab-02')
            totalMoney('#tab-01')
        } else if (time == 0 || $(this).val() == "") {
            $(this).parent().siblings('.value-first').html('3.000.000').attr('value', 3000000)
            $(this).parent().siblings('.value-second').html('3.000.000').attr('value', 3000000)
            $(this).siblings('span').html(`[ 1 cơ sở ]`)
            totalMoney('#tab-02')
            totalMoney('#tab-01')
        }
    })
    function totalMoney(item) {
        var first_Total = $(`` + item + ` tbody tr .value-first`)
        var second_Total = $(`` + item + ` tbody tr .value-second`)
        var total_First = 0;
        var total_Second = 0;
        first_Total.each(function () {
            if (!$(this).attr('value')) {
            } else if ($(this).parent().not('.price-total')) {
                total_First += parseInt($(this).attr('value'))
            }
        })
        second_Total.each(function () {
            if (!$(this).attr('value')) {
            } else if ($(this).parent().not('.price-total')) {
                total_Second += parseInt($(this).attr('value'))
            }
        })
        $(`` + item + ` .price-total td:nth-child(3)`).html(`<strong>`+ total_First.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") +`</strong>`)
        $(`` + item + ` .price-total td:nth-child(4)`).html(`<strong>`+ total_Second.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+`</strong>`)
    }
    totalMoney('#tab-02')
    totalMoney('#tab-01')

})