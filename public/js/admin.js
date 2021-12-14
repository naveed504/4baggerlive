// submit create/edit event form
const submitForm = (form, e) => {

    e.preventDefault();

    let selectedOption = document.querySelectorAll('.drop-options div a.hide, .drop-options div a.remove')

    for (let i = 0; i < selectedOption.length; i++) {
        let input = document.createElement("input")
        input.setAttribute('name', "bat_type[]")
        input.setAttribute('type', "hidden")
        input.setAttribute('value', selectedOption[i].innerText)
        checkExisting = document.querySelector("input[value='" + selectedOption[i].innerText + "']")
        if (checkExisting == null) {
            form.appendChild(input)
        }
    }

    var counter = 0;

    setTimeout(() => {
        let checkValidatedRules = document.getElementsByClassName('invalid-feedback');

        for (let j = 0; j < checkValidatedRules.length; j++) {
            if (checkValidatedRules[j].innerText != "") {
                counter += 1;
            }
        }
        if (counter == 0) {
            form.submit()
        }
    }, 100);
}

// onload events
window.addEventListener('load', function() {
    const team_state = document.querySelector('#team_state')
    const age_group = document.querySelector('#age_group')
    if (team_state) {
        team_state.querySelector("option[value='" + teamState + "']").setAttribute('selected', true)
    }
    if (age_group) {
        age_group.querySelector("option[value='" + ageGroup + "']").setAttribute('selected', true)
    }
})

// add more button on registration page
const addMore = () => {
    let sec2 = document.getElementById('sec2')
    let sec3 = document.getElementById('sec3')

    section2 = sec2.cloneNode(true)
    section3 = sec3.cloneNode(true)

    section2.querySelectorAll('input').forEach((g) => { console.log(g.value) })
    section3.querySelectorAll('input').forEach((g) => { g.value = "" })

    console.log(section2)
    let divId = Math.floor(Math.random() * 11);
    document.getElementById('sec3').insertAdjacentHTML('afterend', "<div id=" + divId + " class='enclosing'>" + "<div class='form-row flex__right float-right'><button class='btn btn-xs btn-danger close_btn' type='button' onclick='removeAdded(" + divId + ")'>&times;</button></div>" + section2.outerHTML + section3.outerHTML + "</div>")

}

// remove added HTML fields on registration page
const removeAdded = (id) => {
    document.getElementById(id).remove();
}

//add parentinfo

const addParentInfo = (id) => {

    let element = document.getElementById(id)
    let section = document.getElementById('parentinfo').outerHTML
    let section1 = document.getElementById('parentcontact').outerHTML
    let divId = Math.floor(Math.random() * 11);
    
    element.insertAdjacentHTML('afterend', "<div id=" + divId + " class='enclosing'>" + "<div class='form-row flex__right'><button class='btn btn-xs btn-danger close_btn' type='button' onclick='removeAdded(" + divId + ")'>&times;</button></div>" + section + section1 + "</div>")
    
    }
    //end parentinfo

const deleteRecord = (id, uri) => {
    document.getElementById('identity').value = id;
    let route = window.location.origin + uri + id;
    document.getElementById('deleteForm').setAttribute('action', route)
    $('#deleteModal').modal('show')
}
//subscrpition plan
const addmoreFields = () => {
    let section2 = document.getElementById('package_description_row');
    let divId = Math.floor(Math.random() * 11);
    document.getElementById('package_description_row').insertAdjacentHTML('afterend', "<div id=" + divId + " class='enclosing'>" + "<div class='form-row flex__left'><button class='btn btn-xs btn-danger close_btn' type='button' onclick='removeAdded(" + divId + ")' style='margin-left:5px; margin-bottom:6px;'>&times;</button></div>" + section2.outerHTML + "</div>")
}
// remove added HTML fields on registration page
const removeAdded = (id) => {
document.getElementById(id).remove();
}
//end subscription plan

const approveDirector = (elem) => {

    let val = 0;
    if (elem.checked) {
        val = 1;
    }

    fetch('/admin/approve/directors', {
            method: 'post',
            headers: {
                'Content-type': 'application/json',
                'accept': 'applicaton/json',
                'X-CSRF-token': document.querySelectorAll('input[name="_token"]')[0].value
            },
            body: JSON.stringify({ 'approved': val, 'id': elem.id })
        })
        .then(response => response.json())
        .then(value => {
            if (value.response = 'success') {
                window.location.reload()
            }
        })
}

//add more fields on director's manage events
const addMoreVenue = () => {
    let addMore = document.getElementById('addMorevenue')
    let divId = Math.floor(Math.random() * 11)
    document.getElementById('addMorevenue').insertAdjacentHTML('afterend', "<div id=" + divId + " class='enclosing'>" + "<div class='form-row flex__right'><button class='btn btn-xs btn-danger close_btn' type='button' onclick='removeAdded(" + divId + ")'>&times;</button></div>" + addMore.outerHTML + "</div>")
}