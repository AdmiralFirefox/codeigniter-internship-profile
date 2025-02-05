const postContent = document.querySelector("#post_content");
const createBlogForm = document.querySelector("#createBlogForm");
const createBlogButton = document.querySelector("#createBlogButton");

postContent.addEventListener("input", () => {
  postContent.style.height = "5px";
  postContent.style.height = postContent.scrollHeight + "px";
});

createBlogForm.addEventListener("submit", () => {
  createBlogButton.textContent = "Creating...";
  createBlogButton.disabled = true;
});
