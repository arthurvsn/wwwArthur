$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});

function validaFormOpcoesPonto(form)
{
    return false;
}

function excluirOpcaoPonto(idOpcaoPonto)
{
    if (confirm("Você realmente deseja remover esse item?"))
    {
        alert("Ok");
    }
}