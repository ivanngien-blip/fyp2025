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