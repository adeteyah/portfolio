export default defineNuxtPlugin((nuxtApp) => {
  // Check if the code is running on the client
  if (process.client) {
    const links = document.querySelectorAll("a.randver"); // Select all <a> elements
    const letters = "#+©-&*0KIR1L2345";
    const lettersLength = letters.length;
    const regex = /\s/;

    links.forEach((link) => {
      link.addEventListener("mouseover", (event) => {
        let iterations = 0;

        // Ensure `data-value` exists, otherwise use the current text
        if (!event.target.dataset.value) {
          event.target.dataset.value = event.target.innerText;
        }

        const interval = setInterval(() => {
          event.target.innerText = event.target.innerText
            .split("")
            .map((letter, index) => {
              if (index < iterations) {
                return event.target.dataset.value[index];
              }
              // Skip white spaces
              if (regex.test(letter)) {
                return letter;
              }
              return letters[Math.floor(Math.random() * lettersLength)];
            })
            .join("");

          if (iterations >= event.target.dataset.value.length) {
            clearInterval(interval);
          }

          iterations += 1;
        }, 100);
      });
    });
  }
});
