const skills = {
  frontend: [
    "HTML",
    "CSS",
    "SASS",
    "Tailwind",
    "React.js",
    "Next.js",
    "Astro",
    "Flutter",
  ],
  backend: ["Node.js", "Express", "Flask"],
  databases: [
    "Firebase",
    "Supabase",
    "Prisma",
    "MySQL",
    "PostgreSQL",
    "MongoDB",
  ],
  machine_learning: ["Tensorflow", "PyTorch", "Google Colab"],
};

const projects = [
  {
    name: "Dragon Fruit Classifier",
    description:
      "Thesis undergrad that detects and classifies dragon fruits into different classes, utilizing computer vision techniques.",
    site_link: "https://www.dragonfruitclassifier.com/",
  },
  {
    name: "Safari",
    description:
      "An e-commerce site inspired by Amazon. Integrated with Stripe for payments.",
    site_link: "https://safari-commerce.netlify.app/",
  },
  {
    name: "Sentiment Analyzer",
    description:
      "Performs analysis on a text to classify them as positive, negative, or neutral.",
    site_link: "https://nlp-sentiment-analysis-app.vercel.app/",
  },
  {
    name: "SkyWatch",
    description:
      "A weather application that tracks and forecast weather of a place. It has an autocompletion, can add places on bookmarks, and more.",
    site_link: "https://skywatch-v2.netlify.app",
  },
  {
    name: "Chess Clock",
    description:
      "An online chess clock that you can use to play with your opponent.",
    site_link: "https://online-chess-clock.netlify.app/",
  },
];

// Skills and Projects
const frontendSkills = document.querySelector("[data-skills-frontend]");
const backendSkills = document.querySelector("[data-skills-backend]");
const databaseSkills = document.querySelector("[data-skills-databases]");
const mlSkills = document.querySelector("[data-skills-ml]");
const projectsData = document.querySelector("[data-projects]");

// Frontend Skills
skills.frontend.map((skill, index) => {
  const frontendSkill = document.createElement("li");

  if (index === skills.frontend.length - 1) {
    frontendSkill.textContent = skill;
  } else {
    frontendSkill.textContent = skill + ",";
  }

  frontendSkills.appendChild(frontendSkill);
});

// Backend Skills
skills.backend.map((skill, index) => {
  const backendSkill = document.createElement("li");

  if (index === skills.backend.length - 1) {
    backendSkill.textContent = skill;
  } else {
    backendSkill.textContent = skill + ",";
  }

  backendSkills.appendChild(backendSkill);
});

// Database Skills
skills.databases.map((skill, index) => {
  const databaseSkill = document.createElement("li");
  databaseSkill.textContent = skill;

  if (index === skills.databases.length - 1) {
    databaseSkill.textContent = skill;
  } else {
    databaseSkill.textContent = skill + ",";
  }

  databaseSkills.appendChild(databaseSkill);
});

// Machine Learning
skills.machine_learning.map((skill, index) => {
  const mlSkill = document.createElement("li");

  if (index === skills.machine_learning.length - 1) {
    mlSkill.textContent = skill;
  } else {
    mlSkill.textContent = skill + ",";
  }

  mlSkills.appendChild(mlSkill);
});

// Projects
projects.map((project) => {
  const revBlock = document.createElement("li");
  revBlock.className = "rev-block";
  revBlock.id = "reveal-animation";

  const projectContent = document.createElement("div");
  projectContent.className = "project-content";
  projectContent.id = "reveal-opacity-animation";

  // Project Name
  const projectName = document.createElement("p");
  projectName.textContent = project.name;

  // Project Description
  const projectDescription = document.createElement("p");
  projectDescription.textContent = project.description;

  // Project Site Link
  const projectLink = document.createElement("a");
  projectLink.href = project.site_link;
  projectLink.textContent = "View the Site Here";
  projectLink.target = "_blank";

  projectContent.appendChild(projectName);
  projectContent.appendChild(projectDescription);
  projectContent.appendChild(projectLink);

  revBlock.appendChild(projectContent);
  projectsData.appendChild(revBlock);
});
