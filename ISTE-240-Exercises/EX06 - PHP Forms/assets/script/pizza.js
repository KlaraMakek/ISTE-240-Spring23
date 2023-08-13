/* JavaScript for Pizza Ordering Form */

function validateForm() {
    var x = document.forms["OrderForm"]["customerName"].value;
    var y = document.forms["OrderForm"]["customerID"].value;

    if (x == null || x == "") {
        document.forms["OrderForm"]["customerName"].style.backgroundColor = 'pink';
        return false;
    }
    if (y == null || y == "") {
        document.forms["OrderForm"]["customerID"].style.backgroundColor = 'pink';
        return false;
    }

}