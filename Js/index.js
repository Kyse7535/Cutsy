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
})