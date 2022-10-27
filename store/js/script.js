let quantity = document.querySelectorAll(".quantity");
let quantityHidden = document.querySelectorAll(".quantityHidden");
let plus = document.querySelectorAll(".plus");
let minus = document.querySelectorAll(".minus");
let subtotal = document.querySelectorAll(".subtotal span");
let subtotalHidden = document.querySelectorAll(".subtotal input");
let price = document.querySelectorAll(".price");
let total = document.querySelector(".total");

for(let i = 0; i < quantity.length; i++){
	plus[i].onclick = ()=>{
		quantity[i].textContent++;
		quantityHidden[i].value++;
		subtotal[i].innerHTML = quantity[i].textContent*price[i].textContent;
		subtotalHidden[i].value = quantity[i].textContent*price[i].textContent;
		let sum = 0;
		for(let t = 0; t < quantity.length; t++){
			sum += parseInt(subtotal[t].textContent);
		}
		total.innerHTML = sum;
	}
	minus[i].onclick = ()=>{
		quantity[i].textContent--;
		quantityHidden[i].value--;
		subtotal[i].innerHTML = quantity[i].textContent*price[i].textContent;
		subtotalHidden[i].value = quantity[i].textContent*price[i].textContent;
		if(quantity[i].textContent < 1){
			quantity[i].textContent = 1;
			quantityHidden[i].value = 1;
			subtotal[i].innerHTML = price[i].textContent;
			subtotalHidden[i].value = price[i].textContent;
		}

		let sum = 0;
		for(let t = 0; t < quantity.length; t++){
			sum += parseInt(subtotal[t].textContent);
		}
		total.innerHTML = sum;
	}
	
}
