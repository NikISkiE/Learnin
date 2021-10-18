var wynik = document.getElementById("wynik");
var check=document.getElementById("button");
check.onclick=formularz;

function formularz(){
	let name = document.form1.imie.value;
	let surname = document.form1.surname.value;
	let age = document.form1.age.value;
	let city = document.form1.city.value;
	let pcode = document.form1.pcode.value;
	let street = document.form1.street.value;
	if(name==null || name=="" || surname==null || surname=="" || age==null || age=="" || city==null || city=="" || pcode==null || pcode=="" || street==null || street==""){
		wynik.innerHTML="Nie zostawiaj pustych wartości";
		return false;
	}else{
		wynik.innerHTML="dziala";
		window.open('mailto:zs1@example.pl');
		return false;
	}
		
}
