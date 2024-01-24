import ScoreboardView from "./ScoreboardView.js";

let playerX = 0;
let playerO = 0;
const root = document.querySelector("#score");
const view = new ScoreboardView(root, "X", "O", (player, direction) => {
    const difference = direction === "minus" ? -1 : 1;

    if (player === "one") {
        playerX = Math.max(playerX + difference, 0);
    } else {
        playerO = Math.max(playerO + difference, 0);
    }

    view.update(playerX, playerO);
});