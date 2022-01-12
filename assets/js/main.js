/*=============== DATATABLES ===============*/
$(document).ready(function () {
  $("#residents-table").DataTable({
    dom: "ftpr",
    bSort: false,
    pageLength: 8,
    // scrollX: true,
    language: {
      search: "_INPUT_",
      searchPlaceholder: "Search",
    },
    columnDefs: [
      {
        targets: [0, 1, 2, 3],
        visible: false,
        searchable: true,
      },
    ],
  });

  $("#modal-table").DataTable({
    dom: "ftpr",
    bSort: false,
    pageLength: 5,
    language: {
      search: "_INPUT_",
      searchPlaceholder: "Search",
    },
  });

  $("#officials-table").DataTable({
    dom: "ftpr",
    bSort: false,
    pageLength: 8,
    language: {
      search: "_INPUT_",
      searchPlaceholder: "Search",
    },
  });

  $("#users-table").DataTable({
    dom: "ftpr",
    bSort: false,
    pageLength: 8,
    language: {
      search: "_INPUT_",
      searchPlaceholder: "Search",
    },
  });

  /*=============== RESIDENTS DROPDOWN FILTER ===============*/
  const wtable = $("#residents-table").DataTable();
  const select = document.querySelector("#residents__filter");

  $(select).on("change", function () {
    const option = select.options[select.selectedIndex];
    wtable.search(option.value).draw();
  });

  select.onchange = function () {
    const option = select.options[select.selectedIndex];

    document.querySelector(".dataTables_filter input").value = option.value;
    document.querySelector(".dataTables_filter input").focus();
  };
});

/*=============== DROPDOWN ===============*/
const headerToggle = document.querySelector(".header__toggle");
const dropdownUser = document.querySelector(".dropdown--user");

if (headerToggle) {
  headerToggle.addEventListener("click", () => {
    headerToggle.classList.toggle("header__toggle--rotate");
    dropdownUser.classList.toggle("dropdown--user--show");
  });
}

const certActions = document.querySelectorAll(
  "table tbody td .table__action-buttons .action__cert"
);
const certDropdowns = document.querySelectorAll(
  "table tbody td .table__action-buttons .dropdown"
);

certActions.forEach(function (certAction, certAction_index) {
  certAction.addEventListener("click", function () {
    certDropdowns.forEach(function (certDropdown, certDropdown_index) {
      if (certDropdown_index == certAction_index) {
        certDropdown.classList.toggle("dropdown--cert--show");
      }
    });
  });
});

// export dropdown
const exportBtn = document.querySelector("#export-resident"),
  dropdownExport = document.querySelector(".dropdown--export");

if (exportBtn) {
  exportBtn.addEventListener("click", () => {
    dropdownExport.classList.toggle("dropdown--export--show");
  });
}

// hide dropdown
const dropdownLink = document.querySelectorAll(
  "table tbody td .table__action-buttons .dropdown ul li a"
);

function hideDropdown() {
  // When we click on each dropdown link, we remove the show class
  dropdownUser.classList.remove("dropdown--user--show");
  headerToggle.classList.remove("header__toggle--rotate");
  certDropdowns.forEach(function (dropdown) {
    dropdown.classList.remove("dropdown--cert--show");
  });
}
dropdownLink.forEach((x) => x.addEventListener("click", hideDropdown));

/*=============== MODALS ===============*/
let currentlyOpenModals = [];

const noModalsOpen = () => !currentlyOpenModals.length;

const openModal = (modalId) => {
  const modalWrapper = document.getElementById(modalId);
  modalWrapper.classList.add("modal--show");
  currentlyOpenModals.push(modalWrapper);
};

// By definition, it's always the topmost modal that will be closed first
const closeTopmostModal = () => {
  if (noModalsOpen()) {
    return;
  }

  const modalWrapper = currentlyOpenModals[currentlyOpenModals.length - 1];
  modalWrapper.classList.remove("modal--show");
  currentlyOpenModals.pop();
};

const modalTriggers = document.querySelectorAll(".modal-trigger");
modalTriggers.forEach((modalTrigger) => {
  modalTrigger.addEventListener("click", (clickEvent) => {
    const trigger = clickEvent.target;
    const modalId = trigger.getAttribute("data-modal-id");
    openModal(modalId);
  });
});

// Otherwise, clicking the content of a modal will propagate the click to the modal wrapper,
// and that will close the entire thing. That's not what we want!
document.querySelectorAll(".modal__window").forEach((modal) => {
  modal.addEventListener("click", (clickEvent) => {
    clickEvent.stopPropagation();
  });
});

const modalWrappers = document.querySelectorAll(".modal__wrapper");
modalWrappers.forEach((modalWrapper) => {
  modalWrapper.addEventListener("click", () => {
    closeTopmostModal();
  });
});

document.querySelectorAll(".close").forEach((closeModalButton) => {
  closeModalButton.addEventListener("click", () => {
    closeTopmostModal();
  });
});

document.body.addEventListener("keyup", (keyEvent) => {
  if (keyEvent.key === "Escape") {
    closeTopmostModal();
  }
});

// NEW TABS
const tabs = document.querySelectorAll("[data-tab-id]");
const tabContents = document.querySelectorAll("[data-tab-content]");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.tabId);
    tabContents.forEach((tabContent) => {
      tabContent.classList.remove("tab-content--active");
    });
    tabs.forEach((tab) => {
      tab.classList.remove("tab--active");
    });
    tab.classList.add("tab--active");
    target.classList.add("tab-content--active");
  });
});

// /*==================== REMOVE MENU MOBILE ====================*/
// const navLink = document.querySelectorAll(".nav__item a");

// function linkAction() {
//   const nav = document.querySelector(".nav");
//   // When we click on each nav__link, we remove the show class
//   nav.classList.remove("show");
// }
// navLink.forEach((n) => n.addEventListener("click", linkAction));

/*=============== PROFILE INFO VIEW TABS ===============*/
const profileTabs = document.querySelectorAll(
  ".profile-info__list.viewprofile .profile-info__item"
);
const profileTabContents = document.querySelectorAll(
  ".profile-info__content.viewprofile"
);

profileTabs.forEach(function (profileTab, profileTab_index) {
  profileTab.addEventListener("click", function () {
    profileTabs.forEach(function (profileTab) {
      profileTab.classList.remove("profile-info__item--active");
    });

    profileTab.classList.add("profile-info__item--active");

    profileTabContents.forEach(function (
      profileTabContent,
      profileTabContent_index
    ) {
      if (profileTabContent_index == profileTab_index) {
        profileTabContent.style.display = "block";
      } else {
        profileTabContent.style.display = "none";
      }
    });
  });
});

/*===============NEW PROFILE INFO TABS ===============*/

const newProfileTabs = document.querySelectorAll(
  ".profile-info__list.newresident .profile-info__item"
);
const newProfileTabContents = document.querySelectorAll(
  ".profile-info__content.newresident"
);

newProfileTabs.forEach(function (newProfileTab, newProfileTab_index) {
  newProfileTab.addEventListener("click", function () {
    newProfileTabs.forEach(function (newProfileTab) {
      newProfileTab.classList.remove("profile-info__item--active");
    });

    newProfileTab.classList.add("profile-info__item--active");

    newProfileTabContents.forEach(function (
      newProfileTabContent,
      newProfileTabContent_index
    ) {
      if (newProfileTabContent_index == newProfileTab_index) {
        newProfileTabContent.style.display = "block";
      } else {
        newProfileTabContent.style.display = "none";
      }
    });
  });
});
/*==================== SHOW MENU ====================*/
const nav = document.querySelector(".nav"),
  menu = document.querySelector(".header__menu"),
  close = document.querySelector(".nav__close");

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (menu) {
  menu.addEventListener("click", () => {
    nav.classList.add("show");
  });
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("show");
  });
}

/*=============== PROFILE INFO VIEW INPUTS ===============*/
// const viewprofileInputs = document.querySelectorAll(
//   ".profile-info__content.viewprofile .input-viewprofile"
// );
// const loginBtn = document.querySelector("#login-editprofile");
// const editBtn = document.querySelector("#edit-viewprofile");
// const saveBtn = document.querySelector("#save-editprofile");
// const cancelBtn = document.querySelector(".modal-viewprofile .modal__cancel");
// const footer = document.querySelector(".modal-viewprofile .modal__footer");
// const headerText = document.querySelector(".modal__header-content--left");

// viewprofileInputs.forEach((viewprofileInput) => {
//   viewprofileInput.disabled = true;
// });

// function toggleEnable() {
//   viewprofileInputs.forEach((viewprofileInput) => {
//     if (viewprofileInput.disabled) {
//       viewprofileInput.disabled = false;
//     }
//   });
// }

// function hideShowBtns() {
//   editBtn.style.display = "none";
//   footer.style.display = "block";
//   headerText.innerHTML = "Edit Profile";
//   const modalContainer = this.closest(".modal__container");
//   modalContainer.classList.remove("modal--show");
// }

// function profileFooterActions() {
//   viewprofileInputs.forEach((viewprofileInput) => {
//     viewprofileInput.disabled = true;
//   });

//   editBtn.style.display = "block";
//   footer.style.display = "none";
//   headerText.innerHTML = "View Profile";
// }

// loginBtn.addEventListener("click", toggleEnable);
// loginBtn.addEventListener("click", hideShowBtns);
// saveBtn.addEventListener("click", profileFooterActions);
// cancelBtn.addEventListener("click", profileFooterActions);

/*=============== TOGGLE SWITCH ===============*/
const toggleswitches = document.querySelectorAll(".toggleswitch");
const ons = document.querySelectorAll(".toggleswitch__indicator--on");
const offs = document.querySelectorAll(".toggleswitch__indicator--off");

toggleswitches.forEach((toggleswitch) => {
  toggleswitch.addEventListener("click", () => {
    if (toggleswitch.checked) {
      offs.forEach((off) =>
        off.classList.remove("toggleswitch__indicator--darken")
      );
      ons.forEach((on) => on.classList.add("toggleswitch__indicator--light"));
    } else {
      ons.forEach((on) =>
        on.classList.remove("toggleswitch__indicator--light")
      );
      offs.forEach((off) =>
        off.classList.add("toggleswitch__indicator--darken")
      );
    }
  });
});

// toggleswitches.forEach((toggleswitch) => {
//   toggleswitch.addEventListener("click", () => {
//     if (toggleswitch.checked) {
//       const on = toggleswitch.closest(".toggleswitch__indicator--on");
//       on.classList.add("toggleswitch__indicator--light");

//       const off = toggleswitch.closest(".toggleswitch__indicator--off");
//       off.classList.remove("toggleswitch__indicator--darken");
//     } else {
//       const off = toggleswitch.closest(".toggleswitch__indicator--off");
//       off.classList.add("toggleswitch__indicator--darken");

//       const on = toggleswitch.closest(".toggleswitch__indicator--on");
//       on.classList.remove("toggleswitch__indicator--light");
//     }

//   });
// });

function printPage() {
  //Get the print button and put it into a variable
  var printBtn = document.getElementById("print-btn");
  var backBtn = document.getElementById("back-btn");
  //Set the buttons visibility to 'hidden'
  printBtn.style.visibility = "hidden";
  backBtn.style.visibility = "hidden";
  //Print the page content
  window.print();
  printBtn.style.visibility = "visible";
  backBtn.style.visibility = "visible";
  document.location.href = "../";
}

/*==================== PRELOADER ====================*/

$(window).on("load", function () {
  setTimeout(() => {
    // $(".loader-wrapper").fadeIn("slow");
    $(".loader-wrapper").fadeOut("slow");
  }, 400);
});

/*==================== WEB CAM ====================*/
Webcam.set({
  width: 490,
  height: 390,
  image_format: "jpeg",
  jpeg_quality: 60,
});

function open_cam() {
  Webcam.attach("#my_camera");
}

function take_snapshot() {
  Webcam.snap(function (data_uri) {
    $(".image-tag").val(data_uri);
    document.getElementById("results").innerHTML =
      '<img src="' + data_uri + '"/>';
  });
}

function submit_snap() {
  document.getElementById("profile").innerHTML =
    document.getElementById("results").innerHTML;
  Webcam.reset();
}

function exit_webcam() {
  document.getElementById("results").innerHTML = '<img src=""/>';
  Webcam.reset();
}
