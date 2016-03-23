$(document).ready(function() {
    $('.open-popup-link').magnificPopup({type:'image'});
});

//before submit
$('#product-form').submit(function() {
    msg_box = $('#buying-warning');
    
    if($('#custom_set').val() != '1') {    
        if($('#set-quant').val() == '' || isNaN($('#set-quant').val()))
        {
            msg_box.show().html('Please select quantity to continue.');
            return false;
        }
    } else {
        success = true;
        $('#multiple-set-row-wrap .set-name').each(function() {
            value = $(this).val();
            
            if(value.trim() == '') {
                if(!$('#quantity-tab').hasClass('active-menu')) {
                    $('#quantity-tab').trigger('click');
                }
                
                msg_box.show().html('Please input set name and select quantity to continue.');
                success = false;
            }
        });
        
        if(success == false) return false;
    }
    
    //check required options are selected
    options = $('input.product-option:checked').length;
    if(options == 0)
    {
        $('select.product-print-option option:selected').each(function() {
            if($(this).text() != 'None') options++;
        });
    }
    
    if(options == 0)
    {
        msg_box.show().html('Please select at least 1 feature to continue.');
        return false;
    }
    else
    {
        msg_box.hide().html('');    
    }
});

//update product price
function update_price() {
    ajaxRequest(
        ajaxUpdatePriceURL,
        $('#product-form').serialize(),
        function(res) {
            $('#option-list-box').fadeTo('fast', 1);
            $('#total-price').html(res);
        },
        function() 
        {
            $('#option-list-box').fadeTo('fast', 0.5);
        }
    );
}
update_price();

//update options when change quantity or set
$('#set-quant').change(function() {
    update_price();     
});
//end update options when change quantity or set

$(document).on('click', 'input.checkbox-item.product-option', function() {
    update_price();
});

$(document).on('change', 'select.dropbox-item.product-option', function() {
    update_price();
});

$('#set-numb').change(function() {
    update_price();    
});
//end update product price