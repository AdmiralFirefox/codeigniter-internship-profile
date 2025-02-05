const postContent = document.querySelectorAll("#postContent");

const truncateText = (string, length, end = "...") => {
  return string.length < length ? string : string.substring(0, length) + end;
};

postContent.forEach((content) => {
  content.textContent = truncateText(content.textContent, 120);
});
