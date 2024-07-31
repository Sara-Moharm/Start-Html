const darkBtn = document.getElementById("darkBtn");
const lightBtn = document.getElementById("lightBtn");
const heading = document.querySelector("h3");

function changeMode(
  removeClass,
  addClass,
  removeHeadingClass,
  addHeadingClass
) {
  if (removeClass !== "") {
    document.body.classList.remove(removeClass);
    heading.classList.remove(removeHeadingClass);
  }
  document.body.classList.add(addClass);
  heading.classList.add(addHeadingClass);
}

darkBtn.addEventListener("click", function () {
  if (document.body.classList.contains("light")) {
    changeMode("light", "dark", "light-text", "dark-text");
  } else {
    changeMode("", "dark", "", "dark-text");
  }
});

lightBtn.addEventListener("click", function () {
  if (document.body.classList.contains("dark")) {
    changeMode("dark", "light", "dark-text", "light-text");
  } else {
    changeMode("", "light", "", "light-text");
  }
});

// =================================== Toggle =======================================================

// darkBtn.addEventListener("click", function () {
//   if (document.body.classList.contains("light")) {
//     document.body.classList.remove("light");
//     heading.classList.remove("light-text");
//   }
//   document.body.classList.toggle("dark");
//   heading.classList.toggle("dark-text");
// });

// lightBtn.addEventListener("click", function () {
//   if (document.body.classList.contains("dark")) {
//     document.body.classList.remove("dark");
//     heading.classList.remove("dark-text");
//   }
//   document.body.classList.toggle("light");
//   heading.classList.toggle("light-text");
// });

// =================== I don't want to return back if I clicked on the same btn again  ========================

// darkBtn.addEventListener("click", function () {
//   if (document.body.classList.contains("light")) {
//     document.body.classList.remove("light");
//     heading.classList.remove("light-text");
//   }
//   document.body.classList.add("dark");
//   heading.classList.add("dark-text");
// });

// lightBtn.addEventListener("click", function () {
//   if (document.body.classList.contains("dark")) {
//     document.body.classList.remove("dark");
//     heading.classList.remove("dark-text");
//   }
//   document.body.classList.add("light");
//   heading.classList.add("light-text");
// });
