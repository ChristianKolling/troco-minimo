$(document).ready(function() {
    $("#pagamento-form").submit(function(e) {
        alert('certo');
        $.ajax({
            type: "POST",
            url: "index.php",
            data: $("#pagamento-form").serialize(),
            beforeSend: function(xhr) {
                
            },
            error: function(jqXHR, textStatus, errorThrown) {

            },
            success: function(data)
            {
            }
        });
    });
});