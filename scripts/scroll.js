window.addEventListener('scroll', (event) => {
    let scroll_y = window.scrollY;
    //console.log(scroll_y);

    const header_elem = document.getElementById('header');
    if(scroll_y > 300){
        header_elem.classList.add('scrolled')
    }else{
        header_elem.classList.remove('scrolled')
    };

    const list_elem = document.getElementById('list');
    if(scroll_y > 500){
        list_elem.classList.add('scrolled')
    }

    const info_elem = document.getElementById('corp-info');
    if(scroll_y > 1000){
        info_elem.classList.add('scrolled')
    }

    const contact_elem = document.getElementById('contact');
    if(scroll_y > 2200){
        contact_elem.classList.add('scrolled')
    }
});