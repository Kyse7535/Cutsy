const Menu = (() => {

    const overlay_div = document.getElementById('overlay')
    let link_menu = Array.from(document.getElementsByClassName('link_menu'))
    let header = document.getElementsByTagName('header')[0]
        /*const openMenu = () => {
            let open_menu = document.getElementById('open_menu')

            link_menu = Array.from(link_menu)
            overlay_div.style.display = "none"
            open_menu.addEventListener('click', () => {
                if (overlay_div.style.display == "none") {
                    header.style.position = "static";
                    overlay_div.style.cssText = "display: block; opacity: 1;"
                }

            })
        }*/

    const openMenu = () => {
        $('#open_menu').click(() => $('#overlay').fadeIn())
    }

    const closeMenu = () => {
        $("#close_menu").click(() => $('#overlay').fadeOut())
    }


    /*const closeMenu = () => {
        let close_menu = document.getElementById('close_menu')
        close_menu.addEventListener('click', () => {
            header.style.position = "fixed";
            overlay_div.style.cssText = "display: none; opacity: 0;"
        })
    }*/

    const clickOnlinkMenu = () => {
        link_menu.forEach(link => {
            link.addEventListener('click', () => {
                if (!link.classList.contains("li_rdv_mobile")) {
                    header.style.position = "fixed";
                    overlay_div.style.cssText = "display: none; opacity: 0;"
                }

            })
        });
    }


    const display_menu_rdv_desktop = () => {
        let rdv = document.getElementsByClassName('li_rdv')[0];
        let menu_rdv = document.getElementsByClassName('menu_rdv')[0];
        rdv.addEventListener('mouseover', () => {
            menu_rdv.style.display = "block";
        })
        rdv.addEventListener('mouseout', () => {
            menu_rdv.style.display = "none";
        })

    }
    const display_menu_mobile = () => {
        let li_rdv = document.getElementsByClassName('li_rdv_mobile')[0];
        let menu_rdv = document.getElementsByClassName('menu_rdv_mobile')[0];
        menu_rdv.style.display = "none";
        li_rdv.addEventListener('click', () => {
            if (menu_rdv.style.display == "none") {
                menu_rdv.style.display = "block";
            } else {
                menu_rdv.style.display = "none";
            }
        })
    }
    return { openMenu, closeMenu, clickOnlinkMenu, display_menu_rdv_desktop, display_menu_mobile }
})();


$(document).ready(() => {
    Menu.openMenu();
    Menu.closeMenu();
    Menu.clickOnlinkMenu();
    Menu.display_menu_rdv_desktop();
    Menu.display_menu_mobile();
})