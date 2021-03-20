function calculadora(valor){
	document.calculator.ans.value+=valor;
	
}

function resultado(){
	document.calculator.ans.value=eval(document.calculator.ans.value);
}