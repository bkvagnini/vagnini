var curdate= new Date();

//var curbalance = document.form1.curbalance.value;

function allzero(){
	document.form1.amtdebbtn.onclick();
	document.form1.amtdepbtn.onclick();
	document.form1.totbillsbtn.onclick();
	}

var amtdebits_value= parseFloat(debamt01.value)+parseFloat(debamt02.value)+parseFloat(debamt03.value)+parseFloat(debamt04.value)+parseFloat(debamt05.value)+parseFloat(debamt06.value);

var amtdeposits_value=parseFloat(depamt01.value)+parseFloat(depamt02.value)+parseFloat (depamt03.value);

var amtbills_value=parseFloat(billamt01.value)+parseFloat(billamt02.value)+parseFloat(billamt03.value)+parseFloat(billamt04.value);

var memoney_value=(parseFloat(curbalance.value))+ (parseFloat(amtdeposits_value))-(parseFloat(amtdebits_value))-(parseFloat(amtbills_value))
