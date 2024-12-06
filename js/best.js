// 生成随机数
function generateRandomNumbers() {
	const result = [];
	while (result.length < 3) {
		const randomNumber = Math.floor(Math.random() * 49) + 1;
		if (!result.includes(randomNumber)) {
			result.push(randomNumber);
		}
	}
	return result.sort((a, b) => a - b);
}

// 点击按钮
function showAlert() {
	alert('你点击了一个按钮～');
	// 调用随机数
	const randomNums = generateRandomNumbers();
	console.log(randomNums);
}