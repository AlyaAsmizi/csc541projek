function calculateBMI() {
			var weight = document.getElementById("weight").value;
			var height = document.getElementById("height").value;
			var score = weight / (height * height);
			document.getElementById("score").innerHTML = score.toFixed(2);
			if (score < 18.5) {
				document.getElementById("type").innerHTML = "Underweight";
			} else if (score >= 18.5 && score <= 24.9) {
				document.getElementById("type").innerHTML = "Normal weight";
			} else if (score >=25 && score <= 29.9) {
				document.getElementById("type").innerHTML = "Overweight";
			} else {
				document.getElementById("type").innerHTML = "Obese";
			}
		}