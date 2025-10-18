// I created an array of example courses that can be used to fill the dashboard dynamically

const courses = [
  { id: 1, title: "Intro to Programming", description: "Learn the basics of programming using Python.", sessions: 3 },
  { id: 2, title: "Web Design", description: "Covers HTML, CSS and basic JavaScript to create interactive websites.", sessions: 4 },
  { id: 3, title: "Database Systems", description: "Focuses on SQL, database design and normalization concepts.", sessions: 2 },
];

// I used DOMContentLoaded to make sure my js only runs after the page loads
document.addEventListener("DOMContentLoaded", function () {
  const courseGrid = document.getElementById("courseGrid");

  // I looped through each course and created a card dynamically
  courses.forEach((course) => {
    const card = document.createElement("div");
    card.classList.add("course-card");

    // inside the card, i will add a course title, description and a button
    card.innerHTML = `
      <h3>${course.title}</h3>
      <p>${course.description}</p>
      <p><strong>Sessions:</strong> ${course.sessions}</p>
      <button class="join-btn">Join</button>
    `;

    // now i will attach the card to the section in the html
    courseGrid.appendChild(card);
  });
});
