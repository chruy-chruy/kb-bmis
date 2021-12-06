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

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll(".nav__item a");

function linkAction() {
  const nav = document.querySelector(".nav");
  // When we click on each nav__link, we remove the show class
  nav.classList.remove("show");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));

/*=============== NAV TABS ===============*/
const tabs = document.querySelectorAll(".nav__item");
const tabContent = document.querySelectorAll(".content");
const tabLabel = document.querySelectorAll(".header__title");

tabs.forEach(function (tab, tab_index) {
  tab.addEventListener("click", function () {
    tabs.forEach(function (tab) {
      tab.classList.remove("nav__item--active");
    });

    tab.classList.add("nav__item--active");

    tabContent.forEach(function (content, content_index) {
      if (content_index == tab_index) {
        content.style.display = "block";
      } else {
        content.style.display = "none";
      }
    });

    tabLabel.forEach(function (label, label_index) {
      if (label_index == tab_index) {
        label.style.display = "block";
      } else {
        label.style.display = "none";
      }
    });
  });
});

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

    // tabLabel.forEach(function (label, label_index) {
    //   if (label_index == tab_index) {
    //     label.style.display = "block";
    //   } else {
    //     label.style.display = "none";
    //   }
    // });
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

    // tabLabel.forEach(function (label, label_index) {
    //   if (label_index == tab_index) {
    //     label.style.display = "block";
    //   } else {
    //     label.style.display = "none";
    //   }
    // });
  });
});

/*=============== PROFILE INFO VIEW INPUTS ===============*/
const viewprofileInputs = document.querySelectorAll(
  ".profile-info__content.viewprofile .input-viewprofile"
);
const loginBtn = document.querySelector("#login-editprofile");
const editBtn = document.querySelector("#edit-viewprofile");
const saveBtn = document.querySelector("#save-editprofile");
const cancelBtn = document.querySelector(".modal-viewprofile .modal__cancel");
const footer = document.querySelector(".modal-viewprofile .modal__footer");
const headerText = document.querySelector(".modal__header-content--left");

viewprofileInputs.forEach((viewprofileInput) => {
  viewprofileInput.disabled = true;
});

function toggleEnable() {
  viewprofileInputs.forEach((viewprofileInput) => {
    if (viewprofileInput.disabled) {
      viewprofileInput.disabled = false;
    }
  });
}

function hideShowBtns() {
  editBtn.style.display = "none";
  footer.style.display = "block";
  headerText.innerHTML = "Edit Profile";
  const modalContainer = this.closest(".modal__container");
  modalContainer.classList.remove("modal--show");
}

function profileFooterActions() {
  viewprofileInputs.forEach((viewprofileInput) => {
    viewprofileInput.disabled = true;
  });

  editBtn.style.display = "block";
  footer.style.display = "none";
  headerText.innerHTML = "View Profile";
}

loginBtn.addEventListener("click", toggleEnable);
loginBtn.addEventListener("click", hideShowBtns);
saveBtn.addEventListener("click", profileFooterActions);
cancelBtn.addEventListener("click", profileFooterActions);

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

// navLink.forEach((n) => n.addEventListener("click", linkAction));

// toggleswitch.addEventListener("click", () => {
//   if (toggleswitch.checked) {
//     off.classList.remove("toggleswitch__indicator--darken");
//     on.classList.add("toggleswitch__indicator--light");
//   } else {
//     on.classList.remove("toggleswitch__indicator--light");
//     off.classList.add("toggleswitch__indicator--darken");
//   }
// });

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
    // exportBtn.classList.toggle("header__toggle--rotate");
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

/*=============== SHOW MODAL ===============*/

//////////////////////////////////////////////////
// // Get the modal
// const modal = document.querySelector(".modal__container"),
//   modalBrgyCert = document.querySelector(".modal-brgycert"),
//   modalView = document.querySelector(".modal-viewprofile");

// // Get the button that opens the modal
// const btnBrgyCert = document.querySelector(".action__brgycert");
// const btnView = document.querySelector(".action__view");

// // Get the <span> element that closes the modal
// const closeModal = document.querySelector(".modal__close");

// // When the user clicks the button, open the modal
// btnBrgyCert.onclick = function () {
//   modalBrgyCert.style.display = "block";
// };
// btnView.onclick = function () {
//   modalView.style.display = "block";
// };

// // When the user clicks on <span> (x), close the modal
// closeModal.onclick = function () {
//   modalBrgyCert.style.display = "none";
//   modalView.style.display = "none";
// };

// When the user clicks anywhere outside of the modal, close it

///////////////////////////////////////////////////////

/*=============== CHARTS ===============*/

// CHART 1
const ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, {
  type: "polarArea",
  data: {
    labels: ["Children", "Teenagers", "Adults", "Senior Citizens"],
    datasets: [
      {
        label: "# of Votes",
        data: [2078, 1543, 4198, 2976],
        backgroundColor: [
          "rgba(255, 99, 132, 1)",
          "rgba(54, 162, 235, 1)",
          "rgba(255, 206, 86, 1)",
          "rgba(75, 192, 192, 1)",
        ],
      },
    ],
  },
  options: {
    responsive: true,
  },
});

// CHART 2
const chart2 = document.getElementById("myChart2").getContext("2d");
const myChart2 = new Chart(chart2, {
  type: "bar",
  data: {
    labels: [
      "Purok 1",
      "Purok 2",
      "Purok 3",
      "Purok 4",
      "Purok 5",
      "Purok 6",
      "Purok 7",
      "Purok 8",
      "Purok 9",
      "Purok 10",
      "Purok 11",
      "Purok 12",
      "Purok 13",
    ],
    datasets: [
      {
        label: "Population by Purok",
        data: [678, 443, 398, 576, 401, 508, 478, 521, 645, 583, 712, 597, 498],
        backgroundColor: [
          "#ef6a61",
          //
        ],
      },
    ],
  },
  options: {
    responsive: true,
  },
});

/*=============== DATATABLES ===============*/

$(document).ready(function () {
  $("#residents-table").DataTable({
    dom: "ftpr",
    bSort: false,
    pageLength: 4,
    // scrollX: true,
    language: {
      search: "_INPUT_",
      searchPlaceholder: "Search",
    },
    columnDefs: [
      {
        targets: [0, 1],
        visible: false,
        searchable: true,
      },
    ],
  });
  $("#certificates-table").DataTable({
    dom: "ftpr",
    bSort: false,
    pageLength: 4,
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

// function filterResidents() {
//   const select = document.querySelector("#residents__filter");
//   const option = select.options[select.selectedIndex];
// }

// filterResidents();

// $(document).ready(function () {
//   var resTable = $("#residents-table").DataTable();

//   var rows = resTable.rows({ search: "applied" });
//   resTable.rows({ search: "applied" }).every(function () {
//     var data = this.data();
//     console.log(rows.count());
//   });

// });

// $(document).ready(function () {
//   $("#lamesa").DataTable({
//     dom: "Bftpr",

//     buttons: ["copy", "excel", "pdf"],
//   });
// });
/*=============== MODALS ===============*/

const modalBtns = document.querySelectorAll("[data-target]");
const closeBtns = document.querySelectorAll(".modal__close");
const yesCancelBtns = document.querySelectorAll(".modal__yes-cancel");
const noCancelBtns = document.querySelectorAll(".modal__no-cancel");
const modals = document.querySelectorAll(".modal__container");

modalBtns.forEach((modalBtn) => {
  modalBtn.addEventListener("click", () => {
    document
      .querySelector(modalBtn.dataset.target)
      .classList.add("modal--show");
    // overlay.classList.add("active");
  });
});

closeBtns.forEach((closeBtn) => {
  closeBtn.addEventListener("click", () => {
    const modalContainer = closeBtn.closest(".modal__container");
    modalContainer.classList.remove("modal--show");
  });
});

noCancelBtns.forEach((noCancelBtn) => {
  noCancelBtn.addEventListener("click", () => {
    const modalContainer = noCancelBtn.closest(".modal__container");
    modalContainer.classList.remove("modal--show");
  });
});

yesCancelBtns.forEach((yesCancelBtn) => {
  yesCancelBtn.addEventListener("click", () => {
    const modals = document.querySelectorAll(".modal__container");
    modals.forEach((modal) => modal.classList.remove("modal--show"));
  });
});

window.onclick = function (e) {
  if (e.target.classList.contains("modal__container")) {
    e.target.classList.remove("modal--show");
  }
};
