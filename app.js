function calculateScore() {
  const risks = document.querySelectorAll('input[name="risk"]:checked');
  const total = document.querySelectorAll('input[name="risk"]').length;
  const score = (risks.length / total) * 100;

  let riskLevel = "Low";
  if (score > 60) riskLevel = "High";
  else if (score > 30) riskLevel = "Medium";

  document.getElementById("result").innerText =
    `Your Footprint Score: ${score.toFixed(0)}% (${riskLevel} Risk)`;
}

function toggleContrast() {
  document.body.classList.toggle("high-contrast");
}

function toggleTextSize() {
  document.body.classList.toggle("large-text");
}

 function shuffleElements(containerId) {
    const container = document.getElementById(containerId);
    const elements = Array.from(container.children);
    
    // Fisher–Yates shuffle
    for (let i = elements.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [elements[i], elements[j]] = [elements[j], elements[i]];
    }
    
    // Re-append in random order
    elements.forEach(el => container.appendChild(el));
  }

  shuffleElements("risk-questions");