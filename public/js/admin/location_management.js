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
// View Add Form For City
function togglePopupCityAddModel() {
    var popupCityAddModel = document.getElementById("popup-city-add-model");
    popupCityAddModel.classList.toggle("hidden");
}
// View User at City
function togglePopupCityViewModel(a) {
    var popupCityViewModel = document.getElementById("popup-city-view-model");
    popupCityViewModel.classList.toggle("hidden");
}
function togglePopupCityEditModel() {
    var popupCityEditModel = document.getElementById("popup-city-edit-model");
    popupCityEditModel.classList.toggle("hidden");
}
// View Add Form For Township
function togglePopupTownshipAddModel() {
    var popupTownshipAddModel = document.getElementById(
        "popup-township-add-model"
    );
    popupTownshipAddModel.classList.toggle("hidden");
}
// View User at Township
function togglePopupTownshipViewModel(a) {
    var popupTownshipViewModel = document.getElementById(
        "popup-township-view-model"
    );
    popupTownshipViewModel.classList.toggle("hidden");
}
// View Edit Township
function togglePopupTownshipEditModel() {
    var popupTownshipEditModel = document.getElementById(
        "popup-township-edit-model"
    );
    popupTownshipEditModel.classList.toggle("hidden");
}
// View Add Form For Department
function togglePopupDepartmentAddModel() {
    var popupDepartmentAddModel = document.getElementById(
        "popup-department-add-model"
    );
    popupDepartmentAddModel.classList.toggle("hidden");
}
// View User at Department
function togglePopupDepartmentViewModel(id) {
    var popupDepartmentViewModel = document.getElementById(
        "popup-department-view-model"
    );
    popupDepartmentViewModel.classList.toggle("hidden");
    if (!popupDepartmentViewModel.classList.contains("hidden")) {
        $("#popup-department-view-model").load("/admin/department/" + id);
    }
}
// View Edit Department
function togglePopupDepartmentEditModel(id) {
    var popupDepartmentEditModel = document.getElementById(
        "popup-department-edit-model"
    );
    popupDepartmentEditModel.classList.toggle("hidden");
    if (!popupDepartmentEditModel.classList.contains("hidden")) {
        $("#popup-department-edit-model").load(
            "/admin/department/" + id + "/edit"
        );
    }
}
// View Add Form For Branch
function togglePopupBranchAddModel() {
    var popupBranchAddModel = document.getElementById("popup-branch-add-model");
    popupBranchAddModel.classList.toggle("hidden");
}
// View User at Branch
function togglePopupBranchViewModel(a) {
    var popupBranchViewModel = document.getElementById(
        "popup-branch-view-model"
    );
    popupBranchViewModel.classList.toggle("hidden");
}
// View Edit Branch
function togglePopupBranchEditModel() {
    var popupBranchEditModel = document.getElementById(
        "popup-branch-edit-model"
    );
    popupBranchEditModel.classList.toggle("hidden");
}
