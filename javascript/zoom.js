function test(element) {
    var newTab = window.open();
    setTimeout(function () {
        newTab.document.body.innerHTML = element.innerHTML;
    }, 500);
    return false;
}