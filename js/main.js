$(document).ready(function() {

    var pgt1 = "", pgt2 = "", pgt3 = [], pgt4 = "", pgt5 = "", pgt6 = "", pgt7 = "";

    // quando for clicado o botao finaliza
    $("#pgt1").click(function() {
        $("input:radio[name=pergunta1]").each(function() {
            if ($(this).is(":checked")) {
                pgt1 = $(this).val();
            }
        })
    })

 $("#pgt2").click(function() {
        $("input:radio[name=pergunta2]").each(function() {
            if ($(this).is(":checked")) {
                pgt2 = $(this).val();
            }
        })
    })
    
     $("#pgt3").click(function() {
        $("input:checkbox[name=pergunta3]").each(function() {
            if ($(this).is(":checked")) {
                pgt3.push($(this).val());
            }
        })
    })

 $("#pgt4").click(function() {
        $("input:radio[name=pergunta4]").each(function() {
            if ($(this).is(":checked")) {
                pgt4 = $(this).val();
            }
        })
    })
    
     $("#pgt5").click(function() {
        $("input:radio[name=pergunta5]").each(function() {
            if ($(this).is(":checked")) {
                pgt5 = $(this).val();
            }
        })
    })
    
     $("#pgt6").click(function() {
        $("input:radio[name=pergunta6]").each(function() {
            if ($(this).is(":checked")) {
                pgt6 = $(this).val();
            }
        })
    })
    
     $("#pgt7").click(function() {
        $("input:radio[name=pergunta7]").each(function() {
            if ($(this).is(":checked")) {
                pgt7 = $(this).val();
            }
        })
    })
    
    $('#mostra_valor').click(function (){
        $.post("recebe_form.php", {
        pergunta1: pgt1,
        pergunta2: pgt2,
        pergunta3: pgt3,
        pergunta4: pgt4,
        pergunta5: pgt5,
        pergunta6: pgt6,
        pergunta7: pgt7
    }
    , function(data) {
        $('#response_texjhjt').html(data)
    })
    })
    
});


function validar(nameForm, page) {
    var input = document.getElementsByName(nameForm);
    if (!$(input).is(":checked")) {
        alert('você tem que marcar');
    } else {
        document.location.href = page;
    }
}
