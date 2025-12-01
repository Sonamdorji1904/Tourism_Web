document.addEventListener("DOMContentLoaded", function() {
  const addBtn = document.getElementById("add-itinerary-btn");
  const container = document.getElementById("itinerary-sections-container");

  function attachRemoveHandler(button, section) {
    button.addEventListener("click", function() {
      if (document.querySelectorAll(".itinerary-section").length > 1) {
        section.remove();
        renumberSections();
      } else {
        alert("You must have at least one itinerary day.");
      }
    });
  }

  document.querySelectorAll(".remove-itinerary-btn").forEach(btn => {
    attachRemoveHandler(btn, btn.closest(".itinerary-section"));
  });

  addBtn.addEventListener("click", function() {
    const nextDay = document.querySelectorAll(".itinerary-section").length + 1;
    const xhr = new XMLHttpRequest();

    xhr.open("GET", `get_itinerary_section.php?day=${nextDay}`, true);
    xhr.onload = function() {
      if (xhr.status === 200) {
        const temp = document.createElement("div");
        temp.innerHTML = xhr.responseText;
        const newSection = temp.querySelector(".itinerary-section");

        if (newSection) {
          const removeBtn = newSection.querySelector(".remove-itinerary-btn");
          if (removeBtn) attachRemoveHandler(removeBtn, newSection);

          container.appendChild(newSection);
          newSection.scrollIntoView({ behavior: "smooth" });
        }
      } else {
        alert("Error adding new itinerary day. Please try again.");
      }
    };

    xhr.onerror = () => alert("Network error. Please check your connection.");
    xhr.send();
  });

  function renumberSections() {
    document.querySelectorAll(".itinerary-section").forEach((section, idx) => {
      const day = idx + 1;
      section.id = `itinerary-section-${day}`;
      section.setAttribute("data-day", day);

      const dayEl = section.querySelector(".day-number");
      if (dayEl) dayEl.textContent = `Day ${day}`;

      section.querySelectorAll("label").forEach(label => {
        const forAttr = label.getAttribute("for");
        if (forAttr)
          label.setAttribute("for", forAttr.replace(/_\d+_/, `_${day}_`));
      });

      section.querySelectorAll("input, textarea").forEach(input => {
        const id = input.getAttribute("id");
        if (id) input.setAttribute("id", id.replace(/_\d+_/, `_${day}_`));
      });
    });
  }
});
