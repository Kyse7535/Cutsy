window.addEventListener('load', () => {
    //overlay text
    let close_menu = document.getElementById('close_menu')
    let open_menu = document.getElementById('open_menu')
    let overlay_div = document.getElementById('overlay')
    let header = document.getElementsByTagName('header')[0]
    let link_menu = document.getElementsByClassName('link_menu')
    link_menu = Array.from(link_menu)
    overlay_div.style.display = "none"
    open_menu.addEventListener('click', () => {
        if (overlay_div.style.display == "none") {
            header.style.position = "static";
            overlay_div.style.cssText = "display: block; opacity: 1;"
        }

    })
    close_menu.addEventListener('click', () => {
        header.style.position = "fixed";
        overlay_div.style.cssText = "display: none; opacity: 0;"
    })

    link_menu.forEach(link => {
        link.addEventListener('click', () => {
            header.style.position = "fixed";
            overlay_div.style.cssText = "display: none; opacity: 0;"
        })
    });

    function display_menu_rdv() {
        let rdv = document.getElementsByClassName('li_rdv');
        rdv = Array.from(rdv)
        let menu_rdv = document.getElementsByClassName('menu_rdv');
        menu_rdv = Array.from(menu_rdv)
        rdv.forEach(element => {
            element.addEventListener('mouseover', () => {
                menu_rdv[1].style.display = "block";
            });
            element.addEventListener('mouseout', () => {
                menu_rdv[1].style.display = "none";
            });
        })


    }


    function getCreneau() {
        let td = document.getElementsByTagName('td');
        td = Array.from(td);
        let creneau = document.getElementById('creneau');
        let creneau_valeur = document.getElementById('creneau_valeur');
        let error_msg = document.getElementById('error_msg');
        error_msg.style.display = "none";
        let ok_msg = document.getElementById('ok_msg');
        ok_msg.style.display = "none";

        td.forEach(td_element => {
            td_element.addEventListener('click', () => {
                initialize_td();
                if (td_element.innerText != "Non disponible") {
                    error_msg.style.display = "none";
                    ok_msg.style.display = "block";
                    let id = td_element.getAttribute('id');
                    td_element.classList.add("selected");
                    creneau.setAttribute('value', id);
                    console.log(creneau.value);
                    creneau_valeur.innerText = id;

                } else {
                    error_msg.style.display = "block";
                    ok_msg.style.display = "none";
                }
            })
        })
    }

    function initialize_td() {
        let td = document.getElementsByTagName('td');
        td = Array.from(td);
        td.forEach(td_element => {
            if (td_element.classList.contains("selected")) {
                td_element.classList.remove('selected');
            }
        })
    }

    display_menu_rdv();
    getCreneau();
    validate_form();

    function validate_form() {
        let form = document.getElementById('planning_content');
        let error_msg = document.getElementById('error_msg');
        form.addEventListener('submit', (event) => {
            if (error_msg.style.display == "block") {
                event.preventDefault();
            }
        })
    }
})