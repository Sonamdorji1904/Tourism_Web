document.addEventListener("DOMContentLoaded", function() {
  const tourSelect = document.getElementById("tour");
  const durationInput = document.getElementById("duration");
  const durationNote = document.getElementById("duration-note");

  if (!tourSelect || !durationInput) return;

  function updateDuration() {
    const selectedOption = tourSelect.options[tourSelect.selectedIndex];
    if (!selectedOption || !selectedOption.value) {
      durationInput.value = "";
      durationInput.placeholder = "";
      durationNote.textContent = "";
      return;
    }

    const duration = selectedOption.dataset.duration || "";
    const dataTitle = (selectedOption.dataset.title || "").toLowerCase();
    const isCustom =
      selectedOption.dataset.custom === "true" ||
      selectedOption.value === "custom" ||
      dataTitle === "honeymoon: two hearts, one kingdom";

    durationInput.placeholder = duration ? `${duration} days` : "";

    if (isCustom) {
      durationInput.removeAttribute("readonly");
      durationInput.value = "";
      durationNote.textContent =
        "Please enter desired duration for custom tour";
      durationInput.style.backgroundColor = "#fff";
    } else {
      durationInput.setAttribute("readonly", true);
      durationInput.value = duration;
      durationNote.textContent = duration ? `${duration} days` : "";
      durationInput.style.backgroundColor = "#f4f4f4";
    }
  }

  tourSelect.addEventListener("change", updateDuration);
  updateDuration();
});
