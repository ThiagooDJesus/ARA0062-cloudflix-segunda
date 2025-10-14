
const carro = {
marca: "Dodge",
ano: 1979,
nome: "Charger"
}; 
paragrafo - document.getElementById("p1");
conteudo_html = "";

for ( const cada_propriedade in carro ) {
 conteudo_html = conteudo_html + cada_propriedade + " = " + carro[cada_propriedade] + "<br>" ;
}
p1.innerHTML = conteudo_html;

