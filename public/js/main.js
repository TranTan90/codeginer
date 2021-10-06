function cms_adapter_ajax($param) {
    $.ajax({
        url: $param.url,
        type: $param.type,
        data: $param.data,
        async: true,
        success: $param.callback
    });
}

function cms_vsell_import() {
    var $param = {
        'type': 'POST',
        'url': 'mes/cms_vsell_import/',
        'data': null,
        'callback': function (data) {
            $('.orders').html(data);
        }
    };

    cms_adapter_ajax($param);
}