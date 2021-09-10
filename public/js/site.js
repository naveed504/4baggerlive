// add more button on registration page
const addMore = () => {
    let section2 = document.getElementById('sec2')
    let section3 = document.getElementById('sec3')

    let divId = Math.floor(Math.random() * 11);

    document.getElementById('sec3').insertAdjacentHTML('afterend', "<div id=" + divId + " class='enclosing'>" + "<div class='form-row flex__right'><button class='btn btn-xs btn-danger close_btn' type='button' onclick='removeAdded(" + divId + ")'>&times;</button></div>" + section2.outerHTML + section3.outerHTML + "</div>")

}

// remove added HTML fields on registration page
const removeAdded = (id) => {
    document.getElementById(id).remove();
}

//add more fields on director's manage events
const addMoreVenue = () => {
    let addMore = document.getElementById('addMorevenue')
    let divId = Math.floor(Math.random() * 11)
    document.getElementById('addMorevenue').insertAdjacentHTML('afterend', "<div id=" + divId + " class='enclosing'>" + "<div class='form-row flex__right'><button class='btn btn-xs btn-danger close_btn' type='button' onclick='removeAdded(" + divId + ")'>&times;</button></div>" + addMore.outerHTML + "</div>")
}

// add more parent information fields on player registration
const addParentInfo = (id) => {

    let element = document.getElementById(id)
    let section = document.getElementById('parentinfo').outerHTML
    let section1 = document.getElementById('parentcontact').outerHTML
    let divId = Math.floor(Math.random() * 11);

    element.insertAdjacentHTML('afterend', "<div id=" + divId + " class='enclosing'>" + "<div class='form-row flex__right'><button class='btn btn-xs btn-danger close_btn' type='button' onclick='removeAdded(" + divId + ")'>&times;</button></div>" + section + section1 + "</div>")

}

// submit create event form
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

// preparing delete method
const deleteRecord = (id, uri) => {
    document.getElementById('identity').value = id;
    let route = window.location.origin + uri + id;
    document.getElementById('deleteForm').setAttribute('action', route)
    $('#deleteModal').modal('show')
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

    sessionStorage.clear()
})



// add player to team
const addPlayer = (e) => {
    document.getElementById('player_id').value = e.getAttribute('data-player-id')
    document.getElementById('team_id').value = e.getAttribute('data-team-id')
    document.getElementById('requestForm').submit();
}

const CalculateAmount = (elem) => {
        let servicefee = eventPrice * chargeservicefee / 100;
        let totalAmountfe = parseFloat(servicefee.toFixed(2)) + parseFloat(eventPrice)
        let value = sessionStorage.getItem('total') == null ? 0 :
            sessionStorage.getItem('total');
        if (elem.checked == true) {

            sessionStorage.setItem("total", (parseFloat(value) + 1))
            document.getElementById('amount').innerHTML = totalAmountfe * (parseFloat(value) + 1)
            document.getElementById('amountTotal').value = totalAmountfe * (parseFloat(value) + 1)
            document.getElementById('teamsTotal').value = (parseFloat(value) + 1)

        } else {
            sessionStorage.setItem("total", (parseFloat(value) - 1))
            document.getElementById('amount').innerHTML = parseFloat(document.getElementById('amount').innerHTML) - totalAmountfe
            document.getElementById('amountTotal').value = parseFloat(document.getElementById('amount').innerHTML)
            document.getElementById('teamsTotal').value = parseFloat(document.getElementById('amount').innerHTML)

        }
    }
    //if coach click to "payment after register" addteamtoevent.blade.php
    //validate the payment form for coach to pay amount after add to the event
function paymentForm() {
    let crdNumber = document.getElementById('card_number');
    let expDate = document.getElementById('exp_date');
    let cvcNumber = document.getElementById('cvc_number');
    let team = document.getElementsByClassName('selectTeam');

    if (crdNumber.style.display === "none") {
        crdNumber.style.display = "block";
        expDate.style.display = "block";
        cvcNumber.style.display = "block";
        team.style.display = "block";
    } else {
        crdNumber.style.display = "none";
        expDate.style.display = "none";
        cvcNumber.style.display = "none";
        team.style.display = "none";
    }
}

//validate the director's refund amount form
function checkRefundAmount(refundAmount) {
    let payamount = document.getElementById('payamount').value;
    let totalAmount = refundAmount.getAttribute('data-totalRefundAmount');
    if (parseInt(payamount) >= parseFloat(totalAmount)) {
        let errormsg = `Please Pay Less Then Or Equal To ${totalAmount}`;
        document.getElementById('msgerror').innerHTML = errormsg;
        document.getElementById('payamount').value = '';
    } else {
        document.getElementById('msgerror').innerHTML = '';

    }

}