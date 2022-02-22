/*
  __  __           _        ____
 |  \/  |         | |      |  _ \
 | \  / | __ _  __| | ___  | |_) |_   _
 | |\/| |/ _` |/ _` |/ _ \ |  _ <| | | |
 | |  | | (_| | (_| |  __/ | |_) | |_| |
 |_|  |_|\__,_|\__,_|\___| |____/ \__, |
                                   __/ |
 __          __       _           |___/__                 _
 \ \        / /      | |            |  _ \               | |
  \ \  /\  / /__  ___| | ___ _   _  | |_) |_ __ ___ _   _| | _____ _ __ ___
   \ \/  \/ / _ \/ __| |/ _ \ | | | |  _ <| '__/ _ \ | | | |/ / _ \ '__/ __|
    \  /\  /  __/\__ \ |  __/ |_| | | |_) | | |  __/ |_| |   <  __/ |  \__ \
     \/  \/ \___||___/_|\___|\__, | |____/|_|  \___|\__,_|_|\_\___|_|  |___/
                              __/ |
                             |___/
*/

window.onload = () => {
    const hamburgerButton = document.querySelector('button.hamburger');
    const header = document.querySelector('header');
    const body = document.querySelector('body');

    hamburgerButton.addEventListener('click', () => {
        toggleMenu();
    })

    function toggleMenu() {
        const toggled = header.classList.toggle("is-active");
        hamburgerButton.classList.toggle("is-active");

        if (toggled) {
            body.style = "overflow: hidden;";
        } else {
            body.style = null;
        }

    }
}