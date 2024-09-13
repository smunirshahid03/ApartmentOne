console.log('run');

let count = document.querySelectorAll(".count")
let arr = Array.from(count)



arr.map(function(item){
  let startnumber = 0

  function counterup(){
  startnumber++
  item.innerHTML= startnumber
   
  if(startnumber == item.dataset.number){
      clearInterval(stop)
  }
}

let stop =setInterval(function(){
  counterup()
},0.1)
  
})

// Automatically toggle the plus/minus icon when the accordion is opened or closed
document.querySelectorAll('.accordion-button').forEach(button => {
  button.addEventListener('click', () => {
    const icon = button.querySelector('.icon');
    if (button.classList.contains('collapsed')) {
      icon.textContent = '+';
    } else {
      icon.textContent = '−';
    }
  });
});