var popupModel = document.getElementById("popup-model");
var popupViewModel = document.getElementById("popup-view-model");
var popupEditModel = document.getElementById("popup-edit-model");
var encryptModel = document.getElementById("encrypt-model");
var encryptEditModel = document.getElementById("encrypt-edit-model");
var encrypt = document.getElementById("checked-checkbox");
var encryptCheck = document.getElementById("checked-checkbox").checked;
function toddleEncryptModel() {
    encryptModel.classList.toggle("hidden");
}
function toddleEncryptEditModel() {
    encryptEditModel.classList.toggle("hidden");
}
function togglePopup() {
    popupModel.classList.toggle("hidden");
}
function togglePopupViewModel(a) {
    popupViewModel.classList.toggle("hidden");
}
function togglePopupEditModel() {
    popupEditModel.classList.toggle("hidden");
}
