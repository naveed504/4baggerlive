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
