function displayCounting(targetNumber, counterElement) {
    for (let i = 0; i <= targetNumber; i++) {
      setTimeout(() => {
        counterElement.innerText = "+" + i;
      }, i * 1000);
    }
  }
  
  const targetNumber1 = 12229;
  const counterElement1 = document.getElementById('counter1');
  displayCounting(targetNumber1, counterElement1);
  
  const targetNumber2 = 12321321;
  const counterElement2 = document.getElementById('counter2');
  displayCounting(targetNumber2, counterElement2);
  
  const targetNumber3 = 89;
  const counterElement3 = document.getElementById('counter3');
  displayCounting(targetNumber3, counterElement3);
  
  const targetNumber4 = 27;
  const counterElement4 = document.getElementById('counter4');
  displayCounting(targetNumber4, counterElement4);
  