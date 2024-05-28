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
function togglePopupEditModel(id) {
    popupEditModel.classList.toggle("hidden");
    if (!popupEditModel.classList.contains("hidden")) {
        $("#popup-edit-model").load(
            "/admin/normal_user_list/edit-normal_user-detail/" + id
        );
    }
}
$(document).on("click", "#togglePopupViewModel", function () {
    popupViewModel.classList.toggle("hidden");
    if (!popupViewModel.classList.contains("hidden")) {
        $("#popup-view-model").load(
            "/admin/normal_user_list/get-normal_user-detail?user_id=" +
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
$(document).on("click", "#edit-profile-tab", function () {
    $("#edit-profile").removeClass("hidden");
    $("#edit-profile-tab").addClass("text-mainbody-400 border-mainbody-400");
    $("#edit-contact ,#edit-family, #edit-job , #edit-account").addClass(
        "hidden"
    );
    $(
        "#edit-contact-tab ,#edit-family-tab ,#edit-job-tab,#edit-account-tab"
    ).removeClass("text-mainbody-400 border-mainbody-400");
});
$(document).on("click", "#edit-contact-tab", function () {
    $("#edit-contact").removeClass("hidden");
    $("#edit-contact-tab").addClass("text-mainbody-400 border-mainbody-400");
    $("#edit-profile ,#edit-family, #edit-job , #edit-account").addClass(
        "hidden"
    );
    $(
        "#edit-profile-tab ,#edit-family-tab ,#edit-job-tab,#edit-account-tab"
    ).removeClass("text-mainbody-400 border-mainbody-400");
});
$(document).on("click", "#edit-family-tab", function () {
    $("#edit-family").removeClass("hidden");
    $("#edit-family-tab").addClass("text-mainbody-400 border-mainbody-400");
    $("#edit-profile ,#edit-contact, #edit-job , #edit-account").addClass(
        "hidden"
    );
    $(
        "#edit-profile-tab ,#edit-contact-tab ,#edit-job-tab,#edit-account-tab"
    ).removeClass("text-mainbody-400 border-mainbody-400");
});
$(document).on("click", "#edit-job-tab", function () {
    $("#edit-job").removeClass("hidden");
    $("#edit-job-tab").addClass("text-mainbody-400 border-mainbody-400");
    $("#edit-profile ,#edit-contact, #edit-family , #edit-account").addClass(
        "hidden"
    );
    $(
        "#edit-profile-tab ,#edit-family-tab ,#edit-contact-tab,#edit-account-tab"
    ).removeClass("text-mainbody-400 border-mainbody-400");
});
$(document).on("click", "#edit-account-tab", function () {
    $("#edit-account").removeClass("hidden");
    $("#edit-account-tab").addClass("text-mainbody-400 border-mainbody-400");
    $("#edit-profile ,#edit-contact, #edit-family , #edit-job").addClass(
        "hidden"
    );
    $(
        "#edit-profile-tab ,#edit-family-tab ,#edit-job-tab,#edit-job-tab"
    ).removeClass("text-mainbody-400 border-mainbody-400");
});
