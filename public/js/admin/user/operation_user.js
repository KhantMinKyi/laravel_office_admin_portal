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
function togglePopupEditModel() {
    popupEditModel.classList.toggle("hidden");
}

$(document).on("click", "#togglePopupViewModel", function () {
    popupViewModel.classList.toggle("hidden");
    if (!popupViewModel.classList.contains("hidden")) {
        $("#popup-view-model").load(
            "/admin/operation_user_list/get-operation_user-detail?user_id=" +
                $(this).closest("td").attr("data-id")
        );
    }
});

$(document).on("click", "#view-profile-tab", function () {
    $("#view-profile").removeClass("hidden");
    $("#view-profile-tab").addClass("text-mainbody-400 border-mainbody-400");
    $("#view-contact , #view-job").addClass("hidden");
    $("#view-contact-tab ,#view-job-tab").removeClass(
        "text-mainbody-400 border-mainbody-400"
    );
});
$(document).on("click", "#view-contact-tab", function () {
    $("#view-contact").removeClass("hidden");
    $("#view-contact-tab").addClass("text-mainbody-400 border-mainbody-400");
    $("#view-profile ,#view-job").addClass("hidden");
    $("#view-profile-tab ,#view-job-tab").removeClass(
        "text-mainbody-400 border-mainbody-400"
    );
});
$(document).on("click", "#view-job-tab", function () {
    $("#view-job").removeClass("hidden");
    $("#view-job-tab").addClass("text-mainbody-400 border-mainbody-400");
    $("#view-profile , #view-contact").addClass("hidden");
    $("#view-profile-tab ,#view-contact-tab").removeClass(
        "text-mainbody-400 border-mainbody-400"
    );
});
