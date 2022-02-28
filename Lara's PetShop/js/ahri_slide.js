$(document).ready(function()
{
/* Classe padrão dos backgrounds */
var bgClass = "div.bg";
/* Prefixo para IDs dos backgrounds */
var bgPrefix = "imagem";
/* Tempo para fade in-out */
var fade = 5000;
/* Não precisa alterar estas =P */
var bgSize = $(bgClass).size();
var curSize = 1;
var timerSrc = "";
/* Mostra apenas o primeiro bg */
$(bgClass).hide();
$(bgClass + ':first').show();
/* Se houver divs com classes BG */
if (bgSize)
{
/* Inicia o loop dos backgrounds */
timerSrc = setInterval (function ()
{
/* Oculta um fundo e exibe outro */
$('#' + bgPrefix + curSize).fadeOut(5000);
curSize = (curSize >= bgSize) ? 1 : curSize + 1;
$('#' + bgPrefix + curSize).fadeIn(5000);
}, fade);
}
});