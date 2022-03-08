class Index{

    constructor(){
        this.init();
    }

//animate menu
    menuSandwich(){
        const btnMobile = document.getElementById('btn-mobile');
        function toggleMenu(event) {
            if (event.type === 'touchstart') event.preventDefault();
            const nav = document.getElementById('nav');
            nav.classList.toggle('active');
            const active = nav.classList.contains('active');
            event.currentTarget.setAttribute('aria-expanded', active);
            if (active) {
              event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
            } else {
              event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
            }
          }
          
          btnMobile.addEventListener('click', toggleMenu);
          btnMobile.addEventListener('touchstart', toggleMenu);
    }
//menu sidebar
    sidebar(){
      let btn = document.querySelector("#btn-mobile");
      let sidebar = document.querySelector(".sidebar__container");

      btn.onclick = function(){
        sidebar.classList.toggle("active");

      }
    }


    init(){
      this.menuSandwich();
      this.sidebar();
    }
}
new Index;


