// Add active state to sidbar nav links
var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
$("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
    if (this.href === path) {
        $(this).addClass("active");
    }
});

// preparing delete method
const deleteRecord = (id, uri) => {

    document.getElementById('identity').value ;
    let route = window.location.origin + uri + id;
    document.getElementById('deleteForm').setAttribute('action', route)
    $('#deleteModal').modal('show')
}

// add more parent information fields on player registration
const addParentInfo = (id) => {

    let element = document.getElementById(id)
    let section = document.getElementById('parentinfo').outerHTML
    let section1 = document.getElementById('parentcontact').outerHTML
    let divId = Math.floor(Math.random() * 11);

    element.insertAdjacentHTML('afterend', "<div id=" + divId + " class='enclosing'>" + "<div class='form-row flex__right'><button class='btn btn-xs btn-danger close_btn' type='button' onclick='removeAdded(" + divId + ")'>&times;</button></div>" + section + section1 + "</div>")

}

// Toggle the side navigation
$("#sidebarToggle").on("click", function(e) {
    e.preventDefault();
    $("body").toggleClass("sb-sidenav-toggled");
});

//Add more fields on admin's subscription plan form
const addmoreFields = () => {
        let section2 = document.getElementById('package_description_row');
        let divId = Math.floor(Math.random() * 11);
        document.getElementById('package_description_row').insertAdjacentHTML('afterend', "<div id=" + divId + " class='enclosing'>" + "<div class='form-row flex__left'><button class='btn btn-xs btn-danger close_btn' type='button' onclick='removeAdded(" + divId + ")' style='margin-left:5px; margin-bottom:6px;'>&times;</button></div>" + section2.outerHTML + "</div>")
    }
    // remove added HTML fields on registration page
const removeAdded = (id) => {
    document.getElementById(id).remove();
}


//validate the admins's refund amount form
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

//add more fields on director's manage events
const addMoreVenue = () => {
    let addMore = document.getElementById('addMorevenue')
    let divId = Math.floor(Math.random() * 11)
    document.getElementById('addMorevenue').insertAdjacentHTML('afterend', "<div id=" + divId + " class='enclosing'>" + "<div class='form-row flex__right'><button class='btn btn-xs btn-danger close_btn' type='button' onclick='removeAdded(" + divId + ")'>&times;</button></div>" + addMore.outerHTML + "</div>")
}
