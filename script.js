let short_content = document.querySelector("#short_content");
let full_content = document.querySelector("#full_content");

full_content.addEventListener('input', () => {
    if (full_content.value.length > 100) {
        short_content.value = full_content.value.slice(0, 100) + ' ...';
    } else {
        short_content.value = full_content.value;
    }
});

