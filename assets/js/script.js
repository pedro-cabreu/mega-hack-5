var i = 0;

$('#btn-question').click(function (e) { 

    if(i == 0){

        e.preventDefault();

        $('#title-quest').text('Questões');
        $('.question-title').css('width', '19%');
    
        $('#video').hide();
        $('#question-body').show();
    
        $('.question-video').css('width', '80%');
    
        $('#btn-question').text('Próxima Questão');
        $('.question-description').hide();
    }

    if(i == 1){

        var answer = $('.selected').html();
        
        if(answer == 'É um número que indica o aumento percentual médio dos preços.'){
            swal("Correto!", "Você ganhou 25 órama coins","success");
        }else{
            swal("Resposta Errada!", "Tente Novamente","error");
        }
    }
    
    if(i > 1){

        window.location.href = "";
    }

    i++;
});

$('.alt').click(function (e) { 
    e.preventDefault();
    
    $('.alt').removeClass('selected');
    $(this).hasClass('selected') ? $(this).removeClass('selected') : $(this).addClass('selected');
});

$('.profile').click((e) => {
            
    window.location.href = "../profile";
});