const Planning = (() => {
    let td = document.getElementsByTagName('td');
    const getCreneau = () => {

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

    const initialize_td = () => {
        td = Array.from(td);
        td.forEach(td_element => {
            if (td_element.classList.contains("selected")) {
                td_element.classList.remove('selected');
            }
        })
    }

    const validate_form = () => {
        let form = document.getElementById('planning_content');
        console.log(form);
        let error_msg = document.getElementById('error_msg');
        console.log(error_msg)
        form.addEventListener('submit', (event) => {
            if (error_msg.style.display == "block") {
                event.preventDefault();
            }
        })
    }

    return { initialize_td, validate_form, getCreneau }

})()

window.addEventListener("load", () => {
    Planning.initialize_td();
    Planning.validate_form();
    Planning.getCreneau();
})