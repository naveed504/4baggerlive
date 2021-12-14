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


//addmore
// const addMore = () => {
//     let sec2 = document.getElementById('sec2')
//     let sec3 = document.getElementById('sec3')

//     section2 = sec2.cloneNode(true)
//     section3 = sec3.cloneNode(true)

//     section2.querySelectorAll('input').forEach((g) => { console.log(g.value) })
//     section3.querySelectorAll('input').forEach((g) => { g.value = "" })

//     console.log(section2)
//     let divId = Math.floor(Math.random() * 11);
//     document.getElementById('sec3').insertAdjacentHTML('afterend', "<div id=" + divId + " class='enclosing'>" + "<div class='form-row flex__right float-right'><button class='btn btn-xs btn-danger close_btn' type='button' onclick='removeAdded(" + divId + ")'>&times;</button></div>" + section2.outerHTML + section3.outerHTML + "</div>")

// }

// // remove added HTML fields on registration page
// const removeAdded = (id) => {
//     document.getElementById(id).remove();
// }
//end addmore

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
//end subscription plan


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
