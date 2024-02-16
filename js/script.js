const counters1 = document.querySelectorAll('.value');
const speed = 400;

counters1.forEach( counter => {
   const animate = () => {
      const value = +counter.getAttribute('nyah');
      const data = +counter.innerText;
     
      const time = value / speed;
     if(data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 1);
        }else{
          counter.innerText = value;
        }
     
   }
   
   animate();
});