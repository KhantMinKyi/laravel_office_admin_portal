function showLoader() {
    $(".loader-container").css("transition", "none"); // Disable transition
    $(".loader-container").show();
}
function hideLoader() {
    $(".loader-container").css("transition", ""); // Re-enable transition
    $(".loader-container").hide();
}
