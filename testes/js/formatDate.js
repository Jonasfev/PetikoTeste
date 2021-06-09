// Escreva uma função que converta a data de entrada do usuário formatada como MM/DD/YYYY em um formato exigido por uma API (YYYYMMDD). O parâmetro "userDate" e o valor de retorno são strings.

// Por exemplo, ele deve converter a data de entrada do usuário "31/12/2014" em "20141231" adequada para a API.


function formatDate(userDate) {
  //Declaração de variaveis
  let finalDate;
  let splitDate;
  // format from M/D/YYYY to YYYYMMDD

  //Separando as datas em dia, mes e ano
  splitDate = userDate.split("/");

  //Definindo a variavel final no formado desejado
  finalDate = splitDate[2] + splitDate[0] + splitDate[1];

  return finalDate;
  }

  console.log(formatDate("12/31/2014"));