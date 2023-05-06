function isTouchDevice() {
    return ( ('ontouchstart' in window) ||
       (navigator.maxTouchPoints > 0) ||
       (navigator.msMaxTouchPoints > 0) );
}


const cursor_sub = document.querySelector('.cursor_sub');
const isTouch = isTouchDevice();

if(isTouch){
   
    cursor_sub.style.display = "none";
}
else{
    const cursor = document.querySelector('.cursor');
    const cheked_cursor = 'cheked_cursor';
    const hidden_cursor = 'hidden_cursor';
    const custom_cursor = 'custom_cursor';

    const events = ()=>{
        document.addEventListener('mousemove', mousemove);
        document.addEventListener('mouseup', mouseup);
        document.addEventListener('mousedown', mousedown);
        document.addEventListener('mouseenter', mouseenter);
        document.addEventListener('mouseleave', mouseleave);
    }


    const mousemove = (e) =>{
        cursor.style.setProperty('--mouse-x', e.clientX + 'px');
        cursor.style.setProperty('--mouse-y', e.clientY + 'px');
    }

    const mouseup = () =>{
        cursor.classList.add(cheked_cursor);
    }

    const mousedown = () =>{
        cursor.classList.remove(cheked_cursor);
    }

    const mouseenter = () =>{
        cursor.classList.remove(hidden_cursor);
    }

    const mouseleave = () =>{
        cursor.classList.add(hidden_cursor);
    }

    events();
    document.body.classList.add(custom_cursor);
}

