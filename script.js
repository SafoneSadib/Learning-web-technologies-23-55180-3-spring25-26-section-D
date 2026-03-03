let move = document.getElementById('btn1');
move.addEventListener('click', ()=>{
    let d1 = document.getElementById('d1');
    let count =0;
    let interval = setInterval(()=>{
        if(count >50){
            clearInterval(interval);
        }else{
            let current = window.getComputedStyle(d1).left;
            if(current == 0){
                current = "10px";
            }else{
                current = parseInt(current)+10+"px";
                d1.style.left =current;
            }
        }
        count++;
    }, 100);
});