const postContent = document.querySelector("#post_content");
const editBlogForm = document.querySelector("#editBlogForm");
const editBlogButton = document.querySelector("#editBlogButton");

postContent.addEventListener("input", () => {
  postContent.style.height = "5px";
  postContent.style.height = postContent.scrollHeight + "px";
});

editBlogForm.addEventListener("submit", () => {
    editBlogButton.textContent = "Updating...";
    editBlogButton.disabled = true;
});