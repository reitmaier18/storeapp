function user_register() 
{
    $.ajax(
        {
            url: 'controllers/user_register.php',
        }
    ).done(
        function(response)
        {
            $('.frame').html(response);
        }
    )
}

function user_login() 
{
    $.ajax(
        {
            url: 'controllers/login.php',
        }
    ).done(
        function(response)
        {
            $('.frame').html(response);
        }
    )
}

function user_logout() 
{
    $.ajax(
        {
            url: 'controllers/logout.php',
        }
    ).done(
        function(response)
        {
            location.reload();    
        }
    )
}

function addProducts(id)
{
    $('#modal').modal("hide");
    $.ajax(
        {
            url: 'controllers/shop_cart_add_item.php',
            type: 'POST',
            data: {id: id, shipping: $('#shipping').val()}
        }
    ).done(
        function(response)
        {
            if (response==1) 
            {
                location.reload();    
            }
            else
            {
                $('.frame').html(response);
            }
        }
    )
}

function quitProducts(id)
{
    $('#modal').modal("hide");
    $.ajax(
        {
            url: 'controllers/shop_cart_quit_item.php',
            type: 'POST',
            data: {id: id}
        }
    ).done(
        function(response)
        {
            if (response==1) 
            {
                location.reload();    
            }
            else
            {
                $('.frame').html(response);
            }
        }
    )
}

function sendForm(url, id)
{
    var form = $('#'+id).serialize();
    $.ajax(
        {
            url: 'controllers/'+url+'.php',
            type: 'POST',
            data: form
        }
    ).done(
        function(response)
        {
            if (response==1) 
            {
                location.reload();    
            }
            else
            {
                $('.frame').html(response);
            }
        }
    )
}

function productDetail(id)
{
    $.ajax(
        {
            url: 'controllers/products_detail.php',
            type: 'POST',
            data: {id: id}
        }
    ).done(
        function(response)
        {
            modalShow(response);
        }
    )   
}

function modalShow(content)
{
    $('#modal_content').html(content);
    $('#modal').modal("show");
}

function history_payment()
{
    $.ajax(
        {
            url: 'controllers/history_payment.php',
        }
    ).done(
        function(response)
        {
            $('.frame').html(response);
        }
    )   
}

function payment_detail()
{
    $.ajax(
        {
            url: 'controllers/payment.php',
        }
    ).done(
        function(response)
        {
            if (response==1) 
            {
                location.reload();    
            }
            else
            {
                $('.frame').html(response);
            }
        }
    )   
}

function pay(base, tax, total)
{
    alert(base);
    $.ajax(
        {
            url: 'controllers/payment.php',
            type: 'POST',
            data: {base:base, tax:tax, total:total}           
        }
    ).done(
        function(response)
        {
            if (response==1) 
            {
                history_payment();
            }
            else
            {
                $('.frame').html(response);
            }
        }
    )   
}