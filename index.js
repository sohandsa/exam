function animate() {
	let text = document.getElementById('text');
	let value = window.getComputedStyle(text).fontSize;
	let fontSize = parseInt(value);
	let state = 'g';
	let timer = setInterval(textanimate, 100);
	function textanimate() {
		if (state === 'g') {
			text.innerHTML = 'TEXT GROWING';
			text.style.color = 'red';
			text.style.fontSize = fontSize + 'pt';
			console.log(fontSize);
			fontSize++;
		}
		if (state === 's') {
			text.innerHTML = 'TEXT SHRINKING';
			text.style.color = 'blue';
			text.style.fontSize = fontSize + 'pt';
			fontSize--;
		}
		if (fontSize == 50) {
			state = 's';
		} else if (fontSize < 5) {
			clearInterval(timer);
		}
	}
}

function validate() {
	let val = document.getElementById('text').value;
	if (isNaN(val)) {
		vowel(val);
	} else {
		reverse(val);
	}
}

function vowel(val) {
	let tmp = val;
	val.toLowerCase();
	let pos = -1;
	let vow = [ 'a', 'e', 'i', 'o', 'u' ];
	for (let i = 0; i < val.length; i++) {
		if (vow.includes(val[i])) {
			pos = i + 1;
			break;
		}
	}
	alert('Given String : ' + tmp + '\nPosition of leftmost vowel is : ' + pos);
}

function reverse(val) {
	alert('Given number is : ' + val + '\nReverse of the number is : ' + val.split('').reverse().join(''));
}
